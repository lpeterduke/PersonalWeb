<html>
<body>


<?php 
$command = $_POST["command"];
$version = $_POST["version"];

//echo $command;
//echo $version; 


if($version == "fun"){
	include 'FunNavBar.html';
}else{
	include 'EasyNavBar.html';
}


if($command == "/resume"){
	include 'Resume.html';

}elseif($command == "/workexp"){
	include 'WorkExp.html';

}elseif($command == "/home"){
	include 'index.html';

}elseif($command == "/relproj"){
	include 'RelProj.html';

}elseif($command == "/play"){
	include 'ExtraCur.html';

}elseif($command == "/eversion"){
	include 'eVersion.html';

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