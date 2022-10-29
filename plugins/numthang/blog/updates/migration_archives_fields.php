<?php namespace Numthang\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class MigrationLibraryFields extends Migration
{
    public function up()
    {
        // Schema::create('numthang_blog_table', function($table)
        // {
        // });
        Schema::table('rainlab_blog_posts', function($table)
        {
            $table->text('refno')->nullable();
            $table->text('collector')->nullable();
            $table->text('archives_1_1')->nullable();
            $table->text('archives_1_2')->nullable();
            $table->text('archives_1_3')->nullable();
            $table->text('archives_1_4')->nullable();
            $table->text('archives_1_5')->nullable();
            $table->text('archives_2_1')->nullable();
            $table->text('archives_2_2')->nullable();
            $table->text('archives_2_3')->nullable();
            $table->text('archives_2_4')->nullable();
            $table->text('archives_3_1')->nullable();
            $table->text('archives_3_2')->nullable();
            $table->text('archives_3_3')->nullable();
            $table->text('archives_3_4')->nullable();
            $table->text('archives_4_1')->nullable();
            $table->text('archives_4_2')->nullable();
            $table->text('archives_4_3')->nullable();
            $table->text('archives_4_4')->nullable();
            $table->text('archives_4_5')->nullable();
            $table->text('archives_5_1')->nullable();
            $table->text('archives_5_2')->nullable();
            $table->text('archives_5_3')->nullable();
            $table->text('archives_5_4')->nullable();
            $table->text('archives_6_1')->nullable();
            $table->text('archives_7_1')->nullable();
            $table->text('archives_7_2')->nullable();
            $table->text('archives_7_3')->nullable();
        });
    }

    public function down()
    {
        // Schema::drop('numthang_blog_table');
        if (Schema::hasTable('rainlab_blog_posts')) {
            Schema::table('rainlab_blog_posts', function ($table) {
                $table->dropColumn(['refno']);
                $table->dropColumn(['collector']);
                $table->dropColumn(['archives_1_1']);
                $table->dropColumn(['archives_1_2']);
                $table->dropColumn(['archives_1_3']);
                $table->dropColumn(['archives_1_4']);
                $table->dropColumn(['archives_1_5']);
                $table->dropColumn(['archives_2_1']);
                $table->dropColumn(['archives_2_2']);
                $table->dropColumn(['archives_2_3']);
                $table->dropColumn(['archives_2_4']);
                $table->dropColumn(['archives_3_1']);
                $table->dropColumn(['archives_3_2']);
                $table->dropColumn(['archives_3_3']);
                $table->dropColumn(['archives_3_4']);
                $table->dropColumn(['archives_4_1']);
                $table->dropColumn(['archives_4_2']);
                $table->dropColumn(['archives_4_3']);
                $table->dropColumn(['archives_4_4']);
                $table->dropColumn(['archives_4_5']);
                $table->dropColumn(['archives_5_1']);
                $table->dropColumn(['archives_5_2']);
                $table->dropColumn(['archives_5_3']);
                $table->dropColumn(['archives_5_4']);
                $table->dropColumn(['archives_6_1']);
                $table->dropColumn(['archives_7_1']);
                $table->dropColumn(['archives_7_2']);
                $table->dropColumn(['archives_7_3']);
            });
        }
    }
}