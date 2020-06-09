<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAshrafIntergaz11 extends Migration
{
    public function up()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->text('link')->nullable();
            $table->string('title', 191)->default('null')->change();
            $table->text('news')->default('null')->change();
            $table->text('solutions')->default('null')->change();
            $table->text('services')->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('products')->default('null')->change();
            $table->text('partners')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->dropColumn('link');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->text('news')->default('\'null\'')->change();
            $table->text('solutions')->default('NULL')->change();
            $table->text('services')->default('NULL')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('products')->default('NULL')->change();
            $table->text('partners')->default('NULL')->change();
        });
    }
}
