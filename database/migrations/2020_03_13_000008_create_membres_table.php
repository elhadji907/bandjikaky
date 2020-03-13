<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembresTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'membres';

    /**
     * Run the migrations.
     * @table membres
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->char('uuid', 36);
            $table->string('matricule', 200)->nullable();
            $table->dateTime('debut')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('fin')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('nbrefant')->nullable()->default('0');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('generations_id');
            $table->unsignedInteger('quartiers_id');
            $table->unsignedInteger('familles_id');

            $table->index(["familles_id"], 'fk_membres_familles1_idx');

            $table->index(["users_id"], 'fk_personnels_users1_idx');

            $table->index(["quartiers_id"], 'fk_membres_quartiers1_idx');

            $table->index(["generations_id"], 'fk_membres_generations1_idx');
            $table->softDeletes();
            $table->nullableTimestamps();


            $table->foreign('users_id', 'fk_personnels_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('generations_id', 'fk_membres_generations1_idx')
                ->references('id')->on('generations')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('quartiers_id', 'fk_membres_quartiers1_idx')
                ->references('id')->on('quartiers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('familles_id', 'fk_membres_familles1_idx')
                ->references('id')->on('familles')
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
