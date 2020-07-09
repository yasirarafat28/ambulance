<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->text('app_name')->nullable();
            $table->text('app_description' )->nullable();
            $table->text('tagline')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('admin_email')->nullable();
            $table->text('admin_phone')->nullable();
            $table->text('full_address')->nullable();
            $table->text('zip')->nullable();
            $table->text('country')->nullable();
            $table->enum('status', ['active', 'deactive'])->default('active');
            $table->timestamps();
        });

        DB::table('setting')->insertGetId([
            'app_name' => 'দি অন্তরঙ্গ বহুমুখী সমবায় সমিতি',
            'app_description' => 'দি অন্তরঙ্গ বহুমুখী সমবায় সমিতি',
            'tagline' => 'দি অন্তরঙ্গ বহুমুখী সমবায় সমিতি',
            'meta_title' => 'দি অন্তরঙ্গ বহুমুখী সমবায় সমিতি',
            'meta_description' => 'দি অন্তরঙ্গ বহুমুখী সমবায় সমিতি',
            'admin_email' => 'yasirarafat1995@gmail.com',
            'admin_phone' => '0123456789',
            'full_address' => 'Mirpur,Dhaka',
            'zip' => '1216',
            'country' => 'Bangladesh',
            'status' => 'active',


        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting', function (Blueprint $table) {
            //
        });
    }
}
