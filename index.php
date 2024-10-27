<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Formulário </title>

  <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css">
</head>
<body>
  <div class="container mt-5">
    <form action="./executa.php" method="POST">
      <div class="form-group">
        <label>O que você achou do site https://www.significados.com.br/cores-2/</label><br>
        <div class="row">
          <div class="col-sm-2">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="avaliacao" value="Muito bom" id="check1">
                  <label class="form-check-label" for="avaliacao">Muito bom</label>
              </div>
          </div>
          <div class="col-sm-2">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="avaliacao" value="Bom" id="check2">
                  <label class="form-check-label" for="avaliacao">Bom</label>
              </div>
          </div>
          <div class="col-sm-2">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="avaliacao" value="Regular" id="check3">
                  <label class="form-check-label" for="avaliacao">Regular</label>
              </div>
          </div>
          <div class="col-sm-2">
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="avaliacao" value="Ruim" id="check4">
                  <label class="form-check-label" for="avaliacao">Ruim</label>
              </div>
          </div>
        </div>
      </div>

      <div class="form-group">
          <label for="select">Qual cor você mais gostou?</label>
          <select class="form-control" id="cor" name="cor">
              <option>Azul</option>
              <option>Verde</option>
              <option>Amarelo</option>
              <option>Roxo</option>
              <option>Rosa</option>
              <option>Vermelho</option>
              <option>Laranja</option>
              <option>Marrom</option>
              <option>Cinza</option>
              <option>Branco</option>
              <option>Preto</option>
          </select>
      </div>

      <div class="form-group">
          <label for="textBox">Digite seus comentários no espaço abaixo</label>
          <textarea class="form-control" id="comentarios" name="comentarios" rows="3" placeholder="Digite seus comentários"></textarea>
      </div>

      <div class="form-group row">
          <label for="nome" class="col-sm-1 col-form-label">Nome</label>
          <div class="col-sm-11">
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
          </div>
      </div>
      <div class="form-group row">
          <label for="email" class="col-sm-1 col-form-label">Email</label>
          <div class="col-sm-11">
              <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
          </div>
      </div>
      <div class="form-group row">
          <label for="fone" class="col-sm-1 col-form-label">Fone</label>
          <div class="col-sm-11">
              <input type="text" class="form-control" id="fone" name="fone" placeholder="Digite seu telefone">
          </div>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="checkbox" id="novidadesEmail" name="novidadesEmail">
          <label class="form-check-label" for="novidadesEmail">Quero receber as novidades do site por e-mail</label>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Enviar</button>
    </form>
  </div>
</body>
</html>