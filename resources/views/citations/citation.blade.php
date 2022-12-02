<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>引用文献 | 歴史年表 Only View Chronology</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/parts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
        <!--CSS-->
    </head>
    <body>
        <div id="container">
            <header id="header">
                <div id="header-area">
                    <h1><span>歴史年表</span>Only View Chronology</h1>
                </div>
                <div id="sidebar-area">
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
                <ul class="sns-link">
                    <li><a href="https://twitter.com/only_view_chron"><img src="img/icon_twitter.svg" alt="Twitter"></a></li>
                    <li><a href="https://www.instagram.com/only_view_chronology/"><img src="img/icon_instagram.svg" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/only.view.chronology"><img src="img/icon_facebook.svg" alt="Facebook"></a></li>
                </ul>
            </header>
            <div id="content-area">
                <div id="wood_area" aria-lavel="木目調エリア"></div>
                <main id="citation-page">
                    <h1>引用文献</h1>
                    <div class='citations'>
                        <ul class='citation'>
                            @foreach ($citations as $citation)
                                <h2>{{ $citation->citation_title }}</h2>
                                <li>
                                    <dl>
                                        <span class="slide-in leftAnime">
                                            <span class="slide-in_inner leftAnimeInner">
                                                <dt aria-lavel="年号">{{ $citation->start_date }}</dt>
                                                <dd><strong aria-lavel="出来事"><a href="{{ $citation->website_link }}">{{ $citation->citation_title }}</a></strong>
                                                    {{ $citation->citation_detail }}
                                                </dd>
                                            </span>
                                        </span>
                                    </dl>
                                </li>
                            @endforeach
                        </ul>
                    </div>
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
	    <!--=============JS ===============--> 
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--自作のJS-->   
        <script src="js/pagetop.js"></script>
        <script src="js/text.js"></script>
        <script src="js/pagelink.js"></script>
    </body>
</html>