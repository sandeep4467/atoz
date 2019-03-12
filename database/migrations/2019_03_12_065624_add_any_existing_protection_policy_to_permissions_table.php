<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAnyExistingProtectionPolicyToPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('temprory_forms', function (Blueprint $table) {
            //
             

               $table->longtext("any_existing_protection_policy")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('temprory_forms', function (Blueprint $table) {

            //
        });
    }
}
