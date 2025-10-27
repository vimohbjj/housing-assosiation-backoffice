<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Administrador;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;


class AdminController
{
    public function profile(){
        try{
            $admin = Administrador::find(Auth::guard('admin')->id());
            return view('admin.profile', ["admin" => $admin]);
        } catch (Exception $ex){
            Log::error("Ocurrio un error al mostrar perfil de admin");
            return redirect()->route("home")->with("error", $ex->getMessage());
        }
    }
}
