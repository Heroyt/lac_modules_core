<?php

namespace LAC\Modules\Core;

abstract class Module
{
    public const NAME = '';

    /**
     * Runs once after module installation
     *
     * @return void
     */
    public function install(): void {
    }

    /**
     * Runs every time the module loads
     *
     * @return void
     */
    public function init(): void {
    }

    /**
     * Runs before module uninstall
     *
     * @return void
     */
    public function uninstall(): void {
    }
}
