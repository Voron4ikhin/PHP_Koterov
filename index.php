<!DOCTYPE html>
<html>
<head>
	<title>
		Простейший PHP сценарий!
	</title>
</head>
<body>
	<h1>Здравствуйте!</h1>
	<p>
	<?php 
	class AgentSmith{}
	$first = new AgentSmith();
	$first->mind = 0.123;
	$second = $first;
	$second->mind = 100;
	echo $first;
	
	?>
</ul>
</p>	
	
</body>
</html>