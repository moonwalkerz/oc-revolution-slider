<?php namespace MartiniMultimedia\Revolution\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaRevolutionSliders extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->text('script')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->dropColumn('script');
        });
    }
}
