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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email', 20);
            $table->string('fullname', 100);
            $table->text('address', 8.2);
            $table->date('birthdate', 4);
            $table->enum('gender', ['M', 'F']);
            $table->string('phone', 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
