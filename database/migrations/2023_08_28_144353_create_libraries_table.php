<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('stu_id'); // This will work for normal id() not for integer()

            // $table->integer('stu_id');
            // $table->bigIncrements('stu_id');

            // $table->foreign('stu_id')
            //     ->references('id')
            //     ->on('students')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreignId('student_id')->constrained() // It will search the table name student where after underscore search for the name of id and creates a student_id as a foreign key.
            //     ->cascadeOnUpdate()->cascadeOnDelete();

            $table->foreignId('stu_id')->constrained('students') // ForeignId creates the foreign column with the desired name and constrained with name finds the primary from the selected table.
                ->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
};
