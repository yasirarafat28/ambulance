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
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->text('country')->nullable();
            $table->text('address')->nullable();
            $table->text('logo')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
            $table->text('instagram')->nullable();
            $table->text('pinterest')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        DB::table('setting')->insertGetId([
            'app_name' => 'Hamida Ambulance Service',
            'app_description' => 'Hamida Ambulance Service',
            'tagline' => 'Hamida Ambulance Service',
            'meta_title' => 'Hamida Ambulance Service',
            'meta_description' => 'Hamida Ambulance Service',
            'email' => 'yasirarafat1995@gmail.com',
            'phone' => '01712013284',
            'address' => 'Office Address : 267/1/A, Lift-6, 60Ft, Mirpur, Dhaka-1216',
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
