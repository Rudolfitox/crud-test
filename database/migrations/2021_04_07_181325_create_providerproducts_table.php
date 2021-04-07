<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providerproducts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('provider_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();

            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('providerproducts');
    }
}
