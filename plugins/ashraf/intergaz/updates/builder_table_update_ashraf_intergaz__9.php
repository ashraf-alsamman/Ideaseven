<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAshrafIntergaz9 extends Migration
{
    public function up()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->text('products')->nullable();
            $table->string('title', 191)->default('null')->change();
            $table->text('news')->default('null')->change();
            $table->text('solutions')->default('null')->change();
            $table->text('services')->default('null')->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->dropColumn('products');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->text('news')->default('\'null\'')->change();
            $table->text('solutions')->default('NULL')->change();
            $table->text('services')->default('NULL')->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}
