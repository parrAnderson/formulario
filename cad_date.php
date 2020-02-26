<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>formulario com Calendario- 2020</title>
   
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href="css/bootstrap-datepicker.css" rel="stylesheet"/>
		<script src="js/bootstrap-datepicker.min.js"></script> 
		<script src="js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
		
		
	</head>
	<body>

	<!--Formulario-->
<div id="formularioCadastral">
<h3><p> Cadastro de Clientes<p></h3>


	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress"></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="av, rua, travess.">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">UF</label>
      <select id="inputState" class="form-control">
        <option selected>escolha...</option>
		<option>São paulo</option>
		<option>Rio de janeiro</option>
		<option>Santa Catarina</option>
		<option>Rio grande do sul</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCep">Cep</label>
      <input type="text" class="form-control" id="inputCep">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<br>
<!--calendario-->

		<div class="container-fluid">
			<div id="cadastrar"><h1>agende uma data</h1>
			<form class="form-horizontal">
			<div class="form-group col-md-6">
					<label class="col-sm-2 control-label">Data</label>
					<div class="input-group date">
							<input type="text" class="form-control" id="exemplo" >
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
						</div>

					</div>
				  </div>
				  
				<div class="form-group">
					<div class="col-md-6">
						<button type="submit" class="btn btn-primary">agendar</button>
					</div>
				</div>
			</form>
		</div>
		<br>

		<div class="alert alert-info" role="alert">
  <h4 class="alert-heading">Pronto !</h4>
  <p> apos agendar a sua data é só aguardar o envio da confirmação no seu email</p>
  <hr>
  <p class="mb-0">Caso deseja trocar o email cadastrado <a href="">clique aqui</p>
</div>



<style>
	#exemplo {background-color: whitesmoke;}
	.form-horizontal {background-color: whitesmoke;}
	#cadastrar {background-color: whitesmoke;}
	#formularioCadastral {text-align: center;}
	.footer{color: black;}
</style>

		<script type="text/javascript">
			$('#exemplo').datepicker({	
				format: "dd/mm/yyyy",	
				language: "pt-BR",
				startDate: '+0d',
			});
		</script>


	</body>

<br><br>
	<div class="footer">
		<article>Horario de atendimento:
		das 08:00 as 17:00 - seg a sex.</article></footer>
	<footer><h5>
		Encontre nos<br>
		Rua Alfredo Camargo, 120, cep: 05896-080 <br>
		Sao Paulo-SP</h5>
	</footer>
	
</html>



