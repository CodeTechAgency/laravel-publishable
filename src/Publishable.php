<?php

namespace CodeTech\Publishable;

use Illuminate\Database\Eloquent\Builder;

trait Publishable
{
    /**
     * Initializes the trait.
     */
    public function initializePublishable()
    {
        $this->fillable[] = 'published';
        
        $this->casts['published'] = 'boolean';
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePublished(Builder $query)
    {
        return $query->where('published', true);
    }
}
