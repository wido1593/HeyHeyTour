<div class="page-content">
<script>
	function find_text()
	{
		if(!form1.text1.value)
			form1.action="/~team13/asia/list";
		else
			form1.action="/~team13/asia/list/text1/" + form1.text1.value;
		form1.submit();
	}
</script>
		  <section id="blog" class="content-section">

			<div class="section-heading">
				<h1><em>A</em>sia</h1>
				<p>동양의 문화를 지대로 즐길 수 있는 아시아로 가자.
				<br>비행기값도 싸다!</p>
			</div>

			<div class="section-content">
				<div class="tabs-content">
					<div class="wrapper">
						<ul class="tabs clearfix" data-tabgroup="first-tab-group">
							<?
								foreach ($list1 as $row)        
								{
									$no=$row->no;                              
							?>
										<li><a href="#tab<?=$row->no?>"><?=$row->name;?></a></li>
								
							<?
									
								}
							?>
						</ul>
			<section id="first-tab-group" class="tabgroup">
							<div id="tab1">
								<ul>
	<!---------------------------korea tab---------------------------->
<?
    foreach ($list as $row)        
    {
		if(($row->country_no)==1)
		{
			$no=$row->no;                              
?>
			<li>
				<div class="item">
					<img src="/~team13/my/img/<?=$row->pic?>" style="width:400px; height:300px;" alt="">
						<div class="text-content">
							<h4><?=$row->name?></h4>
                            <span><?=$row->arr_time?> ~ <?=$row->dep_time?></span>
                            <p><?=$row->bigo?></p>                        
						<div class="accent-button button">
							<a href="/~team13/asia/view/no/<?=$no?>">자세히 보기</a>
						</div>
					    </div>
                </div>
            </li>
	
<?
		}
    }
?>
                                        
                                </div>
                                <div id="tab2">
                                    <ul>
<!---------------------------Hongkong tab---------------------------->
<?
    foreach ($list as $row)        
    {
		if(($row->country_no)==2)
		{
			$no=$row->no;                              
?>
			<li>
				<div class="item">
				<img src="/~team13/my/img/<?=$row->pic?>" style="width:400px; height:300px;" alt="">
						<div class="text-content">
							<h4><?=$row->name?></h4>
                            <span><?=$row->arr_time?> ~ <?=$row->dep_time?></span>
                            <p><?=$row->bigo?></p>                        
						<div class="accent-button button">
							<a href="/~team13/asia/view/no/<?=$no?>">자세히 보기</a>
						</div>
					    </div>
                                            </div>
                                        </li>
	
<?
		}
    }
?>
                                    </ul>
                                </div>
                                <div id="tab3">
                                    <ul>
<!---------------------------Japan tab---------------------------->
<?
    foreach ($list as $row)        
    {
		if(($row->country_no)==3)
		{
			$no=$row->no;                              
?>
			<li>
				<div class="item">
				<img src="/~team13/my/img/<?=$row->pic?>" style="width:400px; height:300px;" alt="">
						<div class="text-content">
							<h4><?=$row->name?></h4>
                            <span><?=$row->arr_time?> ~ <?=$row->dep_time?></span>
                            <p><?=$row->bigo?></p>                        
						<div class="accent-button button">
						<a href="/~team13/asia/view/no/<?=$no?>">자세히 보기</a>
						</div>
					    </div>
                                            </div>
                                        </li>
	
<?
		}
    }
?>
                                    </ul>
                                </div>
                                <div id="tab4">
                                    <ul>

<!---------------------------Taiwan tab---------------------------->
	<?
		foreach ($list as $row)        
		{
			if(($row->country_no)==4)
			{
				$no=$row->no;                              
	?>
				<li>
					<div class="item">
						<img src="/~team13/my/img/<?=$row->pic?>" style="width:400px; height:300px;" alt="">
							<div class="text-content">
								<h4><?=$row->name?></h4>
								<span><?=$row->arr_time?> ~ <?=$row->dep_time?></span>
								<p><?=$row->bigo?></p>                        
							<div class="accent-button button">
							<a href="/~team13/asia/view/no/<?=$no?>">자세히 보기</a>
							</div>
							</div>
												</div>
											</li>
		
	<?
			}
		}
	?>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                    </div>
                </div>
            </section>
		</div>
