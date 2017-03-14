<!-- <div style="background: #d1cec4;
margin: 2%;" class="clear"> -->

<?php
	// $services = [
	// 			['title'=>'UPCAT Review',
	// 			'description'=>'A 4-month guided preparation for those who are planning to take the UPCAT. Preparation includes: <br> [1.]review sessions on: Language Proficiency (English and Filipino), Science, Math, and Reading Comprehension (English and Filipino) <br> [2.] guidance in the application process <br> [3.] practice tests and test-taking skills development. <br> <br> Those who are planning to take admission exams of ADMU, DLSU, UST, MSU, and other schools may benefit from this set of preparations.', 
	// 			'image'=>'res/UPCAT1.jpg', 
	// 			'targetGroup'=>'incoming Grade 12 students', 
	// 			'price'=>'2,000PhP per month', 
	// 			'availableSlots'=>'20'], 
	// 			['title'=>'Civil Service Exam Review',
	// 			'description'=>'A 4-month guided preparation for those who are planning to take the CSE-PPT. Preparation includes: <br> [1.]review sessions on: English and Filipino (Vocabulary, Grammar and Correct Usage, Paragraph Organization, Reading Comprehension, Analogy, Logic, and Numerical Reasoning) <br> General Info (Philippine Constitution, RA 6713, etc.) [2.] guidance in the application process <br> [3.] practice tests and test-taking skills development.', 
	// 			'image'=>'res/CSE-PPT1.jpg', 
	// 			'targetGroup'=>'working individuals hoping to work in the government', 
	// 			'price'=>'2,000PhP per month', 
	// 			'availableSlots'=>'20'], 
	// 			['title'=>'NCE (Pisay Qualifying Exam)',
	// 			'description'=>'A 4-month guided preparation for those who are planning to take the NCE (National Competitive Examination). Preparation includes: <br> [1.]review sessions on: Verbal Aptitude, Abstract Reasoning, Scientific Ability, Quantitative Ability [2.] guidance in the application process <br> [3.] practice tests and test-taking skills development.', 
	// 			'image'=>'res/Pisay1.jpg', 
	// 			'targetGroup'=>'incoming Grade 6 students', 
	// 			'price'=>'2,000PhP per month', 
	// 			'availableSlots'=>'20'],
	// 			['title'=>'Regular Tutorial',
	// 			'description'=>'Regular tutorial programs are administered either in groups or in one-on-one sessions. Subjects covered are: Math, Reading, Writing, Speech/ Phonics (for Pre-School) <br> Math, Science, English, Filipino (GradeSchool) <br> Algebra, Geometry, Trigonometry, Statistics and Probability, General Science, Biology, Chemistry, Physics, English (High School)', 
	// 			'image'=>'res/Regular Tutorial1.jpg', 
	// 			'targetGroup'=>'students from all levels', 
	// 			'price'=>'from 200PhP per hour', 
	// 			'availableSlots'=>'20']
	// 			];


	// $fp = fopen('services.json', 'w');
	// fwrite($fp, json_encode($services, JSON_PRETTY_PRINT));
	// fclose($fp);

	$string = file_get_contents("services.json");

	$services = json_decode($string, true);



		foreach ($services as $key => $row) {
				$title = $row['title'];
				$description = $row['description'];
				$targetGroup = $row['targetGroup'];
				$price = $row['price'];
				$image = $row['image'];
				$availableSlots = $row['availableSlots'];

				echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-3 ' style='padding:25px; margin-top:50px;'>";
				echo "<img class='col-xs-12' src='".$image."'>";
				echo "<p style='padding: 0 5%; font-size:1.2em; font-weight:bold'> $title </p>";
				echo "<p style='padding:0 5%; font-size:1.2em; font-weight:bold'> $price </p>";
					// require('knowMore.php');
				// echo "<div class='col-xs-6'> <button class='btn btn-default' style='background: #872934;'> Know More </button>"."<br> </div>";
				// echo "<div class='col-xs-6'>
				// <button class='btn btn-default'> Add to Cart </button>"."<br> </div>";
					require('cartButton.php');
						// removed for cartButton modal function
						//echo "<a href='addtocartcars.php?key=$key'><button class='col-xs-4 btn btn-default'>Add to Cart</button></a>";
						if(isset($_SESSION['email']) && $_SESSION['role']=='admin') { 
						// echo "<a href='template.php?key=$key'><button class='col-xs-4 btn btn-default'>Edit</button></a>";
						// removed for editmodal
						require('editmodal.php');
						
						echo "<a href='delete.php?key=$key'><button class='col-xs-6 btn btn-default'>Delete</button></a>";
						
						} else {
							echo "";
								} 
					echo "</div>";
				echo "</div>";
					
			}
?>

</div>