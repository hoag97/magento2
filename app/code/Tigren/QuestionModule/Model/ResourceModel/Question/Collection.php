<?php
namespace Tigren\QuestionModule\Model\ResourceModel\Question;
 
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


 
class Collection extends AbstractCollection
{
	protected $_idFieldName = 'id';

	protected $_eventPrefix = 'tigren_question_question_collection';

	protected $_eventObject = 'question_collection';


    protected function _construct()
    {
        $this->_init(
            'Tigren\QuestionModule\Model\Question',
            'Tigren\QuestionModule\Model\ResourceModel\Question'
        );
    }
}