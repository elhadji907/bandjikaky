<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamillesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'familles';

    /**
     * Run the migrations.
     * @table familles
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
            $table->unsignedInteger('quartiers_id');

            $table->index(["quartiers_id"], 'fk_familles_quartiers1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('quartiers_id', 'fk_familles_quartiers1_idx')
                ->references('id')->on('quartiers')
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
