<?php
session_start();
$id = $_SESSION["session_student"];
//incluir la conexion a la base de datos

include "../db/conexionDB.php";

/**
 * Zona Honoraria..
 */
	date_default_timezone_set('America/Merida');


@$A3 = $_POST['3A'];
@$A4 = $_POST['4A'];
@$A5 = $_POST['5A'];
@$B6 = $_POST['6B'];
@$B7 = $_POST['7B'];
@$A8 = $_POST['8A'];
@$B9 = $_POST['9B'];
@$A10 = strtoupper($_POST['10A']);

@$B11 = strtoupper($_POST['11B']);
@$B12 = strtoupper($_POST['12B']);
@$A13= strtoupper($_POST['13A']);
@$B14= strtoupper($_POST['14B']);
@$B15= strtoupper($_POST['15B']);
@$A16= strtoupper($_POST['16A']);
@$A17= strtoupper($_POST['17A']);
@$B18= strtoupper($_POST['18B']);
@$B19= strtoupper($_POST['19B']);
@$A20= strtoupper($_POST['20A']);
@$A21= strtoupper($_POST['21A']);
@$B22= strtoupper($_POST['22B']);
@$A23= strtoupper($_POST['23A']);
@$A24= strtoupper($_POST['24A']);
@$B25= strtoupper($_POST['25B']);
@$A26= strtoupper($_POST['26A']);
@$A27= strtoupper($_POST['27A']);
@$B28= strtoupper($_POST['28B']);
@$A29= strtoupper($_POST['29A']);
@$A30= strtoupper($_POST['30A']);
@$B31= strtoupper($_POST['31B']);
@$B32= strtoupper($_POST['32B']);
@$A33= strtoupper($_POST['33A']);
@$B34= strtoupper($_POST['34B']);
@$A35= strtoupper($_POST['35A']);
@$A36= strtoupper($_POST['36A']);
@$B37= strtoupper($_POST['37B']);
@$B39= strtoupper($_POST['39B']);
@$B40= strtoupper($_POST['40B']);
@$A41= strtoupper($_POST['41A']);
@$A42= strtoupper($_POST['42A']);
@$B43= strtoupper($_POST['43B']);

@$B44= strtoupper($_POST['44B']);
@$A45= strtoupper($_POST['45A']);
@$A46= strtoupper($_POST['46A']);
@$B47= strtoupper($_POST['47B']);
@$A48= strtoupper($_POST['48A']);
@$B49= strtoupper($_POST['49B']);
@$B50= strtoupper($_POST['50B']);
@$A51= strtoupper($_POST['51A']);
@$A52= strtoupper($_POST['52A']);
@$B53= strtoupper($_POST['53B']);
@$B54= strtoupper($_POST['54B']);
@$A55= strtoupper($_POST['55A']);
@$B56= strtoupper($_POST['56B']);
@$B57= strtoupper($_POST['57B']);
@$A58= strtoupper($_POST['58A']);
@$B59= strtoupper($_POST['59B']);
@$A60= strtoupper($_POST['60A']);
@$A61= strtoupper($_POST['61A']);
@$B62= strtoupper($_POST['62B']);
@$A63= strtoupper($_POST['63A']);
@$A64= strtoupper($_POST['64A']);

@$B65= strtoupper($_POST['65B']);
@$A66= strtoupper($_POST['66A']);
@$A67= strtoupper($_POST['67A']);
@$B68= strtoupper($_POST['68B']);
@$B69= strtoupper($_POST['69B']);
@$A70= strtoupper($_POST['70A']);
@$B71= strtoupper($_POST['71B']);
@$B72= strtoupper($_POST['72B']);
@$A73= strtoupper($_POST['73A']);
@$B74= strtoupper($_POST['74B']);
@$B75= strtoupper($_POST['75B']);
@$A76= strtoupper($_POST['76A']);
@$B77= strtoupper($_POST['77B']);
@$B78= strtoupper($_POST['78B']);
@$A79= strtoupper($_POST['79A']);
@$A80= strtoupper($_POST['80A']);
@$B81= strtoupper($_POST['81B']);
@$A82= strtoupper($_POST['82A']);
@$A83= strtoupper($_POST['83A']);
@$B84= strtoupper($_POST['84B']);
@$A85= strtoupper($_POST['85A']);
@$A86= strtoupper($_POST['86A']);
@$B87= strtoupper($_POST['87B']);
@$A88= strtoupper($_POST['88A']);

