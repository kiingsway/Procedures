<?php
		$h5 = array('Office 365','Adobe Connect','Impressoras','Outros aplicativos','Windows');
		$caminhoImage = "images/";
		$cardImage = array(array('addUserOffice365.jpg','excluirUserOffice365.jpg','autoAnswerOutlook.jpg','encaminharOutlook.jpg'),
					array('conectarAdobeConnect.jpg', 'AdobeConnectMobile.jpg','noimage.jpg'),
					array('noimage.jpg','noimage.jpg'),
					array('pimaco.jpg'),
					array('noimage.jpg','noimage.jpg'));
		$cardTitle = array(array('Adicionar usuário no Office 365','Remover usuário do Office 365','Resposta automática do Outlook','Encaminhar e-mails automaticamente'),
					array('Conhecendo o Adobe Connect', 'Adobe Connect Mobile','Agendar sessão no Adobe Connect'),
					array('Instalando impressoras','Gerar relatório de impressão'),
					array('Assistente Pimaco'),
					array('Instalar imagem Windows 10','Atalhos úteis'));
		$cardText = array(array('Ao adicionar um usuário no Office 365, ele poderá ser usado para fazer login em computadores.
		Também será usado para seu e-mail, licença do Office, caso atribuída e etc.',
		'Você terá 30 dias para restaurar o usuário deletado. Nesse processo de inativar por 30 dias
		para depois excluir, ele ficará sem acesso ao login na máquina, e-mail, Sharepoint, Onedrive, licenças do Office, etc.',
		'Vai entrar de férias? Não tem problema! Avise quem estiver te contatando que você estará descansando
		nas praias de Fortaleza!',
		'Em adicional as respostas automáticas, encaminhe automaticamente todos os e-mails que serão enviados para ti.'),
		array('Conectando e conhecendo a ferramenta','Conhecendo o app disponivel na Play Store e App Store','Agendar para dar prioridade no sinal de audio e vídeo'),
		array('Como instalar as devidas impressoras e configurar senha para impressao','Saiba gerar um relatório de impressão contendo páginas impressas monocromáticas e coloridas, nível da tinta, etc.'),
		array('Aprenda a utilizar esse software para as etiquetas da BIC Pimaco'),
		array('Como restaurar um Windows inserindo a imagem do Windows 10','Atalhos que facilitará sua vida'));
		
	foreach ($h5 as $keyi => $valuei) {
		echo '<div class="row section" id="div'.strtolower(str_replace(' ', '', $valuei)).'">';
		echo '<h5 style="color:white">'.$valuei.'</h5>';
	foreach ($cardImage[$keyi] as $keyj => $valuej) {
		echo '<div class="col s12 m6">';
		echo '<div class="card hoverable">';
		echo '<div class="card-image">';
		echo '<img src="'.$caminhoImage.$cardImage[$keyi][$keyj].'">';
		echo '<span class="card-title">'.$cardTitle[$keyi][$keyj].'</span>';
		echo '<a href="'.str_replace(' ', '', $valuei)."/".str_replace('.jpg', '', $valuej).'.php" class="btn-floating halfway-fab waves-effect waves-light indigo lighten-1"><i class="material-icons">exit_to_app</i></a>';
		echo '</div>';
		echo '<div class="card-content"><p>'.$cardText[$keyi][$keyj].'</p></div>';
		echo '</div>';
		echo '</div>';
		}
	echo '</div>';
	}
?>