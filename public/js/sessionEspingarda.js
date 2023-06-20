/* Armazena os dados LocalStorage */
/* Session */
var marca=$("#marca")
/* captura os dados gdl *****************************************************/
if($('#marca_gdl').attr('marca')!=null){
    sessionStorage.setItem('marca_espingarda',$('#marca_gdl').attr('marca'));
    /* pegando o text do elemento e comparando */
    $('#marca option:selected').text(sessionStorage.getItem('marca_espingarda'))
}
else{
marca.on('change',function(){
    
    /* pegando o value e comparado */
    sessionStorage.setItem('marca_espingarda',marca.val());
})
marca.val(sessionStorage.getItem('marca_espingarda'))

}
marca.trigger('change');
/* Fabricacao ***************************************************************/

$('#pais').val(sessionStorage.getItem('marca_espingarda'));
$('#pais').trigger('change');

/*Modelo*********************************************************************/
var modelo = $("#modelo")
modelo.on('input',function(){
    sessionStorage.setItem('modelo_espingarda',modelo.val());
})
modelo.val(sessionStorage.getItem('modelo_espingarda'))
/* Status Serie */
var statusSerie = $("#tipo_serie")
if($('#estado_serie_gdl').attr('status_serie')!=null){
    sessionStorage.setItem('statusSerie_espingarda',$('#estado_serie_gdl').attr('status_serie'));
}
else{
statusSerie.on('change',function(){
    console.log($("#tipo_serie").val())
    sessionStorage.setItem('statusSerie_espingarda',statusSerie.val());
})}
statusSerie.val(sessionStorage.getItem('statusSerie_espingarda'))
statusSerie.trigger('change')
/* Num Serie *************************************************************/
var numSerie = $("#num_serie")

if($('#num_serie_gdl').attr('num_serie')!=null){
    sessionStorage.setItem('numSerie_espingarda',$('#num_serie_gdl').attr('num_serie'));
}
else{
numSerie.on('input',function(){
    sessionStorage.setItem('numSerie_espingarda',numSerie.val());
})
}
numSerie.val(sessionStorage.getItem('numSerie_espingarda'))
/* Num Patrimonio **********************************************************************/
var numPatrimonio = $("#numPatrimonio")
if($('#patrimonio_gdl').attr('patrimonio')){
    sessionStorage.setItem('numPatrimonio_espingarda',$('#patrimonio_gdl').attr('patrimonio'));
}else{
numPatrimonio.on('input',function(){
    sessionStorage.setItem('numPatrimonio_espingarda',numPatrimonio.val());
})}
numPatrimonio.val(sessionStorage.getItem('numPatrimonio_espingarda'))
/* Num Canos */
var num_canos = $("#num_canos")
num_canos.on('change',function(){
    
    sessionStorage.setItem('num_canos_espingarda',num_canos.val());
})
num_canos.val(sessionStorage.getItem('num_canos_espingarda'))
num_canos.trigger('change')
/* Sistema de Carregamento */
var calibre = $("#calibre")

calibre.on('change',function(){
    
    sessionStorage.setItem('calibre_espingarda',calibre.val());
})
calibre.val(sessionStorage.getItem('calibre_espingarda'))
calibre.trigger('change')
/* Regime de Tiro */
var sistema_funcionamento = $("#sistema_funcionamento")
sistema_funcionamento.on('change',function(){
    
    sessionStorage.setItem('sistema_funcionamento_espingarda',sistema_funcionamento.val());
})
sistema_funcionamento.val(sessionStorage.getItem('sistema_funcionamento_espingarda'))
sistema_funcionamento.trigger('change')

/* Tipo Carregador */
var tipo_carregador = $("#tipo_carregador")
tipo_carregador.on('change',function(){
    
    sessionStorage.setItem('tipo_carregador_espingarda',tipo_carregador.val());
})
tipo_carregador.val(sessionStorage.getItem('tipo_carregador_espingarda'))
tipo_carregador.trigger('change')
/* Capacidade*************************************************************** */
var capacidade_carregador = $("#capacidade_carregador")

if($('#capacidade_gdl').attr('capacidade')!=null){
    sessionStorage.setItem('capacidade_carregador_espingarda',$('#capacidade_gdl').attr('capacidade'));
}else{
capacidade_carregador.on('input',function(){
    sessionStorage.setItem('capacidade_carregador_espingarda',capacidade_carregador.val());
})}
capacidade_carregador.val(sessionStorage.getItem('capacidade_carregador_espingarda'))

