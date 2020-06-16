<?php
namespace Sparsh\CRUD\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sparsh\CRUD\Model\Post', 'Sparsh\CRUD\Model\ResourceModel\Post');
    }

}
