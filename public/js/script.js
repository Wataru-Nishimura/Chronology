/*===========================================================*/
/*4-1-5日本地図表示*/
/*===========================================================*/
//SVGアニメーションの描画
var stroke;
stroke = new Vivus('mask', {//アニメーションをするIDの指定
    start:'manual',//自動再生をせずスタートをマニュアルに
    type: 'scenario-sync',// アニメーションのタイプを設定
    duration: 10,//アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false,//パスが更新された場合に再レンダリングさせない
    animTimingFunction:Vivus.EASE,//動きの加速減速設定
},
function(){
         $("#mask").attr("class", "done");//描画が終わったらdoneというクラスを追加
}
);

/*===========================================================*/
/*  印象編 4 最低限おぼえておきたい動き */
/*===========================================================*/

// 動きのきっかけの起点となるアニメーションの名前を定義
function fadeAnime(){
 
	// 4-6 じわっ（ぼかしから出現）
	
	$('.blurTrigger').each(function(){ //blurTriggerというクラス名が
		var elemPos = $(this).offset().top-50;//要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('blur');// 画面内に入ったらblurというクラス名を追記
		}else{
		$(this).removeClass('blur');// 画面外に出たらblurというクラス名を外す
		}
		});	
    
    //4-8 スーッ（枠線が伸びて出現）

    $('.lineTrigger').each(function(){ //lineTriggerというクラス名が
		var elemPos = $(this).offset().top-50;//要素より、50px上の
		var scroll = $(window).scrollTop();
		var windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('lineanime');// 画面内に入ったらlineanimeというクラス名を追記
		}else{
			$(this).removeClass('lineanime');// 画面外に出たらlineanimeというクラス名を外す
		}
	});	
    
}

/*===========================================================*/
/*9-4-1 SVG アニメーション*/
/*===========================================================*/

//SVGの初期設定

var logoVivus1;//1つめのSVG設定

//1～3のSVG初期設定
function VivusInit(){
	//1つめのSVG初期設定
	logoVivus1 = new Vivus('logo',
		{
			start: 'autostart',//アニメーションの自動再生
			type: 'scenario',// アニメーションのタイプを設定
			pathTimingFunction: Vivus.EASE,//動きの加速減速設定
		},
		function(obj){
			$("#logo").attr("class", "done");//描画が終わったらdoneというクラスを追加
		}
	);
	logoVivus1.stop();	
	
}

//スクロールをしたらSVGが出現する設定
function VivusAnime(){
	//スクロールをしたら1つめのSVGが出現する設定
	var elemPos = $('#logo').offset().top - 20;//要素より、20px上の位置まで来たら出現
	var scroll = $(window).scrollTop();
	var windowHeight = $(window).height();
	if (scroll >= elemPos - windowHeight) {
		logoVivus1.play(1);//描画される速さ。数が大きくなるほど速い
	}
}

/*===========================================================*/
/* 関数をまとめる */
/*===========================================================*/

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    fadeAnime();//印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
	  VivusAnime();//印象編 9-4-1 SVG アニメーションの関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load',function(){

    //機能編 4-1-5 ロゴアウトラインアニメーション
    $("#splash_logo").delay(3000).fadeOut('slow');//ロゴを3秒（3000ms）待機してからフェードアウト

    stroke.play();//印象編 9-4-1 SVG アニメーションの実行
  
    //=====ここからローディングエリア（splashエリア）をフェードアウトした後に動かしたいJSをまとめる    
    $("#splash").delay(3000).fadeOut(800,function(){//ローディング画面を3秒（3000ms）待機してからフェードアウト
    $('body').addClass('appear');//フェードアウト後bodyにappearクラス付与
	  VivusInit(); //印象編 9-4-1 SVG アニメーション初期設定
	  VivusAnime();//印象編 9-4-1 SVG アニメーションの関数を呼ぶ
    }); //=====ここまでローディングエリア（splashエリア）を0.8秒でフェードアウトした後に動かしたいJSをまとめる
    
    /*===========================================================*/
    /*機能編 4-2-3	背景色が伸びる（右から左） */
    /*===========================================================*/

    //=====ここから背景が伸びた後に動かしたいJSをまとめる
    $('.splashbg').on('animationend', function() {
      fadeAnime();//印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
     });
    //=====ここまで背景が伸びた後に動かしたいJSをまとめる
});