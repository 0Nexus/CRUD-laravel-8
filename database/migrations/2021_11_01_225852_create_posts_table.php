<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*
        Note : 
        - the entity lowercase
        - no specific chars 
        - the primary key ( id or name of table singular  incriment with id ex : posts = id_post )
        - the name of entity in english 
        - aberviation quantity or qte 
        - forgein key for ex users  user_id 

     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id('id_product');
            $table->string('name');
            $table->string('product');
            $table->string('city');
            $table->date('date');
            $table->integer('qte');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
