<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'bodies';

    /**
     * Run the migrations.
     * @table bodies
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('uuid', 36);
            $table->string('montant', 200);
            $table->string('annee', 45)->nullable();
            $table->unsignedInteger('participations_id');

            $table->index(["participations_id"], 'fk_bodies_participations1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('participations_id', 'fk_bodies_participations1_idx')
                ->references('id')->on('participations')
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
