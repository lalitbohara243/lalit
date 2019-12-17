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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->smallInteger('Role_id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address1','255');
            $table->string('address2','255')->nullable();
            $table->string('image')->nullable();
            $table->enum('Gender',['male','female','others']);
            $table->string('work_experience')->nullable();
            $table->string('profession','255');
            $table->bigInteger('Org_PAN')->nullable();
            $table->boolean('status',['Approved','Unapproved']);
            $table->bigInteger('Service_id');
            $table->bigInteger('Department_id');
            $table->date('Available_date')->nullable();
            $table->boolean('Appointment_status',['booked','unvooked'])->nullable();
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
