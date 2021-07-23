<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->string('title');
            $table->string('brand')->nullable();
            $table->string('tags')->nullable();
            $table->integer('price');
            $table->string('descrption');
            $table->integer('qty');
            // $table->binary('image')->nullable();
            $table->binary('images')->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE `goods` ADD `image` MEDIUMBLOB");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
