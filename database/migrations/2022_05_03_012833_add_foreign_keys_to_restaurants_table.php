<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->foreignId('establishment_id')->constrained('establishments')->onDelete('cascade');
            $table->foreignId('food_id')->constrained('foods')->onDelete('cascade');
            $table->foreignId('environment_id')->constrained('environments')->onDelete('cascade');
            $table->foreignId('price_id')->constrained('prices')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropForeign('city_id');
            $table->dropForeign('establishment_id');
            $table->dropForeign('posts_user_id_foreign');
            $table->dropForeign('food_id');
            $table->dropForeign('price_id');
        });
    }
};
