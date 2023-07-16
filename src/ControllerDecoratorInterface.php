<?php

namespace LAC\Modules\Core;

use Lsr\Interfaces\ControllerInterface;

interface ControllerDecoratorInterface
{

	public function setController(ControllerInterface $controller): static;

	public function init(): void;

	public function decorates(string $method): bool;

}