/* Sistema de Percussão */
var sistema_percussao = $("#sistema_percussao")
sistema_percussao.on('change',function(){
    
    sessionStorage.setItem('sistema_percussao_espingarda',sistema_percussao.val());
})
sistema_percussao.val(sessionStorage.getItem('sistema_percussao_espingarda'))
sistema_percussao.trigger('change')
/* Sistema de Funcionamento */
var sistema_disparo = $("#sistema_disparo")
sistema_disparo.on('change',function(){
    
    sessionStorage.setItem('sistema_disparo_espingarda',sistema_disparo.val());
})
sistema_disparo.val(sessionStorage.getItem('sistema_disparo_espingarda'))
sistema_disparo.trigger('change')
/* Acabamento **************************************************************************/
var tipo_acabamento = $("#tipo_acabamento")
if($('#acabamento_gdl').attr('acabamento')!=null){
    sessionStorage.setItem('tipo_acabamento_espingarda',$('#acabamento_gdl').attr('acabamento'));
}else{
tipo_acabamento.on('change',function(){
    
    sessionStorage.setItem('tipo_acabamento_espingarda',tipo_acabamento.val());
})}
tipo_acabamento.val(sessionStorage.getItem('tipo_acabamento_espingarda'))
tipo_acabamento.trigger('change')
/* Acabamento Outra Opção */
if(tipo_acabamento.val()=="outros"){
    var acabamento_outra_opcao = $("#acabamento_outra_opcao")
    acabamento_outra_opcao.on('input',function(){
        sessionStorage.setItem('acabamento_outra_opcao_espingarda',acabamento_outra_opcao.val());
    })
    acabamento_outra_opcao.attr('disabled',false)
    acabamento_outra_opcao.val(sessionStorage.getItem('acabamento_outra_opcao_espingarda'))
}

/* Cabo*/
var cabo = $("#cabo")
cabo.on('change',function(){
    
    sessionStorage.setItem('cabo_espingarda',cabo.val());
})
cabo.val(sessionStorage.getItem('cabo_espingarda'))
cabo.trigger('change')

/* Cabo Outra Opção */
if(cabo.val()=="outros"){
    var cabo_outra_opcao = $("#cabo_outra_opcao")
    cabo_outra_opcao.on('input',function(){
        sessionStorage.setItem('cabo_outra_opcao_espingarda',cabo_outra_opcao.val());
    })
    cabo_outra_opcao.attr('disabled',false)
    cabo_outra_opcao.val(sessionStorage.getItem('cabo_outra_opcao_espingarda'))
}

/* Comprimento Total */
var comprimento_total = $("#comprimento_total")
comprimento_total.on('input',function(){
    sessionStorage.setItem('comprimento_total_espingarda',comprimento_total.val());
})
comprimento_total.val(sessionStorage.getItem('comprimento_total_espingarda'))

/* Altura */
var altura = $("#altura")
altura.on('input',function(){
    sessionStorage.setItem('altura_espingarda',altura.val());
})
altura.val(sessionStorage.getItem('altura_espingarda'))

/* Comprimento do Cano */
var comprimento_cano = $("#comprimento_cano")
comprimento_cano.on('input',function(){
    sessionStorage.setItem('comprimento_cano_espingarda',comprimento_cano.val());
})
comprimento_cano.val(sessionStorage.getItem('comprimento_cano_espingarda'))
/* Quantidade de Raias */
var quantidade_raias = $("#quantidade_raias")
quantidade_raias.on('input',function(){
    sessionStorage.setItem('quantidade_raias_espingarda',quantidade_raias.val());
})
quantidade_raias.val(sessionStorage.getItem('quantidade_raias_espingarda'))

/* Sentido das Raias */
var sentido_raias = $("#sentido_raias")
sentido_raias.on('change',function(){
    
    sessionStorage.setItem('sentido_raias_espingarda',sentido_raias.val());
})
sentido_raias.val(sessionStorage.getItem('sentido_raias_espingarda'))
sentido_raias.trigger('change')

