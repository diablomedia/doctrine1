<?php
/*
 *  $Id$
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
 * Doctrine_Ticket_DC1056_TestCase
 *
 * @package     Doctrine
 * @author      Ari Pringle <ari@diablomedia.com>
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @category    Object Relational Mapping
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision$
 */
class Doctrine_Ticket_DC1056_TestCase extends Doctrine_UnitTestCase
{
    public function prepareTables()
    {
        $this->tables[] = 'Ticket_DC1056_Test';
        parent::prepareTables();
    }

    public function prepareData()
    {
        $r           = new Ticket_DC1056_Test();
        $r->id       = 1;
        $r->arraycol = array(1);
        $r->save();
    }

    public function testTest()
    {
        $r = Doctrine_Query::create()->from('Ticket_DC1056_Test')->where('id = 1')->execute()->getFirst();
        preg_match('/"arraycol";a:1:{i:0;i:1;}}/', $r->serialize(), $matches);
        $this->assertEqual(1, count($matches));

        $r2 = new Ticket_DC1056_Test();
        $r2->unserialize('a:14:{s:3:"_id";a:1:{s:2:"id";s:1:"1";}s:5:"_data";a:2:{s:2:"id";s:1:"1";s:8:"arraycol";a:1:{i:0;i:1;}}s:7:"_values";a:0:{}s:6:"_state";i:3;s:13:"_lastModified";a:0:{}s:9:"_modified";a:0:{}s:10:"_oldValues";a:0:{}s:15:"_pendingDeletes";a:0:{}s:15:"_pendingUnlinks";a:0:{}s:20:"_serializeReferences";b:0;s:17:"_invokedSaveHooks";b:0;s:4:"_oid";i:41;s:8:"_locator";N;s:10:"_resources";a:0:{}}');
        $this->assertEqual(array(1), $r2->arraycol);
        $r2 = unserialize($r->serialize());
    }
}

class Ticket_DC1056_Test extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('id', 'integer', 4, array('primary', 'notnull'));
        $this->hasColumn('arraycol', 'array');
    }
}
