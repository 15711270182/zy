@include('layout.head')
 <link href="{{ asset('/assets/list/inettuts.css') }}" rel="stylesheet" type="text/css" />
<style type="text/css">
.img p{width:100%; height:30px; line-height:30px; font-size:15px; padding-left:7px; background-color:#8dc100}
.img div img{ padding:5px;}
</style>
<body>
	<div id="columns" style="padding:25px;" class="img">
		<p><a href="{{ url('images/index') }}"><strong>图片信息</strong></a></p>
		<div>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
			<img src="{{ asset('/assets/list/1.jpg') }}" width=150 height=200>
		</div>
		
    </div>
    <div id="columns">
        <ul id="column1" class="column" style="width:100%">
            <li class="widget color-green" id="intro">
                <div class="widget-head">
                    <h3>文章标题</h3>
                </div>
                <div class="widget-content">
                    <p>文章信息(介绍)</p>
                </div>
            </li>
        </ul>
    </div>
    <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('/assets/list/jquery-ui-personalized-1.6rc2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/assets/index/inettuts.js') }}"></script>
</body>

@include('layout.footer')

