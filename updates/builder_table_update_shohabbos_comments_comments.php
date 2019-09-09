<?php namespace Shohabbos\Comments\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateShohabbosCommentsComments extends Migration
{
    public function up()
    {
        Schema::table('shohabbos_comments_comments', function($table)
        {
            $table->integer('author_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('shohabbos_comments_comments', function($table)
        {
            $table->dropColumn('author_id');
        });
    }
}
