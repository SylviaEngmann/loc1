<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<?php
	session_start();
	if(!isset($_SESSION['user']['ID'])){
		header("Location: index.html");
		exit();
	}
	
include_once "func.php";
	$id=$_SESSION['user']['ID'];
    $obj= new func();
    $result=$obj->getroo($id);
	if($result==false){
		echo "result is false";
	}else{
		$row=$obj->fetch();
		
		while($row){
			echo "<p>Name: {$row['name']}</p>";
			echo "<p>Check in: {$row['checkIn']}</p>";
			echo "<p>Check out: {$row['checkOut']}</p>";
			echo "<p>Number of rooms: {$row['room']}</p>";
			echo "<p>Website: {$row['web']}</p>";
			echo "<p>Number: {$row['num']}</p>";
			echo "</br>";
			$row=$obj->fetch();
			echo "<div class='stars'>";
  echo "<form action=''>";
    echo "<input class='star star-5' id='star-5' type='radio' name='star'/>";
    echo "<label class='star star-5' for='star-5'></label>";
    echo "<input class='star star-4' id='star-4' type='radio' name='star'/>";
    echo "<label class='star star-4' for='star-4'></label>";
    echo "<input class='star star-3' id='star-3' type='radio' name='star'/>";
    echo "<label class='star star-3' for='star-3'></label>";
    echo "<input class='star star-2' id='star-2' type='radio' name='star'/>";
    echo "<label class='star star-2' for='star-2'></label>";
    echo "<input class='star star-1' id='star-1' type='radio' name='star'/>";
    echo "<label class='star star-1' for='star-1'></label>";
  echo "</form>";
echo "</div>";
		}
	}
?>

<style>
  div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }



label.star:before {
  content: '\f006';
  font-family: FontAwesome;
}
</style>

