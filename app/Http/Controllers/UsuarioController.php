<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class UsuarioController extends Controller
{
    public function funListar()
    {
        try {
            $usuarios = DB::select("select * from users");
            return $usuarios;
        } catch (\Throwable $th){
return response()->json(["mensaaje" => "Error al recuperar los datos",$th->getMessage()]);
        }

    }
    public function funGuardar(Request $request)
    {
        $nombre = $request->name;
        $correo = $request->email;
        $pass = $request->password;
        DB::insert("insert into users (name,email,password) values ('$nombre','$correo','$pass')");
        return ["mensaje" => "Usuario registrado"];
    }
    public function funMostrar($id)
    {
        $usuario = DB::select("select * from users where id=?", [$id]);
        if (!$usuario) {
            return response()->json(["mensaje" => "Usuario no encontrado"], 404);
        }
        return response()->json($usuario, 200);
    }
    public function funModificar($id, Request $request)
    {
        $nombre = $request->name;
        $correo = $request->email;
        $pass = $request->password?$request->password:null;

        DB::update("update users set name=?, email=?, password=? where id=?", [$nombre, $correo, $pass, $id]);
        return response()->json(["mensaje" => "Usuario actualizado"], 201);
    }
    public function funEliminar($id)
    {
        DB::delete("delete from users where id=?", [$id]);
        return response()->json(["mensaje" => "Usuario eliminado"], 200);
    }
}
