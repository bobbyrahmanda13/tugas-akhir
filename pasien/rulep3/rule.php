<?php 
session_start();
	if (empty($_SESSION['userpasien']) AND empty ($_SESSION['passpasien'])){
	    
	}else{
	

	
 include "../koneksi.php";
	   $sql = mysql_query("select * from pasien where username = '$_SESSION[userpasien]'");
	   $r = mysql_fetch_array($sql);
?>
<?php 
	include('../koneksi.php');
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
		}	
//	rule
$r1=number_format(min($g1_c,$g2_c,$g3_c,$g4_a),3);
//2.	RULE [ 2 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “BANYAK” THEN P01
$r2=number_format(min($g1_c,$g2_c,$g3_c,$g4_c),3);

//3.	RULE [ 3 ] IF G01 “BESAR” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04 “SEDIKIT” THEN P01
$r3=number_format(min($g1_c,$g2_c,$g3_b,$g4_a),3);

//4.	RULE [ 4 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r4=number_format(min($g1_c,$g2_b,$g3_c,$g4_a),3);

//5.	RULE [ 5 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r5=number_format(min($g1_b,$g2_c,$g3_c,$g4_a),3);

//6.	RULE [ 6 ] IF G01 “SEDANG” AND G02 “MIRING” AND G03 “BESAR” AND G04 “SEDIKIT” THEN P01
$r6=number_format(min($g1_b,$g2_b,$g3_c,$g4_a),3);

//7.	RULE [ 7 ] IF G01 “SEDANG” AND G02 “TERLALU MIRING” AND G03 “SEDANG” AND G04 “BANYAK” THEN P01
$r7=number_format(min($g1_b,$g2_c,$g3_b,$g4_c),3);

//8.	RULE [ 8 ] IF G01 “BESAR” AND G02 “MIRING” AND G03 “SEDANG” AND G04 “NORMAL” THEN P01
$r8=number_format(min($g1_c,$g2_b,$g3_b,$g4_b),3);

//9.	RULE [9] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r9=number_format(min($g5_c,$g6_c,$g7_c,$g8_c,$g9_c),3);

//10.	RULE [10] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “SEDANG” AND G09 “SEDANG” THEN P02
$r10=number_format(min($g5_c,$g6_c,$g7_c,$g8_c,$g9_c),3);

//11.	RULE [11] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “DINGIN” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r11=number_format(min($g5_c,$g6_c,$g7_a,$g8_c,$g9_c),3);

//12.	RULE [12] IF G05 “MENGGANGGU” AND G06 “SEDANG” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r12=number_format(min($g5_b,$g6_b,$g7_c,$g8_c,$g9_c),3);

//13.	RULE [13] IF G05 “SANGAT MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08 “SEDANG” AND G09 “BESAR” THEN P02
$r13=number_format(min($g5_c,$g6_c,$g7_b,$g8_b,$g9_c),3);

//14.	RULE [14] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “PANAS” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r14=number_format(min($g5_b,$g6_c,$g7_c,$g8_c,$g9_c),3);

//15.	RULE [15] IF G05 “MENGGANGGU” AND G06 “BERAT” AND G07 “NORMAL” AND G08 “BESAR” AND G09 “BESAR” THEN P02
$r15=number_format(min($g5_b,$g6_c,$g7_b,$g8_c,$g9_c),3);

//16.	RULE [16] IF G05 “SANGAT MENGGANGGU” AND G06 “NORMal” AND G07 “PANAS” AND G08 “BESAR” AND G09 “SEDANG” THEN P02
$r16=number_format(min($g5_c,$g6_b,$g7_c,$g8_c,$g9_b),3);

//17.	RULE [17] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r17=number_format(min($g6_c,$g10_c,$g11_a,$g12_c),3);

//18.	RULE [18] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “KADANG-KADANG” THEN P03
$r18=number_format(min($g6_c,$g10_c,$g11_a,$g12_b),3);

//19.	RULE [19] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r19=number_format(min($g6_c,$g10_b,$g11_a,$g12_c),3);

//20.	RULE [20] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r20=number_format(min($g6_c,$g10_c,$g11_a,$g12_c),3);

//21.	RULE [21] IF G06“BERAT” AND G10 “SEDANG” AND G11 “RENDAH” AND G12 “SERING” THEN P03
$r21=number_format(min($g6_c,$g10_b,$g11_a,$g12_c),3);

//22.	RULE [22] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “NORMAL” AND G12 “SERING” THEN P03
$r22=number_format(min($g6_c,$g10_c,$g11_b,$g12_c),3);

