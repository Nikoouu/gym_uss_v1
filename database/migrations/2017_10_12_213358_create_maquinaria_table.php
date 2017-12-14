<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaquinariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maquinaria', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maq_nom',50);
            $table->string('maq_est');
            $table->string('maq_cant');
            $table->string('maq_num_inv');
            $table->string('maq_cod_inv');
            $table->string('maq_fech_comp');
            $table->date('maq_num_ser');
            $table->string('maq_det')->nullable();
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
        Schema::dropIfExists('maquinaria');
    }
}
