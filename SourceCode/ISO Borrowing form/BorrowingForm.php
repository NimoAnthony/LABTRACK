<?php
	require_once 'session.php';
	require_once "../class/config/config.php";

	global $conn;
	$getBorrowedLists = $conn->prepare("SELECT * FROM borrow LEFT JOIN member ON member.id = borrow.member_id LEFT JOIN room ON room.id = borrow.room_assigned LEFT JOIN item ON item.id = borrow.item_id WHERE borrow.id IN(?)"); 
	$getBorrowedLists->execute(array(trim($_GET['borrowIds'])));
	$data = $getBorrowedLists->fetchAll();
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List
href="Laboratory%20Equipment%20Borrowing%20Form_files/filelist.xml">
<link rel=Edit-Time-Data
href="Laboratory%20Equipment%20Borrowing%20Form_files/editdata.mso">
<title>Borrowing Form</title>

<link rel=themeData
href="Laboratory%20Equipment%20Borrowing%20Form_files/themedata.thmx">
<link rel=colorSchemeMapping
href="Laboratory%20Equipment%20Borrowing%20Form_files/colorschememapping.xml">

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1040178053 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:106%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-ansi-language:EN-US;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.1pt 936.1pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=EN-PH style='tab-interval:36.0pt'>

<div class=WordSection1>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width="100%"
 style='width:100.0%;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:40.0pt'>
  <td width="9%" style='width:9.46%;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span style='mso-ignore:vglayout;
  position:absolute;z-index:251658240;left:0px;margin-left:10px;margin-top:
  4px;width:62px;height:62px'><img width=50 height=50
  src="bsu-logo.png" style="position: absolute; top: -30px; left: 10px;" alt="BSU Logo"
  alt="Description: C:\Users\KC Tejada\Desktop\bsu seal.png" v:shapes="Picture_x0020_1"></span><![endif]><span
  lang=EN-US style='font-size:10.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  </td>
  <td width="39%" colspan=5 style='width:39.58%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;line-height:106%;font-family:"Times New Roman",serif'>Reference
  No.: BatStateU-FO-COL-20<o:p></o:p></span></p>
  </td>
  <td width="34%" colspan=3 style='width:34.32%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;line-height:106%;font-family:"Times New Roman",serif'>Effectivity
  Date: January 3, 2017<o:p></o:p></span></p>
  </td>
  <td width="16%" colspan=2 style='width:16.64%;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:40.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;line-height:106%;font-family:"Times New Roman",serif'>Revision
  No.: 00<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:26.5pt'>
  <td width="100%" colspan=11 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:26.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:12.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>LABORATORY EQUIPMENT BORROWING FORM</span></b><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:17.5pt'>
  <td width="11%" colspan=3 style='width:11.9%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Course Title:<o:p></o:p></span></p>
  </td>
  <td width="25%" colspan=2 style='width:25.32%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Course<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="13%" colspan=2 style='width:13.0%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Section:<o:p></o:p></span></p>
  </td>
  <td width="20%" style='width:20.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Section<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="14%" colspan=2 style='width:14.32%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Group:<o:p></o:p></span></p>
  </td>
  <td width="14%" style='width:14.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Group<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:17.5pt'>
  <td width="11%" colspan=3 style='width:11.9%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Date:<o:p></o:p></span></p>
  </td>
  <td width="25%" colspan=2 style='width:25.32%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Date<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="13%" colspan=2 style='width:13.0%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Time Issued:<o:p></o:p></span></p>
  </td>
  <td width="20%" style='width:20.72%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Time Issued<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="14%" colspan=2 style='width:14.32%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif'>Time Returned:<o:p></o:p></span></p>
  </td>
  <td width="14%" style='width:14.74%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:17.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'>Time Returned<span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Quantity <o:p></o:p></span></b></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Unit<o:p></o:p></span></b></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:
  background1;mso-background-themeshade:217;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Item/Description <o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:13.0pt'>
  <td width="10%" colspan=2 style='width:10.28%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="8%" colspan=2 style='width:8.42%;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="81%" colspan=7 style='width:81.3%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;height:35.5pt'>
  <td width="100%" colspan=11 style='width:100.0%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:35.5pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
  justify'>
  <span
  style='mso-ignore:vglayout;position:absolute;z-index:251666432;left:0px;
  margin-left:570px;margin-top:157px;width:20px;height:16px'><img width=16
  height=13 src="Laboratory%20Equipment%20Borrowing%20Form_files/image003.png"
  v:shapes="Rectangle_x0020_4"></span><span
  style='mso-ignore:vglayout;position:absolute;z-index:251664384;left:0px;
  margin-left:415px;margin-top:157px;width:21px;height:16px'><img width=17
  height=13 src="Laboratory%20Equipment%20Borrowing%20Form_files/image004.png"
  v:shapes="Rectangle_x0020_3"></span>
  <span
  style='mso-ignore:vglayout;position:absolute;z-index:251662336;left:0px;
  margin-left:304px;margin-top:158px;width:21px;height:16px'><img width=17
  height=13 src="Laboratory%20Equipment%20Borrowing%20Form_files/image005.png"
  v:shapes="Rectangle_x0020_2"></span>

  <span
  style='mso-ignore:vglayout;position:absolute;z-index:251660288;left:0px;
  margin-left:184px;margin-top:158px;width:21px;height:16px'><img width=17
  height=13 src="Laboratory%20Equipment%20Borrowing%20Form_files/image006.png"
  v:shapes="Rectangle_x0020_220"></span><![endif]><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Received the enumerated<input type="checkbox"><span
  style='mso-spacerun:yes'></span>instruments,<input type="checkbox"><span
  style='mso-spacerun:yes'></span>apparatus,<input type="checkbox"><span
  style='mso-spacerun:yes'></span><span style='mso-spacerun:yes'></span><span
  style='mso-spacerun:yes'></span>equipment and/or<input type="checkbox"><span
  style='mso-spacerun:yes'></span>utensils in good condition for which
  we, the undersigned students, hold ourselves responsible for losses and/or
  breakages.</span><span lang=EN-US style='font-size:10.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-no-proof:yes'> </span><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;height:13.0pt'>
  <td width="70%" colspan=8 style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#BFBFBF;mso-background-themecolor:background1;mso-background-themeshade:
  191;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Full Name<o:p></o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 style='width:29.06%;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#BFBFBF;mso-background-themecolor:
  background1;mso-background-themeshade:191;padding:0cm 5.4pt 0cm 5.4pt;
  height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'>Signature<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold text-align:center'><o:p>&nbsp;</o:p></span>"Firstrow"</p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'>"first_row_col2"<span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;
  font-family:"Times New Roman",serif;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:34;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:35;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:36;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:37;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:38;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='font-size:10.0pt;
  mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:39;height:13.0pt'>
  <td width="70%" colspan=8 valign=top style='width:70.94%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'>"Last row"<span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>

  <td width="29%" colspan=3 valign=top style='width:29.06%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.0pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='font-size:10.0pt;mso-bidi-font-size:9.0pt;line-height:106%;font-family:
  "Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:40;mso-yfti-lastrow:yes;height:14.4pt'>
  <td width="50%" colspan=7 valign=top style='width:50.22%;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'>Approved
  by:</span><span lang=EN-US> </span><span lang=EN-US style='mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='mso-no-proof:yes'><span
  style='mso-spacerun:yes'></span><o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'>
  	<span
  style='mso-ignore:vglayout'>
  <table cellpadding=0 cellspacing=0 align=left>
   <tr>
    <td width=48 height=0></td>
   </tr>
   <tr>
    <td></td>
    <td width=370 height=36 style='vertical-align:top'><![endif]><![if !mso]><span
    style='position:absolute;mso-ignore:vglayout;z-index:251669504'>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div v:shape="Text_x0020_Box_x0020_6" style='padding:3.6pt 7.2pt 3.6pt 7.2pt'
      class=shape>
      <p class=MsoNormal align=center style='text-align:center'><b><span
      lang=EN-US style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  <br style='mso-ignore:vglayout' clear=ALL>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'>____________________________________<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='mso-bidi-font-size:9.0pt;
  line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold' >Instructor <o:p></o:p></span></p>
  </td>
  <td width="49%" colspan=4 valign=top style='width:49.78%;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:14.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  lang=EN-US style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'>Issued
  by:<o:p></o:p></span></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-US style='mso-bidi-font-size:
  9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='mso-ignore:vglayout'>
  <table cellpadding=0 cellspacing=0 align=left>
   <tr>
    <td width=117 height=0></td>
   </tr>
   <tr>
    <td></td>
    <td width=370 height=37 style='vertical-align:top'><![endif]><![if !mso]><span
    style='position:absolute;mso-ignore:vglayout;z-index:251667456'>
    <table cellpadding=0 cellspacing=0 width="100%">
     <tr>
      <td><![endif]>
      <div v:shape="Text_x0020_Box_x0020_5" style='padding:3.6pt 7.2pt 3.6pt 7.2pt'
      class=shape>
      <p class=MsoNormal align=center style='text-align:center'><b><span
      lang=EN-US style='font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
      </div>
      <![if !mso]></td>
     </tr>
    </table>
    </span><![endif]><![if !mso & !vml]>&nbsp;<![endif]><![if !vml]></td>
   </tr>
  </table>
  </span><![endif]><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'><o:p>&nbsp;</o:p></span></b></p>
  <br style='mso-ignore:vglayout' clear=ALL>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><b style='mso-bidi-font-weight:normal'><span lang=EN-US
  style='mso-bidi-font-size:9.0pt;line-height:106%;font-family:"Times New Roman",serif'>_________________________________________<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center'><span lang=EN-US style='mso-bidi-font-size:9.0pt;
  line-height:106%;font-family:"Times New Roman",serif;mso-bidi-font-weight:
  bold'>In-Charge Laboratory Technician/Custodian<o:p></o:p></span></p>
  </td>
 </tr>
 <tr height=0>
  <td width=907 style='border:none'></td>
  <td width=80 style='border:none'></td>
  <td width=135 style='border:none'></td>
  <td width=566 style='border:none'></td>
  <td width=1541 style='border:none'></td>
  <td width=983 style='border:none'></td>
  <td width=99 style='border:none'></td>
  <td width=1968 style='border:none'></td>
  <td width=1180 style='border:none'></td>
  <td width=181 style='border:none'></td>
  <td width=1400 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal style='tab-stops:298.15pt'><i style='mso-bidi-font-style:
normal'><span lang=EN-US style='font-size:9.0pt;mso-bidi-font-size:11.0pt;
line-height:106%;font-family:"Times New Roman",serif'>All equipment and tools
borrowed should be returned clean and dry<o:p></o:p></span></i></p>

</div>

</body>

</html>
