<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('text');   
             $table->string('path');
            $table->foreignId('user_id')->constrained('users')

        
				  ->onDelete('cascade')
				  ->onUpdate('cascade');
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
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeign('articles_user_id_foreign');
        });
        Schema::dropIfExists('articles');
    }


}

