<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lens_mark_files', function (Blueprint $table) {
            $table->id();
            $table->integer('mark_no')->notNull();
            $table->string('product_mark1')->nullable();
            $table->string('produvt_mark2')->nullable();
            $table->string('link')->notNull();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lens_mark_files');
    }
};
