<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string("project_name");
            $table->string("project_description");
            $table->string("project_status");
            $table->string("project_duration");
            $table->string("client_id");
            $table->string("added_by");
            $table->timestamps();


            $table->foreign("client_id")->references("email")->on("users");
            $table->foreign("added_by")->references("email")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
