<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertBasicLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('languages')->insert(array(
            "name" => "Bulgarian",
            "abbr" => "BG",
            "created_at" => date('Y-m-d H:m:s'),
            "updated_at" => date('Y-m-d H:m:s')
        ));
        DB::table('languages')->insert(array(
            "name" => "English",
            "abbr" => "EN",
            "created_at" => date('Y-m-d H:m:s'),
            "updated_at" => date('Y-m-d H:m:s')
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('languages')->where("name", "=", "Bulgarian")->delete();
        DB::table('languages')->where("name", "=", "English")->delete();
    }
}
