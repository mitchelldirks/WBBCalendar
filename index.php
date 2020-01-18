<!DOCTYPE html>
<html>
<head>
	<title>Misicalendar</title>
	<link rel="stylesheet" type="text/css" href="misicalendar.css">
</head>
<body>
	<div class="calendar">
		<div class="image" style="background: none;">
			<img src="stack.gif">
		</div>
		<div class="date">
			<h3><?php echo date("F"); ?></h3>
			<div class="days">
				<div class="day">Sun</div>
				<div class="day">Mon</div>
				<div class="day">Tue</div>
				<div class="day">Wed</div>
				<div class="day">Thu</div>
				<div class="day">Fri</div>
				<div class="day">Sat</div>

				<?php 
				include 'filter.php';
				$year =  date('Y');
				$month =  date('m');
				$limit=$length-1;
				//echo date('D', strtotime($year.'-'.$month.'-'.$length.' -'.$limit.' day'));
				switch (date('D', strtotime($year.'-'.$month.'-'.$length.' -'.$limit.' day'))) {
					case 'Sun':
						$empty=0;
						break;
					case 'Mon':
						$empty=1;
						break;
					case 'Tue':
						$empty=2;
						break;
					case 'Wed':
						$empty=3;
						break;
					case 'Thu':
						$empty=4;
						break;
					case 'Fri':
						$empty=5;
						break;
					case 'Sat':
						$empty=6;
						break;

				}
				for ($i=0; $i < $empty; $i++) { ?>
					<div class="number"></div>
				<?php }
				for ($i=1; $i <= $length; $i++) { ?>
					<div class="number <?php if ($i==date("d")) { echo "active";}?>"><?php echo $i;?></div>
				<?php } ?>
			</div>
		</div>
		
	</div>
</body>
</html>