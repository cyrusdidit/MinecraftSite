<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinecraftsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('minecrafts', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->string("player_name"); // Stores the player's name
            $table->integer("level")->default(1); // Default level 1
            $table->boolean("is_online")->default(false); // Default offline
            $table->string("world")->nullable(); // The world the player is in
            $table->json("inventory")->nullable(); // Store player items in JSON format
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minecrafts');
    }
}

