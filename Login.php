
<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="CSS/EstiloLogin.css">
</head>
<!------ Include the above in your HEAD tag ---------->
<body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
        <img src="media/logo.png" width="100" height="50" style="margin-left: 8px; border-radius:5px;"  class="d-inline-block align-top" alt="">

        <!-- Login Form -->
        <form action="http://localhost:8090/phpprod/tecnolta/coletorexpedicao/loginexec.php" method="post">
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="Usuario">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Senha">
          <input type="submit" class="fadeIn fourth" value="Entrar">
        </form>
        <!-- <form action="http://localhost:8090/phpprod/tecnolta/coletorexpedicao/login.php">
          <input type="submit" class="fadeIn fourth" value="Inicio">
        </form> -->

        <!-- Remind Passowrd -->
        <div id="formFooter">
          <!-- <a class="underlineHover" href="#">Esqueceu?</a> -->
        </div>

      </div>
    </div>
    
  </body>
</html>