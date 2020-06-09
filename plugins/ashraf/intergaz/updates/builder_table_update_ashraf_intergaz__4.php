<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAshrafIntergaz4 extends Migration
{
    public function up()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->text('all_data')->nullable()->default('null');
            $table->string('title', 191)->default('null')->change();
            $table->dropColumn('news');
            $table->dropColumn('solutions');
        });
    }
    
    public function down()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->dropColumn('all_data');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->text('news')->nullable()->default('\'null\'');
            $table->text('solutions')->nullable()->default('NULL');
        });
    }
}
