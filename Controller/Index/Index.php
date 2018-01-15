<?php
 
namespace Tagalys\Mystore\Controller\Index;
 
use Magento\Framework\App\Action\Context;
 
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

    public function __construct(
        Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
 
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();

        $resultPage->getConfig()->getTitle()->set('My Store');

        $resultPage->getConfig()->setRobots('NOINDEX,NOFOLLOW');

        return $resultPage;
    }
}