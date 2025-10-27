<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Exceptions\EtapaException;

class Etapa extends Model
{
    use SoftDeletes;

    public function UnidadesHabitacionales(): HasMany
    {
        return $this->hasMany(UnidadHabitacional::class);
    }

}
