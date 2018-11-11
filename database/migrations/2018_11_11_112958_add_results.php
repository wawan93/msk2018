<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('days', function (Blueprint $table) {
            $table->decimal("result1", 5,2)->nullable();
            $table->decimal("result2", 5,2)->nullable();
            $table->decimal("result3", 5,2)->nullable();
            $table->decimal("result4", 5,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('days', function (Blueprint $table) {
            $table->dropColumn("result1");
            $table->dropColumn("result2");
            $table->dropColumn("result3");
            $table->dropColumn("result4");
        });
    }
}
