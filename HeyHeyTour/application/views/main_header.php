<!DOCTYPE html>
<html lang="kr">
<head>
<style type="text/css">


</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>패키지 관리</title>
    <link   href="/~sale9/my/css/bootstrap.min.css" rel="stylesheet">
    <script src="/~sale9/my/js/jquery-3.3.1.min.js"></script>
    <script src="/~sale9/my/js/popper.min.js"></script>
    <script src="/~sale9/my/js/bootstrap.min.js"></script>

    <link   href="/~sale9/my/css/my.css" rel="stylesheet">

	<script src="/~sale9/my/js/moment-with-locales.min.js"></script>
	<script src="/~sale9/my/js/bootstrap-datetimepicker.js"></script>
	<link href="/~sale9/my/css/bootstrap-datetimepicker.css" rel="stylesheet">

	<link href="/~sale9/my/css/fontawesome-all.min.css" rel="stylesheet">


</head>


<body>
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light">
    <h3><a class="navbar-brand" href="/~team13/package_asia"><b>패키지 관리</b></a></h3>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">

			<li class="nav-item">
				<a class="nav-link" href="/~team13/package_asia">&nbsp&nbsp아시아</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/package_af">&nbsp&nbsp아프리카</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/package_eu">&nbsp&nbsp유럽</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/package_na">&nbsp&nbsp북미</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/package_sa">&nbsp&nbsp남미</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/member">&nbsp&nbsp회원</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="/~team13/reserve">&nbsp&nbsp예약</a>
			</li>




<!--         <li class="nav-item">
        <a class="nav-link" href="/~sale9/jangbui">매입</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/~sale9/jangbuo">매출</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/~sale9/gigan">기간조회</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          통계
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">        

          <a class="dropdown-item" href="/~sale9/best">Best제품</a>
          <a class="dropdown-item" href="/~sale9/crosstab">월별제품현황</a>
          <a class="dropdown-item" href="/~sale9/graph">종류별분포도</a>
        </div>
      </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          기초정보
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/~sale9/gubun">구분</a>
          <a class="dropdown-item" href="/~sale9/product">제품</a>
<?
	if($this->session->userdata('rank')==1)
	{
		echo(" <div class='dropdown-divider'></div>
          <a class='dropdown-item' href='/~sale9/member'>사용자</a>");
	}
?>
         
           <a class="dropdown-item" href="/~sale9/test">test</a>
        </div>
      </li>
        </ul>
<?
	if(!$this->session->userdata('uid'))
		echo("<a href='#exampleModal' data-toggle='modal' class='btn btn-sm btn-outline-secondary btn-dark'>로그인</a>");
	else
		echo("<a href='/~sale9/login/logout' class='btn btn-sm btn-outline-secondary btn-dark'>로그아웃</a>");
?>
    </div>
	-->
</nav>


	<hr class="header">


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">

	<div class="modal-content">
		<div class="modal-header mycolor1">
			<h5 class="modal-title" id="exampleModalLabel">로그인</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		</div>
		<div class="modal-body" style="text-align:center">
	        <form name="form_login" method="post" action="/~sale9/login/check">
				<div class="form-inline">
					아이디 : &nbsp&nbsp
		            <input type="text" name="uid" size="15" class="form-control form-control-sm">
				</div>
				<div style="height:10px"></div>
				<div class="form-inline">
					암 &nbsp&nbsp 호 : &nbsp&nbsp
					<input type="text" name="pwd" size="15" class="form-control form-control-sm">
				</div>
			</form>
		</div>
		<div class="modal-footer alert-secondary" style="text-align:center">
	        <button type="button" class="btn btn-sm btn-secondary" onclick="javascript:form_login.submit();">확인</button>
	        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">닫기</button>
		</div>
		
	</div>

	</div>

</div>

