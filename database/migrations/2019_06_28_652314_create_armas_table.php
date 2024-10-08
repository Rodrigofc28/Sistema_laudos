<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_arma', 30);
            $table->integer('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->integer('calibre_id')->unsigned()->nullable();
            $table->foreign('calibre_id')->references('id')->on('calibres');
            $table->integer('origem_id')->unsigned()->nullable();
            //$table->foreign('origem_id')->references('id')->on('origens');
            $table->longText('dito_oficio')->nullable();
            $table->integer('laudo_id')->unsigned();
            $table->foreign('laudo_id')->references('id')->on('laudos')->onDelete('cascade');
            $table->string('tipo_serie', 40)->nullable();
            $table->string('num_serie', 30)->nullable();
            $table->longText('tambor_rebate', 15)->nullable();
            $table->integer('capacidade_tambor')->nullable();
            $table->string('sistema_percussao', 50)->nullable();
            $table->string('tipo_acabamento', 40)->nullable();
            $table->string('estado_geral', 25)->nullable();
            $table->string('comprimento_total', 10)->nullable();
            $table->string('comprimento_cano', 10)->nullable();
            $table->string('altura', 10)->nullable();
            $table->integer('quantidade_raias')->nullable();
            $table->string('sentido_raias', 30)->nullable();
            $table->string('num_lacre', 20)->nullable();
            $table->string('cabo', 40)->nullable();
            $table->string('funcionamento', 25)->nullable();
            $table->string('sistema_funcionamento', 30)->nullable();
            $table->string('num_canos', 15)->nullable();
            $table->string('disposicao_canos', 40)->nullable();
            $table->string('teclas_gatilho', 25)->nullable();
            $table->string('sistema_carregamento', 40)->nullable();
            $table->string('sistema_engatilhamento', 40)->nullable();
            $table->string('coronha_fuste', 40)->nullable();
            $table->string('chave_abertura', 70)->nullable();
            $table->string('tipo_carregador', 40)->nullable();
            $table->string('calibre_real', 40)->nullable();
            $table->string('bandoleira', 70)->nullable();
            $table->string('cao', 40)->nullable();
            $table->string('placas_laterais', 50)->nullable();
            $table->string('carregador', 40)->nullable();
            $table->integer('capacidade_carregador')->nullable();
            $table->string('trava_ferrolho', 40)->nullable();
            $table->string('trava_gatilho', 40)->nullable();
            $table->string('trava_seguranca', 40)->nullable();
            $table->string('retem_carregador', 40)->nullable();
            $table->string('carregamento', 40)->nullable();
            $table->string('numeracao_montagem', 50)->nullable();
            $table->string('modelo', 40)->nullable()->default('NÃO APARENTE');;
            $table->string('numero_patrimonio',20)->nullable();
            $table->string('diametro_cano')->nullable();
            $table->string('sistema_inflamacao',50)->nullable();
            $table->string('telha',30)->nullable();
            $table->string('coronha',30)->nullable();
            $table->string('tipo_tambor',80)->nullable();
            $table->string('sistema_disparo',80)->nullable();
            $table->boolean('salva_cadastro')->nullable();
            $table->string('quantidade_canos')->nullable();
            
            $table->string('rep_materialColetado',30)->nullable();
            $table->string('origem_coletaPerito',50)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('armas');
    }
}
