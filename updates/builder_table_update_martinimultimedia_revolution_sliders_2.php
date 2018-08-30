<?php namespace MartiniMultimedia\Revolution\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaRevolutionSliders2 extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->boolean('published')->default(1);
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->dropColumn('published');
        });
    }
}
