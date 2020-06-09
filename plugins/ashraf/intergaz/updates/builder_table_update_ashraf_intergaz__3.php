<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAshrafIntergaz3 extends Migration
{
    public function up()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->text('news')->nullable()->default('null');
            $table->text('solutions')->nullable();
            $table->string('title', 191)->default('null')->change();
            $table->dropColumn('all_data');
        });
    }
    
    public function down()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->dropColumn('news');
            $table->dropColumn('solutions');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->text('all_data')->nullable()->default('NULL');
        });
    }
}
