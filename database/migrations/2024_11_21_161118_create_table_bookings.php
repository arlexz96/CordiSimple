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
            $table->string("name",255);
            $table->text("description");
            $table->date("date_event");
            $table->boolean("is_active");
            $table->unsignedBigInteger("location_id")->nullable();
            $table->unsignedBigInteger("event_capacity_id")->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

            
            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
                ->onDelete('set null')
                ->onUpdate('cascade');

                $table->foreign('event_capacity_id')
                ->references('id')
                ->on('events_capacity')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
