<?php

namespace Modules\Support\Search;

use Laravel\Scout\Searchable as ScoutSearchable;
use Modules\Product\Entities\Product;

trait Searchable
{
    use ScoutSearchable {
        ScoutSearchable::search as scoutSearch;
    }

    /**
     * Perform a search against the model's indexed data.
     *
     * @param string $query
     * @param Closure $callback
     * @return \Modules\Support\Search\Builder
     */
    public function search($query, $callback = null)
    {
        $scoutBuilder = $this->scoutSearch($query, $callback)->take(Product::all()->count());

        return new Builder($this, $scoutBuilder);
    }


    public function searchableAs()
    {
        return  config('scout.prefix', 'psoptimum-') . $this->getTable() ;
    }
}
