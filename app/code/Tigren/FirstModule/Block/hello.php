<?php
namespace Tigren\FirstModule\Block;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class hello extends Template
{
	
	public function saySomething()
    {
        return '<b>HelloWorld!</b>';
    }
}