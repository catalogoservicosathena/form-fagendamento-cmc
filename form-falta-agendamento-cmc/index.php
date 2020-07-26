<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Fagenda-CMC</title>
		<link rel="stylesheet" href="css/estilos.css"/>	
	</head>
	<body>
	<p class="logot">
	<img src="https://secureservercdn.net/45.40.152.13/g8g.8af.myftpupload.com/wp-content/themes/athena/_assets/images/logo.png"  />
	</p>	
		<div class="container">
			<div class="wrapper animated bounceInLeft">
				<div class="contact">
					<h3 class="contact-us">CMC falta de Agenda - Call Center Integra </h3>
						<?php
						if(isset($_SESSION['msg'])){
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						}
						?>

						<form id="contactForm" method="POST" action="processa.php">
							<!--CPF do Beneficiário-->
							<p class="cpf-field">
							<label>CPF (Responsável Financeiro): <span>*</span></label>
							<input type="text" name="cpf" placeholder="Digite o CPF" required><br><br>
							</p>

							<!--Matrícula do Beneficiário-->
							<p class="matricula-field">
							<label>Matrícula do Beneficiário <span>*</span></label>
							<input type="text" name="matricula" placeholder="Digite a Matrícula" required><br><br>
							</p>

							<!--Cidade-->
							<p class="cidade-field">
							<label>Cidade </label>
							<input type="text" name="cidade" placeholder="Ex : Teresina-PI"><br><br>
							</p>

							<!--Especialidade-->
							<p class="especialidade-field">
							<label>Especialidade </label>
							<input type="text" name="especialidade" placeholder="Ex : Cardiologia"><br><br>
							</p>

							
							

							<p class="submit-button">
							<input type="submit" value="Cadastrar" background: #49b0e7;>
							</p>
						</form>
					
				</div>
			</div>
		</div>
	</body>
</html>