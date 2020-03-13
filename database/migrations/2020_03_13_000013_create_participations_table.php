<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'participations';

    /**
     * Run the migrations.
     * @table participations
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
            $table->unsignedInteger('membres_id');
            $table->unsignedInteger('annees_id');

            $table->index(["annees_id"], 'fk_participations_annees1_idx');

            $table->index(["membres_id"], 'fk_participations_membres1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('membres_id', 'fk_participations_membres1_idx')
                ->references('id')->on('membres')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('annees_id', 'fk_participations_annees1_idx')
                ->references('id')->on('annees')
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
