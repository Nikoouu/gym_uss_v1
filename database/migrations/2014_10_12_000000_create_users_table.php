<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('is_admin');
            $table->string('rut');
            $table->string('name');
            $table->string('usu_ape_pat');
            $table->string('usu_ape_mat');
            $table->string('usu_gen');
            $table->date('usu_fec_nac');
            $table->string('usu_direc');
            $table->integer('usu_tel');
            $table->string('email')->unique();
            $table->string('usu_email_inst')->unique();
            $table->date('usu_ano_ing');
            $table->string('usu_nom_cont_eme');
            $table->integer('usu_tel_cont_eme');
            $table->date('usu_fech_ins');
            $table->string('usu_cert_med');
            $table->boolean('usu_est_cert_med');
            $table->boolean('usu_est');
            $table->string('usu_area');
            $table->string('usu_nom_carr');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
