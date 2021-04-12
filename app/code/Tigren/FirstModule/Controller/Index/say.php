<?php
namespace Tigren\FirstModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class say extends Action
{
    protected $pageFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }


    public function execute()
    {
        echo "Hello World!";
        return $this->pageFactory->create(); //khởi tạo bố cục
        // exit();
        
    }
}