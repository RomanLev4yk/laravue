<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\User\Enums\UserStatus;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->index();
            $table->string('email', 254)->unique();
            $table->string('login', 50)->unique();
            $table->timestamp('email_verified_at');
            $table->string('password', 60);
            $table->timestamp('birth_date')->nullable();
            $table->string('phone', 15)->nullable();
            $table->ENUM('status', [UserStatus::getValues()])->default(UserStatus::NOT_ACTIVE);
            $table->string('avatar', 100)->nullable();
            $table->rememberToken();
            $table->timestamps();
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
}
