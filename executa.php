<?php 
  $palavrasPositivas = ["gostei", "legal", "bom", "interessante", "feliz"];
  $avaliacaoHTML = ISSET($_POST["avaliacao"]) ? "<p> <b> Avaliação: </b> " . $_POST["avaliacao"]  . "</p>" : "<p style='color: red;'> Nenhuma avaliação selecionada </p>";
  $corHTML = ISSET($_POST["cor"]) ? "<p> <b> Cor: </b> " . $_POST["cor"]  . "</p>" : "<p style='color: red;'> Nenhuma cor selecionada </p>";
  $comentariosHTML = ISSET($_POST["comentarios"]) && trim($_POST["comentarios"]) ? "<p> <b> Comentários: </b>" . $_POST["comentarios"]  . "</p>" : "<p style='color: red;'> Nenhum comentário digitado </p>";
  $emailHTML = ISSET($_POST["email"]) && trim($_POST["email"]) != "" ? "<p> <b> E-mail: </b>" . $_POST["email"] . "</p>" : "<p style='color: red;'> E-mail não digitado </p>";
  $nomeHTML = ISSET($_POST["nome"]) && trim($_POST["nome"]) != "" ? "<p> <b> Nome: </b>" . $_POST["nome"] . "</p>" : "<p style='color: red;'> Nome não digitado </p>";

  $provedor = ISSET(explode('@', $emailHTML)[1]) ? "<p> <b> Seu provedor de e-mail é: </b>" . explode('@', $emailHTML)[1] . "</p>" : null;
  $novidadesEmail = ISSET($_POST["novidadesEmail"]) ? "<p> Enviaremos para você semanalmente todas as novidade </p>" : false; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Resultado </title>

  <link rel="stylesheet" href="./css/resultado.css">
</head>
<body>
  <div id="resultado-container">
    <?php 
      echo($avaliacaoHTML);
      echo($corHTML);
      echo($comentariosHTML);
      echo($emailHTML);
      echo($nomeHTML . "<br> <hr> <br>");

      if($provedor) 
        echo($provedor);

      if($novidadesEmail)
        echo($novidadesEmail);

      foreach ($palavrasPositivas as $palavra) {
        if(strpos(strtolower($_POST["comentarios"]), strtolower($palavra)) !== false) {
          echo("Ficamos felizes que você deixou observações positivas sobre nosso site");
          break; 
        }
      }

      if(strtolower($_POST["cor"]) == "preto")
        echo("<script> alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site : www. https://cvv.org.br/'); </script>");
    ?>
  </div>
</body>
</html>