<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->string('phone')->index();
            $table->string('passcode')->nullable()->index();
        });

        Schema::create('responses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('role_id')->nullable()->index();
            $table->integer('applicant_id')->nullable()->index();
            $table->integer('grade')->nullable();
        });

        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('question_id')->nullable()->index();
            $table->integer('response_id')->nullable()->index();
            $table->text('content')->nullable();
        });

        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('role_id')->nullable()->index();
            $table->integer('type_id')->nullable()->index();
            $table->string('name',128)->nullable()->index();
            $table->text('content')->nullable();
        });

        Schema::create('solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->integer('question_id')->nullable()->index();
            $table->integer('weight')->nullable();
            $table->text('content')->nullable();
        });

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('enabled')->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->string('name',128)->nullable()->index();
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('applicants');
        Schema::drop('responses');
        Schema::drop('answers');
        Schema::drop('questions');
        Schema::drop('solutions');
        Schema::drop('roles');
    }
}
