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
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slag');
            $table->string('name');
            $table->text('prev')->nullable();
            $table->text('description')->nullable();
            $table->string('img')->nullable();
            $table->boolean('active')->default(true);
            $table->integer('sort')->nullable();
            $table->integer('choice')->default(0);
            $table->integer('autor_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('mata_title')->nullable();
            $table->string('mata_description')->nullable();
            $table->string('meta_key')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
