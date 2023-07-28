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
        Schema::table('orders', function (Blueprint $table) {
             // Remove the 'UserName' column
            $table->dropColumn('UserName');

            // Add 'PaymentStatus' and 'DeliveryStatus' columns
            $table->string('PaymentStatus')->default('Pending');
            $table->string('DeliveryStatus')->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
