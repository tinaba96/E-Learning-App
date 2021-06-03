<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('category_id')->constrained('categories')->onDelete("cascade");
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete("cascade");
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete("cascade");
            $table->string('ur_answer');
            $table->string('status');
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
        Schema::dropIfExists('results');
    }
}
