<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->text('huni_too');
            $table->text('usni_heregle');
            
            $table->dateTime('started_date');
            // $table->dateTime('now_date');

            // $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            // $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->useCurrent();
            //$table->timestamp('foo')->nullable();

            $table->text('dayUntilNow');
            $table->text('allLitr');
            $table->text('savedLitr');

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
        Schema::dropIfExists('comus');
    }
}
