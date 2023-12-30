<?php

/**
 * SPDX-License-Identifier: EUPL-1.2
 * Author: Jérémy Dufraisse 2023
 */

namespace LehyenSkang;

use Erusev\Parsedown\Configurables\Breaks;
use Erusev\Parsedown\Parsedown;
use Erusev\Parsedown\State;
use Erusev\ParsedownExtra\ParsedownExtra;
use Pico as PicoRaw;

class Pico extends PicoRaw
{
    public function getParsedown(): Parsedown
    {
        if ($this->parsedown === null) {
            $state = new State([
                new Breaks((bool) $this->config['content_config']['breaks'])
            ]);
            if ($this->config['content_config']['extra']){
                $state = new ParsedownExtra($state);
            }
            $this->parsedown = new Parsedown($state);

            $this->triggerEvent('onParsedownRegistered', [ &$this->parsedown ]);
        }

        return $this->parsedown;
    }

    public function parseFileContent(string $markdown, bool $singleLine = false): string
    {
        $markdownParser = $this->getParsedown();
        return @$markdownParser->toHtml($markdown);
    }
}