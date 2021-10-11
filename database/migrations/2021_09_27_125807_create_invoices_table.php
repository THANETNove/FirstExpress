<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('issuedDateIssue');
            $table->string('dateDue');
            $table->string('documentThat');
            $table->string('refer');
            $table->string('tag');
            $table->json('datajson')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('totalItems');
            $table->string('priceGoods');
            $table->string('vat');
            $table->string('netTotal');
            $table->string('status');
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
        Schema::dropIfExists('invoices');
    }
}
