<?php

namespace AlessandroBertozzi\CriticalEdition\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Modules\CriticalEdition\Database\Factories\CriticalEditionFactory;
use Modules\CulturalObject\Models\Manuscript;
use Modules\Project\Database\Factories\ProjectFactory;
use Modules\Project\Traits\Projectable;

class CriticalEdition extends Model
{
    use HasFactory, Projectable;

    protected $guarded = ['id'];

    protected static function newFactory(): CriticalEditionFactory
    {
        return CriticalEditionFactory::new();
    }

    public function manuscripts(): MorphMany
    {
        return $this->MorphMany(Manuscript::class, 'manuscriptable');
    }

}

