<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<?php 
/**************************************************************************

GNUBOARD 5.4

테마메뉴얼주소 입니다. 아래 주소에 설치 및 셋팅법이 포함되어 있습니다.
http://ety.kr/board/free_theme_manual

오류내용은 질문게시판을 이용해주세요 (오픈카톡이나 유선상 문의를 받지 않습니다.)
http://ety.kr/board/qa

팁영상 요청 주소 : softzonecokr@naver.com 
팁영상 요청을 해주시면 중복되지 않는 선에서 팁영상을 제작해드고 있습니다.

[라이선스]
자주 하는 질문이 있어서 문서내 포함시켰습니다.
해당 내용은 읽어 보시고 삭제하셔도 됩니다.

1. 배포, 재배포는 에티테마만 가능하므로 사용만 하시고 다른쪽에 배포나 재배포 하지 말아주세요.
(라이선스 위반을 하시게 되면 그에 따른 책임이 따르게 됩니다.)

2. 돈을 받고 유상으로 작업하셔도 되지만 그에 대한 책임은 돈을 받는 제작자에게 있으며 에티테마와는 무관합니다.


**************************************************************************/ 
?>







<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner" role="listbox">
	  <!-- Slide One - Set the background image for this slide in the line below -->
	  <div class="carousel-item active" style="background-image: url('https://github.com/jun1bh1/deck/blob/master/images/visual01.png?raw=true')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">덱 키보드</h3>
		  <p class="ks4 f20">덱 헤슘 거북선</p>
		</div>
	  </div>
	  <!-- Slide Two - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://github.com/jun1bh1/deck/blob/master/images/visual01.png?raw=true')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">덱 키보드</h3>
		  <p class="ks4 f20">덱 헤슘 거북선</p>
		</div>
	  </div>
	  <!-- Slide Three - Set the background image for this slide in the line below -->
	  <div class="carousel-item" style="background-image: url('https://github.com/jun1bh1/deck/blob/master/images/visual01.png?raw=true')">
		<div class="carousel-caption d-md-block">
		  <h3 class="ks4">덱 키보드</h3>
		  <p class="ks4 f20">덱 헤슘 거북선</p>
		</div>
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->






<?php
/*

https://fonts.google.com/icons?selected=Material+Icons
위 주소에서 아이콘을 변경할 수 있습니다.


*/

?>




<!-------------------------- 아이콘박스 -------------------------->
<div class="container margin-top-60">
	<div class="center-heading ks4">
		<h2>덱 키보드 쇼핑몰 <strong>이온크루</strong> </h2>
		<span class="center-line"></span>
		<p class="sub-text margin-bottom-80 ks5 f19">
		30년에 가까운 기계식 키보드의 역사
		</p>
	</div>

	<div class="row padding-top-20">
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-3">
						<span class="material-icons">search</span>
						<p class="ks4 f14 h75">
                            제품 상세 검색
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink">
						<span class="material-icons">logout</span>
						<p class="ks4 f14 h75">
                            회원가입
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					<div class="info-pink-2">
						<span class="material-icons">schedule</span>
						<p class="ks4 f14 h75">
                            활동 기록
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
		<div class="col-lg-3 col-md-3 col-sm-12 col-12">
			<div class="box">							
				<div class="icon">
					
					<div class="info">
						<span class="material-icons">help_outline</span>
						<p class="ks4 f14 h75">
                            문의하기
						</p>
						<div class="margin-top-20 margin-bottom-20">
							<button type="button" class="btn btn-secondary btn-sm ks4" onclick="location.href='#'">바로가기</button>
						</div>
					</div>
				</div>
				<div class="space"></div>
			</div> 
		</div><!-- ./col -->
	</div><!-- /row -->

	<div class="d-none d-sm-block margin-top-30"></div><!-- pc 만 적용 -->


	<div class="margin-bottom-40"></div>
</div><!-- /container -->










