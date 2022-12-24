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
        Schema::create('processing_student_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->string("lrn");
            $table->string("grade");
            $table->string("section");
            $table->string("email");
            $table->string("address");
            $table->date("birthday");
            $table->string("contact");
            $table->string("gender");
            $table->string("document");
            $table->string("tracking_number");
            $table->string("pin");
            $table->integer("status")->default(0);
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
        Schema::dropIfExists('processing_student_requests');
    }
};
