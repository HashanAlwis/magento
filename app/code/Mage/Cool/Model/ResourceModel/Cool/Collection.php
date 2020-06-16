<?php
namespace Mage\Cool\Model\ResourceModel\Cool;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Mage\Cool\Model\Cool',
            'Mage\Cool\Model\ResourceModel\Cool'
        );
    }
}
