<?php

namespace LAC\Modules\Core;

use App\GameModels\Game\Game;
use App\Tools\AbstractResultsParser;

interface ResultParserExtensionInterface
{
    /**
     * @param Game $game
     * @param array<string,mixed> $meta
     * @param AbstractResultsParser $parser
     * @return void
     */
    public function parse(Game $game, array $meta, AbstractResultsParser $parser): void;
}
