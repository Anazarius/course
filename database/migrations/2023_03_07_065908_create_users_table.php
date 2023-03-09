<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 15);
            $table->string('second_name', 20);
            $table->string('login', 15);
            $table->string('password', 15);
            $table->string('email', 25)->unique();
            $table->bigInteger('balance', 0);
            $table->foreignId('role_id')->constrained();
            $table->timestamp('created_at')->default(New Expression('NOW()'));
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
