<?php
namespace Tigren\QuestionModule\Block;
 
use Magento\Framework\View\Element\Template;
use Tigren\QuestionModule\Model\ResourceModel\Question\CollectionFactory;

class ShowData extends Template
{
	protected $QuestionFactory;
 
    public function __construct(Template\Context $context, CollectionFactory $questionsFactory)
    {
        $this->QuestionFactory = $questionsFactory;
        parent::__construct($context);
    }
 
    public function GetQuestion(){
        $question = $this->QuestionFactory->create();
        return $question;
    }
}