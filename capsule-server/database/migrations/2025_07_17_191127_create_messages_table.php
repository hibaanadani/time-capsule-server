<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->text("message");
            $table->string("mood")->nullable();;
            $table->LONGTEXT("image")->nullable();
            $table->text("audio")->nullable();;
            $table->Date("reveal_date");
            $table->string("privacy");
            $table->string("location")->nullable();;
            $table->string("ipaddress");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
