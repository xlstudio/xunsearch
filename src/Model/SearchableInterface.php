<?php

namespace Xlstudio\XunSearch\Model;

/**
 * Interface Searchable.
 *
 * @author davin.bao
 */
interface SearchableInterface
{
    /**
     * Get id list for all searchable models.
     *
     * @return int[]
     */
    public static function searchableIds();
}
