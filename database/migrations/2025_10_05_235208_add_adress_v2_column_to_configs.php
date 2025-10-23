<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdressV2ColumnToConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->text('address_company_4')->nullable()->after('address_company_3');
            $table->text('address_company_5')->nullable()->after('address_company_4');
            $table->text('address_company_6')->nullable()->after('address_company_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('configs', function (Blueprint $table) {
            $table->dropColumn('address_company_4');
            $table->dropColumn('address_company_5');
            $table->dropColumn('address_company_6');
        });
    }
}
