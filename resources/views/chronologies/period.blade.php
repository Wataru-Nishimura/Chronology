<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>時代別年表 | 歴史年表 Only View Chronology</title>
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
                <main id="japanese_chronology_period">
                    <section>
                        <h1 class="chronology_title">日本史年表</h1>
                        <section id="chronology_section">
                            <div class="kohun-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <div class="chronology_item">
                                <h2>古墳</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_kohuns as $chronology_period_kohun)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_kohun->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_kohun->event_subject }}</strong>
                                                    {{ $chronology_period_kohun->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                        <section id="chronology_section">
                            <div class="asuka-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <h2>飛鳥</h2>
                            <ul>
                                @foreach ($chronology_period_asukas as $chronology_period_asuka)
                                    <li>
                                        <dl>
                                            <dt aria-lavel="年号">{{ $chronology_period_asuka->event_date }}</dt>
                                            <dd><strong aria-lavel="出来事">{{ $chronology_period_asuka->event_subject }}</strong>
                                                {{ $chronology_period_asuka->event_detail }}
                                            </dd>
                                        </dl>
                                        <span class="border-line"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section id="nara">
                            <div class="nara-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <h2>奈良</h2>
                            <ul>
                                @foreach ($chronology_period_naras as $chronology_period_nara)
                                    <li>
                                        <dl>
                                            <dt aria-lavel="年号">{{ $chronology_period_nara->event_date }}</dt>
                                            <dd><strong aria-lavel="出来事">{{ $chronology_period_nara->event_subject }}</strong>
                                                {{ $chronology_period_nara->event_detail }}
                                            </dd>
                                        </dl>
                                        <span class="border-line"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section id="heian">
                            <div class="heian-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <h2>平安</h2>
                            <ul>
                                @foreach ($chronology_period_heians as $chronology_period_heian)
                                    <li>
                                        <dl>
                                            <dt aria-lavel="年号">{{ $chronology_period_heian->event_date }}</dt>
                                            <dd><strong aria-lavel="出来事">{{ $chronology_period_heian->event_subject }}</strong>
                                                {{ $chronology_period_heian->event_detail }}
                                            </dd>
                                        </dl>
                                        <span class="border-line"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section id="kamakura">
                            <div class="kamakura-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <h2>鎌倉</h2>
                            <ul>
                                @foreach ($chronology_period_kamakuras as $chronology_period_kamakura)
                                    <li>
                                        <dl>
                                            <dt aria-lavel="年号">{{ $chronology_period_kamakura->event_date }}</dt>
                                            <dd><strong aria-lavel="出来事">{{ $chronology_period_kamakura->event_subject }}</strong>
                                                {{ $chronology_period_kamakura->event_detail }}
                                            </dd>
                                        </dl>
                                        <span class="border-line"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                        <section id="nanbokucho">
                            <div class="nanbokucho-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <h2>南北朝</h2>
                            <ul>
                                @foreach ($chronology_period_nanbokuchos as $chronology_period_nanbokucho)
                                    <li>
                                        <dl>
                                            <dt aria-lavel="年号">{{ $chronology_period_nanbokucho->event_date }}</dt>
                                            <dd><strong aria-lavel="出来事">{{ $chronology_period_nanbokucho->event_subject }}</strong>
                                                {{ $chronology_period_nanbokucho->event_detail }}
                                            </dd>
                                        </dl>
                                        <span class="border-line"></span>
                                    </li>
                                @endforeach
                            </ul>
                        </section>
                                <h2>室町</h2>
                                    @foreach ($chronology_period_muromachis as $chronology_period_muromachi)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_muromachi->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_muromachi->event_subject }}</strong>
                                                    {{ $chronology_period_muromachi->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>安土桃山</h2>
                                    @foreach ($chronology_period_aduchimomoyamas as $chronology_period_aduchimomoyama)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_aduchimomoyama->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_aduchimomoyama->event_subject }}</strong>
                                                    {{ $chronology_period_aduchimomoyama->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>江戸</h2>
                                    @foreach ($chronology_period_edos as $chronology_period_edo)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_edo->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_edo->event_subject }}</strong>
                                                    {{ $chronology_period_edo->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>明治</h2>
                                    @foreach ($chronology_period_meijis as $chronology_period_meiji)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_meiji->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_meiji->event_subject }}</strong>
                                                    {{ $chronology_period_meiji->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>大正</h2>
                                    @foreach ($chronology_period_taisyos as $chronology_period_taisyo)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_taisyo->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_taisyo->event_subject }}</strong>
                                                    {{ $chronology_period_taisyo->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>昭和</h2>
                                    @foreach ($chronology_period_syowas as $chronology_period_syowa)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_syowa->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_syowa->event_subject }}</strong>
                                                    {{ $chronology_period_syowa->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>平成</h2>
                                    @foreach ($chronology_period_heiseis as $chronology_period_heisei)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_heisei->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_heisei->event_subject }}</strong>
                                                    {{ $chronology_period_heisei->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                <h2>令和</h2>
                                    @foreach ($chronology_period_reiwas as $chronology_period_reiwa)
                                        <li>
                                            <dl>
                                                <dt aria-lavel="年号">{{ $chronology_period_reiwa->event_date }}</dt>
                                                <dd><strong aria-lavel="出来事">{{ $chronology_period_reiwa->event_subject }}</strong>
                                                    {{ $chronology_period_reiwa->event_detail }}
                                                </dd>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
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
	    <!--=============JS ===============--> 
        <!--jQuery-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--自作のJS-->   
        <script src="js/script.js"></script>
    </body>
</html>