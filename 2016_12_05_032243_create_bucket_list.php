<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBucketList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('must_do_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('done'); // this change to have a boolean value in there.....?
            // $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('bucket');
    }
}
