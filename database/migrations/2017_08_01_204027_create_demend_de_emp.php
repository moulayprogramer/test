<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemendDeEmp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demend_de_emps', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('wadifa');
		    $table->integer('argent'); // الاجر المدفوع
            $table->string('wilaya');
			$table->string('daira');
			$table->string('baladia');
			$table->integer('num_t'); // رقم الهاتف
			$table->string('adr'); // العنوان
			$table->string('fatra');  // فترات العمل
			$table->string('motatalabat'); 
			$table->integer('nombre_emp');
			$table->string('info')->nullable(); // معلومات اضافية
			$table->timestamps();
			$table->integer('id_user')->unsigned();
			$table->foreign('id_user')->references('id')->on('users');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demend_de_emps');
    }
}
