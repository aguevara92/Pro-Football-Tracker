<?php

	function displayProgressionRing($value){

		$rankingValue = $value;
		$rank = intval($rankingValue);

		if ($rankingValue > 50){
			$progression1 = 180;
			$progression2 = (180/50) * ($rankingValue-50) + 180;
		
			echo "<style>";
				echo ".pie-wrapper.progress-". $rank ." .pie .right-side {";
					echo "-webkit-transform: rotate(180deg);";
				    echo "transform: rotate(180deg);";
				echo "}";
				echo ".pie-wrapper.progress-". $rank ." .pie .left-side {";
					echo "-webkit-transform: rotate(". $progression2 ."deg);";
				        echo "transform: rotate(". $progression2 ."deg);";
				echo"}";
				echo ".pie-wrapper.progress-". $rank ." .pie {";
				    echo "clip: rect(auto, auto, auto, auto);";
				echo "}";
			echo "</style>";

		} else {
			$progression1 = 0;
			$progression2 = (180/50) * $rankingValue;
			

			echo "<style>";
				echo ".pie-wrapper.progress-". $rank ." .pie .right-side {";
					echo "display: none;";
				echo "}";
				echo ".pie-wrapper.progress-". $rank ." .pie .left-side {";
					echo "-webkit-transform: rotate(". $progression2 ."deg);";
				    echo "transform: rotate(". $progression2 ."deg);";
				echo "}";
			echo "</style>";
		}
		
		echo '<div class="set-size charts-container">';

			echo '<div class="pie-wrapper progress-'. $rank .' style-2">';
				echo '<span class="label">'. $rankingValue .'<span class="smaller"></span></span>';
				echo '<div class="pie">';
					echo '<div class="left-side half-circle"></div>';
					echo '<div class="right-side half-circle"></div>';
				echo '</div>';
				echo '<div class="shadow"></div>';
			echo '</div>';
		echo '</div>';
	}
	
?>