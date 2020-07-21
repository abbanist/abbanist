<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // $table->increments('id');
        //     $table->string('image');
        //     $table->text('huni_too');
        //     $table->text('usni_heregle');
        //     $table->text('hereglesen_od');
        //     $table->text('number');
        //     $table->string('link');
        //     $table->rememberToken();
        //     $table->timestamps();


        DB::table('comus')->insert([
            'image' => str_random(''),
            'huni_too' => str_random('1'),
            'usni_heregle' => str_random('2'),
            'hereglesen_od' => str_random('5'),
            'number' => str_random('666'),
            'link' => str_random('gogo.mn'),
        ]);
    }
}
