<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();  // Auto-increment primary key
            $table->string('title');  // Title of the to-do
            $table->text('description')->nullable();  // Optional description
            $table->boolean('completed')->default(false);  // Status (completed or not)
            $table->timestamps();  // Created_at & Updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('todos');  // Drops table if it exists
    }
};
