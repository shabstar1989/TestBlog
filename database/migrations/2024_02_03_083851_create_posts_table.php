<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('posts', function (Blueprint $table) {
            $table->increments(Post::COLUMN_ID);
            $table->string(Post::COLUMN_AUTHOR);
            $table->string(Post::COLUMN_TITLE);
            $table->text(Post::COLUMN_CONTENT);
            $table->text(Post::COLUMN_DESCRIPTION);
            $table->string(Post::COLUMN_URL);
            $table->string(Post::COLUMN_URL_TO_IMAGE)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
