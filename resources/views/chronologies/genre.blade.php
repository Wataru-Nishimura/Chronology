<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>ジャンル別年表 | 歴史年表 Only View Chronology</title>
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
                        <li class="list_item" class="current" aria-lavel="トップページ"><a href="/">
                            トップ</a>
                        </li>
                        <li class="list_item" aria-lavel="歴史年表を一覧で表示する"><a href="/chronology">
                            一覧で表示</a>
                        </li>
                        <li class="list_item" aria-lavel="歴史年表を時代別で絞って表示する"><a href="/period">
                            時代別</a>
    					</li>
                        <li class="list_item" aria-lavel="歴史年表をジャンルで絞って表示する"><a href="/genre">
                            ジャンル</a>
                        </li>
                        <li class="list_item" aria-lavel="歴史用語に関係するギャラリーの一覧を表示する"><a href="/login">
                            ギャラリー</a>
                        </li>
                        <li class="list_item" aria-lavel="引用文献"><a href="/citation">
                            引用文献</a>
                        </li>
                        <li class="list_item" aria-lavel="お問い合わせ"><a href="/inquiry">
                        	お問い合わせ</a>
                        </li>
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
                <main id="japanese_chronology">
                    <section>
                        <h1 class="chronology_title">日本史年表</h1>
                                <h2>経済</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_genre_economies as $chronology_genre_economy)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_economy->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_economy->event_subject }}</strong>
                                                    {{ $chronology_genre_economy->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                                <h2>災害</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_genre_disasters as $chronology_genre_disaster)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_disaster->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_disaster->event_subject }}</strong>
                                                    {{ $chronology_genre_disaster->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            <ul class="timeline">
                                <h2>事件</h2>
                                    @foreach ($chronology_genre_accidents as $chronology_genre_accident)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_accident->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_accident->event_subject }}</strong>
                                                    {{ $chronology_genre_accident->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>政治</h2>
                                    @foreach ($chronology_genre_politics as $chronology_genre_politics)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_politics->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_politics->event_subject }}</strong>
                                                    {{ $chronology_genre_politics->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>戦争</h2>
                                    @foreach ($chronology_genre_wars as $chronology_genre_war)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_war->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_war->event_subject }}</strong>
                                                    {{ $chronology_genre_war->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                            <ul class="timeline">
                                <h2>文化</h2>
                                    @foreach ($chronology_genre_cultures as $chronology_genre_culture)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_genre_culture->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_genre_culture->event_subject }}</strong>
                                                    {{ $chronology_genre_culture->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                            </ul>
                    </section>        
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
    </body>
</html>