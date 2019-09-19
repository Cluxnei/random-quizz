<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories_questions', function (Blueprint $table) {
            $table->dropForeign('question_id');
            $table->dropForeign('category_id');
        });
        Schema::dropIfExists('categories_questions');
    }
}
