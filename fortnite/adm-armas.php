<!DOCTYPE html>
<html lang='pt-br'>

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>#</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script>
      function senha(){
        var pass=prompt("Digite a chave");

        if (pass!=null){
          window.location.href = "http://fortnite.hol.es/fortnite/adm-armas.php"+"?key="+pass;
        }
      }
    </script>
  </head>

  <body>

    <?php
      if(isset($_GET['key'])){

        if(md5($_GET['key']) == md5("FELIPE")){

          ?>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 style="text-align: center" class="display-4">Administração</h1>
              </div>
            </div>
            <center>
            <div class="container">
              <div class="card" style="width: 18rem;">
                <div class="card-header">Armas fortnite</div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#adicionarDado">Adicionar dado</button></li>
                  <li class="list-group-item"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Editar dados</button></li>
                  <li class="list-group-item"><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Cofre</button></li>
                </ul>
              </div>
            </div>
          </center>

          <!-- ADICIONAR DADOS -->
          <div class="modal fade" id="adicionarDado" tabindex="-1" role="dialog" aria-labelledby="adicionarDado" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="adicionarDado">Adicionar dado</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="adicionarArma">

                    <div class="form-group">
                      <label for="tipoArma">Tipo</label>
                      <select class="form-control" id="tipoArma">
                        <option value="RIFLE">RIFLE</option>
                        <option value="SNIPER">SNIPER</option>
                        <option value="SUB-METRALHADORA">SUB-METRALHADORA</option>
                        <option value="METRALHADORA">METRALHADORA</option>
                        <option value="ESCOPETA">ESCOPETA</option>
                        <option value="ESCOPETA">EXPLOSIVA</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="nomeArma">Nome</label>
                      <input class="form-control" id="nomeArma" type="text"/>
                    </div>

                    <div class="form-group">
                      <label for="raridadeArma">Raridade</label>
                      <select class="form-control" id="raridadeArma">
                        <option value="1">COMUM</option>
                        <option value="2">INCOMUM</option>
                        <option value="3">RARO</option>
                        <option value="4">ÉPICO</option>
                        <option value="5">LENDÁRIO</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="dpsArma">DPS</label>
                      <input class="form-control" id="dpsArma" type="number" min="0"/>
                      <small id="dpsArmaHelp" class="form-text text-muted">Obs: Use '.'(ponto) ao invés de ','(vírgula);</small>
                    </div>

                    <div class="form-group">
                      <label for="danoArma">Dano</label>
                      <input class="form-control" id="danoArma" type="number" min="0"/>
                      <small id="danoArma" class="form-text text-muted">Obs: Use '.'(ponto) ao invés de ','(vírgula);</small>
                    </div>

                    <div class="form-group">
                      <label for="cdanoArma">Dano em construção</label>
                      <input class="form-control" id="cdanoArma" type="number" min="0"/>
                      <small id="cdanoArma" class="form-text text-muted">Obs: Use '.'(ponto) ao invés de ','(vírgula);</small>
                    </div>

                    <div class="form-group">
                      <label for="firerateArma">FIRE RATE</label>
                      <input class="form-control" id="firerateArma" type="number" min="0"/>
                      <small id="firerateArma" class="form-text text-muted">Obs: Use '.'(ponto) ao invés de ','(vírgula);</small>
                    </div>

                    <div class="form-group">
                      <label for="penteArma">Pente</label>
                      <input class="form-control" id="penteArma" type="number" min="0"/>
                    </div>

                    <div class="form-group">
                      <label for="tcarregamentoArma">Tempo de carregamento</label>
                      <input class="form-control" id="tcarregamentoArma" type="number" min="0"/>
                    </div>

                    <div class="form-group">
                      <label for="urlArma">URL Imagem da arma</label>
                      <input class="form-control" id="urlArma" type="text"/>
                      <small id="urlArma" class="form-text text-muted">Obs: de preferência, utilize imagem com dimensão #x#</small>
                    </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
              </form>
              </div>
            </div>
          </div> <!-- #ADICIONAR DADOS -->

          <script>
            $('#adicionarArma').submit(function(){

              $.post("functions.php?var=1", success: function(x){
                if(x==1){
                  alert("DEU CERTO");
                }
              });
              return false;
            });

          </script>

          <?php

        } else {

          echo "<script>window.onload = senha;</script>";

        }
      } else {
        echo "<script>window.onload = senha;</script>";
      }
    ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
