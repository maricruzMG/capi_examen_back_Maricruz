<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDomicilioController extends Controller
{
    public function getUser(){
        $respose=DB::select("Select *,timestampdiff(year, u.fecha_nacimiento, curdate() ) edad
        From users u
        inner join user_domicilio ud ON ud.user_id = u.id");

        return response()->json($respose);

    }
}
