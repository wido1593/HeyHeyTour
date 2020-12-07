<div class="page-content">
<table class="table  table-bordered  table-sm  mymargin5">
	  <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1><em>South</em><br> America</h1>
                    <p>정열이 넘치는 그 곳! 남미로 가자!
                    <br>오! 남미!</p>
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
							<a href="/~team13/southamerica/view/no/<?=$no?>">자세히 보기</a>
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
							<a href="/~team13/southamerica/view/no/<?=$no?>">자세히 보기</a>
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
							<a href="/~team13/southamerica/view/no/<?=$no?>">자세히 보기</a>
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
						<a href="/~team13/southamerica/view/no/<?=$no?>">자세히 보기</a>
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

