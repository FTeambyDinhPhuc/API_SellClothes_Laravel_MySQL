<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("idProduct");
            $table->string('NameProduct');
            $table->float('PriceProduct');
            $table->string('ImageProduct');
            $table->string('DescribeProduct');
            $table->string('StatusProduct');
            $table->integer('idProductType');
            $table->dateTime('CreateDate');
            $table->dateTime('UpdateDate');
            // $table->foreign('idProductType')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
