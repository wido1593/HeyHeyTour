<?
	$no=$row->no;
	

	$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";

?>
	<br>
<div role="alert"><h5><b>계정 정보</b></h5></div>
	<hr class="header">
	<form name="form1" method="post" action="">

	<table class="table table-bordered table-sm mymargin5">
	<input type="hidden" name=""value="">
		<tr> 
		    <td width="20%" class="mycolor4" style="vertical-align:middle"><font color="black">번호</font></td>
		    <td width="80%" align="left"><div class="form-inline"><?=$no;?></div></td>
		</tr>
<!---이름---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">아이디</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->uid;?></div>
    </td>
</tr>

<!---국가---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">비밀번호</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->passwd;?></div>
    </td>
</tr>

<!---출발일---->
<tr>
    <td width="20%"class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">전화번호</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->phone;?></div>
    </td>
</tr>


<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">이름</font>
    </td>
    <td width="80%" align="left">
        <div class="form-inline"><div class="form-inline"><?=$row->name;?></div>
    </td>
</tr>

<!---도착일---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">권한</font>
    </td>
    <td width="80%" align="left">
	 <? 
		$rank = $row->rank == 1 ? "관리자" : "일반"; 
	  ?>
        <div class="form-inline"><div class="form-inline"><?=$rank;?></div>

    </td>
</tr>


</table><br><Br>

<div align="center">
<a href="/~team13/member/edit<?=$tmp;?>" class="btn btn-sm mycolor3">수정</a>
<a href="/~team13/member/del<?=$tmp; ?>" class="btn btn-sm mycolor3" onClick="return confirm('삭제할까요?');">삭제</a>&nbsp
<input type="button" value="이전화면" class="btn btn-sm mycolor3" onClick="history.back();">
<!---수정 삭제 저장 이전버튼---->
</div>
</form>

</body>
</html>
