<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customerCode');
            $table->string('cell_code');
            $table->string('name_customer');
            $table->string('address_customer');
            $table->string('district_customer');
            $table->string('zip_code_customer');
            $table->string('top_rate');
            $table->string('name_invoke');
            $table->string('address_invoke');
            $table->string('district_invoke');
            $table->string('zip_code_invoke');
            $table->string('receipt_invoke');
            $table->string('email')->unique();
            $table->string('ref_user');
            $table->string('password_user');
            $table->string('rate_rate');
            $table->string('district_rate');
            $table->string('province_rate');
            $table->string('phone_number');
            $table->string('canton_rate');
            $table->string('province');
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
        Schema::dropIfExists('customers');
    }
}
