<?php namespace Shohabbos\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateShohabbosCommentsComments extends Migration
{
    public function up()
    {
        Schema::create('shohabbos_comments_comments', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('attachment_id');
            $table->string('attachment_type');
            $table->string('title')->nullable();
            $table->text('content');
            $table->integer('rating')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('shohabbos_comments_comments');
    }
}
