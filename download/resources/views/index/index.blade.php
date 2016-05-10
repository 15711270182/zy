@include('layout.head')
<link rel="stylesheet" href="{{ asset('/assets/index/css/common.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/assets/index/css/ui2.css?2013032917') }}">
<script src="{{ asset('/assets/index/js/landing-min.js?2013032917') }}"></script>
<script src="{{ asset('/assets/index/jquery-1.8.3.min.js') }}"></script>
<style>#wimoban_p,#wimoban_p a{color:#fff; font-family:"微软雅黑";}
#wimoban_p{text-align:center; font-size:14px; clear:both;}
</style>
<body oncontextmenu='return false' ondragstart='return false'>
<div id="wrapper">
	<div class="skinBg" style="background-image: url('{{ asset('./assets/index/images/65.jpg') }}');"></div>
	<header id="header">
		<div class="weather fl">
			<span class="cityW">
				<span>合肥：</span>
				<span>
					<span class="weatherIcon wI1"></span>
					<span>23 ~ 31℃</span>
				</span>
			</span>
			<span class="sp">|</span>
			<span class="pollution">
				<span>空气质量：83</span>
				<span class="polutionLevel">良</span>
			</span>
			<div class="cityWeather">
				
			</div>
		</div>
		<nav class="headNavs fr tr">
			<a data-category="UserAccount" data-action="login" data-toggle="modal" href="#login-modal"><span>登陆</span></a>
		</nav>
		<!--  登录遮罩层  -->
		<div class="modal in" id="login-modal" style="margin-top:-8%;"> 
			<a class="close" data-dismiss="modal">×</a>
			<h1>登录</h1>
			<ul class="login-bind-tp">
			  <li class="qweibo"> <a href="#"><em>&nbsp;</em> QQ登录</a> </li>
			  <li class="sina"> <a href="#"><em>&nbsp;</em> 微博登录</a> </li>
			</ul>
      </div>
	</header>
	<div class="content tc" style="margin-top:8%;">
		<p class="logo"><img width="270" height="129" src="{{ asset('/assets/index/images/logo_white.png') }}" alt="logo" /></p>
		<nav class="mainNavs">
			<a href="#">新闻</a>
			<a href="#">网页</a>
			<a href="#">贴吧</a>
			<a href="#">知道</a>
			<a href="#">音乐</a>
			<a href="#">图片</a>
			<a href="#">视频</a>
			<a href="#">地图</a>
			<a href="#">百科</a>
			<a href="#">文库</a>
			<a href="#">更多&gt;&gt;</a>
		</nav>
		<div class="searchBox">
			<form action="/list/index">
				<input type="text" class="searchIpt f14" name="wd" maxlength="100" autocomplete="off"/>
				<input type="button" id="search" class="btn cp" value="百度一下" />
			</form>
		</div>

	</div>
	
</div>
<!--
<script src="./assets/index/js/jquery.min.js"></script>
-->
<script src="{{ asset('/assets/index/js/jquery.autocomplete.min.js') }}"></script>
<script>
//点击检索按钮
$("#search").click(function(){
	location.href="{{ url('list/index') }}";
});


	$('.uname,.topMenus').hover(function(){
		$('.topMenus').stop(true,true).fadeIn(200);
	},function(){
		$('.topMenus').stop(true,true).delay(500).fadeOut(200);
	});
	
	//搜索框自动补全; 
	$('.searchIpt').AutoComplete({
		'data': ['About Me', '审美网', 'abcdefg', 'One', 'Two', 'Three', 'Four', 'Five', 'Six','smwell.com', 'Seven', 'Eight', 'Nine', 'Ten', 'Eleven', 'Twelve'],
		'itemHeight': 24,
		'width': 529
	}).AutoComplete('show');
		
	$('.ctnerTab a').click(function(){
		if(!$(this).hasClass('on')){
			$('.ctnerTab a').removeClass('on').eq($(this).index()).addClass('on');
			$('.rtNavs').stop(true,true).hide(200).eq($(this).index()).show(300);
		}
	});
	
	$('.menusWrapper a').click(function(){
		if(!$(this).hasClass('active')){
			$('.menusWrapper a').removeClass('active').eq($(this).index()).addClass('active');
			$('.cbox').stop(true,true).animate({top:318},100).hide().eq($(this).index()).animate({top:0},400).show();
		}
	});
	
	$('.smallPics a').click(function(){
		if(!$(this).hasClass('active')){
			$('.smallPics a').removeClass('active').eq($(this).index()).addClass('active');
			$('.picLink').stop(true,true).removeClass('active').eq($(this).index()).addClass('active');
		}
	});
			
	$('.titleT').hover(function(){
		if(!$(this).hasClass('on')){
			$('.titleT').removeClass('on').eq($(this).index()).addClass('on');
			$('.topicB').stop(true,true).hide().eq($(this).index()).show();
		}
	});
</script>
</body>

@include('layout.footer')