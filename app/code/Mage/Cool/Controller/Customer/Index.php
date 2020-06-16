<?php
namespace Mage\Cool\Controller\Customer;
use Magento\Framework\App\Action\Action;
class Index extends \Magento\Framework\App\Action\Action {

    protected $_helper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Rbj\SendEmail\Helper\Data $helper
    ) {

        $this->_helper = $helper;
        parent::__construct($context);
    }



    public function execute() {

        //$this->_helper->sendMail();
        $mem = 5+5;
        $this->_view->loadLayout();
        $this->_view->renderLayout();

    }
}
?>
