<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->integer('code',4)->unique()->nullable();
            $table->char('City',255);
            $table->char('Phone',255);
            $table->char('Address1',255);
            $table->char('Address2',255);
            $table->char('State',255);
            $table->char('Country',255);
            $table->integer('PostalCode');
            $table->char('Territory',255);
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
        Schema::dropIfExists('offices');
    }
}
