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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('document');
            $table->string('numberPeople');
            $table->string('nightNumber');
            $table->date('initialDate');
            $table->date('finishDate');
            $table->integer('price');

            $table->unsignedBigInteger('id_bedroom');
            $table->foreign("id_bedroom")
                ->references("id")
                ->on("bedrooms")
                ->onDelete("cascade")
                ->onUpdate("cascade");
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
        Schema::dropIfExists('reservations');
    }
};
