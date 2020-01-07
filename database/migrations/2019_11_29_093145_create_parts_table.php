<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('part_name')->nullable();
            $table->string('part_no')->nullable();
            $table->string('Qty_in_stock')->nullable();
            $table->enum('tested', ['Yes', 'No']);
            $table->string('item_info')->nullable();
            $table->string('condition')->nullable();
            $table->string('price')->nullable();
            $table->mediumText('photo')->nullable();
            $table->string('saler_id')->nullable();
            $table->string('add_save')->nullable();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();
            $table->string('part_category')->nullable();
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
        Schema::dropIfExists('parts');
    }
}
