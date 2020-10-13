<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfoToSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('supplys', function (Blueprint $table) {
            //
            $table->string('email')->nullable()->after('supply_name');
            $table->string('phone_number')->nullable()->after('email');
            $table->string('facebook_url')->nullable()->after('phone_number');
            $table->string('address')->nullable()->after('facebook_url');
            $table->text('description')->nullable()->after('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('supplys', function (Blueprint $table) {
            //
        });
    }
}
