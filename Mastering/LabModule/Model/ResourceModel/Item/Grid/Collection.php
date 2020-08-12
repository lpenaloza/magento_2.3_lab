<?php

namespace Mastering\LabModule\Model\ResourceModel\Item\Grid;

use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;

class Collection extends SearchResult
{
  public function __construct(
    EntityFactory $entityFactory,
    Logger $logger,
    FetchStrategy $fetchStrategy,
    EventManager $eventManager,
    $mainTable = 'mastering_laboratory',
    $resourceModel = 'Mastering\LabModule\Model\ResourceModel\Item'
  ) {
    parent::__construct(
      $entityFactory,
      $logger,
      $fetchStrategy,
      $eventManager,
      $mainTable,
      $resourceModel
    );
  }
}