<?php
/*
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
 * APC Cache Driver
 *
 * @package     Doctrine
 * @subpackage  Cache
 * @license     http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link        www.doctrine-project.org
 * @since       1.0
 * @version     $Revision: 7490 $
 * @author      Konsta Vesterinen <kvesteri@cc.hut.fi>
 * @author      Jonathan H. Wage <jonwage@gmail.com>
 * @author      Ross Motley <ross.motley@gmail.com>
 */
class Doctrine_Cache_Apcu extends Doctrine_Cache_Driver
{
    /**
     * @param array $options associative array of cache driver options
     *
     * @throws Doctrine_Cache_Exception
     */
    public function __construct($options = array())
    {
        if (!function_exists('apcu_fetch')) {
            throw new Doctrine_Cache_Exception('The apcu extension must be loaded for using this backend !');
        }
        parent::__construct($options);
    }

    protected function _doFetch($id, $testCacheValidity = true)
    {
        return apcu_fetch($id);
    }

    protected function _doContains($id)
    {
        $found = false;
        apcu_fetch($id, $found);

        return $found;
    }

    protected function _doSave($id, $data, $lifeTime = false)
    {
        if ($lifeTime === false) {
            $lifeTime = 0;
        }

        /** @var bool $result */
        $result = apcu_store($id, $data, $lifeTime);

        return $result;
    }

    protected function _doDelete($id)
    {
        /** @var bool $result */
        $result = apcu_delete($id);

        return $result;
    }

    protected function _getCacheKeys()
    {
        $ci   = apcu_cache_info();
        $keys = array();

        foreach ($ci['cache_list'] as $entry) {
            $keys[] = $entry['info'];
        }

        return $keys;
    }
}
