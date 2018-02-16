<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateQuestionOptionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('questionOptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('questionListId');
            $table->smallInteger('quesNumber');
            $table->string('questionOptionsTxt');
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
        //
        Schema::drop("questionOptions");
    }
}
