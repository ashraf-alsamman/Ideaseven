<?php namespace Ashraf\Intergaz\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAshrafIntergaz28 extends Migration
{
    public function up()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->text('inner')->nullable();
            $table->string('title', 191)->default('null')->change();
            $table->text('news')->default('null')->change();
            $table->text('solutions')->default('null')->change();
            $table->text('services')->default('null')->change();
            $table->text('description')->default('null')->change();
            $table->text('products')->default('null')->change();
            $table->text('partners')->default('null')->change();
            $table->text('social')->default('null')->change();
            $table->text('bg_image')->default('null')->change();
            $table->text('image')->default('null')->change();
            $table->text('quick_links')->default('null')->change();
            $table->text('posts')->default('null')->change();
            $table->text('footer_buttom')->default('null')->change();
            $table->text('footer_right')->default('null')->change();
            $table->text('menu')->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('ashraf_intergaz_', function($table)
        {
            $table->dropColumn('inner');
            $table->string('title', 191)->default('\'null\'')->change();
            $table->text('news')->default('\'null\'')->change();
            $table->text('solutions')->default('NULL')->change();
            $table->text('services')->default('NULL')->change();
            $table->text('description')->default('NULL')->change();
            $table->text('products')->default('NULL')->change();
            $table->text('partners')->default('NULL')->change();
            $table->text('social')->default('NULL')->change();
            $table->text('bg_image')->default('NULL')->change();
            $table->text('image')->default('NULL')->change();
            $table->text('quick_links')->default('NULL')->change();
            $table->text('posts')->default('NULL')->change();
            $table->text('footer_buttom')->default('NULL')->change();
            $table->text('footer_right')->default('NULL')->change();
            $table->text('menu')->default('NULL')->change();
        });
    }
}
