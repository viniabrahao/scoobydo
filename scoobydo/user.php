<html>
	<head>
		<title>Usuario</title>
	</head>
	<body>
<form action="finaliza.php" method="POST">
			<label>
				Entre com o modelo do carro
				<br>
			<input type="text" class="" name="carro"></label>
			<br>
			<label>
				Entre com a placa do carro
				<br>
			<input type="text" class="" name="placa"></label>
			<br>
			<label>
			Entre com o tamanho do carro
			<br>
			<select name="tamanho[]">
			<option value="pequeno">Pequeno</option>
			<option value="medio">Médio</option>
			<option value="grande">Grande</option>
			</select>
			</label>
			<br>
			<label>
				Selecione o serviço
				<br>
			<select name="lavagens[]">
			<option value="simples">Lavagem Simples</option>
			<option value="cera">Lavagem Com cera</option>
			<option value="Brancol">Lavagem Brancol</option>
			<option value="sm">Lavagem Simples + motor</option>
			<option value="cm">Lavagem Com cera + motor</option>
			<option value="ducha">Ducha</option>
			<option value="ced">Convenio Empresas Duchas</option>
			<option value="ces">Convenio Empresas Simples</option>
			</select>
			</label>
			<br>
		
			<button type="submit" class="btn-default">Confirmar</button>
		</form>

	</body>
</html>