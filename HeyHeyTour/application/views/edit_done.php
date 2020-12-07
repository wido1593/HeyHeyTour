
	<br><br>
        <article class="container">
		<form action="/~team13">
            <div class="page-header">
                <div class="col-md-6 col-md-offset-3">
                <h3>수정완료</h3>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-3">
            수정에 성공하셨습니다 <br>

			 <button type="submit" id="join-submit" class="btn btn-primary">
                            메인으로가기<i class="fa fa-check spaceLeft"></i>
                        </button>
          
                </form>
            </div>
		</form>
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