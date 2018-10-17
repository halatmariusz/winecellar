<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinesDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('wine_id');
            $table->text('data_key');
            $table->decimal('data_volume', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->timestamp('added_on');
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
        Schema::dropIfExists('wines_data');
    }
}
