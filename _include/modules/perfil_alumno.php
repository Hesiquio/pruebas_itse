<?php
session_start();
include("../php/db/conexionDB.php");
include '../php/actions/functions_view.php';

/// codigo barrancos

$result = $con->prepare("SELECT * FROM tbl_app2_rangos WHERE us_id = '".$_GET["info"]."';");
$result ->execute();

$row = $result->fetch();
@$a = $row['rangoa'];
@$b = $row['rangob'];
@$c = $row['rangoc'];
@$e = $row['rangoe'];
@$f = $row['rangof'];
@$g = $row['rangog'];
@$h = $row['rangoh'];
@$i = $row['rangoi'];
@$l = $row['rangol'];
@$m = $row['rangom'];
@$n = $row['rangon'];
@$o = $row['rangoo'];
@$q1 = $row['rangoq1'];
@$q2 = $row['rangoq2'];
@$q3 = $row['rangoq3'];
@$q4= $row['rangoq4'];

$sexo = info_tbl_usuarios("../", "sex", $_GET["info"]);
//@$sexo = 'M' mujer;
//@$sexo = 'H' hombre;

switch($sexo){
case 'M':
	if($a >= 0 and $a <= 5) $puntuaciona = 1;
	if($a == 6) $puntuaciona = 2;
	if($a >= 7 and $a <= 8) $puntuaciona = 3;
	if($a == 9) $puntuaciona = 4;
	if($a >= 10 and $a <= 11) $puntuaciona = 5;
	if($a == 12) $puntuaciona = 6;
	if($a == 13) $puntuaciona = 7;
	if($a == 14) $puntuaciona = 8;
	if($a == 15) $puntuaciona = 9;
	if($a >= 16 and $a <= 20) $puntuaciona = 10;
	
	if($b >= 0 and $b <= 2) $puntuacionb = 1;
	if($b == 3) $puntuacionb = 2;
	if($b == 4) $puntuacionb = 3;
	if($b == 5) $puntuacionb = 4;
	if($b == 6) $puntuacionb = 5;
	if($b == 7) $puntuacionb = 6;
	if($b == 8) $puntuacionb = 7;
	if($b == 9) $puntuacionb = 8;
	if($b == 10) $puntuacionb = 9;
	if($b >= 11 and $b <= 13) $puntuacionb = 10;
	
	if($c >= 0 and $c <= 12) $puntuacionc = 1;
	if($c == 13) $puntuacionc = 2;
	if($c == 14) $puntuacionc = 3;
	if($c >= 15 and $c <= 17) $puntuacionc = 4;
	if($c >= 18 and $c <= 19) $puntuacionc = 5;
	if($c == 20) $puntuacionc = 6;
	if($c >= 21 and $c <= 22) $puntuacionc = 7;
	if($c == 23) $puntuacionc = 8;
	if($c >= 24 and $c <= 25) $puntuacionc = 9;
	if($c == 26) $puntuacionc = 10;
	
	if($e >= 0 and $e <= 4) $puntuacione = 1;
	if($e == 5) $puntuacione = 2;
	if($e == 6) $puntuacione = 3;
	if($e >= 7 and $e <= 8) $puntuacione = 4;
	if($e >= 9 and $e <= 10) $puntuacione = 5;
	if($e >= 11 and $e <= 12) $puntuacione = 6;
	if($e >= 13 and $e <= 14) $puntuacione = 7;
	if($e >= 15 and $e <= 16) $puntuacione = 8;
	if($e == 17) $puntuacione = 9;
	if($e >= 18 and $e <= 26) $puntuacione = 10;
	
	if($f >= 0 and $f <= 3) $puntuacionf = 1;
	if($f >= 4 and $f <= 6) $puntuacionf = 2;
	if($f >= 7 and $f <= 8) $puntuacionf = 3;
	if($f >= 9 and $f <= 10) $puntuacionf = 4;
	if($f >= 11 and $f <= 12) $puntuacionf = 5;
	if($f >= 13 and $f <= 14) $puntuacionf = 6;
	if($f >= 15 and $f <= 16) $puntuacionf = 7;
	if($f == 17) $puntuacionf = 8;
	if($f >= 18 and $f <= 21) $puntuacionf = 9;
	if($f >= 22 and $f <= 26) $puntuacionf = 10;
	
	if($g >= 0 and $g <= 7) $puntuaciong = 1;
	if($g == 8)  $puntuaciong = 2;
	if($g == 9)  $puntuaciong = 3;
	if($g >= 10 and $g <= 11) $puntuaciong = 4;
	if($g >= 12 and $g <= 13) $puntuaciong = 5;
	if($g >= 14 and $g <= 15) $puntuaciong = 6;
	if($g == 16)  $puntuaciong = 7;
	if($g == 17)  $puntuaciong = 8;
	if($g == 18)  $puntuaciong = 9;
	if($g >= 19 and $g <= 20) $puntuaciong = 10;
	
	if($h >= 0 and $h <= 5) $puntuacionh = 1;
	if($h >= 6 and $h <= 7) $puntuacionh = 2;
	if($h >= 8 and $h <= 9) $puntuacionh = 3;
	if($h >= 10 and $h <= 12) $puntuacionh = 4;
	if($h >= 13 and $h <= 14) $puntuacionh = 5;
	if($h >= 15 and $h <= 16) $puntuacionh = 6;
	if($h >= 17 and $h <= 20) $puntuacionh = 7;
	if($h >= 21 and $h <= 23) $puntuacionh = 8;
	if($h == 24)  $puntuacionh = 9;
	if($h >= 25 and $h <= 26) $puntuacionh = 10;
	
	if($i >= 0 and $i <= 3) $puntuacioni = 1;
	if($i >= 4 and $i <= 5) $puntuacioni = 2;
	if($i == 6)  $puntuacioni = 3;
	if($i == 7)  $puntuacioni = 4;
	if($i >= 8 and $i <= 10) $puntuacioni = 5;
	if($i >= 11 and $i <= 12) $puntuacioni = 6;
	if($i >= 13 and $i <= 14) $puntuacioni = 7;
	if($i == 15)  $puntuacioni = 8;
	if($i == 16)  $puntuacioni = 9;
	if($i >= 17 and $i <= 20) $puntuacioni = 10;
	
	if($l >= 0 and $l <= 4) $puntuacionl = 1;
	if($l == 5)  $puntuacionl = 2;
	if($l == 6)  $puntuacionl = 3;
	if($l == 7)  $puntuacionl = 4;
	if($l == 8)  $puntuacionl = 5;
	if($l >= 9 and $l <= 10) $puntuacionl = 6;
	if($l == 11)  $puntuacionl = 7;
	if($l >= 12 and $l <= 13) $puntuacionl = 8;
	if($l == 14)  $puntuacionl = 9;
	if($l >= 15 and $l <= 20) $puntuacionl = 10;
	
	if($m >= 0 and $m <= 6) $puntuacionm = 1;
	if($m >= 7 and $m <= 8) $puntuacionm = 2;
	if($m == 9)  $puntuacionm = 3;
	if($m == 10)  $puntuacionm = 4;
	if($m >= 11 and $m <= 13) $puntuacionm = 5;
	if($m >= 14 and $m <= 15) $puntuacionm = 6;
	if($m == 16)  $puntuacionm = 7;
	if($m >= 17 and $m <= 18) $puntuacionm = 8;
	if($m >= 19 and $m <= 20) $puntuacionm = 9;
	if($m >= 21 and $m <= 26) $puntuacionm = 10;
	
	if($n >= 0 and $n <= 5) $puntuacionn = 1;
	if($n >= 6 and $n <= 7) $puntuacionn = 2;
	if($n == 8)  $puntuacionn = 3;
	if($n == 9)  $puntuacionn = 4;
	if($n == 10)  $puntuacionn = 5;
	if($n >= 11 and $n <= 12) $puntuacionn = 6;
	if($n == 13)  $puntuacionn = 7;
	if($n == 14)  $puntuacionn = 8;
	if($n == 15)  $puntuacionn = 9;
	if($n >= 16 and $n <= 20) $puntuacionn = 10;
	
	if($o >= 0 and $o <= 2) $puntuaciono = 1;
	if($o == 3)  $puntuaciono = 2;
	if($o >= 4 and $o <= 5) $puntuaciono = 3;
	if($o >= 6 and $o <= 8) $puntuaciono = 4;
	if($o >= 9 and $o <= 10) $puntuaciono = 5;
	if($o == 11)  $puntuaciono = 6;
	if($o >= 12 and $o <= 13) $puntuaciono = 7;
	if($o == 14)  $puntuaciono = 8;
	if($o >= 15 and $o <= 16 ) $puntuaciono = 9;
	if($o >= 17 and $o <= 26) $puntuaciono = 10;
	
	if($q1 >= 0 and $q1 <= 3) $puntuacionq1 = 1;
	if($q1 >= 4 and $q1 <= 5) $puntuacionq1 = 2;
	if($q1 >= 6 and $q1 <= 7) $puntuacionq1 = 3;
	if($q1 >= 8 and $q1 <= 9) $puntuacionq1 = 4;
	if($q1 >= 10 and $q1 <= 11) $puntuacionq1 = 5;
	if($q1 == 12)  $puntuacionq1 = 6;
	if($q1 >= 13 and $q1 <= 14) $puntuacionq1 = 7;
	if($q1 == 15)  $puntuacionq1 = 8;
	if($q1 == 16)  $puntuacionq1 = 9;
	if($q1 >= 17 and $q1 <= 20) $puntuacionq1 = 10;
	
	if($q2 >= 0 and $q2 <= 5) $puntuacionq2 = 1;
	if($q2 == 6)  $puntuacionq2 = 2;
	if($q2 >= 7 and $q2 <= 8) $puntuacionq2 = 3;
	if($q2 == 9)  $puntuacionq2 = 4;
	if($q2 >= 10 and $q2 <= 11) $puntuacionq2 = 5;
	if($q2 == 12) $puntuacionq2 = 6;
	if($q2 >= 13 and $q2 <= 14) $puntuacionq2 = 7;
	if($q2 >= 15 and $q2 <= 16) $puntuacionq2 = 8;
	if($q2 == 17)  $puntuacionq2 = 9;
	if($q2 >= 18 and $q2 <= 20) $puntuacionq2 = 10;
	

	if($q3 >= 0 and $q3 <= 4) $puntuacionq3 = 1;
	if($q3 >= 5 and $q3 <= 6) $puntuacionq3 = 2;
	if($q3 >= 7 and $q3 <= 9) $puntuacionq3 = 3;
	if($q3 >= 10 and $q3 <= 11) $puntuacionq3 = 4;
	if($q3 == 12)  $puntuacionq3 = 5;
	if($q3 >= 13 and $q3 <= 15) $puntuacionq3 = 6;
	if($q3 == 16)  $puntuacionq3 = 7;
	if($q3 == 17)  $puntuacionq3 = 8;
	if($q3 == 18)  $puntuacionq3 = 9;
	if($q3 >= 19 and $q3 <= 20) $puntuacionq3 = 10;
	
	if($q4 >= 0 and $q4 <= 2) $puntuacionq4 = 1;
	if($q4 == 3)  $puntuacionq4 = 2;
	if($q4 == 4)  $puntuacionq4 = 3;
	if($q4 >= 5 and $q4 <= 6) $puntuacionq4 = 4;
	if($q4 >= 7 and $q4 <= 8) $puntuacionq4 = 5;
	if($q4 >= 9 and $q4 <= 10) $puntuacionq4 = 6;
	if($q4 >= 11 and $q4 <= 12) $puntuacionq4 = 7;
	if($q4 >= 13 and $q4 <= 15) $puntuacionq4 = 8;
	if($q4 >= 16 and $q4 <= 17) $puntuacionq4 = 9;
	if($q4 >= 18 and $q4 <= 26) $puntuacionq4 = 10;
	
	break;
case 'H':
	if($a >= 0 and $a <= 3) $puntuaciona = 1;
	if($a >= 4 and $a <= 5) $puntuaciona = 2;
	if($a >= 6 and $a <= 7) $puntuaciona = 3;
	if($a == 8) $puntuaciona = 4;
	if($a >= 9 and $a <= 10) $puntuaciona = 5;
	if($a >= 11 and $a <= 12) $puntuaciona = 6;
	if($a == 13) $puntuaciona = 7;
	if($a >= 14 and $a <= 15) $puntuaciona = 8;
	if($a >= 16 and $a <= 17) $puntuaciona = 9;
	if($a >= 18 and $a <= 20) $puntuaciona = 10;
	
	if($b >= 0 and $b <= 1) $puntuacionb = 1;
	if($b == 2) $puntuacionb = 2;
	if($b >= 3 and $b <= 4) $puntuacionb = 3;
	if($b == 5) $puntuacionb = 4;
	if($b == 6) $puntuacionb = 5;
	if($b == 7) $puntuacionb = 6;
	if($b == 8) $puntuacionb = 7;
	if($b == 9) $puntuacionb = 9;
	if($b >= 10 and $b <= 13) $puntuacionb = 10;
	
	if($c >= 0 and $c <= 9) $puntuacionc = 1;
	if($c >= 10 and $c <= 12) $puntuacionc = 2;
	if($c >= 13 and $c <= 14) $puntuacionc = 3;
	if($c >= 15 and $c <= 17) $puntuacionc = 4;
	if($c >= 18 and $c <= 19) $puntuacionc = 5;
	if($c >= 20 and $c <= 21) $puntuacionc = 6;
	if($c >= 22 and $c <= 23) $puntuacionc = 7;
	if($c == 24) $puntuacionc = 8;
	if($c == 25) $puntuacionc = 9;
	if($c == 26) $puntuacionc = 10;
	
	if($e >= 0 and $e <= 5) $puntuacione = 1;
	if($e == 6) $puntuacione = 2;
	if($e == 7) $puntuacione = 3;
	if($e >= 8 and $e <= 9) $puntuacione = 4;
	if($e >= 10 and $e <= 11) $puntuacione = 5;
	if($e >= 12 and $e <= 13) $puntuacione = 6;
	if($e >= 14 and $e <= 15) $puntuacione = 7;
	if($e >= 16 and $e <= 18) $puntuacione = 8;
	if($e >= 19 and $e <= 20) $puntuacione = 9;
	if($e >= 21 and $e <= 26) $puntuacione = 10;
	
	if($f >= 0 and $f <= 4) $puntuacionf = 1;
	if($f >= 5 and $f <= 6) $puntuacionf = 2;
	if($f >= 7 and $f <= 8) $puntuacionf = 3;
	if($f >= 9 and $f <= 10) $puntuacionf = 4;
	if($f >= 11 and $f <= 13) $puntuacionf = 5;
	if($f >= 14 and $f <= 15) $puntuacionf = 6;
	if($f >= 16 and $f <= 17) $puntuacionf = 7;
	if($f >= 18 and $f <= 20) $puntuacionf = 8;
	if($f >= 21 and $f <= 22) $puntuacionf = 9;
	if($f >= 23 and $f <= 26) $puntuacionf = 10;
	
	if($g >= 0 and $g <= 8) $puntuaciong = 1;
	if($g == 9)  $puntuaciong = 2;
	if($g >= 10 and $g <= 11) $puntuaciong = 3;
	if($g == 12)  $puntuaciong = 4;
	if($g >= 13 and $g <= 14) $puntuaciong = 5;
	if($g >= 15 and $g <= 16) $puntuaciong = 6;
	if($g == 17)  $puntuaciong = 7;
	if($g == 18)  $puntuaciong = 8;
	if($g == 19)  $puntuaciong = 9;
	if($g == 20)  $puntuaciong = 10;
	
	if($h >= 0 and $h <= 6) $puntuacionh = 1;
	if($h == 7)  $puntuacionh = 2;
	if($h >= 8 and $h <= 10) $puntuacionh = 3;
	if($h >= 11 and $h <= 13) $puntuacionh = 4;
	if($h >= 14 and $h <= 17) $puntuacionh = 5;
	if($h >= 18 and $h <= 19) $puntuacionh = 6;
	if($h >= 20 and $h <= 22) $puntuacionh = 7;
	if($h >= 23 and $h <= 24) $puntuacionh = 8;
	if($h == 25)  $puntuacionh = 9;
	if($h == 26)  $puntuacionh = 10;
	
	if($i >= 0 and $i <= 1) $puntuacioni = 1;
	if($i >= 2 and $i <= 3) $puntuacioni = 2;
	if($i == 4)  $puntuacioni = 3;
	if($i == 5)  $puntuacioni = 4;
	if($i >= 6 and $i <= 7) $puntuacioni = 5;
	if($i >= 8 and $i <= 9) $puntuacioni = 6;
	if($i == 10)  $puntuacioni = 7;
	if($i >= 11 and $i <= 12) $puntuacioni = 8;
	if($i == 13)  $puntuacioni = 9;
	if($i >= 14 and $i <= 20) $puntuacioni = 10;
	
	if($l >= 0 and $l <= 2) $puntuacionl = 1;
	if($l == 3)  $puntuacionl = 2;
	if($l >= 4 and $l <= 5) $puntuacionl = 3;
	if($l >= 6 and $l <= 7) $puntuacionl = 4;
	if($l >= 8 and $l <= 9) $puntuacionl = 5;
	if($l == 10)  $puntuacionl = 6;
    if($l >= 11 and $l <= 12) $puntuacionl = 7;
	if($l >= 13 and $l <= 14) $puntuacionl = 8;
	if($l == 15)  $puntuacionl = 9;
	if($l >= 16 and $l <= 20) $puntuacionl = 10;
	
	if($m >= 0 and $m <= 6) $puntuacionm = 1;
	if($m == 7)  $puntuacionm = 2;
	if($m >= 8 and $m <= 9) $puntuacionm = 3;
	if($m == 10)  $puntuacionm = 4;
	if($m >= 11 and $m <= 12) $puntuacionm = 5;
	if($m >= 13 and $m <= 14) $puntuacionm = 6;
	if($m >= 15 and $m <= 16) $puntuacionm = 7;
	if($m == 17) $puntuacionm = 8;
	if($m == 18) $puntuacionm = 9;
	if($m >= 19 and $m <= 26) $puntuacionm = 10;
	
	if($n >= 0 and $n <= 5) $puntuacionn = 1;
	if($n == 6)  $puntuacionn = 2;
	if($n >= 7 and $n <= 8) $puntuacionn = 3;
	if($n >= 9 and $n <= 10) $puntuacionn = 4;
	if($n == 11)  $puntuacionn = 5;
	if($n == 12)  $puntuacionn = 6;
	if($n >= 13 and $n <= 14) $puntuacionn = 7;
	if($n == 15)  $puntuacionn = 8;
	if($n >= 16 and $n <= 17) $puntuacionn = 9;
	if($n >= 18 and $n <= 20) $puntuacionn = 10;
	
	if($o >= 0 and $o <= 3) $puntuaciono = 1;
	if($o >= 4 and $o <= 5) $puntuaciono = 2;
	if($o == 6)  $puntuaciono = 3;
	if($o == 7)  $puntuaciono = 4;
	if($o >= 8 and $o <= 10) $puntuaciono = 5;
	if($o == 11)  $puntuaciono = 6;
	if($o >= 12 and $o <= 14) $puntuaciono = 7;
	if($o >= 15 and $o <= 16) $puntuaciono = 8;
	if($o >= 17 and $o <= 19) $puntuaciono = 9;
	if($o >= 20 and $o <= 26 ) $puntuaciono = 10;
	
	if($q1 >= 0 and $q1 <= 4) $puntuacionq1 = 1;
	if($q1 >= 5 and $q1 <= 6) $puntuacionq1 = 2;
	if($q1 == 7)  $puntuacionq1 = 3;
	if($q1 >= 8 and $q1 <= 9) $puntuacionq1 = 4;
	if($q1 == 10)  $puntuacionq1 = 5;
	if($q1 >= 11 and $q1 <= 12) $puntuacionq1 = 6;
	if($q1 >= 13 and $q1 <= 14) $puntuacionq1 = 7;
	if($q1 == 15)  $puntuacionq1 = 8;
	if($q1 == 16)  $puntuacionq1 = 9;
	if($q1 >= 17 and $q1 <= 20) $puntuacionq1 = 10;
	
	if($q2 >= 0 and $q2 <= 3) $puntuacionq2 = 1;
	if($q2 >= 4 and $q2 <= 5) $puntuacionq2 = 2;
	if($q2 >= 6 and $q2 <= 7) $puntuacionq2 = 3;
	if($q2 == 8)  $puntuacionq2 = 4;
	if($q2 >= 9 and $q2 <= 10) $puntuacionq2 = 5;
	if($q2 >= 11 and $q2 <= 12) $puntuacionq2 = 6;
	if($q2 == 13)  $puntuacionq2 = 7;
	if($q2 >= 14 and $q2 <= 15) $puntuacionq2 = 8;
	if($q2 >= 16 and $q2 <= 17) $puntuacionq2 = 9;
	if($q2 >= 18 and $q2 <= 20) $puntuacionq2 = 10;
		
	if($q3 >= 0 and $q3 <= 5) $puntuacionq3 = 1;
	if($q3 >= 6 and $q3 <= 8) $puntuacionq3 = 2;
	if($q3 >= 9 and $q3 <= 10) $puntuacionq3 = 3;
	if($q3 >= 11 and $q3 <= 12) $puntuacionq3 = 4;
	if($q3 == 13)  $puntuacionq3 = 5;
	if($q3 >= 14 and $q3 <= 15) $puntuacionq3 = 6;
	if($q3 == 16)  $puntuacionq3 = 7;
	if($q3 == 17)  $puntuacionq3 = 8;
	if($q3 == 18)  $puntuacionq3 = 9;
	if($q3 >= 19 and $q3 <= 20) $puntuacionq3 = 10;
	
	if($q4 >= 0 and $q4 <= 1) $puntuacionq4 = 1;
	if($q4 == 2)  $puntuacionq4 = 2;
	if($q4 == 3)  $puntuacionq4 = 3;
	if($q4 >= 4 and $q4 <= 5) $puntuacionq4 = 4;
	if($q4 >= 6 and $q4 <= 7) $puntuacionq4 = 5;
	if($q4 >= 8 and $q4 <= 9) $puntuacionq4 = 6;
	if($q4 >= 10 and $q4 <= 11) $puntuacionq4 = 7;
	if($q4 >= 12 and $q4 <= 13) $puntuacionq4 = 8;
	if($q4 >= 14 and $q4 <= 16) $puntuacionq4 = 9;
	if($q4 >= 17 and $q4 <= 26) $puntuacionq4 = 10;
		
	break;	
default:
	break;
}	