//23.	RULE [23] IF G06“BERAT” AND G10 “BERLEBIHAN” AND G11 “RENDAH” AND G12 “KADANG-KADANG” THEN P03
$r23=number_format(min($g6_c,$g10_c,$g11_a,$g12_b),3);

//24.	RULE [24] IF G06“BERAT” AND G10 “SEDANG” AND G11 “NORMAL” AND G12 “KADANG-KADANG” THEN P03
$r24=number_format(min($g6_c,$g10_b,$g11_b,$g12_b),3);

	?>
<style type="text/css">
<!--
.style7 {font-size: 16px}
-->
</style>

	<table width="95%">
  <tr>
    <td width="9%">R17</td>
    <td colspan="2"><div align="justify">RULE  [17]  IF G06 'BERAT 'AND G10 'BERLEBIHAN' AND G11 'RENDAH' AND G12 'SERING' THEN P03 'BERAT'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="8%"><p align="justify">&amp;predikat17</p>    </td>
    <td width="83%"><div align="justify">=<em>u</em>G06' BERAT' n G10 'BERLEBIHAN' n G11 'RENDAH' n  G12 'SERING'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'BERLEBIHAN'  n G11 'RENDAH' n G12 'SERING')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_c";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_c";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r17";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P017 dalam aturan fuzzy [R17] maka nilai z17 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td>(z17 - 46) /(98- 46) </td>
        <td>=</td>
        <td><em><?php echo"$r17";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z17 - 46) /(52) </td>
        <td>=</td>
        <td><em><?php echo"$r17";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z17-46)</td>
        <td>=</td>
        <td><em><?php echo"$r17";?></em> * 52 = <?php echo"$r17"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z17</td>
        <td>=</td>
        <td>46 + <?php echo"$r17"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="16%">Z17</td>
        <td width="5%">=</td>
        <td width="62%"><?php echo 46+("$r17"*52);?></td>
      </tr>
    </table>
    <br>      <div align="justify"></div>      <div align="justify"></div></td>
    </tr>
  <tr>
    <td>R18</td>
    <td colspan="2"><div align="justify">RULE  [18]  IF G06 'BERAT 'AND G10 'BERLEBIHAN' AND G11 'RENDAH' AND G12 'KADANG-KADANG' THEN P03 'BERAT'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat18</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'BERLEBIHAN' n G11 'RENDAH' n  G12 'KADANG-KADANG'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'BERLEBIHAN'  n G11 'RENDAH' n G12 'KADANG-KADANG')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_c";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_b";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r18";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P018 dalam aturan fuzzy [R18] maka nilai z18 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td>(z18 - 46) /(98- 46) </td>
        <td>=</td>
        <td><em><?php echo"$r18";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z18 - 46) /(52) </td>
        <td>=</td>
        <td><em><?php echo"$r18";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z18-46)</td>
        <td>=</td>
        <td><em><?php echo"$r18";?></em> * 52 = <?php echo"$r18"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z18</td>
        <td>=</td>
        <td>46 + <?php echo"$r18"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="16%">Z18</td>
        <td width="5%">=</td>
        <td width="62%"><?php echo 46+("$r18"*52);?></td>
      </tr>
    </table>
    <br />
        <div align="justify"></div>
      <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R19</td>
    <td colspan="2"><div align="justify">RULE  [19]  IF G06 'BERAT 'AND G10 'SEDANG' AND G11 'RENDAH' AND G12 'SERING' THEN P03 'BERAT'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat19</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'SEDANG' n G11 'RENDAH' n  G12 'SERING'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'SEDANG'  n G11 'RENDAH' n G12 'SERING')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_b";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_c";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r19";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P019 dalam aturan fuzzy [R19] maka nilai z19 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td>(z19- 46) /(98- 46) </td>
        <td>=</td>
        <td><em><?php echo"$r19";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z19 - 46) /(52) </td>
        <td>=</td>
        <td><em><?php echo"$r19";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z19-46)</td>
        <td>=</td>
        <td><em><?php echo"$r19";?></em> * 52 = <?php echo"$r19"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z19</td>
        <td>=</td>
        <td>46 + <?php echo"$r19"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="16%">Z19</td>
        <td width="5%">=</td>
        <td width="62%"><?php echo 46+("$r19"*52);?></td>
      </tr>
    </table>
      <br />
        <div align="justify"></div>
      <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R20</td>
    <td colspan="2"><div align="justify">RULE  [20]  IF G06 'BERAT 'AND G10 'BERLEBIHAN' AND G11 'RENDAH' AND G12 'SERING' THEN P03 'BERAT'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat20</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'BERLEBIHAN' n G11 'RENDAH' n  G12 'SERING'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'BERLEBIHAN'  n G11 'RENDAH' n G12 'SERING')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_c";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_c";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r20";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P020 dalam aturan fuzzy [R20] maka nilai z20 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td>(z20 - 46) /(98- 46) </td>
        <td>=</td>
        <td><em><?php echo"$r20";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z20 - 46) /(52) </td>
        <td>=</td>
        <td><em><?php echo"$r20";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(z20-46)</td>
        <td>=</td>
        <td><em><?php echo"$r20";?></em> * 52 = <?php echo"$r20"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z20</td>
        <td>=</td>
        <td>46 + <?php echo"$r20"*52;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="16%">Z20</td>
        <td width="5%">=</td>
        <td width="62%"><?php echo 46+("$r17"*52);?></td>
      </tr>
    </table>
    <br />
        <div align="justify"></div>
      <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R21</td>
    <td colspan="2"><div align="justify">RULE  [21]  IF G06 'BERAT 'AND G10 'SEDANG' AND G11 'RENDAH' AND G12 'SERING' THEN P03 'RINGAN'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat21</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'SEDANG' n G11 'RENDAH' n  G12 'SERING'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'SEDANG'  n G11 'RENDAH' n G12 'SERING')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_b";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_c";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r21";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><br />
        <div align="justify">
          <table width="95%">
            <tr>
              <td colspan="5">Menurut  fungsi keanggotaan himpunan P021 dalam aturan fuzzy [R21] maka nilai z21 adalah:</td>
            </tr>
            <tr>
              <td width="9%">&nbsp;</td>
              <td width="9%">&nbsp;</td>
              <td width="18%">(45 - Z21) /(45- 1) </td>
              <td width="2%">=</td>
              <td width="62%"><em><?php echo"$r21";?></em></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>(45  - Z21) /(44) </td>
              <td>=</td>
              <td><em><?php echo"$r21";?></em></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>(45-Z21)</td>
              <td>=</td>
              <td><em><?php echo"$r21";?></em> * 44 = <?php echo"$r21"*44;?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>-Z21</td>
              <td>=</td>
              <td>45 - <?php echo"$r21"*44;?></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>Z21</td>
              <td>=</td>
              <td><?php echo( ("$r21"*44)-45)*-1;?></td>
            </tr>
          </table>
      </div>
      <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R22</td>
    <td colspan="2"><div align="justify">RULE  [22]  IF G06 'BERAT 'AND G10 'BERLEBIHAN' AND G11 'NORMAL' AND G12 'SERING' THEN P03 'RINGAN'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat22</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'BERLEBIHAN' n G11 'NORMAL' n  G12 'SERING'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'BERLEBIHAN'  n G11 'NORMAL' n G12 'SERING')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_c";?></em>; <em><?php echo"$g11_b";?></em>; <em><?php echo"$g12_c";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r22";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P022 dalam aturan fuzzy [R22] maka nilai z22 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td width="18%">(45 - Z22) /(45- 1) </td>
        <td width="2%">=</td>
        <td width="62%"><em><?php echo"$r22";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45  - Z22) /(44) </td>
        <td>=</td>
        <td><em><?php echo"$r22";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45-Z22)</td>
        <td>=</td>
        <td><em><?php echo"$r22";?></em> * 44 = <?php echo"$r22"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>-Z22</td>
        <td>=</td>
        <td>45 - <?php echo"$r22"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z22</td>
        <td>=</td>
        <td><?php echo( ("$r22"*44)-45)*-1;?></td>
      </tr>
    </table>
    <br />
        <div align="justify"></div>
      <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R23</td>
    <td colspan="2"><div align="justify">RULE  [23]  IF G06 'BERAT 'AND G10 'BERLEBIHAN' AND G11 'RENDAH' AND G12 'KADANG-KADANG ' THEN P03 'RINGAN'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat23</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'BERLEBIHAN' n G11 'RENDAH' n  G12 'KADANG-KADANG'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'BERLEBIHAN'  n G11 'RENDAH' n G12 'KADANG-KADANG')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_c";?></em>; <em><?php echo"$g11_a";?></em>; <em><?php echo"$g12_b";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r23";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P023 dalam aturan fuzzy [R23] maka nilai z23 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td width="18%">(45 - Z23) /(45- 1) </td>
        <td width="2%">=</td>
        <td width="62%"><em><?php echo"$r23";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45  - Z23) /(44) </td>
        <td>=</td>
        <td><em><?php echo"$r23";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45-Z23)</td>
        <td>=</td>
        <td><em><?php echo"$r23";?></em> * 44 = <?php echo"$r23"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>-Z23</td>
        <td>=</td>
        <td>45 - <?php echo"$r23"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z23</td>
        <td>=</td>
        <td><?php echo( ("$r23"*44)-45)*-1;?></td>
      </tr>
    </table>
    <br />
        <div align="justify"></div>
    <div align="justify"></div></td>
  </tr>
  <tr>
    <td>R24</td>
    <td colspan="2"><div align="justify">
      <p>RULE  [24]  IF G06 'BERAT 'AND G10 'SEDANG' AND G11 'NORMAL' AND G12 'KADANG-KADANG' THEN P03 'RINGAN'</p>
      </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><p align="justify">&amp;predikat24</p></td>
    <td><div align="justify">=<em>u</em>G06' BERAT' n G10 'SEDANG' n G11 'NORMAL' n  G12 'KADANG-KADANG'</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">=  min (<em>u</em>G06 'BERAT' n G10 'SEDANG'  n G11 'NORMAL' n G12 'KADANG-KADANG')</div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><div align="justify"></div></td>
    <td><div align="justify">= min<span class="style7"> (<em><?php echo"$g6_c";?></em>; <em><?php echo"$g10_b";?></em>; <em><?php echo"$g11_b";?></em>; <em><?php echo"$g12_b";?></em>)</span></div></td>
  </tr>
  <tr>
    <td><br />    </td>
    <td><div align="justify"></div></td>
    <td><div align="justify"><span class="style7">= <em><?php echo"$r24";?></em></span></div></td>
  </tr>
  <tr>
    <td colspan="3"><table width="95%">
      <tr>
        <td colspan="5">Menurut  fungsi keanggotaan himpunan P024 dalam aturan fuzzy [R24] maka nilai z24 adalah:</td>
      </tr>
      <tr>
        <td width="9%">&nbsp;</td>
        <td width="9%">&nbsp;</td>
        <td width="18%">(45 - Z24) /(45- 1) </td>
        <td width="2%">=</td>
        <td width="62%"><em><?php echo"$r24";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45  - Z24) /(44) </td>
        <td>=</td>
        <td><em><?php echo"$r24";?></em></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>(45-Z24)</td>
        <td>=</td>
        <td><em><?php echo"$r24";?></em> * 44 = <?php echo"$r24"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>-Z24</td>
        <td>=</td>
        <td>45 - <?php echo"$r24"*44;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>Z24</td>
        <td>=</td>
        <td><?php echo( ("$r24"*44)-45)*-1;?></td>
      </tr>
    </table>
      <div align="center"><strong>DEFUZUFIKASI P03 OSTEOPOROSIS</strong>
        <table width="100%">
          <tr>
            <td width="76%"><div align="center">(<?php echo"$r17";?>*<?php echo 46+("$r17"*52);?>)+(<?php echo"$r18";?>*<?php echo 46+("$r18"*52);?>)+(<?php echo"$r19";?>*<?php echo 46+("$r19"*52);?>)+(<?php echo"$r20";?>*<?php echo 46+("$r17"*52);?>)+(<?php echo"$r21";?>*<?php echo( ("$r21"*44)-45)*-1;?> )+(<?php echo"$r22";?>*<?php echo( ("$r22"*44)-45)*-1;?>)+(<?php echo"$r23";?>*<?php echo( ("$r23"*44)-45)*-1;?>)+(<?php echo"$r24";?>*<?php echo( ("$r24"*44)-45)*-1;?>)</div></td>
          </tr>
          <tr>
            <td><div align="center"><img src="ga.JPG" width="559" height="9" /></div></td>
          </tr>
          <tr>
            <td><div align="center"><?php echo"$r17";?>+<?php echo"$r18";?>+<?php echo"$r19";?>+<?php echo"$r20";?>+<?php echo"$r21";?>+<?php echo"$r22";?>+<?php echo"$r23";?>+<?php echo"$r24";?></div></td>
          </tr>
          <tr>
            <td><div align="center">=<strong><?php echo"$hasil[p3]";?> OSTEOPOROSIS <?php echo"$hasil[jenis]";?></strong></div></td>
          </tr>
        </table>
    </div></td>
  </tr>
</table>
<?php
	}
?>