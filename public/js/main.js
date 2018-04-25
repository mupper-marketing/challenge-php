
  $(document).ready(function(){

  //Inicialização Serviços Materialize
  $('.sidenav').sidenav();
  M.updateTextFields();
  $('select').formSelect();
  $('.datepicker').datepicker({
          format: 'dd/mm/yyyy',          
  });

  //Máscaras Inputs
  $('#cpf').inputmask("999.999.999-99");
  $('.telefone').inputmask("(99) 9999[9]-9999");
  $('#crv').inputmask("99999999999");
  $('#cep').inputmask("99999-999");
  });

  //API Correios
  $(document).ready(function() {

             function limpa_formulário_cep() {
                 // Limpa valores do formulário de cep.
                 $("#rua").val("");
                 $("#bairro").val("");
                 $("#cidade").val("");
                 $("#uf").val("");
             }

             //Quando o campo cep perde o foco.
             $("#cep").blur(function() {

                 //Nova variável "cep" somente com dígitos.
                 var cep = $(this).val().replace(/\D/g, '');

                 //Verifica se campo cep possui valor informado.
                 if (cep != "") {

                     //Expressão regular para validar o CEP.
                     var validacep = /^[0-9]{8}$/;

                     //Valida o formato do CEP.
                     if(validacep.test(cep)) {

                         //Preenche os campos com "..." enquanto consulta webservice.
                         $("#rua").val("...");
                         $("#bairro").val("...");
                         $("#cidade").val("...");
                         $("#uf").val("...");

                         //Consulta o webservice viacep.com.br/
                         $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                             if (!("erro" in dados)) {
                                 //Atualiza os campos com os valores da consulta.
                                 $("#rua").val(dados.logradouro);
                                 $("#bairro").val(dados.bairro);
                                 $("#cidade").val(dados.localidade);
                                 $("#uf").val(dados.uf);
                             } //end if.
                             else {
                                 //CEP pesquisado não foi encontrado.
                                 limpa_formulário_cep();
                                 alert("CEP não encontrado.");
                             }
                         });
                     } //end if.
                     else {
                         //cep é inválido.
                         limpa_formulário_cep();
                         alert("Formato de CEP inválido.");
                     }
                 } //end if.
                 else {
                     //cep sem valor, limpa formulário.
                     limpa_formulário_cep();
                 }
             });
         });
