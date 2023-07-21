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
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->integer('order_id');
            $table->string('image_path');
            $table->decimal('price', 8, 2);
            $table->integer('quantity');
            $table->decimal('weight', 8, 2);
            $table->date('order_date');
            $table->boolean('delivery')->default(false);
            $table->string('user_name');
            $table->boolean('registered')->default(false);
            $table->decimal('total_price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
};
