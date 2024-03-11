<?php
namespace Custom\Demo\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Custom\Demo\Model\Post', 'Custom\Demo\Model\ResourceModel\Post');
	}

}