<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('volume', 8, 2);
            $table->decimal('power', 8, 2);
            $table->decimal('init_fruit', 8, 2);
            $table->decimal('init_water', 8, 2);
            $table->decimal('init_sugar', 8, 2);
            $table->decimal('init_yeast', 8, 2);
            $table->decimal('init_nutrient', 8, 2);
            $table->decimal('init_citric_acid', 8, 2);
            $table->text('yeast_name')->nullable();
            $table->text('nutrient_name')->nullable();
            $table->tinyInteger('bottled')->default(0);
            $table->tinyInteger('is_drain')->default(0);
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
        Schema::dropIfExists('wines');
    }
}
