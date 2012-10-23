<?
function fecha($date)
{
	$year_now = date("Y");
	$month_now = date ("n");
	$day_now = date ("j");
	$week_day_now = date ("w");
	$date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now; 
	return $date;  
}