<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viphams', function (Blueprint $table) {
            $table->id();
            $table->String('thu');
            $table->String('date');
            $table->String('content');
            $table->String('applicant');
            $table->String('adress');
            $table->String('member');
            $table->String('status');
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
        Schema::dropIfExists('viphams');
    }
}
