<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->date('date_de_N');
			$table->string('etat_f'); // الحالة العائلية
            $table->integer('num_t'); // رقم الهاتف
			$table->string('adr'); // العنوان
			$table->string('pls')->nullable(); // اتجاه الخدمة العسكرية
			$table->string('niveau')->nullable(); // مستوى الدراسة
			$table->string('certafica')->nullable(); // الشهادات المتحصل عليها
			$table->string('diplome')->nullable();
			$table->string('entreprise')->nullable(); // الشركات 
			$table->string('type_trav')->nullable();// نوع العمل 
			$table->date('date_i')->nullable();
			$table->date('date_f')->nullable();
			$table->string('info')->nullable();
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
        Schema::dropIfExists('cvs');
    }
}
