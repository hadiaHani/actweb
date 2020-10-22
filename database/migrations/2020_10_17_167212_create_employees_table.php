<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OfficeCode');
            $table->integer('reportsTo');
            $table->char('LastName',255);
            $table->char('FirstName',255);
            $table->char('Extension',255);
            $table->char('Email',255);
            $table->char('JobTitle',255);

            $table->timestamps();

          // $table->foreign('OfficeCode')->references('code')->on('offices');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
