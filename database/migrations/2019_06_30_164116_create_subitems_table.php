<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subitems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('item_id')->unsigned();
            $table->integer('arpage_id')->unsigned()->nullable();
            $table->integer('enpage_id')->unsigned()->nullable();

            $table->foreign('item_id')->references('id')->on('items');
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
        Schema::dropIfExists('subitems');
    }
}
