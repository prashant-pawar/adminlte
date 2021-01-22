<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateStudMig extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('enrollment_no',20);
            $table->integer('roll_no');
            $table->string('mobile',14);
            $table->string('email',100);
            $table->string('city',50);
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
        //
    }
}
