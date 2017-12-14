<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\users;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index(){
        $users = user::orderBy('id', 'DESC')->paginate();
        return view('users.index', compact('users'));
    }

    public function create(){

        return view('users.create');
    }

    public function store(UserRequest $request){

        $user = new user;

        $user->is_admin =$request->is_admin;
        $user->rut =$request->rut;
        $user->name =$request->name;
        $user->usu_ape_pat =$request->usu_ape_pat;
        $user->usu_ape_mat =$request->usu_ape_mat;
        $user->usu_gen =$request->usu_gen;
        $user->usu_fec_nac =$request->usu_fec_nac;
        $user->usu_direc =$request->usu_direc;
        $user->usu_tel =$request->usu_tel;
        $user->email =$request->email;
        $user->usu_email_inst =$request->usu_email_inst;
        $user->usu_ano_ing =$request->usu_ano_ing;
        $user->usu_nom_cont_eme =$request->usu_nom_cont_eme;
        $user->usu_tel_cont_eme =$request->usu_tel_cont_eme;
        $user->usu_fech_ins =$request->usu_fech_ins;
        $user->usu_cert_med =$request->usu_cert_med;
        $user->usu_est_cert_med =$request->usu_est_cert_med;
        $user->usu_est =$request->usu_est;
        $user->usu_area =$request->usu_area;
        $user->usu_nom_carr =$request->usu_nom_carr;
        $user->password=bcrypt($request->password);

        $user->save();

        return redirect()->route('users.index')
            ->with('info','El Usuario fue guardado');
    }

    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id){

        $user = User::find($id);

        $user->is_admin =$request->is_admin;
        $user->rut =$request->rut;
        $user->name =$request->name;
        $user->usu_ape_pat =$request->usu_ape_pat;
        $user->usu_ape_mat =$request->usu_ape_mat;
        $user->usu_gen =$request->usu_gen;
        $user->usu_fec_nac =$request->usu_fec_nac;
        $user->usu_direc =$request->usu_direc;
        $user->usu_tel =$request->usu_tel;
        $user->email =$request->email;
        $user->usu_email_inst =$request->usu_email_inst;
        $user->usu_ano_ing =$request->usu_ano_ing;
        $user->usu_nom_cont_eme =$request->usu_nom_cont_eme;
        $user->usu_tel_cont_eme =$request->usu_tel_cont_eme;
        $user->usu_fech_ins =$request->usu_fech_ins;
        $user->usu_cert_med =$request->usu_cert_med;
        $user->usu_est_cert_med =$request->usu_est_cert_med;
        $user->usu_est =$request->usu_est;
        $user->usu_area =$request->usu_area;
        $user->usu_nom_carr =$request->usu_nom_carr;

        $user->save();

        return redirect()->route('users.index')
                        ->with('info','El Usuario fue Actualizado');
    }

    public function show($id){
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function destroy($id){

        $user = User::find($id);
        $user->delete();
        return back()->with('info', 'El usuario fue eliminado');
    }
}
