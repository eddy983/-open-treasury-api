<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreasuryTemporariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treasury_temporaries', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('day');
            $table->string('month');
            $table->bigInteger('year');
            $table->string('payment_number');
            $table->bigInteger('payer_code');
            $table->string('mother_ministry');
            $table->string('organization_name');
            $table->string('beneficiary_name');
            $table->float('amount', 15, 2);
            $table->text('description');
            $table->text('irregularities');
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
        Schema::dropIfExists('treasury_temporaries');
    }
}
