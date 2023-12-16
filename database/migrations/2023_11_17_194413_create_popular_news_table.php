<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePopularNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popular_news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->text('content');
            $table->text('topic');
            $table->string('image');
            $table->date('date');
            $table->integer('likes')->default(0);
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
        Schema::dropIfExists('popular_news');
    }
}
