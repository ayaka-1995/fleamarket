<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameZipcodeToPostalCodeInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('postal_code_in_users', function (Blueprint $table) {
            $table->renameColumn('zipcode','postal_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('postal_code_in_users', function (Blueprint $table) {
            $table->renameColumn('postal_code','zipcode');
        });
    }
}
