<html>
<body>


<?php 
$command = $_POST["command"];
if($command == "/resume"){
	include 'resume.html';

}elseif($command == "/workExp"){
	include 'WorkExp.html';

}elseif($command == "/relProj"){
	include 'RelProj.html';

}elseif($command == "/play"){
	include 'ExtraCur.html';

}elseif($command == "/eVersion"){
	include 'Home.html';

}elseif($command == "/contact"){
	include 'Contact.html';
}elseif($command == "/orange"){
	include 'orange.html';
}else{
	include 'InvalidCom.html';
}




exit();
?>


</body>
</html>