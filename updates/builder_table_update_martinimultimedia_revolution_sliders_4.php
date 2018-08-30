<?php namespace MartiniMultimedia\Revolution\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMartinimultimediaRevolutionSliders4 extends Migration
{
    public function up()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->string('lang')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('martinimultimedia_revolution_sliders', function($table)
        {
            $table->dropColumn('lang');
        });
    }
}
