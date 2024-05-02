<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latestproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latestproduct_name');
            $table->string('latestproduct_type');
            $table->integer('latestproduct_quantity');
            $table->double('latestproduct_price');
            $table->string('latestproduct_detail',1000);
            $table->string('latestproduct_image');
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
        Schema::dropIfExists('latestproducts');
    }
};
