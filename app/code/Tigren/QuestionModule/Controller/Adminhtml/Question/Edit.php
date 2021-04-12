<?php
namespace Tigren\QuestionModule\Controller\Adminhtml\Question;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;
 
class Edit extends \Magento\Backend\App\Action
{
    //*
    //* @return \Magento\Backend\Model\View\Result\Page
     
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Edit Question'));
        return $resultPage;
    }
}


