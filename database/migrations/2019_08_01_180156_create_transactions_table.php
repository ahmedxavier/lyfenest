<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('code');

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')
            ->on('users')
            ->references('id')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedInteger('product_id')->nullable();
            $table->foreign('product_id')
            ->on('products')
            ->references('id')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('qty');
            $table->integer('subtotal');

            $table->string('name');
            $table->string('address');
            $table->integer('portal_code');
            $table->enum('ekspedisi',['TIKI', 'JNE', 'POS']);
            $table->enum('status', ['0', '1']);

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
        Schema::dropIfExists('transactions');
    }
}
