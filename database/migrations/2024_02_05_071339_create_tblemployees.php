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
            Schema::create('tblemployees', function (Blueprint $table) {
                $table->id('emp_id');
                $table->string('FirstName');
                $table->string('LastName');
                $table->string('Staff_ID');
                $table->string('Position_Staff');                
                $table->string('EmailID')->unique();
                $table->string('Password');
                $table->string('Gender');
                $table->string('Dob');
                $table->string('Department');
                $table->string('Address');
                $table->string('Av_leave');
                $table->string('Phonenumber');
                $table->string('Status');
                $table->timestamp('RegDate')->nullable();
                $table->string('role');
                $table->string('location');
                $table->string('signature');
            
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('tblemployees');
        }
    };