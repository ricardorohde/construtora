<?php
	$contato = "nathalonghi@gmail.com";
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = "Teste";
        $telefone = $_POST['telefone'];
	$mensagem = $_POST['mensagem'];
        
        $msgCerta = "<strong> MENSAGEM DE CONTATO </strong> <br><br>";
        $msgCerta .= "<strong>Nome: </strong>". $nome;
        $msgCerta .= "<br><strong>E:-Mail: </strong>".$email;
	$msgCerta .= "<br><strong>Assunto: </strong>". $assunto;
        $msgCerta .= "<br><strong>Telefone: </strong>". $telefone;
        $msgCerta .= "<br><strong>Mensagem: </strong><br>". $mensagem;
                
        $cabecalho =  "Content-Type:text/html; charset=UTF-8\n";
        $cabecalho .= "From: $nome <$email>";
        
        function verMail($email){
	    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
	    if (preg_match($er, $email)){
	    	return true;
	    } 
	    else {
	    	return false;
	    }
	}
	

	if(verMail($email)) {
		mail ($contato, $assunto, $msgCerta, $cabecalho) or die ("Ocorreram alguns erros, mensagem não enviada");
		$java = '<script type="text/javascript">
		alert("Mensagem enviada com sucesso.");
		</script>';
		print $java;
            
//            echo $msgCerta;
	}
	else {
		echo "nao deu";
	}
?>
<head> <meta http-equiv="refresh" content="2;URL=../contato.php"> </head> 