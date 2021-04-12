<?php
namespace Tigren\QuestionModule\Controller\Adminhtml\Question;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;


class Add extends \Magento\Backend\App\Action
{
    
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__('Add Question'));
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}