<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'usu_rut'=>$faker->usu_rut,
        'name' => $faker->name,
        'usu_ape_pat' => $faker->usu_ape_pat,
        'usu_ape_mat' => $faker->usu_ape_mat,
        'usu_gen' => $faker->usu_gen,
        'usu_fec_nac' => $faker->usu_fec_nac,
        'usu_direc' => $faker->usu_direc,
        'usu_tel' => $faker->usu_tel,
        'email' => $faker->unique()->safeEmail,
        'usu_email_inst' => $faker->unique()->safeEmail,
        'usu_ano_ing' => $faker->usu_ano_ing,
        'usu_nom_cont_eme' => $faker->usu_nom_cont_eme,
        'usu_tel_cont_eme' => $faker->usu_tel_cont_eme,
        'usu_fech_ins' => $faker->usu_fech_ins,
        'usu_cert_med' => $faker->usu_cert_med,
        'usu_est_cert_med' => $faker->usu_est_cert_med,
        'usu_est' => $faker->usu_est,
        'usu_area' => $faker->usu_area,
        'usu_nom_carr' => $faker->usu_nom_carr,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

