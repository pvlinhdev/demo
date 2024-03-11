<?php

namespace Custom\Snaptec\Controller\Adminhtml\Brand;

use Magento\Backend\App\Action;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Snaptec Brands'));

        return $resultPage;
    }
}