<html>
<body>
<?php

function uploadimg()
{	
		$dir = './';
		$tmpName = $_FILES['imagem']['tmp_name'];
		$name = $_FILES['imagem']['name']; 
		move_uploaded_file( $tmpName, $dir . $name);  
}

?>
</body>
</html>