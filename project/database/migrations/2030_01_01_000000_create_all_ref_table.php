<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllRefTable extends Migration
{
    //Bütün referanslar burada tanımlacak.
    public function up()
    {
        Schema::table('user', function($table) {
            $table->foreign('role')->references('id')->on('role');
            $table->foreign('token')->references('id')->on('token');
        });
        Schema::table('lesson', function($table) {
            $table->foreign('education_code')->references('education_code')->on('education');

        });
        Schema::table('role', function($table) {
            $table->foreign('route')->references('id')->on('route');

        });
        Schema::table('quiz_show', function($table) {
            $table->foreign('user_id')->references('id')->on('user');

        });
        Schema::table('quiz_show', function($table) {
            $table->foreign('question_id')->references('question_id')->on('question');

        });
        Schema::table('question', function($table) {
            $table->foreign('question_answer')->references('id')->on('answers');

        });
        Schema::table('comments', function($table) {
            $table->foreign('user_id')->references('user_id')->on('user');

        });
        Schema::table('job_advertisiment', function($table) {
            $table->foreign('id')->references('user_id')->on('user');

        });
        Schema::table('article', function($table) {
            $table->foreign('id')->references('id')->on('comments');

        });




    }

}
