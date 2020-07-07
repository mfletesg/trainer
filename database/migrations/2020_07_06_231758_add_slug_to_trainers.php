<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToTrainers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trainers', function (Blueprint $table) {
            $table->string('slug')->unique(); //Señalamos que este atributo sea unico en la base de datos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trainers', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
    }
}
