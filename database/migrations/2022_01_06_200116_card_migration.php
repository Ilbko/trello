<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CardMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id('cardId');
            $table->string('cardName');
            $table->string('cardDescription')->nullable();
            $table->unsignedBigInteger('cardListId');
            $table->foreign('cardListId')->references('listId')->on('lists');
            $table->boolean('cardIsArchived');
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
        Schema::dropIfExists('cards');
    }
}