$checked = '<span class="badge badge-success"><b>X</b></span>';

?>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Cuestionario realizado el fecha</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

		<div width="100%" id="tabla_perfil_imprimir">
			<table>
				<tbody>
					<tr>
						<div class="form-group col-xs-12 col-xs-12 text-muted well well-sm no-shadow">
	      
					      <div class="col-md-4 col-sm-4 col-xs-12">
					       <span class="fa fa-user" aria-hidden="true"></span> <b>NOMBRE: </b><?=info_tbl_usuarios("../", "us", $_GET["info"]);?> 
					      </div>
					      
					          
					      <div class="col-md-5 col-sm-5 col-xs-12">
					        <span class="fa fa-graduation-cap"></span> <b>CARRERA: </b><?=info_tbl_usuarios("../", "car", $_GET["info"]);?>
					      </div>

					      <div class="col-md-3 col-sm-3 ">
					        <?=info_tbl_usuarios("../", "sexo", $_GET["info"]);?></b>
					      </div>

					    </div>

					</tr>
				</tbody>
			</table>    
	        <table width="100%" class="table table-striped table-bordered table-responsive">
				<thead>
					<tr align="center">
						<th ><b>FACTOR</b></th>
						<th align="center"><b>TOTAL</b></th>
						<th align="center"><b>ESTANDAR</b></th>
						<th width="22%" align="center"><b>BAJA PUNTUACIÓN DESCRIPCIÓN</b></th>
						<th width="40%" align="center" colspan="11"><b>PUNTUACIÓN DE ESTENES PROMEDIO</b></th>
						<th width="22%" align="center"><b>ALTA PUNTUACIÓN DESCRIPCIÓN</b></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td align="center"><strong>A</strong></td>
						<td align="center"><?=$a;?></td>
						<td align="center"><?php echo @$puntuaciona; ?></td>
						<td><small>RESERVADO, DISCRETO, CRÍTICO, APARTADO, FLEXIBLE (Soliloquia) </small></td>
						<td align="center"><?php echo ($puntuaciona==1)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==2)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==3)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==4)?  $checked : "" ?></td>
						<td align="center" bgcolor="#ededed"><?php echo ($puntuaciona==5)?  $checked : "" ?></td>
						<td align="center" bgcolor="#ededed"><b>A</b></td>
						<td align="center" bgcolor="#ededed"><?php echo ($puntuaciona==6)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==7)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==8)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==9)?  $checked : "" ?></td>
						<td align="center"><?php echo ($puntuaciona==10)?  $checked : "" ?></td>
						<td><small>EXPRESIVO, AFECTUOSO, COMPLACIENTE, PARTICIPANTE (Sociabilidad)</small> </td>
					</tr>
					<tr>
						<td align="center"><strong>B</strong></td>
						<td align="center"><?=$b;?></td>
						<td align="center"><?=@$puntuacionb;?></td>
						<td><small><b>MENOS INTELIGENTE, PENSAMIENTO CONCRETO (Baja capacidad mental escolar) </b></small></td>
						<td align="center"><?=($puntuacionb == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionb == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>B</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionb == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionb == 10)? $checked : "";?></td>
						<td><small>MAS INTELIGENTE, PENSAMIENTO, ABSTRACTO, BRILLANTE (Alta capacidad mental escolar)</small> </td>
					</tr>
					<tr>
						<td align="center"><strong>C</strong></td>
						<td align="center"><?=$c;?></td>
						<td align="center"><?=@$puntuacionc;?></td>
						<td><small><b>AFECTADO POR SENTIMIENTOS, MENOS ESTABLILIDAD EMOCIONAL, PERTURBABLE (Debilidad del yo) </b></small></td>
						<td align="center"><?=($puntuacionc == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionc == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>C</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionc == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionc == 10)? $checked : "";?></td>
						<td><small>EMOCIONALMENTE ESTABLE, MADURO, SE ENFRENTA A LA REALIDAD (fuerza superior del yo)</small> </td>
					</tr>
					<tr>
						<td align="center"><strong>E</strong></td>
						<td align="center"><?=$e;?></td>
						<td align="center"><?=@$puntuacione;?></td>
						<td><small>SUMISO, INDULGENTE, OBEDIENTE, DOCIL, SERVICIAL (Sumisión) </small></td>
						<td align="center"><?=($puntuacione == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacione == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>E</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacione == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacione == 10)? $checked : "";?></td>
						<td><small><b>AFIRMATIVO, AGRESIVO, TERCO, COMPETITIVO (Dominante)</b></small> </td>
					</tr>
					<tr>
						<td align="center"><strong>F</strong></td>
						<td align="center"><?=$f;?></td>
						<td align="center"><?=@$puntuacionf;?></td>
						<td><small>SOBRIO, TACITURNO, SERIO (Retraimiento)</small></td>
						<td align="center"><?=($puntuacionf == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionf == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>F</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionf == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionf == 10)? $checked : "";?></td>
						<td><small>DESPREOCUPADO, ENTUSIASTA (Impetuosidad) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>G</strong></td>
						<td align="center"><?=$g;?></td>
						<td align="center"><?=@$puntuaciong?></td>
						<td><small><b>ACTIVO, DESACATA LAS REGLAS (Super yo débil) </b></small></td>
						<td align="center"><?=($puntuaciong == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuaciong == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>G</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuaciong == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuaciong == 10)? $checked : "";?></td>
						<td><small>ESCRUPULOSO, PERSISTENTE, MORALISTA, JUICIOSO (Super yo fuerte) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>H</strong></td>
						<td align="center"><?=$h;?></td>
						<td align="center"><?=@$puntuacionh;?></td>
						<td><small>RECATADO, TIMIDO, REPRIMIDO (Timidez) </small></td>
						<td align="center"><?=($puntuacionh == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionh == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>H</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionh == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionh == 10)? $checked : "";?></td>
						<td><small>AVENTURADO, DESINHIBIDO, GUSTO POR CONOCER GENTE (Audacia) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>I</strong></td>
						<td align="center"><?=$i;?></td>
						<td align="center"><?=@$puntuacioni;?></td>
						<td><small>CALCULADOR, CONFIADO EN SÍ MISMO, REALISTA (Severidad) </small></td>
						<td align="center"><?=($puntuacioni == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacioni == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>I</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacioni == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacioni == 10)? $checked : "";?></td>
						<td><small>AFECTUOSO, SENSITIVO, DEPENDIENTE, SOBREPROTEGIDO (Sensibilidad emocional) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>L</strong></td>
						<td align="center"><?=$l;?></td>
						<td align="center"><?=@$puntuacionl?></td>
						<td><small>CONFIADO, ACEPTA CONDICIONES (Confianza) </small></td>
						<td align="center"><?=($puntuacionl == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionl == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>L</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionl == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionl == 10)? $checked : "";?></td>
						<td><small>DESCONFIADO, SUSPICAZ (Desconfianza) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>M</strong></td>
						<td align="center"><?=$m;?></td>
						<td align="center"><?=@$puntuacionm;?></td>
						<td><small>PRÁCTICO, TIENE PREOCUPACIONES REALES (Objetividad) </small></td>
						<td align="center"><?=($puntuacionm == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionm == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>M</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionm == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionm == 10)? $checked : "";?></td>
						<td><small>IMAGINATIVO, BOHEMIO, DISTRAIDO (subjetividad) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>N</strong></td>
						<td align="center"><?=$n;?></td>
						<td align="center"><?=@$puntuacionn;?></td>
						<td><small>INGENUO, SIN PRETENSIONES, SINCERO PERO SOCIALMENTE TORPE. (Ingenuidad) </small></td>
						<td align="center"><?=($puntuacionn == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionn == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>N</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionn == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionn == 10)? $checked : "";?></td>
						<td><small>ASTUTO, CULTIVADO, SOCIALMENTE CONSCIENTE (Astucia) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>O</strong></td>
						<td align="center"><?=$o;?></td>
						<td align="center"><?=@$puntuaciono;?></td>
						<td><small>SEGURO DE SÍ MISMO, APACIBLE, SEGURO, COMPLACIENTE, SERENO (Adecuación serenal) </small></td>
						<td align="center"><?=($puntuaciono == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuaciono == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>O</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuaciono == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuaciono == 10)? $checked : "";?></td>
						<td><small><b>APRENSIVO, AUTORECRIMINANTE, INSEGURO, PREOCUPADO (propensión a la culpabilidad)</b></small></td>
					</tr>
					<tr>
						<td align="center"><strong>Q1</strong></td>
						<td align="center"><?=$q1;?></td>
						<td align="center"><?=@$puntuacionq1;?></td>
						<td><small>CONSERVADOR, RESPETUOSO DE LAS IDEAS ESTABLECIDAS (Conservadurismo) </small></td>
						<td align="center"><?=($puntuacionq1 == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq1 == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>Q1</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq1 == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq1 == 10)? $checked : "";?></td>
						<td><small>EXPERIMENTADOR, LIBERAL, PENSAMIENTO LIBRE (Radicalismo) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>Q2</strong></td>
						<td align="center"><?=$q2;?></td>
						<td align="center"><?=@$puntuacionq2;?></td>
						<td><small>DEPENDIENTE DEL GRUPO, SE "ADHIERE", Y ES UN SEGUIDOR EJEMPLAR (Dependencia grupal)</small></td>
						<td align="center"><?=($puntuacionq2 == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq2 == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>Q2</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq2 == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq2 == 10)? $checked : "";?></td>
						<td><small>AUTOSUFICIENTE, RICO EN RECURSOS, PREFIERE SUS PROPIAS DECISIONES (Autosuficiencia) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>Q3</strong></td>
						<td align="center"><?=$q3;?></td>
						<td align="center"><?=@$puntuacionq3;?></td>
						<td><small><b>INCONTROLADO, FLOJO, SIGUE SUS PROPIOS IMPULSOS, INDIFERENTE A LAS REGLAS.(Indiferencia) </b></small></td>
						<td align="center"><?=($puntuacionq3 == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq3 == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>Q3</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq3 == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq3 == 10)? $checked : "";?></td>
						<td><small>CONTROLADO, FIRME, FUERZA DE VOLUNTAD, ESCRUPULOSO SOCIALMENTE, COMPULSIVO (Control) </small></td>
					</tr>
					<tr>
						<td align="center"><strong>Q4</strong></td>
						<td align="center"><?=$q4;?></td>
						<td align="center"><?=@$puntuacionq4;?></td>
						<td><small>RELAJADO, TRANQUILO, NO FRUSTRADO, SERENO. (Tranquilidad) </small></td><!--<i class="fa fa-circle"></i>-->
						<td align="center"><?=($puntuacionq4 == 1)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 2)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 3)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 4)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq4 == 5)? $checked : "";?></td>
						<td align="center" bgcolor="#ededed"><b>Q1</b></td>
						<td align="center" bgcolor="#ededed"><?=($puntuacionq4 == 6)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 7)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 8)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 9)? $checked : "";?></td>
						<td align="center"><?=($puntuacionq4 == 10)? $checked : "";?></td>
						<td><small><b>TENSO, FRUSTRADO, IMPULSIVO, SOBRE EXITADO (Tensión) </b></small></td>
					</tr>
					<tr>
						<td colspan="4" align="right"><small><p>El estén</p><p>por</p></small></td>
						<td align="center"><small><p>1</p><p>2.3%</p></small></td>
						<td align="center"><small><p>2</p><p>4.4%</p></small></td>
						<td align="center"><small><p>3</p><p>9.2%</p></small></td>
						<td align="center"><small><p>4</p><p>15.0%</p></small></td>
						<td align="center"><small><p>5</p><p>19.1%</p></small></td>
						<td align="center">&nbsp;</td>
						<td align="center"><small><p>6</p><p>19.1%</p></small></td>
						<td align="center"><small><p>7</p><p>15.0%</p></small></td>
						<td align="center"><small><p>8</p><p>9.2%</p></small></td>
						<td align="center"><small><p>9</p><p>4.4%</p></small></td>
						<td align="center"><small><p>10</p><p>2.3%</p></small></td>
						<td align="left"><small><p>es obtenido</p><p>de adultos</p></small></td>
					</tr>
					
				</tbody>

			</table>
		</div>

      </div>
    </div>
  </div>
</div>