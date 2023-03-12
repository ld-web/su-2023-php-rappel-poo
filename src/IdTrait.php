<?php

namespace App;

trait IdTrait
{
  protected int $id;

  public function getId(): int
  {
    return $this->id;
  }
}
