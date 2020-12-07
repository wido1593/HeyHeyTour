<br><div role="alert"><h5><b>북아메리카</b></h5></div>
	<hr class="header">
	<script>
	function find_text()
	{
		if(!form1.text1.value)
			form1.action="/~team13/package_na/lists";
		else
			form1.action="/~team13/package_na/lists/text1/" + form1.text1.value;
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
        <div class="col-9" align="right">           
		<a href="/~team13/package_na/add<?=$tmp ;?>" class="btn btn-sm mycolor1">추가</a>


        </div>
    </div>
</form>
<!------목록 테이블------>
	<table class="table  table-bordered  table-sm  mymargin5">
    <tr class="mycolor2" >
        <td width="10%" bgcolor="#7AAEB8">번호</td>
        <td width="15%" bgcolor="#7AAEB8">이름</td>
        <td width="20%" bgcolor="#7AAEB8">출발일</td>
        <td width="20%" bgcolor="#7AAEB8">도착일</td>
        <td width="20%" bgcolor="#7AAEB8">사진</td>

    </tr>
<?
    foreach ($list as $row)        
    {
        $no=$row->no;                              
       
?> 
<tr>
    <td><?=$no; ?></td>
    <td><a href="/~team13/package_na/view/no/<?=$no?><?=$tmp?>"><?=$row->name; ?></a></td>
    <td><?=$row->arr_time; ?></td>
    <td><?=$row->dep_time; ?></td>
    <td><?=$row->pic; ?></td>

    </tr>
<?
    }
?>

</table>
<?=$pagination; ?>