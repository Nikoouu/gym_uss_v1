<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Maquinaria extends Model
{
    use Notifiable;

    protected $table = 'maquinaria';

    public function adm(){
        return $this->belongsTo('App\Adm');
    }


    protected $fillable =
        [
            'maq_nom','maq_est','maq_cant','maq_num_inv','maq_cod_inv','maq_fech_comp','maq_num_ser','maq_det'
        ];
}
