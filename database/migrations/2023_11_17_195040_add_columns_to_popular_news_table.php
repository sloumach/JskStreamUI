<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToPopularNewsTable extends Migration
{
    public function up(): void
    {
        Schema::table('popular_news', function (Blueprint $table) {
            $table->string('title');
            $table->string('author');
            $table->string('topic');
            $table->text('content');
            $table->timestamp('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('likes')->default(0);
        });
    }

    public function down()
    {
        Schema::table('popular_news', function (Blueprint $table) {
            $table->dropColumn(['title', 'author', 'content', 'date', 'likes']);
        });
    }
}
