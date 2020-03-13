<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabillesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'habilles';

    /**
     * Run the migrations.
     * @table habilles
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('uuid', 36);
            $table->string('name', 200)->nullable();
            $table->string('montant', 200);
            $table->string('annee', 45)->nullable();
            $table->unsignedInteger('membres_id');

            $table->index(["membres_id"], 'fk_habilles_membres1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('membres_id', 'fk_habilles_membres1_idx')
                ->references('id')->on('membres')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
