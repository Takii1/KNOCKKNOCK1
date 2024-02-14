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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("Product_name",255);
            $table->longText("Product_description");
            $table->unsignedBigInteger("Category_Id");
            $table->foreign("Category_Id")->references("id")->on("categories");
            $table->unsignedBigInteger("User_Id");
            $table->foreign("User_Id")->references("id")->on("users");
            $table->string("Condition");
            $table->string("Insurance");
            $table->string("Coordinates");
            $table->string("Zipcode");
            $table->string("Region");
            $table->string("Location")->nullable();
            $table->string("Rent_per_hour");
            $table->string("Rent_per_day");
            $table->integer("Booked")->default('0');
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
        Schema::dropIfExists('products');
    }
};
