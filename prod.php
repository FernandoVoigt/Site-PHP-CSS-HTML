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
            	<?php
					
					$page= $_GET['page'];//artesmarc
					
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
					
					$link = mysql_connect('localhost','root','') or die (mysql_error()); //conexao bd localhotst, user, senha mysql
					mysql_select_db('loja'); //seleção de base de dados;
					$query = "select * from ".$page.";"; // comando
					$consulta = mysql_query($query) or die (mysql_error()); // colocando comando no mysql
								
									
					echo "<table>";
					$cont= 0;
					
					echo "<table>";
					while ($retorno = mysql_fetch_array($consulta))
					{
						$cont++;
						$cont2= $cont - 1;
						$cont3= $cont2%3;
						
						
						
						if ($cont3 == 0)
						{
							echo '<tr>';
						}
							echo '<td width="280" height="280"><center><img src="';
							echo $retorno['imagem'] . '" width="150" height="150"/></br><a href="layout.php?cod='.$retorno["cod"].'&page='.$page.'">' . $retorno['modelo'] . '</br><font color="blue" size="2">cod ' . $retorno['cod'] . '</font></br><font color="#990000">R$ ' . $retorno['preco'] . '</font>';
							echo '</a></center></td>';
						
						if ($cont3 = 0)
						{
							echo '</tr>';
						}
							
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