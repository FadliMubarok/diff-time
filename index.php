<?php 

require_once('config.php');

function sqlQuery($con, $condition = '')
{

	$query = "SELECT tanggal_transaksi, tanggal_close FROM tb_keluhan ";
	$result_query = mysqli_query($con, $query);

	return $result_query;
}

$tanggalClose = [];
$tanggalOpen = [];
$diffDays = [];
$diffHours = [];
$diffMinutes = [];
$diffSeconds = [];

function avgDiffTimeSeconds($con, $jenis = '')
{
	$data = sqlQuery($con);

	if ($data) {
		while($row = mysqli_fetch_assoc($data)) {
			$tanggalClose[] = $row['tanggal_close'];
			$tanggalOpen[] = $row['tanggal_transaksi'];		
		}			
		
		for ($i = 0; $i <= count($tanggal_close); $i++) {		
			$diffSeconds[$i] = abs(strtotime($tanggal_close[$i]) - strtotime($tanggal_open[$i]));		
		}

		for ($i = 0; $i <= count($diffSeconds); $i++) {			
			$differentDays[$i] = floor(($diffSeconds[$i] - $differentYears[$i] * 365*60*60*24 - $differentMonths[$i]*30*60*60*24) / (60*60*24));
			$diffHours[$i] = number_format((float)$diffSeconds[$i]/3600, 2, '.', '');			
		}

		$totalSeconds = array_sum($diffSeconds);
		$countSeconds = count($diffSeconds);

		$averageSeconds = $totalSeconds/$countSeconds;

		return $averageSeconds;
	} else {
		return 'Tidak Ada Data';
	}
}

function avgDiffTimeMinutes($con, $jenis = '')
{
	$data = sqlQuery($con);

	if ($data) {
		while($row = mysqli_fetch_assoc($data)) {
			$tanggalClose[] = $row['tanggal_close'];
			$tanggalOpen[] = $row['tanggal_transaksi'];		
		}			
		
		for ($i = 0; $i <= count($tanggal_close); $i++) {		
			$diffSeconds[$i] = abs(strtotime($tanggal_close[$i]) - strtotime($tanggal_open[$i]));		
		}

		for ($i = 0; $i <= count($diffSeconds); $i++) {			
			$differentDays[$i] = floor(($diffSeconds[$i] - $differentYears[$i] * 365*60*60*24 - $differentMonths[$i]*30*60*60*24) / (60*60*24));
			$diffHours[$i] = number_format((float)$diffSeconds[$i]/3600, 2, '.', '');
			$diffMinutes[$i] = number_format((float)$diffSeconds[$i]/60, 2, '.', '');			
		}

		$totalMinutes = array_sum($diffMinutes);
		$countMinutes = count($diffMinutes);

		$averageMinutes = $totalMinutes/$countMinutes;

		return $averageMinutes;		
	} else {
		return 'Tidak Ada Data';
	}
}

function avgDiffTimeHours($con, $jenis = '')
{
	$data = sqlQuery($con);

	if ($data) {
		while($row = mysqli_fetch_assoc($data)) {
			$tanggalClose[] = $row['tanggal_close'];
			$tanggalOpen[] = $row['tanggal_transaksi'];		
		}			
		
		for ($i = 0; $i <= count($tanggal_close); $i++) {		
			$diffSeconds[$i] = abs(strtotime($tanggal_close[$i]) - strtotime($tanggal_open[$i]));		
		}

		for ($i = 0; $i <= count($diffSeconds); $i++) {			
			$differentDays[$i] = floor(($diffSeconds[$i] - $differentYears[$i] * 365*60*60*24 - $differentMonths[$i]*30*60*60*24) / (60*60*24));
			$diffHours[$i] = number_format((float)$diffSeconds[$i]/3600, 2, '.', '');			
		}

		$totalHours = array_sum($diffHours);
		$countHours = count($diffHours);

		$averageHours = $totalHours/$countHours;

		return $averageHours;		
	} else {
		return 'Tidak Ada Data';
	}
}

function avgDiffTimeDays($con, $jenis = '')
{
	$data = sqlQuery($con);

	if ($data) {
		while($row = mysqli_fetch_assoc($data)) {
			$tanggalClose[] = $row['tanggal_close'];
			$tanggalOpen[] = $row['tanggal_transaksi'];		
		}			
		
		for ($i = 0; $i <= count($tanggal_close); $i++) {		
			$diffSeconds[$i] = abs(strtotime($tanggal_close[$i]) - strtotime($tanggal_open[$i]));		
		}

		for ($i = 0; $i <= count($diffSeconds); $i++) {			
			$differentDays[$i] = floor(($diffSeconds[$i] - $differentYears[$i] * 365*60*60*24 - $differentMonths[$i]*30*60*60*24) / (60*60*24));
			$diffHours[$i] = number_format((float)$diffSeconds[$i]/3600, 2, '.', '');		
		}

		$totalDays = array_sum($diffDays);
		$countDays = count($diffDays);

		$averageDays = $totalDays/$countDays;

		return $averageDays;
	} else {
		return 'Tidak Ada Data';
	}
}


// untuk memudahkan dalam melihat hasil Array
function preR($array)
{
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
?>