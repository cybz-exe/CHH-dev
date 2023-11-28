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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('contact', 11)->nullable()->default(0);
            $table->string('email');
            $table->string('status');
            $table->string('age');
            $table->string('sex');
            $table->date('dob');
            $table->string('address');
            // $table->string('fee');
            $table->string('emergency_name');
            $table->string('emergency_contact', 11)->nullable()->default(0);
            $table->string('relationship');
            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
