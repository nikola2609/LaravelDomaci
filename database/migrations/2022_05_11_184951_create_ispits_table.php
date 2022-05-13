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
        Schema::create('ispits', function (Blueprint $table) {
            /*$table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('ispit_id')->constrained('ispits');
            $table->string('ispitni_rok');
            $table->date('datum_prijave');
            $table->timestamps();*/
            $table->id();
            $table->string('naziv_predmeta');
            $table->string('godina_studija');
            $table->string('katedra');
            $table->string('espb');
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
        Schema::dropIfExists('ispits');
    }
};
