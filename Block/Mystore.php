<?php
namespace Tagalys\Mystore\Block;
 
class Mystore extends \Magento\Framework\View\Element\Template
{
    public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \Magento\Framework\Registry $registry
    )
    {
        // $this->productHelper = $productHelper;
        // $this->configurationHelper = $configurationHelper;
        // $this->request = $request;
        // $this->configCollectionFactory = $configCollectionFactory;
        // $this->configFactory = $configFactory;
        $this->storeManager = $context->getStoreManager();
        $this->request = $context->getRequest();
        $this->registry = $registry;
        parent::__construct($context);
    }
}