<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head prefix="og: https://ogp.me/ns#">
        <meta charset="UTF-8">
        <title>写真投稿 | 歴史年表 Only View Chronology 見るだけで歴史がわかる・面白くなる</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--SEO施策-->
        <meta name="google-site-verification" content="Ksr6Vy1GFSnzPiDKlkWHE1Rdjr-3I5Ki45I7RSux0MI" />
        <meta name="description" content="毎日が歴史上の出来事の記念日。身近な人の誕生日と同じ日にあった出来事を知ることで、歴史との距離を縮めます。">
        <meta name="keywords" content="歴史年表, 日本史, 今日は何の日？, 寺社仏閣, 社会" />
        <meta property="og:title" content="日本史に関する建築物の写真を投稿する" />
		<meta property="og:description" content="毎日が歴史上の出来事の記念日。身近な人の誕生日と同じ日にあった出来事を知ることで、歴史との距離を縮めます。" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="https://only-view-chronology.herokuapp.com/picture-create" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@only_view_chron" />
		<meta property="fb:app_id" content="526978166155996" />
		<!--<meta property="og:image" content="サムネイル画像の URL" />-->
		<meta property="og:site_name" content="歴史年表 | Only View Chronology" />
		<meta property="og:locale" content="ja_JP"  />
        <!--SEO施策-->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--機能編 6-1-2 フェードイン・アウトさせて全画面で見せる-->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/parts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/hamburgermenu.css') }}">
        <!--CSS-->
        <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#26304c">
		<meta name="msapplication-TileColor" content="#2b5797">
		<meta name="theme-color" content="#ffffff">
        <!--favicon-->
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
                <main id="picture_create_area">
                    <h1>写真投稿</h1>
                    <form id="picture_create" action="/galleries" method="POST" enctype="multipart/form-data">
                        @csrf
                        <dl>
                            <dt>タイトル</dt>
                                <dd><input class="title" type="text" name="gallery[gallery_title]" placeholder="厳島神社" value="{{ old('gallery.gallery_title') }}"/>
                                <p class="gallery_title__error" style="color:red">{{ $errors->first('gallery.gallery_title') }}</p></dd>
                            <dt>簡単な説明</dt>
                                <dd><textarea class="body" name="gallery[gallery_detail]" placeholder="安芸国の一ノ宮。航海安全をつかさどる市杵島姫命が主神。安芸守だった平清盛の崇敬を受けて隆盛した。"/>{{ old('gallery.gallery_detail') }}</textarea>
                                <p class="gallery_detail__error" style="color:red">{{ $errors->first('gallery.gallery_detail') }}</p></dd>
                            <dt>ジャンル選択</dt>
                                <dd><select name="gallery[gallery_genre]" id="genre">
                                    <option value="寺">寺</option>
                                    <option value="神社">神社</option>
                                    <option value="城">城</option>
                                    <option value="仏像">仏像</option>
                                    <option value="その他">その他</option>
                                </select></dd>
                            <dt>時代選択</dt>
                                <dd><select name="gallery[gallery_period]" id="period">
                                    <option value="古墳">古墳</option>
                                    <option value="飛鳥">飛鳥</option>
                                    <option value="奈良">奈良</option>
                                    <option value="平安">平安</option>
                                    <option value="鎌倉">鎌倉</option>
                                    <option value="南北朝">南北朝</option>
                                    <option value="室町">室町</option>
                                    <option value="安土桃山">安土桃山</option>
                                    <option value="江戸">江戸</option>
                                    <option value="明治">明治</option>
                                    <option value="大正">大正</option>
                                    <option value="昭和">昭和</option>
                                    <option value="平成">平成</option>
                                    <option value="令和">令和</option>
                                </select></dd>
                            <dt>写真</dt>
                                <dd><input class="image_path" type="file" name="image" value="{{ old('gallery.image_path') }}"/>
                                    <p class="image_path__error" style="color:red">{{ $errors->first('gallery.image_path') }}</p>
                                    {{ csrf_field() }}
                                </dd>
                        </dl>
                        <div class="button_area">
                            <button id="back_button" href="/">戻る</button>
                            <button id="submit_button" type="submit" value="store">投稿</button>
                        </div>
                    </form>
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
        <!--自作のJS-->   
        <script src="js/pagetop.js"></script>
        <script src="js/hamburgermenu.js"></script>
        <script src="js/fixed.js"></script>
    </body>
</html>