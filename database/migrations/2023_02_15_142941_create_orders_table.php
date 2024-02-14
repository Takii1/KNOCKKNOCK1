<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('product_name');
            $table->string('product_price_per_day');
            $table->string('Service_charges');
            $table->string('total_price');
            $table->string('Product_id');
            $table->string('User_id');
            $table->bigInteger('Vendor_Id');
            $table->dateTime('Start_date');
            $table->dateTime('End_date');
            $table->string('Order_status')->default('Confirmed');



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
        Schema::dropIfExists('orders');
    }
};
