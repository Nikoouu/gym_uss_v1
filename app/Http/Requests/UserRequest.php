<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'is_admin'=> 'required',
            'rut'=> 'required',
            'name' => 'required',
            'usu_ape_pat'=> 'required',
            'usu_ape_mat'=> 'required',
            'usu_gen'=> 'required',
            'usu_fec_nac'=> 'required',
            'usu_direc'=> 'required',
            'usu_tel'=> 'required',
            'email'=> 'required',
            'usu_email_inst'=> 'required',
            'usu_ano_ing'=> 'required',
            'usu_nom_cont_eme'=> 'required',
            'usu_tel_cont_eme'=> 'required',
            'usu_fech_ins'=> 'required',
            'usu_cert_med'=>'required',
            'usu_est_cert_med'=>'required',
            'usu_est'=>'required',
            'usu_area'=>'required',
            'usu_nom_carr'=>'required',
            'password'=>'required'
        ];
    }
}
