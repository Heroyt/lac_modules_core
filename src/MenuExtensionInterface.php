<?php

namespace LAC\Modules\Core;

interface MenuExtensionInterface
{
    /**
     * @param  array<string|int, array{
     *     name:string,
     *     icon?:string,
     *     route?:string,
     *     path?: string[],
     *     children?:array{
     *         name:string,
     *         route?:string,
     *         path?: string[],
     *     }[]
     * }>  $menu
     * @return void
     */
    public function extend(array &$menu): void;
}
