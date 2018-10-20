<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeDataType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('books', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('categories', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('book_types', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('customers', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('members', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
        Schema::table('reviews', function($table) {
            $table->date('deleted_at')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('books', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('categories', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('book_types', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('customers', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('members', function($table) {
            $table->date('deleted_at');
        });
        Schema::table('reviews', function($table) {
            $table->date('deleted_at');
        });
    }
}
