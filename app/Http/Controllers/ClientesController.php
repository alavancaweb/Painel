<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\users;
use Illuminate\Http\Request;
use http\Env\Response;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ClientesController extends Controller
{
    //
    public function index(){

        $clientes = DB::table('users')->get();

        return view('pages.clientes.clientes', compact('clientes'));
    }

    Public function adicionar(Request $request){

        $dados = $request->all();

        $status = "";

        if($request->status == true){
            $status = "Ativo";
        }
        else{
            $status = "Inativo";
        }

        $arquivo = $request->file('login');
        $num = $dados['empresa']. "login";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $login = $dir . "/" . $nomearquivo;

        $arquivo = $request->file('logo');
        $num = $dados['empresa']. "logo";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $logo = $dir . "/" . $nomearquivo;

        $arquivo = $request->file('icone');
        $num = $dados['empresa']. "icone";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $icone = $dir . "/" . $nomearquivo;

        $dados =  array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->senha),
            'login' => $login,
            'logo' => $logo,
            'icone' => $icone,
            'empresa' => $request->empresa,
            'senha' => $request->senha,
            'status' => $status,
            'cod_estabel' => $request->cod_estabel,
            'admin' => "Sim",
        );

        users::create($dados);

        return redirect()->back()->with('success', 'Cliente Adicionado com Sucesso!');

    }

public function editar(Request $request, $id){

    $clientes = users::find($id);

    $dados = $request->all();

    $status = "";

    if($request->status == true){
        $status = "Ativo";
    }
    else{
        $status = "Inativo";
    }

    if ($request->hasFile('logo')){

        $imagePath = public_path($clientes->logo);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $arquivo = $request->file('logo');
        $num = $dados['empresa']. "logo";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $logo = $dir . "/" . $nomearquivo;
    }else{
        $logo = $clientes->logo;
    }

    if ($request->hasFile('login')){

        $imagePath = public_path($clientes->login);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $arquivo = $request->file('login');
        $num = $dados['empresa']. "login";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $login = $dir . "/" . $nomearquivo;
    }else{
        $login = $clientes->login;
    }

    if ($request->hasFile('icone')){

        $imagePath = public_path($clientes->icone);

        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }

        $arquivo = $request->file('icone');
        $num = $dados['empresa']. "icone";
        $dir = "img";
        $ext = $arquivo->guessClientExtension();
        $nomearquivo = $num . ".". $ext;
        $arquivo->move($dir, $nomearquivo);
        $icone = $dir . "/" . $nomearquivo;
    }else{
        $icone = $clientes->icone;
    }

    if($request->name !== $clientes->name){
        $name = $request->name;
    }
    else{
        $name = $clientes->name;
    }

    if($request->email !== $clientes->email){
        $email = $request->email;
    }else{
        $email = $clientes->email;
    }

    if($request->senha !== $clientes->senha){
        $password = bcrypt($request->senha);
        $senha = $request->senha;
    }else{
        $password = $clientes->password;
        $senha = $clientes->senha;
    }

    if($request->empresa !== $clientes->empresa){
        $empresa = $request->empresa;
    }else{
        $empresa = $clientes->empresa;
    }

    if($request->cod_estabel !== $clientes->cod_estabel){
        $cod_estabel = $request->cod_estabel;
    }else{
        $cod_estabel = $clientes->cod_estabel;
    }

    $dados =  array(
        'name' => $name,
        'email' => $email,
        'password' =>  $password,
        'login' => $login,
        'logo' => $logo,
        'icone' => $icone,
        'empresa' => $empresa,
        'senha' => $senha,
        'status' => $status,
        'cod_estabel' => $cod_estabel,
        'admin' => "Sim",
    );

    $clientes->update($dados);

    return redirect()->back()->with('success', 'Cliente Editado com Sucesso!');
}

    public function deletar($id){

        $cliente= users::find($id);

        $cliente->delete();

        return redirect()->back()->with('success', 'Conexão Excluida com Sucesso!');
    }
}
