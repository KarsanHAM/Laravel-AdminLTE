<?php

namespace JeroenNoten\LaravelAdminLte\Menu\Filters;

use JeroenNoten\LaravelAdminLte\Menu\Builder;

interface FilterInterface
{
    /**
     * Transforms a menu item in some way.
     *
     * @param array $item A menu item
     * @return array The transformed menu item
     */
    public function transform($item, Builder $builder);
}
