 <div class="page-content">

	<section id="video" class="content-section">
		<div class="row">

			<div class="col-md-12">
				<div class="section-heading">
					<h1><?=$row->name?><em></em> </h1>
					<p><?=$row->arr_time?> ~ <?=$row->dep_time?></p>
                </div>
                <div class="text-content">
					<p><?=$row->bigo?></p>
                </div>
               
            </div>

            <div class="col-md-12">
				<div class="box-video">							
					<img src="/~team13/my/img/<?=$row->pic?>" style="width:400px; height:300px;" alt="">
						<div class="text-content">
	            </div>

				
				<form name="form1" method="post" action="/~team13/reserve/add">
				<? $uid = $this->session->userdata('uid'); ?>
					<input type="hidden" name="package_name" value="<?=$row->name?>">
					<input type="hidden" name="package_no" value="<?=$row->no?>">
					<input type="hidden" name="continent" value="<?=$row->continent?>"> 
					<input type="hidden" name="uid" value="<?=$uid?>">
							<? 
							if(!$uid)
					{
						echo("<div class='accent-button button'>
							
							<a href='' data-toggle='modal' data-target='#exampleModal'> 로그인 </a>	
						
							</div>");
					}

					else
					{
						
						echo("<div class='accent-button button'>
								<button id='join-submit' class='btn btn-primary type='submit'>예약하기!</button>
							</div>						
						");
					}

				?>	
			</div>
		</div>
    </section>
 </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="/~team13/my/js/bootstrap.min.js"></script>
    
    <script src="/~team13/my/js/plugins.js"></script>
    <script src="/~team13/my/js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>
