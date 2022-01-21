<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('type_of_application');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('present_address');
            $table->string('nationality');
            $table->string('sex');
            $table->string('birth_date');
            $table->string('birth_place');
            $table->double('height');
            $table->double('weight');
            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Separated']);
            $table->enum('lca', ['Student-Drivers Permit', 'Drivers License', 'Conductors License']);
            $table->string('dl_driving_school');
            $table->string('dl_driving_school_instructor');
            $table->string('dl_private_licensed_person');
            $table->string('dl_private_licensed_person_name');
            $table->string('dl_tesda');
            $table->string('dl_tesda_instructor');
            $table->enum('highest_educational_attainment', ['Postgraduate', 'College', 'High School', 'Elementary']);
            $table->string('blood_type');
            $table->string('organ_to_donate');
            $table->string('eye_color');
            $table->string('vehicle_category');
            $table->string('vehicle_conditions');
            $table->enum('status', ['Approved', 'Decline', 'Pending'])->default('Pending');
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
        Schema::dropIfExists('forms');
    }
}
