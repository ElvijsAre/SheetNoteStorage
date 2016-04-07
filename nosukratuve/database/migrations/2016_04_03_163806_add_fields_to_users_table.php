<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->date('birth_date');
            $table->integer('age');
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->boolean('is_blocked');
            $table->boolean('is_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn(['birth_date', 'age', 'gender', 'īs_blocked', 'is_admin']);                
            });
    }
}
