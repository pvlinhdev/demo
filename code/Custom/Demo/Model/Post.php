<?php
namespace Custom\Demo\Model;
class Post extends \Magento\Framework\Model\AbstractModel
{
	protected function _construct()
	{
		$this->_init('Custom\Demo\Model\ResourceModel\Post');
	}
}
