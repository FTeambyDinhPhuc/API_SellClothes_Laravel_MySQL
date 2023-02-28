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
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments("idAccount");
            $table->string("FullName");
            $table->string("Email");
            $table->string("PhoneNumber");
            $table->string("AddressUser");
            $table->string("PaswordUser");
            $table->boolean("StatusAccount");
            $table->string("token");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