<!-------------------------- pallax box -------------------------->
<style>
.para-box{
    height: 350px; display: grid; align-items: center;
}
</style>
<div class="parallax-window" data-parallax="scroll"><!-- 이미지 주소 -->
	<div class="container">
		<div class="row">
			<div class="col-md-12 para-box text-center">
				
				<div class="">
					<h2 class='text-light ks5'>덱 키보드 이온크루</h2>
					<br />
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/board/theme_update"'>바로가기</button> 
					<button type="button" class="btn btn-outline-light ks4" onclick='window.open("about:blank").location.href="http://ety.kr/shop/item/1623421493"'>7페이지</button>
				</div>
			</div>

		</div>
	</div>
</div><!-- /parallax -->


<!-------------------------- 테마소개 + 유튜브영상 -------------------------->

<div class="padding-top-60 padding-bottom-60" style="background:#f2f2f2;">
	<div class="container">
	<div class="center-heading">
		<h2 class="en1">USE A <strong>거북선</strong> </h2>
		<span class="center-line"></span>
	</div>
	  <div class="row">
		<div class="col-lg-6">
		  <iframe width="100%" height="315" src="https://www.youtube.com/embed/ah5_GIceMJM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-lg-6">
		  <h2 class="en1">SERVICE</h2>
		  <p class="ks4"><strong>한국인의 기계식 키보드.</strong></p>
		  <p class="ks4">덱키보드와 협업을 통해 개발한 기계식 키보드.</p>
		</div>
	  </div>
	</div>
</div>





<!-------------------------- parallax 박스 및 countdown -------------------------->
<div class="parallax-window" data-parallax="scroll">
	<div class="container">
		<div class="row padding-top-60 padding-bottom-60">
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">alarm</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">hourglass_empty</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">trending_down</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
			<div class="col-md-3 col-6 margin-top-20 margin-bottom-20">
				<a href="#none">
					<div class="cbox text-center">
						<span class="material-icons">system_update_alt</span>
						<p class="text-center ks4">바로가기</p>
					</div><!-- /cbox -->
				</a>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /parallax -->





<!-------------------------- 게시판 -------------------------->
<div class="padding-top-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'notice', 5, 40);?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'free', 5, 40);?>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<?php echo latest('theme/basic_main_one', 'content', 5, 40);?>
			</div>
		</div>
	</div>
</div>





<!-------------------------- GALLERY -------------------------->
<!-- 

테마폴더/tail.php : 43 번째줄에서 수정하시면 됩니다.
owlcarousel 시간조정, 개수조정, 오토플레이 조정


-->

<div class="container margin-bottom-60">
	<?php echo latest('theme/pic_basic_owl', 'gallery', 9, 24); ?>
</div>







<!-------------------------- 

지도 : 구글지도로 주소를 검색하신 다음에 공유버튼을 클릭하여 iframe 형식으로 가져오시면 됩니다.

-------------------------->
<div class="container-fluid">
	<input type="hidden" value="<?php echo G5_THEME_URL?>" id="send_url">
	<div class="row">
		<div class="col-md-6" style="padding:0px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3173.8712817288642!2d127.6344159516823!3d37.298184379750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35635d8af4a6c211%3A0x9b0b7257a5a5a5cc!2z7Jes7KO87Iuc7LKt!5e0!3m2!1sko!2skr!4v1654254206256!5m2!1sko!2skr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
		</div>
		<div class="col-md-6 text-left" style="padding:30px; background:#f5f5f5;">
			<!-- 타이틀 -->
			<div class="margin-bottom-40">
				<h2 class="en1">Contact US</h2>
			</div>
			<div class="row">
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_name" value="" placeholder="담당자">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_phone" value="" placeholder="연락처">
				</div><!-- /col -->
				<div class="col-md-12 margin-bottom-20">
					<input class="form-control" type="text" name="ety_email" value="" placeholder="이메일">
				</div><!-- /col -->
			</div><!-- /row -->
			<div class="row">
				<div class="col-md-12">
					  <div class="form-group">
						<textarea class="form-control" name="ety_content" value="" id="ety_content" rows="3"></textarea>
					  </div>
				</div>
				<div class="col-md-12 margin-bottom-20">
					  <div class="form-check">
						<input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">약관동의</label>
					  </div>
				</div>
				<div class="col-md-12">
					<button type="submit" class="btn btn-dark ks4 sendmail">문의하기</button>
				</div>
			</div><!-- /row -->					
		</div>
	</div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');