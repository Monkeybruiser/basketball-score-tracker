<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
	
	<title>Score Tracker</title>
	
	<link rel="stylesheet" href="library/css/style.css">
	<script src="library/js/libs/modernizr.custom.min.js"></script>
	
</head>
<body>
	
	
	<header class="">
		<div class="wrap">

			<h1>Score Tracker</h1>
		
		</div>
	</header>
	
	<section class="tracker-strip">
		<div class="wrap">
	
			<h2>Current Win Streak</h2>
			
			<?php
				
				$cur_streak_name				= 'Chumley Baggins';
				$cur_streak_total				= '1';
				
			?>
			<p><?php echo $cur_streak_name; ?> - <?php echo $cur_streak_total; ?></p>
			
			<h2>Best Win Streak</h2>
			
			<?php
				
				$best_streak_name				= 'Micky Jordon';
				$best_streak_total				= '5';
				
			?>
			<p><?php echo $best_streak_name; ?> - <?php echo $best_streak_total; ?></p>
			
		</div>
	</section>
	
	<section class="tracker-strip">
		<div class="wrap">
	
			<h2>New Round</h2>
			
			<form class="">
				
				<div class="grid">
					
					<div class="grid__col grid__col--1-of-2">
				
						<div class="">
							
							<p>Players</p>
							<ul>
								<li>Name 1</li>
								<li>Name 5</li>
							</ul>
							
							<input placeholder="Add Player" type="text" value="" />
							
						</div>
						
					</div>
					
					<div class="grid__col grid__col--1-of-2">
						
						<div class="">
							<p>Previous Players</p>
							<ul>
								<li class="selected">Name 1</li>
								<li>Name 2</li>
								<li>Name 3</li>
								<li>Name 4</li>
								<li class="selected">Name 5</li>
								<li>Name 6</li>
								<li>Name 7</li>
							</ul>
						</div>
						
					</div>
				
				</div>
				
				<input class="" type="submit" value="Start Round!">
				
			</form>
			
		</div>
	</section>
	
	<section class="tracker-strip">
		<div class="wrap">
			
			<h3>Previous Rounds</h3>
			
			<?php
				
				$rounds							= 0;
				$max_rounds						= 5;
				
				while($rounds <= $max_rounds) :
				
					$winner						= rand(1, 6);
				
			?>
			<div class="round-wrapper">
				
				<p>Date Played - 10th January 2016</p>
				<p>Round Winner - Name <?php echo $winner; ?></p>
				
				<table>
					
					<thead>
						<tr>
							<th class="" width="40%">Name</th>
							<th width="15%">Round 1</th>
							<th width="15%">Round 2</th>
							<th width="15%">Round 3</th>
							<th width="15%">Round 4</th>
						</tr>
					</thead>
					<tbody>
						<?php
							
							$i 					= 0;
							$max 				= 5;
							
							while($i <= $max) :
							
								$p_name			= 'Name';
								$score_1		= rand(0,9);
								$score_2		= rand(0,9);
								$score_3		= rand(0,9);
								$score_4		= rand(0,9);
							
						?>
						<tr>
							<td class="">Name</td>
							<td><?php echo $score_1; ?></td>
							<td><?php echo $score_2; ?></td>
							<td><?php echo $score_3; ?></td>
							<td><?php echo $score_4; ?></td>
						</tr>
						<?php	
							 
								$i++;
							
							endwhile;
							
						?>
					</tbody>
					
				</table>
			
			</div>
			<?php
				 
					$rounds++;
				
				endwhile;
				
			?>
			
		</div>
	</section>
	

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</body>
</html>