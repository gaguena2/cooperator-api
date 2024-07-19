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
        Schema::create('cooperators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coop_name', 120);
            $table->string('coop_document', 9);
            $table->string('coop_email', 120);
            $table->string('coop_phoneNumber', 14);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooperators');
    }
};
