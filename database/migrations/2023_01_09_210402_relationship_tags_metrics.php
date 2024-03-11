<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_metric', function (Blueprint $table) {
            $table->integer('tag_id');
            $table->integer('metric_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tag_metric', function (Blueprint $table) {
            $table->dropColumn('metric_id');
            $table->dropColumn('tag_id');
        });
    }
};
