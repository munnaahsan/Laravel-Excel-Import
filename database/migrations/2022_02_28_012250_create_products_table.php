<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('parent_category')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->string('part_name')->nullable();
            $table->string('part_no')->nullable();
//            $table->string('description');
//            $table->string('brand');
//            $table->string('unit');
//            $table->string('rack');
//            $table->string('hole_no');
//            $table->string('variant_type');
//            $table->string('variant');
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
        Schema::dropIfExists('products');
    }
}
