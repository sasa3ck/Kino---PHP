<?php

namespace App\Kernel\Database;

interface DataBaseInterface
{
  public function insert(string $table, array $data): int|false;
}
