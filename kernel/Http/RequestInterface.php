<?php

namespace App\Kernel\Http;

use App\Kernel\Validator\ValidatorInterface;

interface RequestInterface
{
  public static function createFromGlobals(): static;

  public function uri(): string;

  public function method(): string;

  public function input(string $key, $default = null): mixed;

  public function validator(array $rules): bool;

  public function setValidator(ValidatorInterface $validator): void;

  public function errors(): array;
}
