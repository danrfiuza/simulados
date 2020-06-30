<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao', function (Blueprint $table) {
            $table->bigIncrements('queid');
            $table->text('quedescricao');
            $table->unsignedBigInteger('banid');
            $table->unsignedBigInteger('assid');
            $table->unsignedBigInteger('orgid');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('assid')->references('assid')->on('assunto');
            $table->foreign('banid')->references('banid')->on('banca');
            $table->foreign('orgid')->references('orgid')->on('orgao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questao');
    }
}
