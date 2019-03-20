<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_title');
            $table->string('thematic_issue');
            $table->string('project_focus');
            $table->string('amount_requested');
            $table->string('project_country');
            $table->string('project_brief');
            $table->string('project_align');
            $table->string('org_name');
            $table->string('address');
            $table->string('country');
            $table->string('phone_number');
            $table->string('title');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('org');
            $table->string('email');
            $table->string('office_number');
            $table->string('cell_number');
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
        Schema::dropIfExists('applications');
    }
}
