<?php

namespace Tigren\QuestionModule\Controller\Adminhtml\Question;
 
class Save extends \Magento\Backend\App\Action
{
    const ADMIN_RESOURCE = 'Tigren_QuestionModule::save';
    
    /**
     * @var \Tigren\QuestionModule\Model\QuestionFactory
     */
    var $questionFactory;
 
    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \TIgren\QuestionModule\Model\QuestionFactory $questionFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Tigren\QuestionModule\Model\QuestionFactory $questionFactory
    ) {
        parent::__construct($context);
        $this->questionFactory = $questionFactory;
    }
 
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        
        try {
            $rowData = $this->questionFactory->create();
            $rowData->setData($data['question']); 
            // if (isset($data['question']['id'])) {
            //     $rowData->setEntityId($data['question']['id']);
            // }
            $rowData->save();
            $this->messageManager->addSuccess(__('Row data has been successfully saved'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        
        $this->_redirect('tigren/question/index');
    }
}