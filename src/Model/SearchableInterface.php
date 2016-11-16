<?php

namespace Xlstudio\XunSearch\Model;

/**
 * Interface Searchable
 *
 * @author davin.bao
 * @package Xlstudio\XunSearch\Model
 */
interface SearchableInterface
{
    /**
     * Get id list for all searchable models.
     *
     * @return integer[]
     */
    public static function searchableIds();
}
