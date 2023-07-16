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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ProductID');
            $table->foreign('ProductID')->references('id')->on('products');
            $table->decimal('Price', 8, 2);
            $table->string('Item_weight');
            $table->string('Cake_type');
            $table->string('Icing_type');
            $table->string('UserName');
            $table->string('Input_Cake_Weight')->nullable();
            $table->string('Input_Cake_Type')->nullable();
            $table->text('Message_on_cake')->nullable();
            $table->integer('Rating');
            $table->text('Feedbacks');
            $table->text('Review')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
