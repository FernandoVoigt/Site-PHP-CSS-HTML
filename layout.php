<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type"/>
<title>Produtos</title>
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
        
			<div class="conteudo2">
            <p align="right">
            	<?php
					 
					$cod= $_GET['cod'];
					$page= $_GET['page'];
					
					if($page == "avent")
					{
						$page="aventura";
					}
					
					elseif($page == "artesmarc")
					{
						$page="artes_marciais";
					}
					
					elseif($page == "train")
					{
						$page="training";
					}
					
					echo '<a href="prod.php?page='. $page .'"><h3> Voltar </h3></a></p></br>';
					
					$link = mysql_connect('localhost','root',''); //conexao bd localhotst, user, senha mysql
					mysql_select_db('loja'); //seleção de base de dados;
					$query = "select * from ".$page." where cod=".$cod.";"; // comando
					$consulta = mysql_query($query); // colocando comando no mysql
					
					echo "<table>";
					$cont= 0;
					
					while ($retorno = mysql_fetch_array($consulta))
					{
						echo '	<tr>
									<td rowspan="4" width= 400 height="375" valign="top"><img src="'.$retorno['imagem'].'" width="350" height="350"/></td>
									<td height="100"><font color="black"><h1>'.$retorno['modelo'].'</h1></font>
									<font color="#CCCCCC" size="3">cod '.$retorno['cod'].'</font></td>
								</tr>								
								<tr>
									<td height="50"><p valign="bottom"><b>'.$retorno['classe'].'</b></br></br>
									<b>Marca:</b> '.$retorno['marca'].'</br></br>
									<b>Disponível nas cores:</b> '.$retorno['cor1'].' - '.$retorno['cor2'].' - '.$retorno['cor3'].' . </p></br></td>
								</tr>								
								<tr>
									<td height="150" valign="top"><b>Descrição:</b></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$retorno['descricao'].'</td>
								</tr>
								<tr>									
									<td height="50"><font color="#900"><h2>R$ '.$retorno['preco'].'</h2></font></td>
								</tr>';						
					}
					
					echo "</table>";
					?> 
			</div>
    	 <div class="rodape">
            <font color="#FFFFFF"> <center>
            Copyright &copy; 2013 &nbsp;&nbsp; | &nbsp;&nbsp; Sweat Sports&reg; </br>
            Fone (047) 3062-2105 - (047) 3062- 4688 </center> </font>
        </div>
</div>    
</body>
</html>