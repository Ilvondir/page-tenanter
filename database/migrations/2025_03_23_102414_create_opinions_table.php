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
        Schema::create('opinions', function (Blueprint $table) {
            $table->id();

            $table->decimal('stars', 3,2);
            $table->text('content');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('opinions', function (Blueprint $table) {
            $table->dropForeign('opinions_user_id_foreign');
        });
        Schema::dropIfExists('opinions');
    }
};
