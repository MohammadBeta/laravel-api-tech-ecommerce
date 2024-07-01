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
        Schema::table('products', function (Blueprint $table) {
            $table->double('price')->nullable(false)->default(0);
            $table->double('rate')->nullable(false)->default(0);
            $table->double('offerPrice')->nullable(false)->default(0);
            $table->boolean('hasOffer')->nullable(false)->default(false);
            $table->double('offerDiscount')->nullable(false)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
