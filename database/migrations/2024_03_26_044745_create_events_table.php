<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->dateTime('start_date');
        $table->dateTime('end_date');
        $table->integer('duration')->comment('in hours');
        $table->text('requirements')->nullable();
        $table->integer('capacity');
        $table->decimal('fee', 8, 2)->nullable();
        $table->bigInteger('lecturer_id')->unsigned();
        $table->foreign('lecturer_id')->references('id')->on('users')->onDelete('cascade');
        $table->bigInteger('club_id')->unsigned();
        $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
