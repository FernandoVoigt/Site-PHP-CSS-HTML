<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
       
    <div class="conteudo3">
    	<center>
        <h1>Login</h1></br>
        <form method="post" action="login.php">
            <input type="text" placeholder="Usuário" name="usuario"></br></br>
            <input type="password" placeholder="Senha" name="senha">
            </br></br>
            <input type="submit" id="botao" value="Enviar"> 
        </form>
		</center>

<center>
<?php

if (count($_POST))
{

if(trim($_POST['usuario']) == '')
{
	echo "</br><font color='#990000'> Campo usuário é obrigatório! </font>";
}
elseif(trim($_POST['senha']) == '')
{
	echo "</br><font color='#990000'> Campo senha é obrigatório! </font>";
}

else
{
	include ('funclogin.php');	
	$user= $_POST['usuario'];
	$senha= $_POST['senha'];
		
	if(login($user, $senha))
	{
		header('location: sistema.php');
	}
	else
	{
		echo "</br><font color='#990000'> Login Inválido! </font>";
	}
}
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
