
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>
 
<body>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<form action="consultar.php" method="POST">

<div class="form-group">
  <div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sesión</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
                    <div class="login-space">
                        <div class="login">
                            <div class="group"> <label for="user" class="label">Usuario</label> <input id="user" name ="usuario"type="text" class="input" placeholder="ingrese usuario"> </div>
                            <div class="group"> <label for="pass" class="label">contraseña</label> <input id="pass" name ="contraseña"type="password" class="input" data-type="password" placeholder="ingrese contraseña"> </div>
                            <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Mantenerme conectado</label> </div>
                            <div class="group"> <input type="submit" class="button" name ="consultar"value="Iniciar sesión"> </div>
                                 
          
                            <div class="hr"></div>
                            <div class="foot"> <a href="#">¿Has olvidado tu contraseña?</a> </div>
                        </div>
                        <div class="sign-up-form">
                        <div class="group"> <label for="user" class="label">id</label> <input id="id" type="text"name="id" class="input" placeholder="id"> </div>
                            <div class="group"> <label for="user" class="label">nombre</label> <input id="user"name="user" type="text" class="input" placeholder="Crea tu nombre de usuario"> </div>
                            <div class="group"> <label for="pass" class="label">contraseña</label> <input id="pass"name="pass" type="password" class="input" data-type="password" placeholder="Crea tu contraseña"> </div>
                            <div class="group"> <label for="pass" class="label">confirmar contraseña</label> <input id="pass" type="password" class="input" data-type="password" placeholder="confirma tu contraseña""> </div>
                            
                            <div class="group"> <input type="submit" name ="guardaruser"class="button" value="iniciar seccion"> </div>
                            <div class="hr"></div>
                            <div class="foot"> <label for="tab-1">Already Member?</label> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     </div>
   </div>
</div>

</form>
</body>
</html>
 
