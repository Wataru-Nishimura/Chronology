<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>ギャラリー | 歴史年表 Only View Chronology</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/parts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/hamburgermenu.css') }}">
        <!--CSS-->
    </head>
    <body>
        <div id="container">
            <div class="openbtn"><span></span><span></span><span></span></div>
            <header id="header">
                <div id="header-area">
                    <h1><span>歴史年表</span>Only View Chronology</h1>
                </div>
                <div id="sidebar-area">
                	<nav id="g-nav">
                		<div id="g-nav-list">
		                    <ul class="menu-sidebar_list">
		                        <li class="list_item" aria-lavel="トップページ"><a href="/">トップ</a></li>
		                        <li class="list_item" aria-lavel="歴史年表を一覧で表示する"><a href="/chronology">一覧で表示</a></li>
		                        <li class="list_item" aria-lavel="歴史年表を時代別で絞って表示する"><a href="/period">時代別</a></li>
		                        <li class="list_item" aria-lavel="歴史年表をジャンルで絞って表示する"><a href="/genre">ジャンル</a></li>
		                        <li class="list_item" aria-lavel="歴史用語に関係するギャラリーの一覧を表示する"><a href="/gallery">ギャラリー</a></li>
		                        <li class="list_item" aria-lavel="引用文献の一覧を表示する"><a href="/citation">引用文献</a></li>
		                        <li class="list_item" aria-lavel="歴史用語に関する写真を投稿する"><a href="/picture-create">写真投稿</a></li>
		                        <li class="list_item" aria-lavel="プロフィール編集画面を表示する"><a href="/profile">プロフィール</a></li>
		                    </ul>
                    	</div>
                    </nav>
                    <div class="circle-bg"></div>
                </div>
            </header>
            <div id="content-area">
                <div id="woodarea" aria-lavel="木目調エリア">
                	<ul class="sns-link">
	            		<li><a href="https://twitter.com/only_view_chron"><img src="img/icon_twitter.svg" alt="Twitter"></a></li>
	            		<li><a href="https://www.instagram.com/only_view_chronology/"><img src="img/icon_instagram.svg" alt="Instagram"></a></li>
	            		<li><a href="https://www.facebook.com/only.view.chronology"><img src="img/icon_facebook.svg" alt="Facebook"></a></li>
	            	</ul>
                </div>
                <main id="gallery-page">
                    <h1 class="gallery_title">ギャラリー</h1>
                    <!--<ul class="sort-btn"> -->
                    <!--    <li>-->
                    <!--        <dl>-->
                    <!--            <dt>全選択</dt>-->
                    <!--            <dd>-->
                    <!--                <ul>-->
                    <!--                    <li class="all active">全て</li>-->
                    <!--                </ul>-->
                    <!--            </dd>-->
                    <!--        </dl>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <dl>-->
                    <!--            <dt>ジャンル</dt>-->
                    <!--            <dd>-->
                    <!--                <ul>-->
                    <!--                    <li class="genre01_temple">寺</li>-->
                    <!--                    <li class="genre02_shrine">神社</li>-->
                    <!--                    <li class="genre03_castle">城</li>-->
                    <!--                    <li class="genre04_buddha_statue">仏像</li>-->
                    <!--                </ul>-->
                    <!--            </dd>-->
                    <!--        </dl>-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <dl>-->
                    <!--            <dt>時代</dt>-->
                    <!--            <dd>-->
                    <!--                <ul>-->
                    <!--                    <li class="period01_kohun">古墳</li>-->
                    <!--                    <li class="period02_asuka">飛鳥</li>-->
                    <!--                    <li class="period03_nara">奈良</li>-->
                    <!--                    <li class="period04_heian">平安</li>-->
                    <!--                    <li class="period05_kamakura">鎌倉</li>-->
                    <!--                    <li class="period06_nanbokucho">南北朝</li>-->
                    <!--                    <li class="period07_muromachi">室町</li>-->
                    <!--                    <li class="period08_aduchimomoyama">安土桃山</li>-->
                    <!--                    <li class="period09_edo">江戸</li>-->
                    <!--                    <li class="period10_meiji">明治</li>-->
                    <!--                    <li class="period11_taisyo">大正</li>-->
                    <!--                    <li class="period12_syowa">昭和</li>-->
                    <!--                    <li class="period13_heisei">平成</li>-->
                    <!--                    <li class="period14_reiwa">令和</li>-->
                    <!--                </ul>-->
                    <!--            </dd>-->
                    <!--        </dl>-->
                    <!--    </li>-->
                    <!--</ul>-->
                    <!--<ul class="grid">-->
                    <ul class="gallery">
                        @foreach ($galleries as $gallery)
                            <li><a href="{{ $gallery->image_path }}" data-lightbox="gallery1" data-title="{{ $gallery->gallery_title }}"><img src="{{ $gallery->image_path }}"/></a></li>
                        @endforeach
                    </ul>
                </main>
                <footer id="footer">
	                <div class="footer-area">
	                    <div class="footer-info">
	                        <p class="footer-logo"><span>歴史年表</span></p>
	                    </div>
	                    <div class="footer-link">
	                        <ul>
	                            <li><a href="/sitemap">サイトマップ</a></li>
	                            <li><a href="/tos">利用規約</a></li>
	                            <li><a href="/privacy_policy">プライバシーポリシー</a></li>
	    	                </ul>
	    	                <ul class="sns-link">
                    			<li><a href="https://twitter.com/only_view_chron"><img src="img/icon_twitter.svg" alt="Twitter"></a></li>
                    			<li><a href="https://www.instagram.com/only_view_chronology/"><img src="img/icon_instagram.svg" alt="Instagram"></a></li>
                    			<li><a href="https://www.facebook.com/only.view.chronology"><img src="img/icon_facebook.svg" alt="Facebook"></a></li>
                			</ul>
	                    </div>  
	                </div>
	                <small>&copy; 2022 Chronology All rights Reserved.</small>
	                <p id="page-top"><a href="#"><span></span></a></p>
	            </footer>
	        </div>
	    </div>
	    <!--=============JS ===============--> 
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>-->
        <!--<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>-->
        <!--<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js"></script>
        <!--自作のJS-->   
        <script src="js/pagetop.js"></script>
        <script src="js/gallery.js"></script>
        <script src="js/hamburgermenu.js"></script>
        <script src="js/fixed.js"></script>
    </body>
</html>