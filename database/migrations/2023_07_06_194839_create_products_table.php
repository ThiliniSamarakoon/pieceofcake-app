<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('ProductID');
            $table->string('image');
            $table->string('price');
            $table->string('category');
            $table->string('item_name');
            $table->string('item_weight');
            $table->string('cake_type');
            $table->string('icing_type');
            $table->integer('rating',0);
            $table->text('feedbacks')->nullable();
            $table->string('data_category');
            $table->string('alt_text');
            $table->timestamps();
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
