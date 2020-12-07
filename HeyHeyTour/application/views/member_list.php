<br><div role="alert"><h5><b>멤버</b></h5></div>
	<hr class="header">
	<script>
	function find_text()
	{
		if(!form1.text1.value)
			form1.action="/~team13/member/lists";
		else
			form1.action="/~team13/member/lists/text1/" + form1.text1.value;
		form1.submit();
	}
</script>


<!---검색 부분---->
<form name="form1" action="" method="post">
    <div class="row">
        <div class="col-3" align="left">            
            <div class="input-group  input-group-sm">
			    <div class="input-group-prepend">
			        <span class="input-group-text">이름</span>
			    </div>
			    <input type="text" name="text1" value="<?=$text1; ?>"class="form-control"   onKeydown="if (event.keyCode == 13) { find_text(); }" placeholder="이름을 입력하세요.">
			<div class="input-group-append">
        <button class="btn btn-sm mycolor1" type="button" onClick="find_text();">검색</button>
		</div>
	</div>
</div>
<!------추가 버튼------>
<?
	$tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";
?>
      
    </div>
</form>
<!------목록 테이블------>
	<table class="table  table-bordered  table-sm  mymargin5">
    <tr class="mycolor2" >
        <td width="10%" bgcolor="#7AAEB8">번호</td>
        <td width="15%" bgcolor="#7AAEB8">아이디</td>
        <td width="15%" bgcolor="#7AAEB8">비밀번호</td>
        <td width="15%" bgcolor="#7AAEB8">전화번호</td>
        <td width="20%" bgcolor="#7AAEB8">이름</td>
		<td width="10%" bgcolor="#7AAEB8">권한</td>

    </tr>
<?
    foreach ($list as $row)        
    {
        $no=$row->no;                              
       
?> 
<tr>
    <td><?=$no;?></td>
	<td><a href="/~team13/member/view/no/<?=$no?><?=$tmp?>"><?=$row->uid;?></a></td>
	<td><?=$row->passwd;?></td>
	<td><?=$row->phone;?></td>
      <td><?=$row->name;?></td>
	  <? 
		$rank = $row->rank == 1 ? "관리자" : "일반"; 
	  ?>
	 <td><?=$rank;?></td>

    </tr>
<?
    }
?>

</table>
<?=$pagination?>
