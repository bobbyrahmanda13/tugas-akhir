<?php 
session_start();
	if (empty($_SESSION['userpasien']) AND empty ($_SESSION['passpasien'])){
	    
	}else{
	

	
 include "../koneksi.php";
	   $sql = mysql_query("select * from pasien where username = '$_SESSION[userpasien]'");
	   $r = mysql_fetch_array($sql);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fuzzy Logic</title>
<style type="text/css">
<!--
.style5 {font-size: 13px; font-style: italic; }
-->
</style>
</head>

<body>
<table width="71%" align="center">
  <tr>
    <td><fieldset>
    <legend> </legend><img src="../img/b.PNG" width="100%" height="121" />
    </fieldset>    </td>
  </tr>
  <tr>
    <td><div align="center">
      <fieldset><?php include("menu.htm"); ?>
      </fieldset>
    </div></td>
  </tr><?php 
	include('koneksi.php');
	$query = mysql_query("select * from kriteria  natural join defuzifikasi where username = '$_SESSION[userpasien]' order by id desc");
	$no = 1;
	$hasil = mysql_fetch_array($query);
	$g1=$hasil['g1'];
	$g2=$hasil['g2'];
	$g3=$hasil['g3'];
	$g4=$hasil['g4'];
	$g5=$hasil['g5'];
	$g6=$hasil['g6'];
	$g7=$hasil['g7'];
	$g8=$hasil['g8'];
	$g9=$hasil['g9'];
	$g10=$hasil['g10'];
	$g11=$hasil['g11'];
	$g12=$hasil['g12'];
	
$g1_ax=(3.4-$g1)/(0.4); 
	if($g1>=1 and $g1<=3){
		$g1_a=1;
		}
	if($g1>=3.4){
		$g1_a=0;
		}	
	if($g1>=3 and $g1<=3.4){
		$g1_a=$g1_ax;
		}
if($g1>=3 and $g1<=3.4){
	$g1_b=($g1-3)/(3.4-3);
	}
if($g1>3.4 and $g1<=5.4){
	$g1_b=(5.4-$g1)/(5.4-3.4);
	}
	else{
	$g1_b=0;
	}
$g1_cx=($g1-5)/(5.4-5); 
	if($g1<=5){
		$g1_c=0;
		}
	if($g1>=5.4 and $g1<=7){
		$g1_c=1;
		}
	if($g1>=5 and $g1<=5.4){
		$g1_c=$g1_cx;
		}
//
$g2_ax=(25-$g2)/(25-21); 
	if($g2>=15 and $g2<=21){
		$g2_a=1;
		}
	if($g2>=25){
		$g2_a=0;
		}	
	if($g2>=21 and $g2<=25){
		$g2_a=$g2_ax;
		}
	
	
if($g2>=21 and $g2<=25){
	$g2_b=($g2-21)/(25-21);
	}
if($g2>25 and $g2<=35){
	$g2_b=(35-$g2)/(35-25);
	}
	else
	{
	$g2_b=0;
	}
	
$g2_cx=($g2-32)/(35-32); 
	if($g2<=32){
		$g2_c=0;
		}
	if($g2>=35){
		$g2_c=1;
		}
	if($g2>=32 and $g2<=35){
		$g2_c=$g2_cx;
		}		
//	
$g3_ax=(3.4-$g3)/(0.4); 
	if($g3>=1 and $g3<=3){
		$g3_a=1;
		}
	if($g3>=3.4){
		$g3_a=0;
		}	
	if($g3>=3 and $g3<=3.4){
		$g3_a=$g3_ax;
		}
if($g3>=3 and $g3<=3.4){
	$g3_b=($g3-3)/(3.4-3);
	}
if($g3>3.4 and $g3<=5.4){
	$g3_b=(5.4-$g3)/(5.4-3.4);
	}
	else{
	$g3_b=0;
	}
$g3_cx=($g3-5)/(5.4-5); 
	if($g3<=5){
		$g3_c=0;
		}
	if($g3>=5.4 and $g3<=7){
		$g3_c=1;
		}
	if($g3>=5 and $g3<=5.4){
		$g3_c=$g3_cx;
		}
//
//	
$g4_ax=(22-$g4)/(2); 
	if($g4<=20){
		$g4_a=1;
		}
	if($g4>=22){
		$g4_a=0;
		}	
	if($g4>=20 and $g4<=22){
		$g4_a=$g4_ax;
		}
if($g4>=20 and $g4<=22){
	$g4_b=($g4-20)/(2);
	}
if($g4>=22 and $g4<=30){
	$g4_b=(30-$g4)/(30-22);
	}
	else{
	$g4_b=0;
	}
$g4_cx=($g4-28)/(2); 
	if($g4<=28){
		$g4_c=0;
		}
	if($g4>=30){
		$g4_c=1;
		}
	if($g4>=28 and $g4<=30){
		$g4_c=$g4_cx;
		}
		
		//	
$g5_ax=(5-$g5)/(1); 
	if($g5<=4){
		$g5_a=1;
		}
	if($g5>=5	){
		$g5_a=0;
		}	
	if($g5>=4 and $g5<=5){
		$g5_a=$g5_ax;
		}
if($g5>=4 and $g5<=5){
	$g5_b=($g5-4)/(1);
	}
if($g5>=5 and $g5<=7){
	$g5_b=(7-$g5)/(2);
	}
	else{
	$g5_b=0;
	}
$g5_cx=($g5-6)/(1); 
	if($g5<=6){
		$g5_c=0;
		}
	if($g5>=7){
		$g5_c=1;
		}
	if($g5>=6 and $g5<=7)
		{
		$g5_c=$g5_cx;
		}
		

//	
$g6_ax=(5-$g6)/(1); 
	if($g6<=4){
		$g6_a=1;
		}
	if($g6>=5	){
		$g6_a=0;
		}	
	if($g6>=4 and $g6<=5){
		$g6_a=$g6_ax;
		}
if($g6>=4 and $g6<=5){
	$g6_b=($g6-4)/(1);
	}
if($g6>=5 and $g6<=7){
	$g6_b=(7-$g6)/(2);
	}
	else{
	$g6_b=0;
	}
$g6_cx=($g6-6)/(1); 
	if($g6<=6){
		$g6_c=0;
		}
	if($g6>=7){
		$g6_c=1;
		}
	if($g6>=6 and $g6<=7){
		$g6_c=$g6_cx;
		}
		

//	
$g7_ax=(36.5-$g7)/(36.5-36); 
	if($g7<=36){
		$g7_a=1;
		}
	if($g7>=36.5){
		$g7_a=0;
		}	
	if($g7>=36 and $g7<=36.5)
		{
		$g7_a=$g7_ax;
		}
if($g7>=36 and $g7<=36.5){
	$g7_b=($g7-36)/(36.5-36);
	}
if($g7>=36.5 and $g7<=37.5){
	$g7_b=(37.5-$g7)/(1);
	}
	else{
	$g7_b=0;
	}
	
$g7_cx=($g7-37)/(37.5-37); 
	if($g7<=37){
		$g7_c=0;
		}
	if($g7>=37.5){
		$g7_c=1;
		}	
	if($g7>=37 and $g7<=37.5)
		{
		$g7_c=$g7_cx;
		}
//		
$g8_ax=(3.4-$g8)/(0.4); 
	if($g8>=1 and $g8<=3){
		$g8_a=1;
		}
	if($g8>=3.4){
		$g8_a=0;
		}	
	if($g8>=3 and $g8<=3.4)
		{
		$g8_a=$g8_ax;
		}
if($g8>=3 and $g8<=3.4){
	$g8_b=($g8-3)/(3.4-3);
	}
if($g8>=3.4 and $g8<=5.4){
	$g8_b=(5.4-$g8)/(5.4-3.4);
	}
	else{
	$g8_b=0;
	}
$g8_cx=($g8-5)/(5.4-5); 
	if($g8<=5){
		$g8_c=0;
		}
	if($g8>=5.4 and $g8<=7){
		$g8_c=1;
		}
	if($g8>=5 and $g8<=5.4)
		{
		$g8_c=$g8_cx;
		}
		
//
$g9_ax=(3.4-$g9)/(0.4); 
	if($g9>=1 and $g9<=3){
		$g9_a=1;
		}
	if($g9>=3.4){
		$g9_a=0;
		}	
	if($g9>=3 and $g9<=3.4)
		{
		$g9_a=$g9_ax;
		}
if($g9>=3 and $g9<=3.4){
	$g9_b=($g9-3)/(3.4-3);
	}
if($g9>=3.4 and $g9<=5.4){
	$g9_b=(5.4-$g9)/(5.4-3.4);
	}
	else{
	$g9_b=0;
	}
$g9_cx=($g9-5)/(5.4-5); 
	if($g9<=5){
		$g9_c=0;
		}
	if($g9>=5.4 and $g9<=7){
		$g9_c=1;
		}
	if($g9>=5 and $g9<=5.4)
		{
		$g9_c=$g9_cx;
		}//

//
$g10_ax=(25-$g10)/(4); 
	if($g10>=15 and $g10<=21){
		$g10_a=1;
		}
	if($g10>=25){
		$g10_a=0;
		}	
	if($g10>=21 and $g10<=25)
		{
		$g10_a=$g10_ax;
		}
if($g10>=21 and $g10<=25){
	$g10_b=($g10-21)/(4);
	}
if($g10>=25 and $g10<=35){
	$g10_b=(35-$g10)/(35-25);
	}
	else{
	$g10_b=0;
	}
$g10_cx=($g10-32)/(35-32); 
	if($g10<=32){
		$g10_c=0;
		}
	if($g10>=35){
		$g10_c=1;
		}	
	if($g10>=32 and $g10<=35)
		{
		$g10_c=$g10_cx;
		}	
		
//	
$g11_ax=(157-$g11)/(157-155); 
	if($g11<=155){
		$g11_a=1;
		}
	if($g11>=157){
		$g11_a=0;
		}	
	if($g11>=155 and $g11<=157)
		{
		$g11_a=$g11_ax;
		}
if($g11>=155 and $g11<=157){
	$g11_b=($g11-155)/(157-155);
	}
if($g11>=157 and $g11<=167){
	$g11_b=(167-$g11)/(167-157);
	}
	else{
	$g11_b=0;
	}
$g11_cx=($g11-165)/(167-165); 
	if($g11<=165){
		$g11_c=0;
		}
	if($g11>=167){
		$g11_c=1;
		}	
	if($g11>=165 and $g11<=167)
		{
		$g11_c=$g11_cx;
		}	
//	
$g12_ax=(6-$g12)/(1); 
	if($g12<=5){
		$g12_a=1;
		}
	if($g12>=6){
		$g12_a=0;
		}	
	if($g12>=5 and $g12<=6)
		{
		$g12_a=$g12_ax;
		}
if($g12>=5 and $g12<=6){
	$g12_b=($g12-5)/(1);
	}
if($g12>=6 and $g12<=11){
	$g12_b=(11-$g12)/(11-6);
	}
	else{
	$g12_b=0;
	}
$g12_cx=($g12-9)/(11-9); 
	if($g12<=9){
		$g12_c=0;
		}
	if($g12>=11){
		$g12_c=1;
		}	
	if($g12>=9 and $g12<=11)
		{
		$g12_c=$g12_cx;
		}		//	rule
//RULE [ 1 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r1=min($g1_c,$g2_c,$g3_c,$g4_a);
//2.	RULE [ 2 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “BANYAK” THEN P01
$r2=min($g1_c,$g2_c,$g3_c,$g4_c);

//3.	RULE [ 3 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04 “SEDIKIT” THEN P01
$r3=min($g1_c,$g2_c,$g3_b,$g4_a);

//4.	RULE [ 4 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r4=min($g1_c,$g2_b,$g3_c,$g4_a);

//5.	RULE [ 5 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r5=min($g1_b,$g2_c,$g3_c,$g4_a);

//6.	RULE [ 6 ] IF G01 “SEDANG” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r6=min($g1_b,$g2_b,$g3_c,$g4_a);

//7.	RULE [ 7 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04 “BANYAK” THEN P01
$r7=min($g1_b,$g2_c,$g3_b,$g4_c);

//8.	RULE [ 8 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “SEDANG” AND G04 “NORMAL” THEN P01
$r8=min($g1_c,$g2_b,$g3_b,$g4_b);

//9.	RULE [9] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r9=min($g5_c,$g6_c,$g7_c,$g8_c,$g9_c);

//10.	RULE [10] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “SEDANG” AND G09 “SEDANG” THEN P02
$r10=min($g5_c,$g6_c,$g7_c,$g8_c,$g9_c);

//11.	RULE [11] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “DINGIN” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r11=min($g5_c,$g6_c,$g7_a,$g8_c,$g9_c);

//12.	RULE [12] IF G05 “MENGGANGGU” AND G06 “SEDANG” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r12=min($g5_b,$g6_b,$g7_c,$g8_c,$g9_c);

//13.	RULE [13] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08 “SEDANG” AND G09 “BESAR” THEN P02
$r13=min($g5_c,$g6_c,$g7_b,$g8_b,$g9_c);

//14.	RULE [14] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r14=min($g5_b,$g6_c,$g7_c,$g8_c,$g9_c);

//15.	RULE [15] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r15=min($g5_b,$g6_c,$g7_b,$g8_c,$g9_c);

//16.	RULE [16] IF G05 “SANGAT MENGGANGGU” AND G06 “NORMal” AND G07 “PANAS” AND G08 “BESAR” AND G09 “SEDANG” THEN P02
$r16=min($g5_c,$g6_b,$g7_c,$g8_c,$g9_b);

//17.	RULE [17] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r17=min($g6_c,$g10_c,$g11_a,$g12_c);

//18.	RULE [18] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “KADANG-KADANG” THEN P03
$r18=min($g6_c,$g10_c,$g11_a,$g12_b);

//19.	RULE [19] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r19=min($g6_c,$g10_b,$g11_a,$g12_c);

//20.	RULE [20] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r20=min($g6_c,$g10_c,$g11_a,$g12_c);

//21.	RULE [21] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r21=min($g6_c,$g10_b,$g11_a,$g12_c);

//22.	RULE [22] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “NORMAL” AND G12 “SERING” THEN P03
$r22=min($g6_c,$g10_c,$g11_b,$g12_c);

//23.	RULE [23] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “KADANG-KADANG” THEN P03
$r23=min($g6_c,$g10_c,$g11_a,$g12_b);

//24.	RULE [24] IF G06“BERAT” AND G10 “SEDANG” AND G11 “NORMAL” AND G12 “KADANG-KADANG” THEN P03
$r24=min($g6_c,$g10_b,$g11_b,$g12_b);

$z1=46+("$r1"*52); //BERAT
$z2=(("$r2"*44)-45)*-1; //RINGAN
$z3=(("$r3"*44)-45)*-1; //RINGAN
$z4=46+("$r4"*52); //BERAT
$z5=46+("$r5"*52); //BERAT
$z6=(("$r6"*44)-45)*-1; // RINGAN
$z7=(("$r7"*44)-45)*-1; // RINGAN
$z8=46+("$r8"*52); //BERAT
$z9=46+("$r9"*52); //BERAT
$z10=46+("$r10"*52); //BERAT
$z11=46+("$r11"*52); //BERAT
$z12=46+("$r12"*52); //BERAT
$z13=(("$r13"*44)-45)*-1; // RINGAN
$z14=(("$r14"*44)-45)*-1; // RINGAN
$z15=(("$r15"*44)-45)*-1; // RINGAN
$z16=(("$r16"*44)-45)*-1; // RINGAN
$z17=46+("$r17"*52); //BERAT
$z18=46+("$r18"*52); //BERAT
$z19=46+("$r19"*52); //BERAT
$z20=46+("$r20"*52); //BERAT
$z21=(("$r21"*44)-45)*-1; // RINGAN
$z22=(("$r22"*44)-45)*-1; // RINGAN
$z23=(("$r23"*44)-45)*-1; // RINGAN
$z24=(("$r24"*44)-45)*-1; // RINGAN
$a=($r1+$r2+$r3+$r4+$r5+$r6+$r7+$r8);
if($a==0){
	$p1="0";
	}
if($a>0){
	$p1=$p1=(($r1*$z1)+($r2*$z2)+($r3*$z3)+($r4*$z4)+($r5*$z5)+($r6*$z6)+($r7*$z7)+($r8*$z8))/$a;
	}
	
$b=($r9+$r10+$r11+$r12+$r13+$r14+$r15+$r16);
if($b==0){
	$p2="0";
	}
if($b>0){
	$p2=(($r9*$z9)+($r10*$z10)+($r11*$z11)+($r12*$z12)+($r13*$z13)+($r14*$z14)+($r15*$z15)+($r16*$z16))/$b;
	}

$c=($r17+$r18+$r19+$r20+$r21+$r22+$r23+$r24);
if($c==0){
	$p2="0";
	}
if($c>0){
	$p3=(($r17*$z17)+($r18*$z18)+($r19*$z19)+($r20*$z20)+($r21*$z21)+($r22*$z22)+($r23*$z23)+($r24*$z24))/$c;
	}


$nilai=max($p1,$cp2,$p3);
if($nilai<=45){
	$jenis="Ringan";
	}
if($nilai>45){
	$jenis="Berat";
	}
	

if($nilai==$p1 and $p1>0){
		$diagnosa="Skoliosis";
		$pengobatan="obat/1.php";
}

if($nilai==$p2 and $p2>0)
	{
	$diagnosa="Osteomyelitis";
	$pengobatan="obat/2.php";
}
if($nilai==$p3 and $cp3>0)
	{
	$diagnosa="Osteoporosis";
	$pengobatan="obat/3.php";
		}
if($p1==0 and $p2==0 and $p3==0){
	$diagnosa="Tidak Terdiagnosa Penyakit Tulang";
	$pengobatan="obat/a.php"; 
}
?>  <tr>
    <td><table width="100%" border="2">
      <tr>
        <td><div align="center"><strong>PROSES PERHITUNGAN</strong><br />
            <table width="84%" border="1" cellpadding="0" cellspacing="0">
              <tr>
                <td width="133"><strong>Fungsi</strong></td>
                <td width="434"><strong>Variabel    Gejala Penyakit</strong></td>
                <td width="111"><div align="center"><strong>Nilai</strong></div></td>
              </tr>
              <tr>
                <td width="133" rowspan="12"><div align="center">Input</div></td>
                <td width="434">Perubahan pada ukuran    pinggul dan bentuknya<strong></strong></td>
                <td valign="top"><div align="center"><?php echo "$g1";?></div></td>
              </tr>
              <tr>
                <td width="434">Tubuh penderita    skoliosis mungkin miring ke satu sisi<strong></strong></td>
                <td valign="top"><div align="center"><?php echo "$hasil[g2]";?></div></td>
              </tr>
              <tr>
                <td width="434">Mengalami perubahan    pada ukuran bahu<strong></strong></td>
                <td valign="top"><div align="center"><?php echo "$hasil[g3]";?></div></td>
              </tr>
              <tr>
                <td width="434">Kesulitan bernafas</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g4]";?></div></td>
              </tr>
              <tr>
                <td width="434">Nyeri pada punggung</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g5]";?></div></td>
              </tr>
              <tr>
                <td width="434">Nyeri pada tulang</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g6]";?></div></td>
              </tr>
              <tr>
                <td width="434">Demam</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g7]";?></div></td>
              </tr>
              <tr>
                <td width="434">Pembengkakan pada    area yang terinfeksi</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g8]";?></div></td>
              </tr>
              <tr>
                <td width="434">Pembengkakan kelenjar    getah bening disekitar area yang terinfeksi</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g9]";?></div></td>
              </tr>
              <tr>
                <td width="434">Postur tubuh bungkuk</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g10]";?></div></td>
              </tr>
              <tr>
                <td width="434">Menurunnya tinggi    badan</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g11]";?></div></td>
              </tr>
              <tr>
                <td width="434">Keretakan tulang dan    mengalami cedera</td>
                <td valign="top"><div align="center"><?php echo "$hasil[g12]";?></div></td>
              </tr>
              <tr>
                <td width="133"><div align="center">Ouput</div></td>
                <td width="434">Skoliosis</td>
                <td width="111"><div align="center">?</div></td>
              </tr>
              <tr>
                <td width="133"><strong>&nbsp;</strong></td>
                <td width="434">Osteomyelitis</td>
                <td width="111"><div align="center">?</div></td>
              </tr>
              <tr>
                <td width="133"><strong>&nbsp;</strong></td>
                <td width="434">Osteoporosis</td>
                <td width="111"><div align="center">?</div></td>
              </tr>
            </table>
              <p><strong>FUZZIFIKASI</strong><br />
              </p>
              <table width="95%" align="center">
                <tr>
                  <td width="2%">a.</td>
                  <td colspan="4">Perubahan  ukuran pinggul dan bentuk nya (G001). Terdiri dari Kecil , Sedang, Besar.</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td width="1%">&nbsp;</td>
                  <td width="35%"><span class="style5">µKecil = <?php echo"$g1_a";?></span></td>
                  <td width="32%"><span class="style5">µSedang= <?php echo"$g1_b";?></span></td>
                  <td width="30%"><span class="style5">µBesar= <?php echo"$g1_c";?></span></td>
                </tr>
                <tr>
                  <td>b.</td>
                  <td colspan="4">Tubuh  penderita mungkin condong ke satu sisi (G002). Terdiri dari sedikit miring ,  miring, dan terlalu miring.</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µS.Miring = <?php echo"$g2_a";?></span></td>
                  <td><span class="style5">µMiring= <?php echo"$g2_b";?></span></td>
                  <td><span class="style5">µT.Miring= <?php echo"$g2_c";?></span></td>
                </tr>
                <tr>
                  <td>c.</td>
                  <td colspan="4">perubahan  pada ukuran bahu (G003)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g3_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g3_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g3_c";?></span></td>
                </tr>
                <tr>
                  <td>d.</td>
                  <td colspan="4">Kesulitan  bernafas (G004). Terdiri dari sedikit , normal, dan banyak</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µSedikit= <?php echo"$g4_a";?></span></td>
                  <td><span class="style5">µNormal= <?php echo"$g4_b";?></span></td>
                  <td><span class="style5">µBanyak= <?php echo"$g4_c";?></span></td>
                </tr>
                <tr>
                  <td>e.</td>
                  <td colspan="4">Nyeri  pada punggung (G005). Terdiri dari ringan , Sedang, dan berat</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g5_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g5_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g5_c";?></span></td>
                </tr>
                <tr>
                  <td>f.</td>
                  <td colspan="4">Nyeri  pada tulang (G006). Terdiri dari ringan , Sedang, dan berat</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g6_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g6_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g6_c";?></span></td>
                </tr>
                <tr>
                  <td>g.</td>
                  <td colspan="4">Demam (G007). Terdiri dari dingin , Normal, dan Panas</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g7_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g7_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g7_c";?></span></td>
                </tr>
                <tr>
                  <td>h.</td>
                  <td colspan="4">Pembengkakan  (G008) pada area yang terinfeksi</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g8_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g8_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g8_c";?></span></td>
                </tr>
                <tr>
                  <td>i.</td>
                  <td colspan="4">Pembengkakan  kelenjar getah bening (G009) disekitar area yang terinfeksi</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g9_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g9_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g9_c";?></span></td>
                </tr>
                <tr>
                  <td>j.</td>
                  <td colspan="4">Postur  tubuh bungkuk (G010)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g10_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g10_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g10_c";?></span></td>
                </tr>
                <tr>
                  <td>k.</td>
                  <td colspan="4">Menurunnya  tinggi badan (G011)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g11_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g11_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g11_c";?></span></td>
                </tr>
                <tr>
                  <td>l.</td>
                  <td colspan="4">Keretakan  tulang dan mengalami cedera (G012)</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td><span class="style5">µKecil = <?php echo"$g12_a";?></span></td>
                  <td><span class="style5">µSedang= <?php echo"$g12_b";?></span></td>
                  <td><span class="style5">µBesar= <?php echo"$g12_c";?></span></td>
                </tr>
              </table>
              <p><br />
              </p>
        </div></td>
        </tr>
      <tr>
        <td><div align="center">
          <p>Pembentukan Rule</p>
          <p align="justify">Berdasarkan pembentukan himpunan dan  variabel <em>fuzzy </em>sebelumnya yang mana  terdapat variabel <em>inpu</em>t terdiri dari  gejala penyakit dan variabel <em>output</em> terdiri dari jenis penyakit tulang tersebut. dan juga himpunan <em>fuzzy </em>terbagi atas 12 variabel maka  dapat dibentuk beberapa rule sebagai proses perhitungan yang akan digunakan  seperti berikut:</p>
          <ol>
            <li>
              <div align="justify">RULE  [ 1 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “SEDIKIT”  THEN P01 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 2 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “BANYAK”  THEN P01 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 3 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04  “SEDIKIT” THEN P01 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 4 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN  P01 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 5 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04  “SEDIKIT” THEN P01 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 6 ] IF G01 “SEDANG” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN  P01 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 7 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04  “BANYAK” THEN P01 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [ 8 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “SEDANG” AND G04 “NORMAL” THEN  P01 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [9] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR”  AND G09 “BESAR” THEN P02 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [10] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08  “SEDANG” AND G09 “SEDANG” THEN P02 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [11] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “DINGIN” AND G08  “BESAR” AND G09 “BESAR” THEN P02“BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [12] IF G05 “MENGGANGGU” AND G06 “SEDANG” AND G07 “PANAS” AND G08 “BESAR” AND  G09 “BESAR” THEN P02 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [13] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08  “SEDANG” AND G09 “BESAR” THEN P02 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [14] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR” AND  G09 “BESAR” THEN P02 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [15] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08 “BESAR” AND  G09 “BESAR” THEN P02 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [16] IF G05 “SANGAT MENGGANGGU” AND G06 “SEDANG” AND G07 “PANAS” AND G08  “BESAR” AND G09 “SEDANG” THEN P02 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [17] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN  P03 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [18] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “KADANG-KADANG”  THEN P03 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [19] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03  “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [20] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN  P03 “BERAT”</div>
            </li>
            <li>
              <div align="justify">RULE  [21] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03“RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [22] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “NORMAL” AND G12 “SERING” THEN  P03 “RINGAN”</div>
            </li>
            <li>
              <div align="justify">RULE  [23] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12  “KADANG-KADANG” THEN P03 “RINGAN”</div>
            </li>
            <li>RULE [24] IF G06“BERAT” AND G10 “SEDANG” AND G11  “NORMAL” AND G12 “KADANG-KADANG” THEN P03 “RINGAN”</li>
            </ol>
          <div align="justify"></div>
        </div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><?php if 	($hasil[nilai]==$hasil[p1] and $hasil[nilai]>0) { 
					include "rulep1/rule.php";
					}
				if ($hasil[nilai]==$hasil[p2] and $hasil[nilai]>0) { 
					include "rulep2/rule.php";
					}
				if ($hasil[nilai]==$hasil[p3] and $hasil[nilai]>0){ 
					include "rulep3/rule.php";
					} 
			   if($hasil[nilai]==0) 
					{
					echo "Tidak Ada Rule Yang Dieksekusi";
					} 
					?>
    <p align="center"><a href="per.php"><img src="../img/printer-icon.png" width="160" height="135" /></a></p></td>
  </tr>
</table>

</body>
</html>
<?php
	}
?>