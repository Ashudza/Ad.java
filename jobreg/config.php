	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>

		.box
		{
			display: flex;
			width:50%;
			height:700px;
			align-items:center;
			justify-content:center;
			/*border: 2px solid red;*/
		}

	body{
		background-image: url('spring.webp');
		background-size: cover;
		background-position: center;
	}
	</style>
	</head>
	<body>
	
	
<center><div class="box" style="color:blue;font-size:350%;">
	
			<?php
			if(isset($_POST[ "create" ]))
			{
				echo "User Submitted";
			}
			?>
		</div></center>
		</body>
	</html>