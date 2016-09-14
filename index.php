<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Sistema de Registros</title>
<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
   <style type="text/css">
			body{
				background-color: #044F84;
				height: 100%;
			}
			.logo{
				text-align: center;
			}
			#login{
				border:1px solid #fff;
				background-color: #fff;
				box-shadow: 2px 2px 8px #313030;
				border-radius:0px 40px 0px 40px;

				position: absolute;
				margin:auto;
				left: 0;
				right: 0;
				top: 20vh;
				bottom:;
				overflow: auto;
			}
			.btnEntrar{
				text-align: center;
				margin-bottom: 30px;
			}
   </style>
</head>
<body>
	<div class="row ">
		<div class="col s10 m5 l3" id="login">
			<div class="row logo l4">
				<figure><img src="img/anpr100x100.png"></figure>
			</div>
			<form method="post" action="sesion.php">
				<div class="row">
	        <div class="input-field col s12 m11 l11">
	          <i class="material-icons prefix">account_circle</i>
	          <input id="icon_prefix" name="usuario" type="text" class="validate"></input>
	          <label for="icon_prefix">Recreador</label>
	        </div>
	      </div>
	      <div class="row">
	        <div class="input-field col s12 m11 l11">
	          <i class="material-icons prefix">lock</i>
	          <input id="password" name="contrasena" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	      </div>
	      <div class="btnEntrar">
	      <button class="btn waves-effect waves-light" type="submit" name="action">LOGIN</button>
	      </div>
			</form>
		</div>
	</div>

<!--Import jQuery before materialize.js-->
			
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>
