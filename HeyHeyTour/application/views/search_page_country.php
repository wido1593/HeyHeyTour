        <div class="page-content">
            <section id="featured" class="content-section">

                <div class="section-heading">
                    <h1><em>검색 결과</em></h1>
                    <p></p>
                </div>
				<hr>
                <div class="section-content">     


<table class="table table-bordered table-sm mymargin5 type09 table-striped"   >
	<thead>
		<tr style="color:#1DDB16;font-size: 20px" >
			<td>나라</td>
			<!--
			<td width="10%">번호</td>
			<td width="20%">음식이름</td>
			<td width="30%">날짜</td>
			<td width="20%">칼로리</td>
			<td width="20%">가격</td>
			-->
		</tr>
	</thead>
<tbody>
<?
	//$listOBJ= (object)$list;

	foreach($list as $row)
	{
		$name=$row->name;
		$continent = $row->continent;
?>

<tr>
    <td><a href="/~team13/<?=$continent?>"> <?=$name?></a></td>
</tr>

<?
    }
?>
<tbody>

</table>

				</div>
			</section>
		
        </div>			