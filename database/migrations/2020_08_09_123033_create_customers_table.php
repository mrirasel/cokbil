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
             $table->string('producs_id');
            $table->string('c_name');
            $table->string('c_mobile');
            $table->string('c_address')->nullable;
            $table->string('details');
            $table->string('b_price')->nullable;
            $table->string('t_price')->nullable;
            $table->string('r_price');
            $table->string('g_price')->nullable;
             $table->string('recieve_by')->nullable;  

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
