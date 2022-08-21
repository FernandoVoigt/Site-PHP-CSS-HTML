<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="Content-Type"/>
<title>Sistema de Administra&ccedil;&atilde;o - Editar</title>
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

			<div class="conteudo2">
            	<center><h1>Editar</h1></center></br></br>
            	<center>
                <form method="post" action="sistemaedit.php">
                		Onde encontra-se o produto a ser Editado:
                        <select name="edit">
                        <option>Artes Marciais
                        <option>Aventura
                        <option>Praia
                        <option>Training
                    </SELECT></br></br>
                    <input type="submit" value="Enviar">
                   </form>
				</center>
                <center>
                <?php
                	if(isset($_POST['edit']))
					{
						$edit= strtolower($_POST['edit']);
						
						if($edit == "artes marciais")
						{
							$edit="artes_marciais";
						}
						
						$link = mysql_connect('localhost','root','');
						mysql_select_db('loja');
						
						$query="select modelo,cod from " . $edit . ";";
						
						$consulta= mysql_query($query);
						
						echo "</br></br>";
						echo "<h1>Produtos</h1>";
						echo "</br>";
						
						while ($retorno = mysql_fetch_array($consulta))
						{
							
							echo '<a href="edit.php?prodedit='.$retorno['modelo'].'&table='.$edit.'">'. $retorno['modelo'] . " código:" . $retorno['cod'] . '</a></br>';						
						}
					}
				?>
                </center>
                
			</div>
    	 <div class="rodape">
            <font color="#FFFFFF"> <center>
            Copyright &copy; 2013 &nbsp;&nbsp; | &nbsp;&nbsp; Sweat Sports&reg; </br>
            Fone (047) 3062-2105 - (047) 3062- 4688 </center> </font>
        </div>
</div>    
</body>
</html>