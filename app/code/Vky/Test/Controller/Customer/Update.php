<?php
namespace Vky\Test\Controller\Customer;

use Magento\Framework\App\Action\Context;
use Vky\Test\Model\TestFactory;
class Update extends \Magento\Framework\App\Action\Action
{
    /**
     * @var Test
     */
    protected $_test;

    public function __construct(
        Context $context,
        TestFactory $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
    public function execute()
    {
        $data = $this->getRequest()->getParams();
        $test = $this->_test->create();
        $test->setData($data);
        if($test->save()){
            $this->messageManager->addSuccessMessage(__('You Updated the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not updated.'));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        //$data['test_id']
        $resultRedirect->setPath('test/customer/listdata/');
        return $resultRedirect;
    }
}