<?php

namespace LAC\Modules\Core;

use App\GameModels\Game\Game;

interface LigaApiExtensionInterface
{
    /**
     * @param string $system
     * @param Game[] $games
     * @return void
     */
    public function beforeGameSync(string $system, array $games): void;

    public function processGameBeforeSync(Game $game): void;

    /**
     * @param string $system
     * @param Game[] $games
     * @return void
     */
    public function afterGameSync(string $system, array $games): void;
}
