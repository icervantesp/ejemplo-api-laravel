<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    public function funListar() {
        $usuarios = DB::select("select * from users");
        return $usuarios;
    }
    public function funGuardar(Request $Request) {
        $nombre = $Request->name;
        $correo = $Request->email;
        $pass = $Request->password;
        DB::insert("insert into users (name,email,password) values ('$nombre','$correo','$pass')");
   return ["mensaje"=>"Usuario registrado"];
    }
    public function funMostrar($id) {}
    public function funModificar($id, Request $Request) {}
    public function funEliminar($id) {}
}
