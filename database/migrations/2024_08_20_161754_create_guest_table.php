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
        Schema::create('guest', function (Blueprint $table) {
            $table->id();
            $table->String('firstname');
            $table->String('middlename')->nullable();
            $table->String('lastname');
            $table->enum('booking_type',['online','manual']);
            $table->String('country');
            $table->String('address');
            $table->String('tribe');
            $table->String('occupation');
            $table->String('arriving_from');
            $table->String('email')->nullable();
            $table->String('phone_number')->nullable();
            $table->String('purpose_of_visit')->nullable();
            $table->String('id_type')->nullable();
            $table->String('id__number')->nullable();
            $table->String('id_issuing_authority')->nullable();
            $table->string('id_expiration_date')->nullable();
            $table->String('next_of_kin_name')->nullable();
            $table->String('next_of_kin_phone_number')->nullable();
            $table->enum('gender',['male','female']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest');
    }
};
