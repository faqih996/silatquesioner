<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quesioners', function (Blueprint $table) {
            $table->id();
            $table->string('howLong');
            $table->longText('reasonJoin');
            $table->string('goal');
            $table->string('objective');
            $table->string('material');
            $table->string('activity');
            $table->longText('confident');
            $table->longText('change');
            $table->longText('benefit');
            $table->longText('impressive');
            $table->longText('proud');
            $table->longText('touchingWords');
            $table->longText('harmingWords');
            $table->longText('notHappenAgain');
            $table->string('spirit');
            $table->string('affectSpirit');
            $table->string('notSpirit');
            $table->string('affectingNotSpirit');
            $table->longText('why');
            $table->longText('criticism');
            $table->longText('suggestion');
            $table->longText('recommendation');
            $table->longText('messageToPerson1');
            $table->longText('messageToPerson2');
            $table->longText('messageToPerson3');
            $table->longText('messageToPerson4');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quesioners');
    }
};
