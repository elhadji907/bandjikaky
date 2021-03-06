<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecettesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'recettes';

    /**
     * Run the migrations.
     * @table recettes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('uuid', 36);
            $table->string('name', 200);
            $table->string('montant', 200)->nullable();
            $table->unsignedInteger('annees_id');

            $table->index(["annees_id"], 'fk_recettes_annees1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('annees_id', 'fk_recettes_annees1_idx')
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