/* Estado Geral ******************************************************************/
var estado_geral = $("#estado_geral")
console.log($('#estado_geral_gdl').attr('estado_geral'))
/* Dados vindo gdl se for diferente de null o dado e capturado*/
if($('#estado_geral_gdl').attr('estado_geral')!=null){
    sessionStorage.setItem('estado_geral_espingarda',$('#estado_geral_gdl').attr('estado_geral'));
}else{
    estado_geral.on('change',function(){
    
    sessionStorage.setItem('estado_geral_espingarda',estado_geral.val());
}) }
estado_geral.val(sessionStorage.getItem('estado_geral_espingarda'))
estado_geral.trigger('change')

/* Funcionamento */
var funcionamento = $("#funcionamento")
funcionamento.on('change',function(){
    
    sessionStorage.setItem('funcionamento_espingarda',funcionamento.val());
})
funcionamento.val(sessionStorage.getItem('funcionamento_espingarda'))
funcionamento.trigger('change')

/* N° Exame de Coleta */
var rep_materialColetado = $("#rep_materialColetado")
rep_materialColetado.on('input',function(){
    sessionStorage.setItem('rep_materialColetado_espingarda',rep_materialColetado.val());
})
rep_materialColetado.val(sessionStorage.getItem('rep_materialColetado_espingarda'))
/* N° Lacre de Entrada *****************************************************************/
var numLacreEntrada = $("#numLacreEntrada")

/* lacre vindo do gdl */
/* Se for diferente de null a rep captura a rep vindo gdl e armazena na sessão */
console.log($('#lacre_entrada_gdl').attr('lacre'))
if($('#lacre_entrada_gdl').attr('lacre')!=null){
sessionStorage.setItem('numLacreEntrada_espingarda',$('#lacre_entrada_gdl').attr('lacre')); 
}else{
numLacreEntrada.on('input',function(){
    sessionStorage.setItem('numLacreEntrada_espingarda',numLacreEntrada.val());
})    
    
}

numLacreEntrada.val(sessionStorage.getItem('numLacreEntrada_espingarda'))

/* N° Lacre de Saida **********************************************************************/
var lacreSaida = $("#lacreSaida")
if($('#lacre_saida_gdl').attr('lacre_saida')!=null){
    sessionStorage.setItem('lacreSaida_espingarda',$('#lacre_saida_gdl').attr('lacre_saida'));
}else{
lacreSaida.on('input',function(){
    sessionStorage.setItem('lacreSaida_espingarda',lacreSaida.val());
})}
lacreSaida.val(sessionStorage.getItem('lacreSaida_espingarda'))

/* N° Montagem */
var numeracao_montagem = $("#numeracao_montagem")
numeracao_montagem.on('input',function(){
    sessionStorage.setItem('numeracao_montagem_espingarda',numeracao_montagem.val());
})
numeracao_montagem.val(sessionStorage.getItem('numeracao_montagem_espingarda'))

/*Telha*/
var telha = $("#telha")
telha.on('input',function(){
    sessionStorage.setItem('telha_espingarda',telha.val());
})
telha.val(sessionStorage.getItem('telha_espingarda'))

/* Coronha e Fuste */
var coronha_fuste = $("#coronha_fuste")
coronha_fuste.on('change',function(){
    
    sessionStorage.setItem('coronha_fuste_espingarda',coronha_fuste.val());
})
coronha_fuste.val(sessionStorage.getItem('coronha_fuste_espingarda'))
coronha_fuste.trigger('change')

/* Coronha  */
var coronha = $("#coronha")
coronha.on('change',function(){
    
    sessionStorage.setItem('coronha_espingarda',coronha.val());
})
coronha.val(sessionStorage.getItem('coronha_espingarda'))
coronha.trigger('change')

/* Tambor  */
var tambor_rebate = $("#tambor_rebate")
tambor_rebate.on('change',function(){
    
    sessionStorage.setItem('tambor_rebate_espingarda',tambor_rebate.val());
})
tambor_rebate.val(sessionStorage.getItem('tambor_rebate_espingarda'))
tambor_rebate.trigger('change')

/* Tipo Tambor  */
var tipo_tambor = $("#tipo_tambor")
tipo_tambor.on('change',function(){
    
    sessionStorage.setItem('tipo_tambor_espingarda',tipo_tambor.val());
})
tipo_tambor.val(sessionStorage.getItem('tipo_tambor_espingarda'))
tipo_tambor.trigger('change')
/* Dito oficio */
var dito_oficio = $("#dito_oficio")
dito_oficio.on('input',function(){
    sessionStorage.setItem('dito_oficio_espingarda',dito_oficio.val());
})
dito_oficio.val(sessionStorage.getItem('dito_oficio_espingarda'))
/* end local */