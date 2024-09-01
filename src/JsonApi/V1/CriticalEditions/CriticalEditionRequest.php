<?php

namespace AlessandroBertozzi\CriticalEdition\JsonApi\V1\CriticalEditions;

use Illuminate\Validation\Rule;
use LaravelJsonApi\Laravel\Http\Requests\ResourceRequest;
use LaravelJsonApi\Validation\Rule as JsonApiRule;

class CriticalEditionRequest extends ResourceRequest
{

    /**
     * Get the validation rules for the resource.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'project' => JsonApiRule::toOne(),
//            'manuscripts' => JsonApiRule::toMany(),
        ];
    }

}
