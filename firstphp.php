<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" name="viewport" content="width-device-width"initital-scale="1.0"> 
<title>firstphp</title>
<link rel="stylesheet" href="calcphp.css"/>
</head>
<body>
<h1>According to the latest research, the maximum lifespan of humans are limited to 79 years.</h1>
<img src="https://www.genengnews.com/wp-content/uploads/2018/08/GettyImages483821370_6801961201518.jpg"loading="eager"alt="humanlifespan.jpg"</img>
<div class="phpstyle">
<?php
$name=$_GET['name'];
$age=$_GET['age'];
if($age>79){
echo "<p class='l1'>Hey $name, your have an extraordinary Lifespan which is greater than the current maximum...</p>";
}
else{
$remp=round((100-(($age/79)*100)),2);
$remy=79-$age;
echo "<p class='l1'>Hey $name, your remaining Lifesplan estimated with the above criteria is<br> <span class = 'per'>$remp%</span>($remy Years)</p>";
}
?>
<h2>Age is a kind of mind over matter. If you don't mind, It don't matter!!</h2>
</body>
</html>

