<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setups', function (Blueprint $table) {

            $table->increments('id')->nullable();
            
            // header
            $table->string('logo')->nullable();

            // home page
            
            $table->text('video_embed')->nullable();
            $table->text('video_description')->nullable();

            $table->string('product_title')->nullable();
            
            $table->string('blog_title')->nullable();
            
            $table->string('partner_title')->nullable();
            $table->text('partner_description')->nullable();

            $table->string('order_promo_title')->nullable();
            $table->text('order_promo_btn_text')->nullable();
            $table->string('order_promo_bg')->nullable();

            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('youtube')->nullable();
            $table->text('googleplus')->nullable();
            $table->text('instagram')->nullable();

            $table->text('footer_address')->nullable();

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
        Schema::dropIfExists('setups');
    }
}
