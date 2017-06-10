<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->integer('id', true ,true);
            $table->integer('supplier_sn');
            $table->string('supplier_name', 255);
            $table->string('color', 255);
            $table->integer('class');
            $table->string('name', 255);
            $table->string('library', 255);
            $table->integer('percent');
            $table->string('zhen_number', 255);
            $table->string('inch_number', 255);
            $table->string('total_zhen_number', 255);
            $table->integer('width');
            $table->integer('goods_weight');
            $table->integer('pi_number');
            $table->integer('pi_weight');
            $table->integer('weight');
            $table->integer('price');
            $table->string('face_pic', 255);
            $table->string('back_pic', 255);
            $table->text('notes');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
