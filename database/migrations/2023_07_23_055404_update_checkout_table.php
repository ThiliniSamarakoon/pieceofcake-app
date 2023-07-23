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
        Schema::table('checkout', function (Blueprint $table) {
             // Add new fields
            $table->string('street_address')->nullable();
            $table->string('city')->nullable();

            // Remove old field
            $table->dropColumn('delivery_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('checkout', function (Blueprint $table) {
            //
        });
    }
};
