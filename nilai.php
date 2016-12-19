<?php
            if (!isset($_POST['submit'])) { 
			$btn = $_POST['submit'];
            $answer1 = $_POST['tanya1jawab'];
            $answer2 = $_POST['tanya2jawab'];
            $answer3 = $_POST['tanya3jawab'];
            $answer4 = $_POST['tanya4jawab'];
            $answer5 = $_POST['tanya5jawab'];
        
            $totalbenar = 0;
            
            if ($answer1 == "D") { $totalbenar++; }
            if ($answer2 == "A") { $totalbenar++; }
            if ($answer3 == "B") { $totalbenar++; }
            if ($answer4 == "D") { $totalbenar++; }
            if ($answer5 == "C") { $totalbenar++; }
           
			echo "<script type='text/javascript'>alert(\"$totalbenar dari 5 pertanyaan\");</script>";
            }
			else {
				unset($btn);
				$totalbenar = 0;
				echo "<script type='text/javascript'>alert(\"$totalbenar dari 5 pertanyaan\");</script>";
			}
        ?>