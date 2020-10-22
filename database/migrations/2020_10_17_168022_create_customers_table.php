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
            $table->integer('salesRepEmployeeNum');
            $table->char('Name',225);
            $table->char('LastName',255);
            $table->char('FirstName',255);
            $table->char('Phone');
            $table->char('Address1',255);
            $table->char('Address2',255);
            $table->char('City',255);
            $table->integer('PostalCode');
            $table->char('Country',255);
            $table->double('CreditLimit',19,0);
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
