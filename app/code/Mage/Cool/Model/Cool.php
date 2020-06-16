<?php
namespace Mage\Cool\Model;
use Magento\Framework\Model\AbstractModel;
class Cool extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Mage\Cool\Model\ResourceModel\Cool');
    }
}
