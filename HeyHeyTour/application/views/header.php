<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Hey Hey Tour</title>
        
<!-- 

Sentra Template

http://www.templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="/~team13/my/css/bootstrap.min.css">
        <link rel="stylesheet" href="/~team13/my/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/~team13/my/css/fontAwesome.css">
        <link rel="stylesheet" href="/~team13/my/css/light-box.css">
        <link rel="stylesheet" href="/~team13/my/css/owl-carousel.css">
        <link rel="stylesheet" href="/~team13/my/css/templatemo-style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <script src="/~team13/my/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

		

    </head>
<body>
        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#featured">Featured</a></li>
                        <li><a href="#projects">Recent Projects</a></li>
                        <li><a href="#video">Presentation</a></li>
                        <li><a href="#blog">Blog Entries</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

		<script> 		
		function search() { 		
			if (!form1.serchValue.value)// 값이 없는 경우, 전체 자료
			{
				alert("키워드를 입력해주세요");
			}

			
			else// 값이 있는 경우, serchValue 값 전달
			{
				if(form1.trigger.value == 1)//나라
				{
					form1.action="/~team13/search/lists/text1/" + form1.serchValue.value + "/trigger/" + form1.trigger.value;
				}

				else if (form1.trigger.value == 2)//키워드
				{
					form1.action="/~team13/search/lists/text1/" + form1.serchValue.value + "/trigger/" + form1.trigger.value;
				}
			}
			form1.submit();
	
		}		
		</script>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                <a href="/~team13">Hey<em> Hey </em>To<em>ur</em></a>
            </div>		

            <nav>
			<!-- 검색창, Enter키에 반응 -->
			<form name="form1" action="" method="post">		
				<input id="nav3" type="radio" name="trigger" value="1" checked><font id="nav3-font">나라</font>
				<input id="nav4" type="radio" name="trigger" value="2"><font id="nav4-font">패키지 키워드</font>
				<input id="nav2" class="search" type="text" name="serchValue" placeholder="검색창" onkeypress="if(event.keyCode==13){search(); return false;}"></input>
			</form>

                <ul>
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#featured">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            패키지 상품 랭킹
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            대륙별 여행 상품
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            여행 셀프캠 선발전
                        </a>
                    </li>
                   
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            여행사 위치 및 지도보기
                        </a>
                    </li>
                </ul>
            </nav>

            <ul class="social-icons">
		
                
					
				<!-- 로그인처리 -->

				<? 
					$uid = $this->session->userdata('uid');
					
					if(!$uid)
					{
						echo("<font color='white' size='3px'>로그인 요망</font><br>
						<li>
							<a href='' data-toggle='modal' data-target='#exampleModal'> 로그인 </a>	
						</li>				
						");
					}

					else
					{
						$name = $this->session->userdata('name');
						echo("<font color='white' size='3px'>환영합니다 $name 님</font><br>
						
						<li>
							<a href='/~team13/login/logout' data-toggle='modal'> 로그아웃 </a>	
						</li>
						");
					}

				?>	
				
				
                

				<? 					
					$no = $this->session->userdata('no');
					if($this->session->userdata('uid')&& $this->session->userdata('rank') == 1)
					{	
						echo("<li><a href='/~team13/Package_asia'>페이지 관리</i></a></li>");
					}

					else if($this->session->userdata('uid')&& $this->session->userdata('rank') != 1)
					{
						
						echo("<li><a href='/~team13/member/view_on_main/no/$no'>마이페이지</i></a></li>	");
					}
					else 
					{
						
						echo("<li><a href='/~team13/register'>회원가입</i></a></li>");
					}

				?>	
                
               
            </ul>
        </div>

		<div class="containner"> 
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><font color="#fff">로그인</font></h5>	</div>

						<div class="modal-body bg-light" style="text-align:center">
							<form name="form_login" method="post" action="/~team13/login/check">
								<div class="form-inline">
									아이디:&nbsp;
									<input type="text" name="uid" size="15" value=""  class="form-control form-control-sm">
								</div>
								<div style="height:10px"></div>
								<div class="form-inline">
									암&nbsp;&nbsp;호:&nbsp;&nbsp;
									<input type="password" name="passwd" size="15" value="" class="form-control form-control-sm">
								</div>
							</form>
						</div>

						<div class="modal-footer alert-secondary" style="text-align:center">
							<button type="button" class="btn btn-secondary btn btn-sm" onClick="javascript:form_login.submit();">로그인</button>
							<button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
						</div>
					</div>
				</div>
			</div>
		</div>
