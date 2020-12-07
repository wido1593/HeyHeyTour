<script>
	$(function(){
			$("#arr_time") .datetimepicker({ 
				locale: "ko",
				format: "YYYY-MM-DD",
				defaultDate: moment()
			});
	});

		$(function(){
			$("#dep_time") .datetimepicker({ 
				locale: "ko",
				format: "YYYY-MM-DD",
				defaultDate: moment()
			});
	});
</script>

<br>
<div role="alert"><h5><b>패키지 추가</b></h5></div>
	<hr class="header">
<form name="form" method="post" action="" enctype="multipart/form-data">

	<table class="table table-bordered table-sm mymargin5">
		<tr>
			<td width="20%" class="mycolor4" style="vertical-align:middle">
			<font color="red">*</font><font color="black">이름</font></td>
			<td width="80%" align="left">
				<div class="form-inline">
					 <input  type="text" name="name" size = "20" maxlength = "20"  value="<?=set_value("name");?>" class="form-control from-control-sm" >
				</div>
				<? if(form_error("name")==true) echo form_error("name");?>
			</td>
		</tr>

		<tr>
			<td width="20%" class="mycolor4" style="vertical-align:middle"><font color="red"> </font><font color="black">국가</font></td>
			<td width="80%" align="left">
			   <div class="form-inline">
					<select name ="country_name" class="form-control form-control-sm">
						<option value="">선택하세요.</option>
	<?
	//	$country_name=set_value("country_name");
		foreach ($list as $row)
		{

			if($row->no==$country_name)
				echo("<option value='$row->no' selected>$row->name</option>'");
			else
				echo("<option value='$row->no'>$row->name</option>'");
		}
	?>
					</select>
				</div>
			</td>
		</tr>





		<tr>
			<td width="20%" class="mycolor4" style="vertical-align:middle"><font color="red">* </font><font color="black">출발일</font></td>
			<td width="80%" align="left">
			  <div class="form-inline">
					<div class="input-group input-group-sm date" id="arr_time">
						<input type="text" name="arr_time" value="<?=set_value("arr_time");?>"class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-2x"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<? if(form_error("arr_time")==true) echo form_error("arr_time");?>
			</td>
		</tr>

		<tr>
			<td width="20%" class="mycolor4" style="vertical-align:middle"><font color="red">* </font><font color="black">도착일</font></td>
			<td width="80%" align="left">
			  <div class="form-inline">
					<div class="input-group input-group-sm date" id="dep_time">
						<input type="text" name="dep_time" value="<?=set_value("dep_time");?>"class="form-control">
						<div class="input-group-append">
							<div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-2x"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<? if(form_error("dep_time")==true) echo form_error("dep_time");?>
			</td>
		</tr>

		<tr>
			<td width="20%" class="mycolor4" style="vertical-align:middle"><font color="black">사진</font></td>
			<td width="80%" align="left">
				<div class="form-inline"> 
					<input type="file" name="pic" class="form-control from-control-sm">
				</div>
			</td>
		</tr>
		

		<tr>	
		<td width="20%"class="mycolor4" style="vertical-align:middle">
			<font color="red"></font> <font color="black">비고</font></td>
		<td width="80%" align="left">
			<div class="form-inline">	
				<textarea style="width:500px; height:200px;" rows="4" cols="50" name="bigo" maxlength="255"></textarea>
			</div>
		</td>
		</tr>	

	</table>

<div align="center">

<input type="submit" value="저장" class="btn btn-sm mycolor3">&nbsp; 
<input type="button" value="이전화면" class="btn btn-sm mycolor3" onClick="history.back();">
<!---수정 삭제 저장 이전버튼---->
</div>
</form>

</body>
</html>