@$A89= strtoupper($_POST['89A']);
@$B90= strtoupper($_POST['90B']);
@$B91= strtoupper($_POST['91B']);

@$A92= strtoupper($_POST['92A']);
@$B93= strtoupper($_POST['93B']);
@$B94= strtoupper($_POST['94B']);
@$A95= strtoupper($_POST['95A']);
@$B96= strtoupper($_POST['96B']);
@$B97= strtoupper($_POST['97B']);
@$A98= strtoupper($_POST['98A']);
@$B99= strtoupper($_POST['99B']);
@$B100= strtoupper($_POST['100B']);
@$A101= strtoupper($_POST['101A']);
@$B102= strtoupper($_POST['102B']);
@$B103= strtoupper($_POST['103B']);
@$A104= strtoupper($_POST['104A']);
@$A105= strtoupper($_POST['105A']);
@$B106= strtoupper($_POST['106B']);
@$A107= strtoupper($_POST['107A']);
@$A108= strtoupper($_POST['108A']);
@$B109= strtoupper($_POST['109B']);
@$A110= strtoupper($_POST['110A']);
@$A111= strtoupper($_POST['111A']);
@$B112= strtoupper($_POST['112B']);
@$A113= strtoupper($_POST['113A']);
@$A114= strtoupper($_POST['114A']);
@$B115= strtoupper($_POST['115B']);
@$B116= strtoupper($_POST['116B']);
@$A117= strtoupper($_POST['117A']);
@$B118= strtoupper($_POST['118B']);
@$B119= strtoupper($_POST['119B']);
@$A120= strtoupper($_POST['120A']);
@$B121= strtoupper($_POST['121B']);
@$B122= strtoupper($_POST['122B']);
@$A123= strtoupper($_POST['123A']);
@$B124= strtoupper($_POST['124B']);
@$B125= strtoupper($_POST['125B']);
@$A126= strtoupper($_POST['126A']);
@$B127= strtoupper($_POST['127B']);
@$B128= strtoupper($_POST['128B']);
@$A129= strtoupper($_POST['129A']);
@$A130= strtoupper($_POST['130A']);
@$B131= strtoupper($_POST['131B']);
@$A132= strtoupper($_POST['132A']);
@$A133= strtoupper($_POST['133A']);

@$B134= strtoupper($_POST['134B']);
@$A135= strtoupper($_POST['135A']);
@$A136= strtoupper($_POST['136A']);
@$B137= strtoupper($_POST['137B']);
@$B138= strtoupper($_POST['138B']);
@$A139= strtoupper($_POST['139A']);
@$B140= strtoupper($_POST['140B']);
@$B141= strtoupper($_POST['141B']);
@$A142= strtoupper($_POST['142A']);
@$B143= strtoupper($_POST['143B']);
@$B144= strtoupper($_POST['144B']);
@$A145= strtoupper($_POST['145A']);
@$B146= strtoupper($_POST['146B']);
@$A147= strtoupper($_POST['147A']);
@$A148= strtoupper($_POST['148A']);
@$B149= strtoupper($_POST['149B']);
@$B150= strtoupper($_POST['150B']);
@$A151= strtoupper($_POST['151A']);
@$B152= strtoupper($_POST['152B']);
@$B153= strtoupper($_POST['153B']);
@$A154= strtoupper($_POST['154A']);
@$B156= strtoupper($_POST['156B']);
@$A157= strtoupper($_POST['157A']);
@$A158= strtoupper($_POST['158A']);
@$B159= strtoupper($_POST['159B']);
@$B160= strtoupper($_POST['160B']);
@$A161= strtoupper($_POST['161A']);
@$B162= strtoupper($_POST['162B']);

