

var array=[];


$('#tipo_inquerito').on('change',function(){
    
    if($('#tipo_inquerito').val()=="IP ONLINE"){
        var ipApfd=$('#inqueritosPoliciais1').attr('ip')
        var orgao=$('#inqueritosPoliciais1').attr('orgao')
        var cidade=$('#inqueritosPoliciais1').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao) 
        
    }
    if($('#tipo_inquerito').val()=="BO"){
        var ipApfd=$('#inqueritosPoliciais4').attr('ip')
        var orgao=$('#inqueritosPoliciais4').attr('orgao')
        var cidade=$('#inqueritosPoliciais4').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao) 
      }
    if($('#tipo_inquerito').val()=="IP/APFD"){
        var ipApfd=$('#inqueritosPoliciais').attr('ip')
        var orgao=$('#inqueritosPoliciais').attr('orgao')
        var cidade=$('#inqueritosPoliciais').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao) 
        
         
      }
    if($('#tipo_inquerito').val()=="BOC"){
        var ipApfd=$('#inqueritosPoliciais3').attr('ip')
        var orgao=$('#inqueritosPoliciais3').attr('orgao')
        var cidade=$('#inqueritosPoliciais3').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao)  
      }
    if($('#tipo_inquerito').val()=="IP/PM"){
      
        var ipApfd=$('#inqueritosPoliciais2').attr('ip')
        
        var orgao=$('#inqueritosPoliciais2').attr('orgao')
        var cidade=$('#inqueritosPoliciais2').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao) 
      }
      if($('#tipo_inquerito').val()=="AI"){
        var ipApfd=$('#inqueritosPoliciais5').attr('ip')
        var orgao=$('#inqueritosPoliciais5').attr('orgao')
        var cidade=$('#inqueritosPoliciais5').attr('cidade')
        $('#cidadeSpan').text(cidade)
        $('#cidadeIn').val(cidade) 
        $('#inquerito').val(ipApfd)
        $('#orgaoSpan').text(orgao)
        $('#orgaoIn').val(orgao) 
      }
})
$('#incluir').on('click',function(){
   $i=0 
   var nome=$('#nome_vitima').val()
    var perfil=$('#perfil_envolvido').val()
    if(nome==''){
        alert("preencha o campo nome do envolvido")
    }
    if(perfil==''){
        alert("preencha o campo perfil")
    }
    if(nome!='' && perfil!=''){
        alert("nome adicionado")
        
        
        
        array.push(nome)
        array.push(perfil)
        
        console.log(array)
        $('#nome_vitima').val('')
        $('#perfil_envolvido').val('')
        

        $('#nomeIncluir').val(array)
        
        //alert(`Incluidos: ${array}`)
    }
   
    
})
$(document).ready(function() {
    $('#tabela').on('click',function(){
    console.log('ok deu certo')
})
    
  });


  if($('#laudoGDL').val() != null){
    
    $('#solicitante_id').attr('disabled', true)
    $('#cidade').attr('disabled', true)
    $('#eficiencia').prop('checked',true)
    $('#nome_vitima').attr('disabled',true)
    $('#perfil_envolvido').attr('disabled',true)
    $('#indiciado').attr('disabled',true)
  
}

//busca cep em desenvolvimento
$('#buttoncep').on('click',function(e){
     e.preventDefault();
    let cep=$('#cep').val();
    
    let url=`http://viacep.com.br/ws/${cep}/json/`;
    fetch(url).then(function(response){
        
        response.json().then(function(data){
            
            var ler=data.localidade
            
            console.log(data)
            $('#complemento').text(data.complemento)
            $('#rua').text(data.logradouro)
            $('#bairro').val(data.bairro)
            $('#cidade').val(ler); // Select the option with a value of '1'
            $('#cidade').trigger('change');
            
            
          
            

            
        })
    })  
    

});
$(document).ready(function() {
  $('input[type="radio"]').click(function() {
    if ($(this).is(':checked')) {
      $(this).css('transform', 'scale(1.7)');
    } else {
      $(this).css('transform', 'scale(0.1)');
    }
  });
});





