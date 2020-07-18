<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('text_id')->constrained();
            $table->string('lang');
            $table->string('details')->nullable();
            $table->text('text');
            $table->string('slug', 200)->unique();
            $table->timestamp('validate_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traductions');
    }
}
