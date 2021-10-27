<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            $table->string('uf',2);
            $table->string('email',150);
        });

    }

    
    //Assim como as migrations são feitas da mais antiga para a mais atual, o rollback é feito do mais atual para mais antiga
    //sendo feitas uma a uma, utilizando o comando php artisan migrate:rollback, ou php artisan migrate:rollback --step=(?)
    //sendo (?) o numero de migrations que se deseja dar rollback.
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fornecedores', function(Blueprint $table){
            $table->dropColumn(['uf','email']);
        });
    }
}
