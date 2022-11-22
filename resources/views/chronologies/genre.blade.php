<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>ジャンル別年表 | 歴史年表 Only View Chronology</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--CSS-->
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
                        <li class="list_item" class="current" rule="button" aria-lavel="トップページ"><a href="/">トップ</a></li>
                        <li class="list_item" rule="button" aria-lavel="歴史年表を一覧で表示する"><a href="/chronology">一覧で表示</a></li>
                        <li class="list_item" rule="button" aria-lavel="歴史年表を時代別で絞って表示する"><a href="/period">
                            <span class="list_title">時代別</span></a>
        					<div class="c-mega_inner">
        						<h3 class="list-inner_title">時代別</h3>
        						<ul class="c-mega_list">
        							<li class="c-mega_item" aria-lavel="古墳時代の出来事の詳細ページへ"><a href="#">古墳</a></li>
        							<li class="c-mega_item" aria-lavel="飛鳥時代の出来事の詳細ページへ"><a href="#">飛鳥</a></li>
        							<li class="c-mega_item" aria-lavel="奈良時代の出来事の詳細ページへ"><a href="#">奈良</a></li>
        							<li class="c-mega_item" aria-lavel="平安時代の出来事の詳細ページへ"><a href="#">平安</a></li>
        							<li class="c-mega_item" aria-lavel="鎌倉時代の出来事の詳細ページへ"><a href="#">鎌倉</a></li>
        							<li class="c-mega_item" aria-lavel="南北朝時代の出来事の詳細ページへ"><a href="#">南北朝</a></li>
        							<li class="c-mega_item" aria-lavel="室町時代の出来事の詳細ページへ"><a href="#">室町</a></li>
        							<li class="c-mega_item" aria-lavel="安土桃山時代の出来事の詳細ページへ"><a href="#">安土桃山</a></li>
        							<li class="c-mega_item" aria-lavel="江戸時代の出来事の詳細ページへ"><a href="#">江戸</a></li>
        							<li class="c-mega_item" aria-lavel="明治時代の出来事の詳細ページへ"><a href="#">明治</a></li>
        							<li class="c-mega_item" aria-lavel="大正時代の出来事の詳細ページへ"><a href="#">大正</a></li>
        							<li class="c-mega_item" aria-lavel="昭和時代の出来事の詳細ページへ"><a href="#">昭和</a></li>
        							<li class="c-mega_item" aria-lavel="平成時代の出来事の詳細ページへ"><a href="#">平成</a></li>
        							<li class="c-mega_item" aria-lavel="令和時代の出来事の詳細ページへ"><a href="#">令和</a></li>
        						</ul>
        					</div>
    					</li>
                        <li class="list_item" aria-lavel="歴史年表をジャンルで絞って表示する"><a href="/genre">
                            <span class="list_title">ジャンル</span></a>
        					<div class="c-mega_inner">
        						<h3 class="list-inner_title">ジャンル</h3>
        						<ul class="c-mega_list">
        							<li class="c-mega_item" aria-lavel="経済の出来事の詳細ページへ"><a href="#">経済</a></li>
        							<li class="c-mega_item" aria-lavel="災害の出来事の詳細ページへ"><a href="#">災害</a></li>
        							<li class="c-mega_item" aria-lavel="事件の出来事の詳細ページへ"><a href="#">事件</a></li>
        							<li class="c-mega_item" aria-lavel="政治の出来事の詳細ページへ"><a href="#">政治</a></li>
        							<li class="c-mega_item" aria-lavel="戦争の出来事の詳細ページへ"><a href="#">戦争</a></li>
        							<li class="c-mega_item" aria-lavel="文化の出来事の詳細ページへ"><a href="#">文化</a></li>
        						</ul>
        					</div>
                        </li>
                        <li class="list_item" aria-lavel="歴史用語に関係するギャラリーの一覧を表示する"><a href="/login">
                            ギャラリー
                        </a></li>
                        <li class="list_item" aria-lavel="引用文献">
                            引用文献
                        </li>
                        <li class="list_item" aria-lavel="お問い合わせ">
                        	お問い合わせ
                        </li>
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
                <main id="japanese_chronology">
                    <section>
                        <h1 class="chronology_title">日本史年表</h1>
                                <h2>経済</h2>
                                <ul class="timeline">
                                    @foreach ($chronologygenreeconomys as $chronologygenreeconomy)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenreeconomy->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenreeconomy->event_subject }}</strong>
                                                    {{ $chronologygenreeconomy->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                                <h2>災害</h2>
                                <ul class="timeline">
                                    @foreach ($chronologygenredisasters as $chronologygenredisaster)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenredisaster->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenredisaster->event_subject }}</strong>
                                                    {{ $chronologygenredisaster->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            <ul class="timeline">
                                <h2>事件</h2>
                                    @foreach ($chronologygenreaccidents as $chronologygenreaccident)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenreaccident->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenreaccident->event_subject }}</strong>
                                                    {{ $chronologygenreaccident->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>政治</h2>
                                    @foreach ($chronologygenrepoliticss as $chronologygenrepolitics)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenrepolitics->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenrepolitics->event_subject }}</strong>
                                                    {{ $chronologygenrepolitics->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>戦争</h2>
                                    @foreach ($chronologygenrewars as $chronologygenrewar)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenrewar->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenrewar->event_subject }}</strong>
                                                    {{ $chronologygenrewar->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>文化</h2>
                                    @foreach ($chronologygenrecultures as $chronologygenreculture)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronologygenreculture->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronologygenreculture->event_subject }}</strong>
                                                    {{ $chronologygenreculture->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                    </section>        
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
    </body>
</html>