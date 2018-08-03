<?php
  include "cfg.php";

  $validacao = array(
    'tipoArma'     => FILTER_SANITIZE_ENCODED,
    'nomeArma'     => FILTER_SANITIZE_MAGIC_QUOTES,
    'raridadeArma'     => FILTER_SANITIZE_NUMBER_INT,
    'dpsArma'     => FILTER_SANITIZE_ENCODED,
    'danoArma'     => FILTER_SANITIZE_ENCODED,
    'cdanoArma'     => FILTER_SANITIZE_ENCODED,
    'firerateArma' => FILTER_SANITIZE_ENCODED,
    'penteArma' => FILTER_SANITIZE_ENCODED,
    'tcarregamentoArma' => FILTER_SANITIZE_ENCODED,
    'urlArma' => FILTER_SANITIZE_URL,
    'statArma' => FILTER_SANITIZE_NUMBER_INT,
  );

  if(isset($_POST)){
    $x = filter_input_array(INPUT_POST, $validacao);

    if(isset($_GET) && $_GET['var']==1){
      //ADICIONA
      $tipoArma = $x['tipoArma'];
      $nomeArma = $x['nomeArma'];
      $raridadeArma = $x['raridadeArma'];
      $dpsArma = $x['dpsArma'];
      $danoArma = $x['danoArma'];
      $cdanoArma = $x['cdanoArma'];
      $firerateArma = $x['firerateArma'];
      $penteArma= $x['penteArma'];
      $tcarregamentoArma = $x['tcarregamentoArma'];
      $urlArma = $x['urlArma'];
      $statArma = $x['statArma'];

      mysqli_query($db, "INSERT INTO Armas(tipo, arma, raridade, dps, dano, cdano, firerate, pente, tcarregamento, imagem, stat)
                         VALUES ('{$tipoArma}','{$nomeArma}','{$raridadeArma}','{$dpsArma}','{$danoArma}','{$cdanoArma}','{$firerateArma}','{$penteArma}','{$tcarregamentoArma}','{$urlArma}', '{$statArma}')");
      echo "#001";
    }
  }

?>
