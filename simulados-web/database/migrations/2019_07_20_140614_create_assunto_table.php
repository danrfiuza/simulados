<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssuntoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assunto', function (Blueprint $table) {
            $table->bigIncrements('assid');
            $table->string('assdescricao')->unique();
            $table->unsignedBigInteger('assidpai')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['assid','assdescricao','assidpai']);
            $table->foreign('assidpai')->references('assid')->on('assunto');

            $table->index(['assidpai','assid']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assunto');
    }
}
