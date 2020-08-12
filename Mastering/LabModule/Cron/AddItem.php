<?php

namespace Mastering\LabModule\Cron;

use Mastering\LabModule\Model\ItemFactory;
use Mastering\LabModule\Model\Config;


class AddItem
{
  private $itemFactory;

  private $config;

  public function __construct(ItemFactory $itemFactory, Config $config)
  {
    $this->itemFactory = $itemFactory;
    $this->config = $config;
  }

  public function execute()
  {
    if ($this->config->isEnabled()) {
      $this->itemFactory->create()
        ->setName('Scheduled Item')
        ->setDescription('Create at ' . time())
        ->save();
    }

  }
}