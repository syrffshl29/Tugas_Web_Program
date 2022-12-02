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
        Schema::disableForeignKeyConstraints();
        Schema::create('meta_user', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->json('meta')->nullble();
            $table->foreignId('user_id')->constrained('users');
        });

        if (Schema::hasTable('users')) {
            Schema::enableForeignKeyConstraints();
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meta_user');
    }
};
