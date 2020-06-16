<?php
namespace Mage\Cool\Model\ResourceModel;
class Cool extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('vky_test', 'test_id');   //here "vky_test" is table name and "test_id" is the primary key of custom table
    }
}
