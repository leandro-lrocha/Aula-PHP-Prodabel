<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<link rel="stylesheet" href="style.css">
			<meta charset="utf-8">
			<meta name="keywords" content="HTML, CSS, Javascript">
			<meta name="description" content="Venda de peças, serviços e veículos antigos até década de 90">
			<meta name="author" content="Bruno Soares - b.soaresmineiro@gmail.com">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>s</title>
	</head>
	<body>
            <?php

            	//Desenvolvido por Bruno - Aluno Prodabel.
			
				use PHPMailer\PHPMailer\PHPMailer;
				use PHPMailer\Exception;

				require '../PHPMailer/src/Exception.php'; 
				require '../PHPMailer/src/PHPMailer.php'; 
				require '../PHPMailer/src/SMTP.php'; 
			
								
				$meuEmail='b.soaremineiro@gmail.com';
				$remetente = $email;

				$mail=new PHPMailer;
				$mail->isSMTP();
				$mail->Host='smtp.gmail.com';
				$mail->SMTPAuth=true;
				$mail->Username='b.soaresmineiro#gmail.com';
				$mail->Password='testesenha';
				$mail->SMTPSecure='tls';
				$mail->Port=587;
				$mail->setFrom('b.soaresmineiro#gmail.com','Contato');
				$mail->addAdress($meuEmail);
				$mail->isHMTL(true);
				$mail->Subject='Contato de cliente';
								
				$textoCorpo='<h3>Nome do Cliente: '.$nome.'<h3>';
				$textoCorpo.='<p>Email: '.utf8_decode($email).'<p>';
				$textoCorpo.='<p>Telefone: '.$telefone.'<p>';
				$textoCorpo.='<p>Mensagem: '.utf8_decode($mensagem).'<p>';
				$mail->Body=$textoCorpo;

				if(!$email->send()){
					echo 'Erro ao enviar o email. Favor Verificar! '.$mail->ErrorInfo;
				}else{
					echo 'Email enviado com sucesso!';
				}

			//parei aqui
			//https://www.youtube.com/watch?v=Af0X_pEt7AY&t=272s
	

			?>
	</body>
</html>