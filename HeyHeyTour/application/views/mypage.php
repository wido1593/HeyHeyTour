
	<br><br>
        <article class="container">
            <div class="page-header">
                <div class="col-md-6 col-md-offset-3">
                <h3>회원정보 수정</h3>
                </div>
            </div>
			<?
			$no = $this->session->userdata('no');
			?>
            <div class="col-sm-6 col-md-offset-3">
                <form action="/~team13/member/edit_on_main/no/<?=$no?>" name="form" method="post" role="form">
					
                    <div class="form-group">
                        <label for="inputName">성명</label>
                        <input type="text" class="form-control" name="name" id="inputName" value="<?=$row->name?>" placeholder="이름을 입력해 주세요">
                    </div>

					<div class="form-group">
                        <label for="inputName">아이디</label>
                        <input type="text" class="form-control" name="ID" id="inputName" value="<?=$row->uid?>" placeholder="아이디을 입력해 주세요">
                    </div>
                  
                    <div class="form-group">
                        <label for="inputPassword">비밀번호</label>
                        <input type="text" class="form-control" name="PW" id="inputPassword" value="<?=$row->passwd?>" placeholder="비밀번호를 입력해주세요">
                    </div>
                  
                    <div class="form-group">
                        <label for="inputMobile">휴대폰 번호</label>
                        <input type="tel" class="form-control" name="phone" id="inputMobile" value="<?=$row->phone?>" placeholder="휴대폰번호를 입력해 주세요">
                    </div>

					     <div class="form-group text-center">

                        <button type="submit" id="join-submit" class="btn btn-primary">
                            회원정보수정<i class="fa fa-check spaceLeft"></i>
                        </button>

                        
                    </div>
                </form>
            </div>

        </article>

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