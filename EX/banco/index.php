<html>
<head>

<title> Operação Bancaria </title>

</head>
<body>
	<form method="POST" action="calc.php">
	
		<label>Selecione a operacao:</label>
		<select name="opera" id="opera">
			<option value="sacar"> sacar </option>
			<option value="depositar"> depositar </option>
			<option value="saldo"> ver saldo </option>
		</select>
		<br><br>
		
		<label>digite o seu saldo</label>
		<input type="number" name="saldo" ><br><br>
		
		<label>digite o valor que deseja sacar</label>
		<input type="number" name="sacar" ><br><br>	
		
		
		<label>digite o valor que deseja depositar</label>
		<input type="number" name="deposito" ><br><br>
		
		<input type="submit" value="Resultado" name="">
	</form>
</body>
</html>