
<?php 
echo "<div class='crop-image square'>";
	echo "<img src=";
	if ($i["profile_picture"] != ""){
		echo $i["profile_picture"];
	} else {
		//echo "images/defaultPlayer.jpg";
		echo "images/view_players.png";
	}
	echo ">";
echo "</div>";
?>