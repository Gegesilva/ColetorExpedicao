<?php
     header('Content-type: text/html; charset=utf-8');
     include_once("conexaoSQL.php");

	/* VALIDA USUARIO */
	session_start();
	$login = $_SESSION["login"];
	$senha = $_SESSION["password"];
	$pedido = $_POST['pedido'];

		$sql="SELECT 
		TB01066_USUARIO Usuario,
		TB01066_SENHA Senha,
    TB01066_CHAT permChat
	   FROM 
		TB01066
	   WHERE 
	   TB01066_USUARIO = '$login'
	   AND TB01066_SENHA = '$senha'";
	$stmt= sqlsrv_query($conn,$sql);
	  while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
		$usuario = $row['Usuario'];
		$senha = $row['Senha'];
    $permChat = $row['permChat'];
	  }
	  if($usuario != NULL){
  
	  }else { 
      echo"<script>window.alert('É necessário fazer login!')</script>";
      echo "<script>location.href='http://localhost:8090/phpprod/tecnolta/coletorexpedicao/login.php'</script>"; 
	  } 

?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

      <title>DATABIT</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">
      <!-- Bootstrap core CSS -->
      <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="cover.css" rel="stylesheet">
      <link rel="stylesheet" href="CSS/styleExibicao.css">
    </head>

  <body class="text-center">

    <div class="card" style="background-color: white; width: auto; margin-left: 2%; margin-right: 2%; margin-top: 2%; border-radius: 30px;">
     <form action="http://localhost:8090/phpprod/tecnolta/coletorexpedicao/inicio.php"><button class="btn-voltar">VOLTAR</button></form>
      <img src="media/logo.png" width="100" height="50" style="margin-left: 8px; border-radius:5px;"  class="d-inline-block align-top" alt="">
        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column container-button">
          <header class="masthead mb-auto">
            <div class="inner">
              
              <h2 class="masthead-brand">MOTORISTAS</h2>
            </div>
          </header>

          <div style="height: 30px; line-height: 10px; font-size: 8px; display: flex;">&nbsp;</div>
            <main role="main" class="inner cover">
              <div class='divBtn'>
                <!-- <td>
                  <a href='http://localhost:8090/phpprod/tecnolta/coletorexpedicao/inicio.php'><input style='margin-bottom: 20px;' id='deletar' name='nomemoto'  class='btn btn-outline-primary' value='VOLTAR'/></a>
                </td>  -->
                   <?php
                      $sql1 = "
                          SELECT 
                            TB01077_CODIGO Cod,
                            CAST(TB01077_NOME AS VARCHAR(16)) Nome
                          FROM TB01077
                          WHERE TB01077_SITUACAO = 'A'
                          ";

                      $stmt1 = sqlsrv_query($conn, $sql1);

                      while($row1 = sqlsrv_fetch_array($stmt1, SQLSRV_FETCH_ASSOC)){  
                        $tabela .="
                            

                              <form class='form-btn' action='http://localhost:8090/phpprod/tecnolta/coletorexpedicao/bipMoto.php' method='post'>
                                <input style='margin-bottom: 20px;  font-weight: bold;' onclick='return pergunta1();' type='submit' id='nome' name='nome'  class='btn btn-outline-info' value='$row1[Nome]'/>
                                <input type='hidden' name='codmoto' id='codmoto' value='$row1[Cod]'/>
                              </form>
                        ";
                      }
                      print($tabela);
                   ?>
              </div>
            </main>
          </div>
      </div>
   </body>
</html>
