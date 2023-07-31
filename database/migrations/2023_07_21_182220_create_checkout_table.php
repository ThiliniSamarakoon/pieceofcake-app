<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Cart;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->string('email');
            $table->string('contact_no');
            $table->text('delivery_address')->nullable();
            $table->string('payment_method');
            $table->string('payment_option');
            $table->text('delivery_note')->nullable();
            $table->timestamps();

        });

        // Retrieve the relevant OrderID from the cart table and insert it into the checkout table
        $cartData = Cart::latest('order_id')->first();

        if ($cartData && isset($_POST['paymentMethod']) && isset($_POST['paymentOption'])) {
            $paymentMethod = $_POST['paymentMethod'];
            $paymentOption = $_POST['paymentOption'];

        DB::table('checkout')->insert([
                'order_id' => $cartData->order_id,
                'email' => $_POST['email'], 
                'contact_no' => $_POST['contactNo'],
                'delivery_address'=>$_POST['deliveryAddress'],
                'payment_method' => $paymentMethod,
                'payment_option' => $paymentOption,
                'delivery_note'=>$_POST['deliveryNote'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout');
    }
};
