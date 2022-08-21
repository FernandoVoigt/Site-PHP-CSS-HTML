<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contato - Mensagem</title>
<link rel="stylesheet" type="text/css" href="styles.css"/>
<link rel="shortcut icon" href="favicon(1).ico" type="image/x-icon"/>
</head>

<body>

<div id="site"> 

    <div id="banner"> 
      <embed width="990" height="235"src="banner.swf"/>
    </div>  
     
 <div id='cssmenu'>
        <ul>
           <li class='active'><a href='index.html'><span>Home</span></a></li>
           <li class='has-sub'><a href='prod.php?page=artes_marciais'><span>Artes Marciais</span></a></li>
           <li class='has-sub'><a href='prod.php?page=aventura'><span>Aventura</span></a></li>
           <li class='has-sub'><a href='prod.php?page=praia'><span>Praia</span></a></li>
           <li class='active'><a href='prod.php?page=training'><span>Training</span></a></li>
           <li class='active'><a href='contato.html'><span>Contato</span></a></li>
           <li class='last'><a href='sistema.php'><span>Login</span></a></li>
        </ul>
        </div>

			<div class="conteudo">
            	<center><h1></h1></center></br></br>             
                <p align="right"><a href="contato.html"><u><h3> Voltar </h3></u></a></p></br>
                
				<?php
					
					$link = mysql_connect('localhost','root','') or die (mysql_error()); 
						mysql_select_db('loja');
												
						$nome=$_POST['nome'];
						$email=$_POST['email'];
						$assunto=$_POST['assunto'];
						$texto=$_POST['texto']; 
																
						$query="insert into mensagens values(null,'".$nome."','".$email."','".$assunto."','".$texto."')";
						
						$consulta = mysql_query($query);
						
						if($consulta)
						{
							echo "<center><h1>Mensagem enviada com sucesso!</h1></br>
									Obrigado pela sua colaboração.</center>";
						}
						else
						{
							echo "<center><h1>Erro no envio!</h1></br>
									Certifique-se de ter preenchido todos os campos corretamente.</center>";
						}
						
				?>
                </center>
                
			</div>
    	 <div class="rodape">
            <font color="#FFFFFF"> <center>
            Copyright © 2013 &nbsp;&nbsp; | &nbsp;&nbsp; Sweat Sports® </br>
            Fone (047) 3062-2105 - (047) 3062- 4688 </center> </font>
        </div>
</div>    
</body>
</html>