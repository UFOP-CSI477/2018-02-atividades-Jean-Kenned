function validarCampoTempo(campo,alerta){
  console.log("validarCampoTempo" + campo + " " + alerta);

  //validar validarCampo
  var valor = parseInt($(campo).val());

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

function validarCampoCompetidor(campo,alerta){

  //validar validarCampo
  var valor = $(campo).val();

  //valor 1 inválido
  if(valor == ""){
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
  console.log("TRUE COMPETIDOR");
  return true;

}



$(document).ready(function(){
  console.log("Documento carregado.");
  var tamTabela = 0;
  var indicesValidos = new Array();

  $("#btnApurar").click(function(){
    $("td").remove();
    tamTabela = 0;
    indicesValidos = new Array();
    var flag = true;
    if($("#competidor1").val()!=""||$("#tempo1").val()!=""){
      if(validarCampoCompetidor("#competidor1","#alertaV1")&&validarCampoTempo("#tempo1","#alertaV1")){
        console.log("Campos Validados 1 ");
        indicesValidos[tamTabela]=1;
        tamTabela++;
      }else{
        flag = false;
      }
    }

    if($("#competidor2").val()!=""||$("#tempo2").val()!=""){
      if(validarCampoCompetidor("#competidor2","#alertaV2")&&validarCampoTempo("#tempo2","#alertaV2")){
        console.log("Campos Validados 2 ");
        indicesValidos[tamTabela]=2;
        tamTabela++;
      }else{
        flag = false;
      }
    }

    if($("#competidor3").val()!=""||$("#tempo3").val()!=""){
      if(validarCampoCompetidor("#competidor3","#alertaV3")&&validarCampoTempo("#tempo3","#alertaV3")){
        console.log("Campos Validados 3 ");
        indicesValidos[tamTabela]=3;
        tamTabela++;
      }else{
        flag = false;
      }
    }


    if($("#competidor4").val()!=""||$("#tempo4").val()!=""){
      if(validarCampoCompetidor("#competidor4","#alertaV4")&&validarCampoTempo("#tempo4","#alertaV4")){
        console.log("Campos Validados 4 ");
        indicesValidos[tamTabela]=4;
        tamTabela++;
      }else{
        flag = false;
      }
    }

    if($("#competidor5").val()!=""||$("#tempo5").val()!=""){
      if(validarCampoCompetidor("#competidor5","#alertaV5")&&validarCampoTempo("#tempo5","#alertaV5")){
        console.log("Campos Validados 5 ");
        indicesValidos[tamTabela]=5;
        tamTabela++;
      }else{
        flag = false;
      }
    }

    if($("#competidor6").val()!=""||$("#tempo6").val()!=""){
      if(validarCampoCompetidor("#competidor6","#alertaV6")&&validarCampoTempo("#tempo6","#alertaV6")){
        console.log("Campos Validados 6 ");
        indicesValidos[tamTabela]=6;
        tamTabela++;
      }else{
        flag = false;
      }
    }

    if(flag){
      montaTabela(indicesValidos);
    }

  });

  function montaTabela(indicesValidos){
    var tempos = new Array(tamTabela);
    var i;
    for (i = 0; i < tamTabela; i++) {
      tempos[i] = parseInt($("#tempo".concat(indicesValidos[i])).val());
    //  console.log("tempos:".concat($("#tempo".concat(indicesValidos[i])).val()));

    }

   //ordena os tempos e os indices
    var j,k;
    if(tamTabela>1){
      for(j=0; j < tamTabela; j++){
        for(k=j+1; k < tamTabela; k++){
          if(tempos[k]<tempos[j]){
            var temp;
            temp = tempos[k];
            tempos[k] = tempos[j];
            tempos[j] = temp;

            var temp2;
            temp2 = indicesValidos[k];
            indicesValidos[k] = indicesValidos[j];
            indicesValidos[j] = temp2;
          }

        }
      }
    }

    var y;
    var flag = true;

    // for(y=0; y < tamTabela; y++){
    //   console.log("indice:".concat(indicesValidos[y]));
    //   if(y==0){
    //     adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"Vencedor(a)!");
    //   }else if(flag){
    //     if(parseInt($("#tempo"+ indicesValidos[y-1]).val())==parseInt($("#tempo"+ indicesValidos[y]).val())){
    //       adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"Vencedor(a)!");
    //     }else{
    //       adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"-");
    //       flag = false;
    //     }
    //   }else{
    //       adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"-");
    //
    //   }
    // }

      ///
      var cont=0;
      for(y=0; y < tamTabela; y++){
        if(y==0){
            adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"Vencedor(a)!");
            cont++;
        }else if(flag){
          if(parseInt($("#tempo"+ indicesValidos[y-1]).val())==parseInt($("#tempo"+ indicesValidos[y]).val())){
                adicionaLinha(cont,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"Vencedor(a)!");
           }else{
                 adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"-");
                 flag = false;
                 cont = y;
           }
        }else{

          if(parseInt($("#tempo"+ indicesValidos[y-1]).val())==parseInt($("#tempo"+ indicesValidos[y]).val())){
                adicionaLinha(cont+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"-");
           }else{
                 adicionaLinha(y+1,indicesValidos[y],$("#competidor"+ indicesValidos[y]).val(),$("#tempo"+ indicesValidos[y]).val(),"-");
                 cont = y;
           }
        }
      }

    ///

    console.log("saiu do loop");
    $("#tabela").removeClass("invisible");

  }

  function adicionaLinha(posicao,largada,competidor,tempo,resultado){
     var newRow = $("<tr>");
     var cols = "";

     cols += "<td>"+posicao+"</td>";
     cols += "<td>"+largada+"</td>";
     cols += "<td>"+competidor+"</td>";
     cols += "<td>"+tempo+"</td>";
     cols += "<td>"+resultado+"</td>";

     newRow.append(cols);
     $("#tabela").append(newRow);


  }


});
