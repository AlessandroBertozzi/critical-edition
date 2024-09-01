<?php

namespace AlessandroBertozzi\CriticalEdition\JsonApi\V1\CriticalEditions;


use Illuminate\Http\Request;
use LaravelJsonApi\Core\Resources\JsonApiResource;
use Modules\CriticalEdition\Models\CriticalEdition;

/**
 * @property CriticalEdition $resource
 */
class CriticalEditionResource extends JsonApiResource
{

    /**
     * Get the resource's attributes.
     *
     * @param Request|null $request
     * @return iterable
     */
    public function attributes($request): iterable
    {
        return [
            'title' => $this->resource->title,
            'description' => $this->resource->description,
            'createdAt' => $this->resource->created_at,
            'updatedAt' => $this->resource->updated_at,
        ];
    }

    /**
     * Get the resource's relationships.
     *
     * @param Request|null $request
     * @return iterable
     */
    public function relationships($request): iterable
    {
        return [
            $this->relation('project')->alwaysShowData(),
            $this->relation('manuscripts')->alwaysShowData()
        ];
    }

}
