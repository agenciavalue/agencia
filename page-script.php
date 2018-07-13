<?php 
$loop = new WP_Query( array( 'post_type' => 'dados', 'p' => 4 ) );
while ( $loop->have_posts() ){ $loop->the_post();
	$emailsender = get_field('e-mail_principal');
	$email = get_field('e-mail_de_copia');
	$nome = get_field('nome');
	$texto = get_field('texto_de_reposta');
}

$quebra_linha = "\n";
$remetente = $nome;
$emaildestinatario = $_REQUEST['email'];
$comcopia = "";
$comcopiaoculta = "";
$assunto = "Contato via Site";
$assuntoresposta = "Contato SUI";



while ( $loop->have_posts() ){ $loop->the_post();
	$message = "<html><head><meta charset='UTF-8'/></head><body>";
	$message .= "<div style='margin:auto; width:100%; max-width:700px;'>";
	$message .= "<img src='". get_field('topo_contato') ."' style='width:100%;'/>";
	$message .= "<p>Contato pelo formulário do site:</p>";
	$message .= "<table style='padding:15px; font-family: arial, sans-serif;' cellspacing='5px'>";
	$message .= "<tr><td style='text-align:center; background:#eee; padding:5px;'><b>Nome: </b></td><td>".$_REQUEST['nome']."</td></tr>";
	$message .= "<tr><td style='text-align:center; background:#eee; padding:5px;'><b>E-mail: </b></td><td>".$_REQUEST['email']."</td></tr>";
	$message .= "<tr><td style='text-align:center; background:#eee; padding:5px;'><b>Telefone: </b></td><td>".$_REQUEST['telefone']."</td></tr>";
	$message .= "<tr><td style='text-align:center; background:#eee; padding:5px;'><b>Mensagem: </b></td><td>".$_REQUEST['mensagem']."</td></tr>";
	$message .= "</table>";
	$message .= "<img src='". get_field('rodape_contato') ."' style='width:100%;'/>";
	$message .= "</div>";
	$message .= "</body></html>";

	$resposta = "<html><head><meta charset='UTF-8'/></head><body>";
	$resposta .= "<div style='margin:auto; width:100%; max-width:700px;'>";
	$resposta .= "<img src='". get_field('topo_contato') ."' style='width:100%;'/>";
	$resposta .= "<table style='padding:15px; font-family: arial, sans-serif;' cellspacing='5px'>";
	$resposta .= "<tr><td><p>".$texto."</p></td></tr>";
	$resposta .= "</table>";
	$resposta .= "<img src='". get_field('rodape_contato') ."' style='width:100%;'/>";
	$resposta .= "</div>";
	$resposta .= "</body></html>";
}

$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=iso-8859-1".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: ".$emailsender.$quebra_linha;
$headers .= "Cc: ".$comcopia.$quebra_linha;
$headers .= "Bcc: ".$comcopiaoculta.$quebra_linha;
$headers .= "Reply-To: ".$emailsender.$quebra_linha;

if(mail($emaildestinatario, $assuntoresposta, $resposta, $headers, "-r". $emailsender) && mail($email, $assunto, $message, $headers, "-r". $emailsender)){
	echo "<script type=\"text/javascript\">location.href='http://meusite.com.br/mensagem/?tituloK=".$_REQUEST['tituloK']."&mensagemok=".$_REQUEST['mensagemok']."&linkok=".$_REQUEST['linkok']."';</script>\n";
}
else{
	echo "<script type=\"text/javascript\">location.href='http://meusite.com.br/mensagem/?tituloK=Ops...&mensagemok=Ocorreu um problema ao tentar enviar a sua mensagem, tente envia-la mais uma vez.&linkok=javascript:history.go(-1)';</script>\n";
}
?>
