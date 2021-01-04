<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sources', function (Blueprint $table) {
            $table->id();
            $table->text('url')
                ->nullabele(false);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('news', function (Blueprint $table) {
            $table->unsignedBigInteger('source_id')
                ->after('category_id')
                ->nullable(false)
                ->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropIndex(['source_id']);
            $table->dropColumn(['source_id']);
        });
        
        Schema::drop('sources');
    }
}
