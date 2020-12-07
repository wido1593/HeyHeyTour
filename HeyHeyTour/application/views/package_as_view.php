<?
	$no=$row->no;
	

	$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$row->package_asia_no/page/$page";
/*	echo($row->name9);
	echo("<br>");
	echo($row->name9);
	echo("<br>");
	echo($row->no9);
	echo("<br>");
	echo($row->no9);*/
?>
	<br>
<div role="alert"><h5><b>가게 정보</b></h5></div>
	<hr class="header">
	<form name="form1" method="post" action="">

	<table class="table table-bordered table-sm mymargin5">

		<tr> 
		    <td width="20%" class="mycolor4" style="vertical-align:middle"><font color="black">번호</font></td>
		    <td width="80%" align="left"><div class="form-inline"><?=$row->package_asia_no;?></div></td>
		</tr>
<!---이름---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">이름</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->name;?></div>
    </td>
</tr>
<!---국가---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">국가</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->asia_name;?></div>
    </td>
</tr>

<!---출발일---->
<tr>
    <td width="20%"class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">출발일</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->arr_time;?></div>
    </td>
</tr>


<!---도착일---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">도착일</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->dep_time;?></div>

    </td>
</tr>

<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">비고</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->bigo;?></div>

    </td>
</tr>

<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">사진</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline">
		<b>파일이름</b> : <?=$row->pic?> <br>
		</div>
<?
	if($row->pic)
		echo("<img src='/~team13/my/img/$row->pic' width='400' class='img-fluid img-thumbnail'>");
	else
		echo("<img src='' width='400' class='img-fluid img-thumbnail'>");
?>
    </td>
	</tr>


</table><br><Br>

<div align="center">
<a href="/~team13/package_asia/edit<?=$tmp;?>" class="btn btn-sm mycolor3">수정</a>
<a href="/~team13/package_asia/del<?=$tmp; ?>" class="btn btn-sm mycolor3" onClick="return confirm('삭제할까요?');">삭제</a>&nbsp
<input type="button" value="이전화면" class="btn btn-sm mycolor3" onClick="history.back();">
<!---수정 삭제 저장 이전버튼---->
</div>
</form>

</body>
</html>
