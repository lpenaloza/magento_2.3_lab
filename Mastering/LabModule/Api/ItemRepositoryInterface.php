<?php

namespace Mastering\LabModule\Api;

interface ItemRepositoryInterface
{
  /**
   * @return \Mastering\LabModule\Api\Data\ItemInterface[]
   */
  public function getList();
}