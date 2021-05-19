<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AssociacaoAulaDiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aula', function(Blueprint $table) {
            $table->dropColumn('dia');
            $table->foreignId('iddia');

            $table->foreign('iddia')->references('id')->on('dia');
        });
    }
}
