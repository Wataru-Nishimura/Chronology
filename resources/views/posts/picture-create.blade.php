<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>写真投稿 | 歴史年表 Only View Chronology</title>
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
                        <li class="list_item" aria-lavel="引用文献">引用文献</li>
                        <li class="list_item" aria-lavel="お問い合わせ">お問い合わせ</li>
                    </ul>
                </div>
                <div id="additional-sidebar-area">
                    <ul>
                        <li class="list_add" aria-lavel="歴史に関する質問を投稿する"><a href="question-create">質問投稿</a></li>
                        <li class="list_add" aria-lavel="歴史用語に関する写真を投稿する"><a href="/picture-create">写真投稿</a></li>
                    </ul>
                </div>
                <ul class="sns-link">
                    <li><a href="https://twitter.com/only_view_chron"><img src="img/icon_twitter.svg" alt="Twitter"></a></li>
                    <li><a href="https://www.instagram.com/only_view_chronology/"><img src="img/icon_instagram.svg" alt="Instagram"></a></li>
                    <li><a href="https://www.facebook.com/only.view.chronology"><img src="img/icon_facebook.svg" alt="Facebook"></a></li>
                </ul>
            </header>
            <div id="content-area">
                <div id="register_login_area" aria-lavel="グローバルナビゲーション">
					<dl>
						<dt>こちらから</dt>
					    <dd><a href="/register">新規登録</a></dd>
					</dl>
				</div>
                <main id="picture_create">
                    <h1>写真投稿</h1>
                    <form action="/galleries" method="POST" enctype="multipart/form-data">
                        @csrf
                        <dl>
                        <dt class="title">タイトル</dt>
                            <dd><input type="text" name="gallery[gallery_title]" placeholder="厳島神社"/></dd>
                        <dt class="body">簡単な説明</dt>
                            <dd><textarea name="gallery[gallery_detail]" placeholder="安芸国の一ノ宮。航海安全をつかさどる市杵島姫命が主神。安芸守だった平清盛の崇敬を受けて隆盛した。"></textarea></dd>
                        <dt class="genre">ジャンル選択</dt>
                            <dd><select name="gallery[gallery_genre]" id="genre">
                                <option value="寺">寺</option>
                                <option value="神社">神社</option>
                                <option value="城">城</option>
                                <option value="仏像">仏像</option>
                                <option value="その他">その他</option>
                            </select></dd>
                        <dt class="period">時代選択</dt>
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
                        <dt class="image_path">写真</dt>
                            <dd><input type="file" name="gallery[image_path]"/>
                                {{ csrf_field() }}
                            </dd>
                        <button type="submit" value="store">アップロード</button>
                    </form>
                    <div class="footer">
                        <a href="/">戻る</a>
                    </div>
                </main>
                <footer id="footer">
	                <div class="footer-area">
	                    <div class="footer-info">
	                        <p class="footer-logo"><span>歴史年表</span></p>
	                    </div>
	                    <div class="footer-link">
	                        <ul>
	                            <li><a href="#">サイトマップ</a></li>
	                            <li><a href="#">FAQ</a></li>
	                            <li><a href="#">利用規約</a></li>
	                            <li><a href="#">プライバシーポリシー</a></li>
	                            <li><a heref="#">お問い合わせ</a></li>
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
        <script src="js/script.js"></script>
    </body>
</html>