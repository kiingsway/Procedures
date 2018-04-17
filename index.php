<!DOCTYPE html>
<html>
<head>
	<!-- Ícones Material Design Google -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">
    <title>Procedures</title>
</head>
<body background="images/bg.jpg">
	<?php require_once('padroes/navs.php') ?>

	<div class="container">

		<?php
		//<body background="images/bg.jpg">
		$h5 = array('Office 365','Adobe Connect','Impressoras','Windows');
		$caminhoImage = "images/";
		$cardImage = array(array('addUserOffice365.jpg','excluirUserOffice365.jpg','autoAnswerOutlook.jpg','encaminharOutlook.jpg'),
			array('conectarAdobeConnect.jpg', 'AdobeConnectMobile.jpg','noimage.jpg'),
			array('noimage.jpg','noimage.jpg'),
			array('noimage.jpg'));
		$cardTitle = array(array('Adicionar usuário no Office 365','Remover usuário do Office 365','Resposta automática do Outlook','Encaminhar e-mails automaticamente'),
			array('Conhecendo o Adobe Connect', 'Adobe Connect Mobile','Agendar sessão no Adobe Connect'),
			array('Instalando impressoras','Gerar relatório de impressão'),
			array('Instalar imagem Windows 10'));
		$cardText = array(array('Ao adicionar um usuário no Office 365, ele poderá ser usado para fazer login em computadores.
			Também será usado para seu e-mail, licença do Office, caso atribuída e etc.',
			'Você terá 30 dias para restaurar o usuário deletado. Nesse processo de inativar por 30 dias
			para depois excluir, ele ficará sem acesso ao login na máquina, e-mail, Sharepoint, Onedrive, licenças do Office, etc.',
			'Vai entrar de férias? Não tem problema! Avise quem estiver te contatando que você estará descansando
			nas praias de Fortaleza!','Em adicional as respostas automáticas, encaminhe automaticamente todos os e-mails que serão enviados para ti.'),
		array('Conectando e conhecendo a ferramenta','Conhecendo o app disponivel na Play Store e App Store','Agendar para dar prioridade no sinal de audio e vídeo'),
		array('Como instalar as devidas impressoras e configurar senha para impressao','Páginas impressas, coloridas ou não, cópias e muito mais neste relatório'),
		array('Como restaurar um Windows inserindo nossa imagem do Windows 10'));		
		

		foreach ($h5 as $keyi => $value) {
			echo '<div class="row section" id="div'.strtolower(str_replace(' ', '', $value)).'">';
			echo '<h5 style="color:white">'.$value.'</h5>';
			foreach ($cardImage[$keyi] as $keyj => $value) {
				echo '<div class="col 14 m6 s12">';
				echo '<div class="card hoverable">';
				echo '<div class="card-image waves-effect">';
				echo '<img src="'.$caminhoImage.$cardImage[$keyi][$keyj].'">';
				echo '<span class="card-title">'.$cardTitle[$keyi][$keyj].'</span>';
				echo '</div>';
				echo '<div class="card-content"><p style="font-size:12px">'.$cardText[$keyi][$keyj].'</p></div>';
				echo '</div>';
				echo '</div>';
			}
			echo '</div>';
		}

		?>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
</body>
</html>