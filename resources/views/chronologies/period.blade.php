<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <title>時代別年表 | 歴史年表 Only View Chronology</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ secure_asset('/css/parts.css') }}">
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
                <main id="japanese_chronology_period">
                    <section>
                        <h1 class="chronology_title">日本史年表</h1>
                        <ul id="page-link">
                            <li><a href="#kohun">古墳</a></li>
                            <li><a href="#asuka">飛鳥</a></li>
                            <li><a href="#nara">奈良</a></li>
                            <li><a href="#heian">平安</a></li>
                            <li><a href="#kamakura">鎌倉</a></li>
                            <li><a href="#nanbokucho">南北朝</a></li>
                            <li><a href="#muromachi">室町</a></li>
                        </ul>
                        <ul id="page-link">
                            <li><a href="#aduchimomoyama">安土桃山</a></li>
                            <li><a href="#edo">江戸</a></li>
                            <li><a href="#meiji">明治</a></li>
                            <li><a href="#taisyo">大正</a></li>
                            <li><a href="#syowa">昭和</a></li>
                            <li><a href="#heisei">平成</a></li>
                            <li><a href="#reiwa">令和</a></li>
                        </ul>
                        <section class="chronology_section" id="kohun">
                            <div class="kohun-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>古墳</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_kohuns as $chronology_period_kohun)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_kohun->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_kohun->event_subject }}</strong>
                                                            {{ $chronology_period_kohun->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="asuka">
                            <div class="asuka-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>飛鳥</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_asukas as $chronology_period_asuka)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_asuka->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_asuka->event_subject }}</strong>
                                                            {{ $chronology_period_asuka->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="nara">
                            <div class="nara-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>奈良</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_naras as $chronology_period_nara)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_nara->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_nara->event_subject }}</strong>
                                                            {{ $chronology_period_nara->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="heian">
                            <div class="heian-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>平安</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_heians as $chronology_period_heian)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_heian->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_heian->event_subject }}</strong>
                                                            {{ $chronology_period_heian->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="kamakura">
                            <div class="kamakura-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>鎌倉</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_kamakuras as $chronology_period_kamakura)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_kamakura->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_kamakura->event_subject }}</strong>
                                                            {{ $chronology_period_kamakura->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="nanbokucho">
                            <div class="nanbokucho-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>南北朝</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_nanbokuchos as $chronology_period_nanbokucho)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_nanbokucho->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_nanbokucho->event_subject }}</strong>
                                                            {{ $chronology_period_nanbokucho->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="muromachi">
                            <div class="muromachi-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>室町</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_muromachis as $chronology_period_muromachi)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_muromachi->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_muromachi->event_subject }}</strong>
                                                            {{ $chronology_period_muromachi->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="aduchimomoyama">
                            <div class="aduchimomoyama-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>安土桃山</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_aduchimomoyamas as $chronology_period_aduchimomoyama)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_aduchimomoyama->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_aduchimomoyama->event_subject }}</strong>
                                                            {{ $chronology_period_aduchimomoyama->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="edo">
                            <div class="edo-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>江戸</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_edos as $chronology_period_edo)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_edo->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_edo->event_subject }}</strong>
                                                            {{ $chronology_period_edo->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="meiji">
                            <div class="meiji-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>明治</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_meijis as $chronology_period_meiji)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_meiji->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_meiji->event_subject }}</strong>
                                                            {{ $chronology_period_meiji->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="taisyo">
                            <div class="taisyo-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>大正</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_taisyos as $chronology_period_taisyo)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_taisyo->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_taisyo->event_subject }}</strong>
                                                            {{ $chronology_period_taisyo->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="syowa">
                            <div class="syowa-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>昭和</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_syowas as $chronology_period_syowa)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_syowa->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_syowa->event_subject }}</strong>
                                                            {{ $chronology_period_syowa->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="heisei">
                            <div class="heisei-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>平成</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_heiseis as $chronology_period_heisei)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_heisei->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_heisei->event_subject }}</strong>
                                                            {{ $chronology_period_heisei->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                        <section class="chronology_section" id="reiwa">
                            <div class="reiwa-bg">
                                <span class="scrolldown1"></span>
                            </div>
                            <section class="chronology_item">
                                <h2>令和</h2>
                                <ul class="timeline">
                                    @foreach ($chronology_period_reiwas as $chronology_period_reiwa)
                                        <li>
                                            <dl>
                                                <span class="slide-in leftAnime">
                                                    <span class="slide-in_inner leftAnimeInner">
                                                        <dt aria-lavel="年号">{{ $chronology_period_reiwa->event_date }}</dt>
                                                        <dd><strong aria-lavel="出来事">{{ $chronology_period_reiwa->event_subject }}</strong>
                                                            {{ $chronology_period_reiwa->event_detail }}
                                                        </dd>
                                                    </span>
                                                </span>
                                            </dl>
                                            <span class="border-line"></span>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                        </section>
                    </section>        
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
        <script src="js/scrolltimelineanime.js"></script>
        <script src="js/text.js"></script>
        <script src="js/pagetop.js"></script>
        <script src="js/pagelink.js"></script>
        <script src="js/hamburgermenu.js"></script>
        <script src="js/fixed.js"></script>
    </body>
</html>