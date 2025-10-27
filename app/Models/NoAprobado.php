<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Mail\SolicitudAprobada;

class NoAprobado extends Model
{
    use SoftDeletes;

    public function Administrador(): BelongsTo
    {
        return $this->belongsTo(Administrador::class);
    }

}

