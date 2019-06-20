$(function()
{
    /*
    Máscara
    var $cpf = $("#cpf");
        $cpf.mask('000.000.000-00', {reverse: true});
        */
    
    // CAPTURA O SUBMIT
$("#newUserForm").on("submit", function(){
   
   var cpf = $("#cpf").val().replace(/[.|-]/g,''); // eliminando ponto e hífen para validação
   
   if( !validaCPF(cpf) ){
      alert("CPF inválido!");
      return false
   }
});
// EVENTO KEYUP PARA A MÁSCARA
$("#cpf").on("keyup", function(){
   formataCPF('###.###.###-##', this);
});

// FUNÇÃO MÁSCARA
function formataCPF(m,d){
   var i = d.value.length;
   if(i < 14){
      var s = m.substring(0,1);
      var t = m.substring(i);
      if (t.substring(0,1) != s){
         d.value += t.substring(0,1);
      }

      if(i >= 11){
         var c = $("#cpf").val();
         c = c.replace( /\D/g , "");
         c = c.replace( /(\d{3})(\d)/ , "$1.$2");
         c = c.replace( /(\d{3})(\d)/ , "$1.$2");
         c = c.replace( /(\d{3})(\d{1,2})$/ , "$1-$2");
         $("#cpf").val(c);
      }
   }
}

// FUNÇÃO PARA VALIDAR CPF
// CRÉDITO: http://www.geradordecpf.org/funcao-javascript-validar-cpf.html
function validaCPF(cpf){
   var numeros, digitos, soma, i, resultado, digitos_iguais;
   digitos_iguais = 1;
   if(cpf.length < 11) return false;
   for(i = 0; i < cpf.length - 1; i++)
      if(cpf.charAt(i) != cpf.charAt(i + 1)){
         digitos_iguais = 0;
         break;
      }
   if(!digitos_iguais){
      numeros = cpf.substring(0,9);
      digitos = cpf.substring(9);
      soma = 0;
      for(i = 10; i > 1; i--)
         soma += numeros.charAt(10 - i) * i;
         resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
         if(resultado != digitos.charAt(0)) return false;
         numeros = cpf.substring(0,10);
         soma = 0;
         for(i = 11; i > 1; i--)
            soma += numeros.charAt(11 - i) * i;
            resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
            if(resultado != digitos.charAt(1)) return false;
      return true;
   }else return false;
}
   
});
//Nao permite data menor que a data atual
$('#dataMarcacao').on('focusout', function(){  
  var dataMarcacao = new Date($('#dataMarcacao').val());
  var dataAtual = new Date();
  
  if(dataMarcacao.getTime() < dataAtual){
    $(this).css({color: 'red'});
    // mostre alguma mensagem
    $(this).focus(); // Volta o foco para o segundo input
  }else {
      alert(dataMarcacao);
  }  
});
