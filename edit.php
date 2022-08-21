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
                
				<?php
					
						$codedit= $_GET['codprodedit'];
						$table= $_GET['table'];
                	
						$link = mysql_connect('localhost','root','');
						mysql_select_db('loja');
						
						$query="select * from " . $table . " where cod=". $codedit .";";
						
						$consulta= mysql_query($query);
						
						while ($retorno = mysql_fetch_array($consulta))
						{
							echo '<form method="post" action="editfim.php?codedit='.$retorno['cod'].'&table='.$table.'" enctype="multipart/form-data">
                    Nome <input type="text" name="modelo" value="'.$retorno['modelo'].'"/></br>
						</br>
                    Marca <select name="marca">
						<option selected="selected">'.$retorno['marca'].'
                        <option>Nike
                        <option>Adidas
                        <option>Reebok
                        <option>Puma
                        <option>Umbro
                        <option>Randall
                        <option>Mormaii
                        <option>Olympikus
                        <option>Penalty
                    </SELECT></br>
                    </br>
                   Classe <select name="classe">
				   		<option selected="selected">'.$retorno['classe'].'
                        <option>Acessório
                        <option>Roupa                        
                        <option>Proteção
                        <option>Equipamento 
                    </SELECT></br></br>
                    Preço <input type="text" name="reais" size="6" maxlength="6" value="'.$retorno['preco'].'"></br></br>
                    <a href="editimg.php?cod='.$retorno['cod'].'&table='. $table .'">Alterar imagem</a></br>
                    </br>
                    Cor 1 <select name="cor1">
						 <option  selected="selected">'.$retorno['cor1'].'
                         <option>Branco
                         <option>Preto
                         <option>Azul
                         <option>Verde
                         <option>Laranja
                         <option>Larrom
                         <option>Amarelo
                         <option>Cinza
                         <option>Roxo   
                    </SELECT></br></br>
                    Cor 2 <select name="cor2">
                    	 <option selected="selected">'.$retorno['cor2'].'
                         <option>Branco
                         <option>Preto
                         <option>Azul
                         <option>Verde
                         <option>Laranja
                         <option>Larrom
                         <option>Amarelo
                         <option>Cinza
                         <option>Roxo   
                    </SELECT></br></br>
                    Cor 3 <select name="cor3">
                    	 <option selected="selected">'.$retorno['cor3'].'
                         <option>Branco
                         <option>Preto
                         <option>Azul
                         <option>Verde
                         <option>Laranja
                         <option>Larrom
                         <option>Amarelo
                         <option>Cinza
                         <option>Roxo   
                    </SELECT></br></br>
                  Descricao:</br><textarea cols="30" rows="5" name="descricao">'.$retorno['descricao'].'</textarea></br></br>
                    <input type="submit" value="Enviar" />
                   </form>';							
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