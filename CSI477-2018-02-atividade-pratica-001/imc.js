function validarCampo(campo,alerta){
  console.log("validarCampo" + campo + " " + alerta);

  //validar validarCampo
  var valor = parseFloat($(campo).val());

  //valor 1 inválido
  if(isNaN(valor)){
    //exibe alerta
    $(alerta).slideDown();
    //adiciona CSS de erro
    $(campo).addClass("is-invalid");
    //noLabel
    $(campo).val("");
    //Definir o foco para o input
    $(campo).focus();
    //Abandonar a execucao
    return false;

  }

  //valor 1 - correto

  //Oculta o alerta
  $(alerta).hide();
  //Remover as classes de erro
  $(campo).removeClass("is-invalid");
  //adicionar clases de validade
  $(campo).addClass("is-valid");
  return true;

}

$(document).ready(function(){
  console.log("Documento carregado.");
  $("#btnCalcular").click(function(){
    if(validarCampo("#peso","#alertaV1")&&validarCampo("#altura","#alertaV2")){
      console.log("campos Validados");
      var peso = parseFloat($("#peso").val());
      var altura = parseFloat($("#altura").val());
      var imc = peso / Math.pow(altura,2);
      var classificacao;
      if(imc<18.5){
        classificacao = "Subnutrição";
      }else if(imc<25){
        classificacao = "Peso Saudável";
      }else if(imc<30){
        classificacao = "Sobrepeso";
      }else if(imc<35){
        classificacao = "Obesidade grau 1";
      }else if(imc<40){
        classificacao = "Obesidade grau 2";
      }else{
        classificacao = "Obesidade grau 3";
      }

      var peso_min_saudavel = (18.5 * Math.pow(altura,2)).toFixed(2);
      var peso_max_saudavel = (24.99 * Math.pow(altura,2)).toFixed(2);

      $("#panelBodyImc").text("IMC: "+imc.toFixed(2));
      $("#panelBodyClassificacao").text("Classificação: "+classificacao);
      $("#intervalo").text(peso_min_saudavel + " kg e " + peso_max_saudavel + " kg");
      $("#panel").removeClass("invisible");
    }


  });




});
