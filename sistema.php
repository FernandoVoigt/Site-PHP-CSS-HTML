
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Administração</title>
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
        
        <div id='cssmenu2'>
            <ul>
               <li class='active'><a href='sistema.php'><span>Home</span></a></li>
               <li class='has-sub'><a><span>Cadastrar</span></a>
               	<ul>
                	<li class='has-sub'><a href='cadprod.php'><span>Produto</span></a>
                    <li class='has-sub'><a href='cadmarca.php'><span>Marca</span></a>
                </ul>
               </li>
               <li class='has-sub'><a><span>Editar</span></a>
               <ul>
                	<li class='has-sub'><a href='editprod.php'><span>Produto</span></a>
                    <li class='has-sub'><a href='editmarca.php'><span>Marca</span></a>
                </ul>
                </li>
               <li class='has-sub last'><a><span>Deletar</span></a>
               <ul>
                	<li class='has-sub'><a href='delprod.php'><span>Produto</span></a>
                    <li class='has-sub'><a href='delmarca.php'><span>Marca</span></a>
                </ul>
               </li>
               <li class='has-sub last'><a href='funclogout.php'><span>Sair</span></a></li>
            </ul>
        </div>
       
    <div class="conteudo">
    
    	<div id="sistema">
    
    	<?php

			include ('funclogin.php');
			
			login('','') or header("location: login.php");
			
			$usuario= $_SESSION['usuario'];
			
			echo "<h1>Seja Bem Vindo Usuário " . $usuario . "</h1></br></br></br>";
			
			?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Este é o espaço perfeito para o administrador do sistema, onde o mesmo poderá controlar o seu site, cadastrando, editando e deletando marcas e produtos de seu sistema.</br></br></br>
			
			
            <table width="500">
            	<tr>
                	<td><h2>Mensagens</h2></br></br></td>
                </tr>
			
			<?php
			
				$link = mysql_connect('localhost','root','') or die (mysql_error()); 
						mysql_select_db('loja');
																
						$query="select * from mensagens;";
						
						$consulta = mysql_query($query);
						
						while($retorno = mysql_fetch_array($consulta))
						{
							echo '<tr><td><font face="tahoma"><b>Nome: </b>'.$retorno['nomerem'].'</font></br></td></tr>';
							echo '<tr><td><font face="tahoma"><b>E-mail: </b>'.$retorno['email'].'</font></br></td></tr>';
							echo '<tr><td><font face="tahoma"><b>Assunto: </b>'.$retorno['assunto'].'</font></br></td></tr>';
							echo '<tr><td><font face="tahoma"><b>Mensagem: </b></br>&nbsp;&nbsp;&nbsp;'.$retorno['coment'].'</font></br></br></br></td></tr>';
						}
						
			
			?>
            </table>
		</div>
        
		
        
    </div>
    
     <div class="rodape">
    	<font color="#FFFFFF"> <center>
        Copyright © 2013 &nbsp;&nbsp; | &nbsp;&nbsp; Sweat Sports® </br>
        Fone (047) 3062-2105 - (047) 3062- 4688 </center> </font>
    </div> 
    
</div>    
 

</body>
</html>
