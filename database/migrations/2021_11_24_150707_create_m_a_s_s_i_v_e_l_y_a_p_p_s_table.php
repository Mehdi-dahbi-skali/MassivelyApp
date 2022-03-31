<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMASSIVELYAPPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_a_s_s_i_v_e_l_y_a_p_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('Titre');
            $table->string('resume');
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_a_s_s_i_v_e_l_y_a_p_p_s');
    }
}
