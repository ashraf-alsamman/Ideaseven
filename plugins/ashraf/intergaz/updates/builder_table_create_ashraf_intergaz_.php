<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAshrafIntergaz extends Migration
{
    public function up()
    {
        Schema::create('ashraf_intergaz_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ashraf_intergaz_');
    }
}
