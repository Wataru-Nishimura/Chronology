<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>日本史年表 | 歴史年表 Only View Chronology</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/css/modaal.min.css') }}">
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
                        <li class="list_add" aria-lavel="歴史に関する質問を投稿する">
                            質問投稿
                        </li>
                        <li class="list_add" aria-lavel="歴史用語に関する写真を投稿する">
                            写真投稿
                        </li>
                    </ul>
                </div>
                <ul class="sns-link">
                    <li><a href="#"><img src="../../../public/img/icon_twitter.svg" alt="Twitter"></a></li>
                    <li><a href="#"><img src="../../../public/img/icon_instagram.svg" alt="Instagram"></a></li>
                    <li><a href="#"><img src="../../../public/img/icon_facebook.svg" alt="Facebook"></a></li>
                </ul>
            </header>
            <div id="content-area">
                <div id="additionaloptionarea">
                    <nav id="ui-option">
                        <ul class="ui-list">
                            <li class="ui-font">
                                <span class="text">文字サイズ</span>
                                <button aria-lavel="文字を標準サイズにする" type="button" class="is-act" data-id="0">標準</button>
                                <button aria-lavel="文字を拡大サイズにする" type="button" data-id="1">拡大</button>
                            </li>
                            <li>
                                <span class="text">着せかえ</span>
                                <button aria-lavel="サイトをオールシーズン基調にする" type="button" class="is-act" data-id="0">オール</button>
                                <button aria-lavel="サイトを春基調にする" type="button" data-id="1">春</button>
                                <button aria-lavel="サイトを夏基調にする" type="button" data-id="2">夏</button>
                                <button aria-lavel="サイトを秋基調にする" type="button" data-id="3">秋</button>
                                <button aria-lavel="サイトを冬基調にする" type="button" data-id="4">冬</button>
                            </li>
                            <li>
                                <span class="text">背景色</span>
                                <button aria-lavel="サイトの背景色を標準にする" type="button" class="is-act" data-id="0">白</button>
                                <button aria-lavel="サイトの背景色を黒基調にする" type="button" data-id="1">黒</button>
                            </li>
                            <li>
                                <button aria-lavel="新規登録" type="button" class="login"><a href="/register">新規登録</a></button>
                            </li>
                        </ul>
                    </nav>
                    </div><!--/additional-option-->
                <main id="gallery-page">
                    
                </main>
            </div>
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
	    	                	<li><a href="#"><img src="../../public/img/icon_twitter.svg" alt="Twitter"></a></li>
	    	                	<li><a href="#"><img src="../../public/img/icon_instagram.svg" alt="Instagram"></a></li>
	    	                	<li><a href="#"><img src="../../public/img/icon_facebook.svg" alt="Facebook"></a></li>
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