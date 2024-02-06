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
        Schema::create('tblleavetype', function (Blueprint $table) {
            $table->id();
            $table->string('LeaveType');
            $table->string('Description');
            $table->string('date_from');
            $table->string('date_to');
            $table->timestamp('CreationDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblleavetype');
    }
};