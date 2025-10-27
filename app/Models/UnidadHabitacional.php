<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Etapa;
use App\Exceptions\UnidadHabitacionalException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class UnidadHabitacional extends Model
{
    use SoftDeletes;

    public function etapa(): BelongsTo
    {
        return $this->belongsTo(Etapa::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

}
