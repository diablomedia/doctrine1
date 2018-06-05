<?php
class RecordFilterTest extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->hasColumn('name', 'string', 200);
        $this->hasColumn('password', 'string', 32);
    }

    public function setPassword($value, $load, $fieldName)
    {
        $this->_set($fieldName, md5($value), $load);
    }

    public function getName($load, $fieldName)
    {
        return strtoupper($this->_get($fieldName, $load));
    }
}
