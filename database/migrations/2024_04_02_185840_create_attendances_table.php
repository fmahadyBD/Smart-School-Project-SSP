<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
        
            $table->string('class');
            $table->string('roll');
            $table->string('status');
            $table->string('date_of_attendances');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
