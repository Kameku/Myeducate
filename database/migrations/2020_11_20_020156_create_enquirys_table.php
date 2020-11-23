<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquirysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquirys', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("home_phone");
            $table->string("adress");
            $table->string("suburb");
            $table->string("post_code");
            $table->date("date_of_birth");
            $table->string("language_home");
            $table->string("parent_name");
            $table->string("parent_mobile");
            $table->string("parent_email");
            $table->string("parent_adress");
            $table->string("status")->default('disable');
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
        Schema::dropIfExists('enquirys');
    }
}
