<?php

namespace Mastering\LabModule\Model;

use Mastering\LabModule\Api\ItemRepositoryInterface;
use Mastering\LabModule\Model\ResourceModel\Item\CollectionFactory;

class ItemRepository implements ItemRepositoryInterface
{
  private $collectionFactory;

  public function __construct(CollectionFactory $collectionFactory)
  {
    $this->collectionFactory = $collectionFactory;
  }

  public function getList()
  {
    return $this->collectionFactory->create()->getItems();
  }
}