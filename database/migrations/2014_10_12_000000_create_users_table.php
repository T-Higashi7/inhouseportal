<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /**
     2021 5/12 admin_flag,Affiliation_manager_flag,Director_flag,Business_owner_flag追加
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('admin_flag')->nullable()->default(FALSE)->comment('管理者フラグ');
            $table->boolean('Affiliation_manager_flag')->nullable()->default(FALSE)->comment('所属長フラグ');
            $table->boolean('Director_flag')->nullable()->default(FALSE)->comment('部長フラグ');
            $table->boolean('Business_owner_flag')->nullable()->default(FALSE)->comment('経営者フラグ');
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
