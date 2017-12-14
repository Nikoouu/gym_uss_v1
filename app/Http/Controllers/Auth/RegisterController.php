<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'is_admin'=>'required|string|max:255',
            'rut'=>'required|string|max:255',
            'name' => 'required|string|max:255',
            'usu_ape_pat'=>'required|String|max:255',
            'usu_ape_mat'=>'required|String|max:255',
            'usu_gen'=>'required|String|max:255',
            'usu_fec_nac'=>'required|Date|max:255',
            'usu_direc'=>'required|String|max:255',
            'usu_tel'=>'required|Integer',
            'email' => 'required|string|email|max:255|unique:users',
            'usu_email_inst'=>'email|String|max:255|unique:users',
            'usu_ano_ing'=>'required|Date|max:255',
            'usu_nom_cont_eme'=>'required|String|max:255',
            'usu_tel_cont_eme'=>'required|Integer',
            'usu_fech_ins'=>'required|String|max:255',
            'usu_cert_med'=>'required',
            'usu_est_cert_med'=>'required|boolean',
            'usu_est'=>'required|boolean',
            'usu_area'=>'required|String|max:255',
            'usu_nom_carr'=>'required|String|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'is_admin'=>$data['is_admin'],
            'rut' => $data['rut'],
            'name' => $data['name'],
            'usu_ape_pat' => $data['usu_ape_pat'],
            'usu_ape_mat' => $data['usu_ape_mat'],
            'usu_gen' => $data['usu_gen'],
            'usu_fec_nac' => $data['usu_fec_nac'],
            'usu_direc' => $data['usu_direc'],
            'usu_tel' => $data['usu_tel'],
            'email' => $data['email'],
            'usu_email_inst' => $data['usu_email_inst'],
            'usu_ano_ing' => $data['usu_ano_ing'],
            'usu_nom_cont_eme' => $data['usu_nom_cont_eme'],
            'usu_tel_cont_eme' => $data['usu_tel_cont_eme'],
            'usu_fech_ins' => $data['usu_fech_ins'],
            'usu_cert_med' => $data['usu_cert_med'],
            'usu_est_cert_med' => $data['usu_est_cert_med'],
            'usu_est' => $data['usu_est'],
            'usu_area' => $data['usu_area'],
            'usu_nom_carr' => $data['usu_nom_carr'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
