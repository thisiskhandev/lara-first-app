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
        // Schema::table('libraries', function (Blueprint $table) {
        //     $table->dropForeign(['stu_id']);
        //     $table->dropColumn('stu_id'); // Remember!! You cannot delete direct foreign key column until you haven't drop it's foreign constraint. First always use dropForeign before using dropColumn of the foreign column.
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('libraries', function (Blueprint $table) {
        //     //
        // });
    }
};
