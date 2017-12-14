<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =
        [
        'is_admin','rut','name','usu_ape_pat','usu_ape_mat','usu_gen','usu_fec_nac','usu_direc','usu_tel', 'email','usu_email_inst','usu_ano_ing','usu_nom_cont_eme','usu_tel_cont_eme','usu_fech_ins'
        ,'usu_cert_med','usu_est_cert_med','usu_est','usu_area','usu_nom_carr','password',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
