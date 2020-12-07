
	<br>
<div role="alert"><h5><b>계정 정보</b></h5></div>
	<hr class="header">
	<form name="form1" method="post" action="">

	<table class="table table-bordered table-sm mymargin5">

		<tr> 
		    <td width="20%" class="mycolor4" style="vertical-align:middle"><font color="black">번호</font></td>
		    <td width="80%" align="left"><div class="form-inline"><?=$row->no;?></div></td>
		</tr>
<!---이름---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">아이디</font>
    </td>
    <td width="80%" align="left">
		<input  type="text" name="ID" size = "20" maxlength = "20"  value="<?=$row->uid?>" class="form-control from-control-sm" >
    </td>
</tr>

<!---국가---->
<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red">*</font> <font color="black">비밀번호</font>
    </td>
    <td width="80%" align="left">
		<input  type="text" name="pw" size = "20" maxlength = "20"  value="<?=$row->passwd?>" class="form-control from-control-sm" >
    </td>
</tr>

<!---출발일---->
<tr>
    <td width="20%"class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">전화번호</font>
    </td>
    <td width="80%" align="left">
		<input  type="text" name="phone" size = "20" maxlength = "20"  value="<?=$row->phone?>" class="form-control from-control-sm" >
    </td>
</tr>


<tr>
    <td width="20%" class="mycolor4" style="vertical-align:middle">
        <font color="red"></font> <font color="black">이름</font>
    </td>
    <td width="80%" align="left">
		<input  type="text" name="name" size = "20" maxlength = "20"  value="<?=$row->name?>" class="form-control from-control-sm" >
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
		
		 if ($row->rank == 0) {?>
          <input  type="radio" name="rank" value="2" checked>일반 &nbsp; &nbsp;

		  <input  type="radio" name="rank" value="1">관리자
	
		<? } else { ?>

			<input  type="radio" name="rank" value="2" >일반 &nbsp; &nbsp;

			 <input  type="radio" name="rank" value="1" checked>관리자
		<? } ?> 	
	  
        

    </td>
</tr>


</table><br><Br>

<div align="center">
<input type="submit" value="저장" class="btn btn-sm mycolor3">&nbsp; 
<input type="button" value="이전화면" class="btn btn-sm mycolor3" onClick="history.back();">
<!---수정 삭제 저장 이전버튼---->
</div>
</form>

</body>
</html>
