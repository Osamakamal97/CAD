<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('menu_id')->unsigned()->nullable();
            $table->integer('arpage_id')->unsigned()->nullable();
            $table->integer('enpage_id')->unsigned()->nullable();
            $table->foreign('menu_id')->references('id')->on('menus');
            $table->foreign('arpage_id')->references('id')->on('arpages');
            $table->foreign('enpage_id')->references('id')->on('enpages');

            $table->boolean('active')->default(true);
            $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
}
