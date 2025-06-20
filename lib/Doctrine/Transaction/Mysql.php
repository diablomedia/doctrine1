<?php
/*
 *  $Id: Mysql.php 7490 2010-03-29 19:53:27Z jwage $
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

/**
 *
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Lukas Smith <smith@pooteeweet.org> (PEAR MDB2 library)
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @package     Doctrine
 * @subpackage  Transaction
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 7490 $
 */
class Doctrine_Transaction_Mysql extends Doctrine_Transaction
{
    /**
     * @var string
     */
    protected $mysqlVersion;

    /**
     * @param Doctrine_Connection $conn     Doctrine_Connection object, every connection
     *                                      module holds an instance of Doctrine_Connection
     */
    public function __construct($conn = null)
    {
        parent::__construct($conn);

        $this->mysqlVersion = $this->conn->getDbh()->getAttribute(PDO::ATTR_SERVER_VERSION);
    }

    /**
     * createSavepoint
     * creates a new savepoint
     *
     * @param string $savepoint     name of a savepoint to set
     * @return PDOStatement|Doctrine_Adapter_Statement_Interface
     */
    protected function createSavePoint($savepoint)
    {
        $query = 'SAVEPOINT ' . $savepoint;

        return $this->conn->execute($query);
    }

    /**
     * releaseSavePoint
     * releases given savepoint
     *
     * @param string $savepoint     name of a savepoint to release
     * @return PDOStatement|Doctrine_Adapter_Statement_Interface
     */
    protected function releaseSavePoint($savepoint)
    {
        $query = 'RELEASE SAVEPOINT ' . $savepoint;

        return $this->conn->execute($query);
    }

    /**
     * rollbackSavePoint
     * releases given savepoint
     *
     * @param string $savepoint     name of a savepoint to rollback to
     * @return PDOStatement|Doctrine_Adapter_Statement_Interface
     */
    protected function rollbackSavePoint($savepoint)
    {
        $query = 'ROLLBACK TO SAVEPOINT ' . $savepoint;

        return $this->conn->execute($query);
    }

    /**
     * Set the transacton isolation level.
     *
     * @param   string  $isolation standard isolation level
     *                  READ UNCOMMITTED (allows dirty reads)
     *                  READ COMMITTED (prevents dirty reads)
     *                  REPEATABLE READ (prevents nonrepeatable reads)
     *                  SERIALIZABLE (prevents phantom reads)
     *
     * @throws Doctrine_Transaction_Exception           if using unknown isolation level
     * @throws PDOException                             if something fails at the PDO level
     * @return PDOStatement|Doctrine_Adapter_Statement_Interface
     */
    public function setIsolation($isolation)
    {
        switch ($isolation) {
            case 'READ UNCOMMITTED':
            case 'READ COMMITTED':
            case 'REPEATABLE READ':
            case 'SERIALIZABLE':
                break;
            default:
                throw new Doctrine_Transaction_Exception('Isolation level ' . $isolation . ' is not supported.');
        }

        $query = 'SET SESSION TRANSACTION ISOLATION LEVEL ' . $isolation;

        return $this->conn->execute($query);
    }

    /**
     * getTransactionIsolation
     *
     * @return string               returns the current session transaction isolation level
     */
    public function getIsolation()
    {
        // Mysql 5.7.20 added `@@transaction_isolation` as an alias for `@@tx_isolation`
        // Mysql 8.0.0 removes `@@tx_isolation`
        if (version_compare((string) $this->mysqlVersion, '5.7.20', '>=')) {
            return $this->conn->fetchOne('SELECT @@transaction_isolation');
        }

        return $this->conn->fetchOne('SELECT @@tx_isolation');
    }
}
