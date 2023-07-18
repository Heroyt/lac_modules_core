<?php

namespace LAC\Modules\Core;

use App\GameModels\Game\Game;
use App\GameModels\Game\Player;
use App\GameModels\Game\Team;
use Dibi\Row;

interface GameDataExtensionInterface
{

	public function init(Game|Team|Player $game): void;

	public function parseRow(Row $row, Game|Team|Player $game): void;

	/**
	 * @param array<string,mixed> $data
	 * @param Game $game
	 * @return void
	 */
	public function addQueryData(array &$data, Game|Team|Player $game): void;

	/**
	 * @param array<string,mixed> $data
	 * @param Game $game
	 * @return void
	 */
	public function addJsonData(array &$data, Game|Team|Player $game): void;

	public function save(Game|Team|Player $game): bool;

}