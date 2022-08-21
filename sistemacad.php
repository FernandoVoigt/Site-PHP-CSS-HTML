<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Administração - Cadastrar</title>
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
               <li class='has-sub last'><a href='#.php'><span>Sair</span></a></li>
            </ul>
        </div>

			<div class="conteudo">
            	<center><h1>Cadastrar</h1></center></br></br>
            	<center>
                <form method="post" action="sistemacad.php" enctype="multipart/form-data">
                    Nome <input type="text" name="modelo"/></br>
						<?php
    					if(isset($_POST['marca']))
						{
						if($_POST['modelo'])
						{
							
						}
						else
						{
							echo "<font color='#990000'>Este campo deve se preenchido!</font></br>";
						}
						}
						?></br>
                    Marca <select name="marca">
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
                    <?php
					if(isset($_POST['marca']))
					{
					if($_POST['marca'])
					{
						
					}
					else
					{
						echo "<font color='#990000'>Este campo deve se preenchido!</font></br>";
					}
					}
					?></br>
                   Classe <select name="classe">
                        <option>Tênis
                        <option>Camisa
                        <option>Calça
                        <option>Acessório
                    </SELECT></br></br>
                    Preço <input type="number" name="reais" size="3" maxlength="4">,<input type="number" name="cent" size="2" maxlength="2"></br></br>
                    <?php
					
					if(isset($_POST['marca']))
					{
					if(isset($_POST['reais'])) 
					{
						if(isset($_POST['cent']))
						{
						}
						else
					{
						echo "<font color='#990000'>Este campo deve se preenchido!</font></br>";
					}					
					}
					}
					?>
                                        
                    Imagem <input type="file" name="imagem"/></br>
                    <?php
					if(isset($_POST['marca']))
					{
					if(isset($_FILES['imagem']))
					{
						
					}
					else
					{
						echo "<font color='#990000'>Este campo deve se preenchido!</font></br>";
					}
					}
					?>
                    </br>
                    Cor 1 <select name="cor1">
                         <option>branco
                         <option>preto
                         <option>azul
                         <option>verde
                         <option>laranja
                         <option>marrom
                         <option>amarelo
                         <option>cinza
                         <option>roxo   
                    </SELECT></br></br>
                    Cor 2 <select name="cor2">
                    	<option>
                         <option>branco
                         <option>preto
                         <option>azul
                         <option>verde
                         <option>laranja
                         <option>marrom
                         <option>amarelo
                         <option>cinza
                         <option>roxo   
                    </SELECT></br></br>
                    Cor 3 <select name="cor3">
                    	<option>
                         <option>branco
                         <option>preto
                         <option>azul
                         <option>verde
                         <option>laranja
                         <option>marrom
                         <option>amarelo
                         <option>cinza
                         <option>roxo   
                    </SELECT></br></br>
                  Descricao:</br><textarea cols="30" rows="5" name="descricao"></textarea></br></br>
                  Em que página deverá ser feito o cadastro:</br></br> 
                  <select name="opcao">
                         <option>Artes Marciais
                         <option>Aventura
                         <option>Praia
                         <option>Training   
                    </SELECT></br></br>
                    <input type="submit" value="Enviar" />
                   </form>
				</center>
                
                <?php
					include('upload.php');
					
                	if(isset($_POST['modelo']))
					{
						$modelo= $_POST['modelo'];
						$marca= $_POST['marca'];
						$classe= $_POST['classe'];
						$preco= $_POST['reais'] . ',' .$_POST['cent'];
						$cor1= $_POST['cor1'];
						$cor2= $_POST['cor2'];
						$cor3= $_POST['cor3'];
						$imagem= $_FILES['imagem']['name'];
						$descricao= $_POST['descricao'];
						$paginaefeito= strtolower($_POST['opcao']);
																	
						if($paginaefeito == "artes marciais")
						{
							$paginaefeito="artes_marciais";
						}
						
						uploadimg();
						
						$link = mysql_connect('localhost','root',''); //// LEMBRAR DE MUDAR SENHA NO SENAI EM CASA
						mysql_select_db('loja');
						
						$query="insert into " . $paginaefeito . " values(null,'". $modelo ."','". $marca ."','". $classe ."','". 					$imagem ."','". $cor1 ."','". $cor2 ."','". $cor3 ."','". $descricao ."','". $preco . "');" ;
						
						//insert into praia values(null,'modelo','marca','classe','imagem.png','cor1','cor2','cor3','descricao',15.2');
						
						$cadastro= mysql_query($query);
						
						if($cadastro)
						{
							echo "</br></br><center>Produto Cadastrado!</center>";
						}
						else
						{
							echo "</br></br><center>Um problema não permitiu que o produto fosse cadastrado!</center>";
						}
						
					}
				?>
                
			</div>
    	 <div class="rodape">
            <font color="#FFFFFF"> <center>
            Copyright © 2013 &nbsp;&nbsp; | &nbsp;&nbsp; Sweat Sports® </br>
            Fone (047) 3062-2105 - (047) 3062- 4688 </center> </font>
        </div>
</div>    
</body>
</html>