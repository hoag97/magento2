<?php
namespace Tigren\QuestionModule\Model;
 
use Magento\Framework\Model\AbstractModel;
 
class Question extends AbstractModel{

	const CACHE_TAG = 'tigren_question_question';

	protected $_cacheTag = 'tigren_question_question';

	protected $_eventPrefix = 'tigren_question_question';

    protected function _construct()
    {
        $this->_init('Tigren\QuestionModule\Model\ResourceModel\Question');
    }
}