@$B163= strtoupper($_POST['163B']);
@$A164= strtoupper($_POST['164A']);
@$B165= strtoupper($_POST['165B']);
@$B166= strtoupper($_POST['166B']);
@$A167= strtoupper($_POST['167A']);
@$B168= strtoupper($_POST['168B']);
@$A169= strtoupper($_POST['169A']);
@$A170= strtoupper($_POST['170A']);
@$B171= strtoupper($_POST['171B']);
@$A172= strtoupper($_POST['172A']);
@$A173= strtoupper($_POST['173A']);
@$B174= strtoupper($_POST['174B']);
@$B175= strtoupper($_POST['175B']);
@$A176= strtoupper($_POST['176A']);
@$B177= strtoupper($_POST['177B']);
@$B178= strtoupper($_POST['178B']);
@$A179= strtoupper($_POST['179A']);
@$B181= strtoupper($_POST['181B']);
@$A182= strtoupper($_POST['182A']);
@$A183= strtoupper($_POST['183A']);
@$B184= strtoupper($_POST['184B']);
@$B185= strtoupper($_POST['185B']);
@$sexo= strtoupper($_POST['sexo']); 

	$actualizar_sexo = $con->prepare("UPDATE tbl_usuarios SET us_genero = '".$sexo."' WHERE us_id = '".$id."'; ");
	$actualizar_sexo->execute();



	$insert = $con->prepare("INSERT INTO tbl_app2_resultados SET 
						us_id = '$id',
						3a = '$A3',
						4a = '$A4',
						5a= '$A5',
						6b = '$B6',
						7b = '$B7',
						8a = '$A8',
						9b = '$B9',
						10a = '$A10',
						11b = '$B11',
						12b = '$B12',
						13a= '$A13',
						14b= '$B14',
						15b= '$B15',
						16a= '$A16',
						17a= '$A17',
						18b= '$B18',
						19b= '$B19',
						20a= '$A20',
						21a= '$A21',
						22b= '$B22',
						23a= '$A23',
						24a= '$A24',
						25b= '$B25',
						26a= '$A26',
						27a= '$A27',
						28b= '$B28',
						29a= '$A29',
						30a= '$A30',
						31b= '$B31',
						32b= '$B32',
						33a= '$A33',
						34b= '$B34',
						35a= '$A35',
						36a= '$A36',
						37b= '$B37',
						39b= '$B39',
						40b= '$B40',
						41a= '$A41',
						42a= '$A42',
						43b= '$B43',
						44b= '$B44',
						45a= '$A45',
						46a= '$A46',
						47b= '$B47',
						48a= '$A48',
						49b= '$B49',
						50b= '$B50',
						51a= '$A51',
						52a= '$A52',
						53b= '$B53',
						54b= '$B54',
						55a= '$A55',
						56b= '$B56',
						57b= '$B57',
						58a= '$A58',
						59b= '$B59',
						60a= '$A60',
						61a= '$A61',
						62b= '$B62',
						63a= '$A63',
						64a= '$A64',
						65b= '$B65',
						66a= '$A66',
						67a= '$A67',
						68b= '$B68',
						69b= '$B69',
						70a= '$A70',
						71b= '$B71',
						72b= '$B72',
						73a= '$A73',
						74b= '$B74',
						75b= '$B75',
						76a= '$A76',
						77b= '$B77',
						78b= '$B78',
						79a= '$A79',
						80a= '$A80',
						81b= '$B81',
						82a= '$A82',
						83a= '$A83',
						84b= '$B84',
						85a= '$A85',
						86a= '$A86',
						87b= '$B87',
						88a= '$A88',
						89a= '$A89',
						90b= '$B90',
						91b= '$B91',
						92a= '$A92',
						93b= '$B93',
						94b= '$B94',
						95a= '$A95',
						96b= '$B96',
						97b= '$B97',
						98a= '$A98',
						99b= '$B99',
						100b= '$B100',
						101a= '$A101',
						102b= '$B102',
						103b= '$B103',
						104a= '$A104',
						105a= '$A105',
						106b= '$B106',
						107a= '$A107',
						108a= '$A108',
						109b= '$B109',
						110a= '$A110',
						111a= '$A111',
						112b= '$B112',
						113a= '$A113',
						114a= '$A114',
						115b= '$B115',
						116b= '$B116',
						117a= '$A117',
						118b= '$B118',
						119b= '$B119',
						120a= '$A120',
						121b= '$B121',
						122b= '$B122',
						123a= '$A123',
						124b= '$B124',
						125b= '$B125',
						126a= '$A126',
						127b= '$B127',
						128b= '$B128',
						129a= '$A129',
						130a= '$A130',
						131b= '$B131',
						132a= '$A132',
						133a= '$A133',
						134b= '$B134',
						135a= '$A135',
						136a= '$A136',
						137b= '$B137',
						138b= '$B138',
						139a= '$A139',
						140b= '$B140',
						141b= '$B141',
						142a= '$A142',
						143b= '$B143',
						144b= '$B144',
						145a= '$A145',
						146b= '$B146',
						147a= '$A147',
						148a= '$A148',
						149b= '$B149',
						150b= '$B150',
						151a= '$A151',
						152b= '$B152',
						153b= '$B153',
						154a= '$A154',
						156b= '$B156',
						157a= '$A157',
						158a= '$A158',
						159b= '$B159',
						160b= '$B160',
						161a= '$A161',
						162b= '$B162',
						163b= '$B163',
						164a= '$A164',
						165b= '$B165',
						166b= '$B166',
						167a= '$A167',
						168b= '$B168',
						169a= '$A169',
						170a= '$A170',
						171b= '$B171',
						172a= '$A172',
						173a= '$A173',
						174b= '$B174',
						175b= '$B175',
						176a= '$A176',
						177b= '$B177',
						178b= '$B178',
						179a= '$A179',
						181b= '$B181',
						182a= '$A182',
						183a= '$A183',
						184b= '$B184',
						185b= '$B185' ");
		$insert->execute();



@$rangoA = $A3+$A26+$A27+$A51+$A52+$A76+$A101+$A126+$A151+$A176;
@$rangoB = $B28+$B53+$B54+$B77+$B78+$B102+$B103+$B127+$B128+$B152+$B153+$B177+$B178;
@$rangoC = $A4+$A5+$A29+$A30+$A55+$A79+$A80+$A104+$A105+$A129+$A130+$A154+$A179;
@$rangoE = $B6+$B7+$B31+$B32+$B56+$B57+$B81+$B106+$B131+$B155+$B156+$B180+$B181;
@$rangoF = $A8+$A33+$A58+$A82+$A83+$A107+$A108+$A132+$A133+$A157+$A158+$A182+$A183;
@$rangoG = $B9+$B34+$B59+$B84+$B109+$B134+$B159+$B160+$B184+$B185;
@$rangoH = $A10+$A35+$A36+$A60+$A61+$A85+$A86+$A110+$A111+$A135+$A136+$A161;
@$rangoI = $B4+$B12+$B37+$B62+$B87+$B112+$B138+$B162+$B163;
@$rangoL = $A13+$A38+$A63+$A64+$A88+$A89+$A113+$A114+$A139+$A154;
@$rangoM = $B14+$B15+$B39+$B40+$B65+$B90+$B91+$B115+$B116+$B140+$B141+$B165+$B166;
@$rangoN = $A16+$A17+$A41+$A42+$A66+$A67+$A92+$A117+$A142+$A167;
@$rangoO = $B18+$B19+$B43+$B44+$B68+$B69+$B93+$B94+$B118+$B119+$B143+$B144;
@$rangoq1 = $A20+$A21+$A45+$A46+$A70+$A95+$A120+$A169+$A170;
@$rangoq2 = $B22+$B47+$B71+$B72+$B96+$B97+$B121+$B122+$B146+$B171;
@$rangoq3 = $A23+$A24+$A48+$A73+$A98+$A123+$A147+$A148+$A172+$A173;
@$rangoq4 = $B25+$B49+$B50+$B74+$B75+$B99+$B100+$B124+$B125+$B149+$B150+$B174+$B175;

$fecha = date("Y-m-d H:i:s");

$insert_rango = $con -> prepare("INSERT INTO tbl_app2_rangos SET
										us_id = '$id',
										rangoa = '$rangoA',
										rangob = '$rangoB',
										rangoc = '$rangoC',
										rangoe = '$rangoE',
										rangof = '$rangoF',
										rangog = '$rangoG',
										rangoh = '$rangoH',
										rangoi = '$rangoI',
										rangol = '$rangoL',
										rangom = '$rangoM',
										rangon = '$rangoN',
										rangoo = '$rangoO',
										rangoq1 = '$rangoq1',
										rangoq2 = '$rangoq2',
										rangoq3 = '$rangoq3',
										rangoq4 = '$rangoq4',
										fec_term = '$fecha' ");
$insert_rango->execute(); 


echo "ok";




?>