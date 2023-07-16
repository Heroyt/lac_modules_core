<?php

namespace LAC\Modules\Core;

use App\GameModels\Game\Game;
use Dibi\Row;

interface GameDataExtensionInterface
{

	public function parseRow(Row $row, Game $game): void;

	/**
	 * @param array<string,mixed> $data
	 * @param Game $game
	 * @return void
	 */
	public function addQueryData(array &$data, Game $game): void;

	/**
	 * @param array<string,mixed> $data
	 * @param Game $game
	 * @return void
	 */
	public function addJsonData(array &$data, Game $game): void;

}