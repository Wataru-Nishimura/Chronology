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

/*==========================================================*/
/*5-1-5上部固定*/
/*==========================================================*/
function FixedAnime() {
  var additionaloptionareaH = $('#additionaloptionarea').outerHeight(true);
  var scroll = $(window).scrollTop();
  if (scroll >= additionaloptionareaH){//headerの高さ以上になったら
      $('#additionaloptionarea').addClass('fixed');//fixedというクラス名を付与
    }else{//それ以外は
      $('#additionaloptionarea').removeClass('fixed');//fixedというクラス名を除去
    }
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  FixedAnime();/* スクロール途中からヘッダーを出現させる関数を呼ぶ*/
});

/*==========================================================*/
/*9-1-6スクロールダウン*/
/*==========================================================*/
function ScrollTimelineAnime(){
  $('.timeline li').each(function(){// それぞれのli要素の
    var elemPos = $(this).offset().top;// 上からの高さ取得
    var scroll = $(window).scrollTop();// スクロール値取得
    var windowHeight = $(window).height();// windowの高さ取得
    var startPoint = 100; //線をスタートさせる位置を指定※レイアウトによって調整してください
    if (scroll >= elemPos - windowHeight-startPoint){       
      var H = $(this).outerHeight(true)//liの余白と高さを含めた数値を取得
      //スクロール値から要素までの高さを引いた値を、liの高さの半分のパーセントで出す
      var percent = (scroll+startPoint - elemPos) / (H/2) *100;//liの余白と高さの半分で線を100％に伸ばす

      // 100% を超えたらずっと100%を入れ続ける
      if(percent  > 100){
        percent  = 100;
      }
      // ボーダーの長さをセット
      $(this).children('.border-line').css({
        height: percent + "%", //CSSでパーセント指定
      });
    } 
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).on('scroll', function(){
  ScrollTimelineAnime();// 線が伸びる関数を呼ぶ
});

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function(){
  ScrollTimelineAnime();// 線が伸びる関数を呼ぶ
});

/*==========================================================*/
/*8-2文字のアニメーション*/
/*==========================================================*/
// function slideAnime(){
//   //====左に動くアニメーションここから===
//     $('.leftAnime').each(function(){ 
//       var elemPos = $(this).offset().top-50;
//       var scroll = $(window).scrollTop();
//       var windowHeight = $(window).height();
//       if (scroll >= elemPos - windowHeight){
//         //左から右へ表示するクラスを付与
//         //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
//         $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
//         $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
//       }else{
//         //左から右へ表示するクラスを取り除く
//         $(this).removeClass("slideAnimeLeftRight");
//         $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
        
//       }
//     });
    
//   }

/*===========================================================*/
/*機能編 8-1-6ページの指定の高さを超えたら出現し、フッター手前で止まる*/
/*===========================================================*/
//スクロールした際の動きを関数でまとめる
function PageTopAnime() {

		var scroll = $(window).scrollTop(); //スクロール値を取得
		if (scroll >= 200){//200pxスクロールしたら
			$('#page-top').removeClass('DownMove');		// DownMoveというクラス名を除去して
			$('#page-top').addClass('UpMove');			// UpMoveというクラス名を追加して出現
		}else{//それ以外は
			if($('#page-top').hasClass('UpMove')){//UpMoveというクラス名が既に付与されていたら
				$('#page-top').removeClass('UpMove');	//  UpMoveというクラス名を除去し
				$('#page-top').addClass('DownMove');	// DownMoveというクラス名を追加して非表示
			}
		}
		
		var wH = window.innerHeight; //画面の高さを取得
		var footerPos =  $('#footer').offset().top; //footerの位置を取得
		if(scroll+wH >= (footerPos+10)) {
			var pos = (scroll+wH) - footerPos+10 //スクロールの値＋画面の高さからfooterの位置＋10pxを引いた場所を取得し
			$('#page-top').css('bottom',pos);	//#page-topに上記の値をCSSのbottomに直接指定してフッター手前で止まるようにする
		}else{//それ以外は
			if($('#page-top').hasClass('UpMove')){//UpMoveというクラス名がついていたら
				$('#page-top').css('bottom','10px');// 下から10pxの位置にページリンクを指定
			}
		}
}

// #page-topをクリックした際の設定
$('#page-top a').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});

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
/*印象編 9-4-1 SVG アニメーション*/
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
/*6-2-3 ギャラリー-複合検索でカテゴリ別に画像を並び替える-*/
/*===========================================================*/

// $(window).on('load',function(){ //画面遷移時にギャラリーの画像が被らないように、すべての読み込みが終わった後に実行する

// //＝＝＝Muuriギャラリープラグイン設定
// var grid = new Muuri('.grid', {

// //アイテムの表示速度※オプション。入れなくても動作します
// showDuration: 600,
// showEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
// hideDuration: 600,
// hideEasing: 'cubic-bezier(0.215, 0.61, 0.355, 1)',
  
// // アイテムの表示/非表示状態のスタイル※オプション。入れなくても動作します
//   visibleStyles: {
//     opacity: '1',
//     transform: 'scale(1)'
//   },
//   hiddenStyles: {
//     opacity: '0',
//     transform: 'scale(0.5)'
//   } 
// });

// //＝＝＝並び替えボタン設定
// $('.sort-btn ul li').on('click',function(){//並び替えボタンをクリックしたら
//   var className = $(this).attr("class")//クリックしたボタンのクラス名を取得
//   className = className.split(' '); //「.sort-btn ul li」のクラス名を分割して配列にする

//     //ボタンにクラス名activeがついている場合
//   if($(this).hasClass("active")){ 
//     if(className[0] != "all"){              //ボタンのクラス名がallでなければ
//       $(this).removeClass("active");          //activeクラスを消す
//       var selectElms = $(".sort-btn ul li.active"); //ボタン内にactiveクラスがついている要素を全て取得
//       if(selectElms.length == 0){           //取得した配列内にactiveクラスがついている要素がなければ
//         $(".sort-btn ul li.all").addClass("active");//ボタンallにactiveを追加し
//         grid.show('');                //ギャラリーの全ての画像を表示
//       }else{
//         filterDo();                 //取得した配列内にactiveクラスがついている要素があれば並び替えを行う
//       }
//     } 
//   }
//     //ボタンにクラス名activeがついていない場合
//     else{
//     if(className[0] == "all"){              //ボタンのクラス名にallとついていたら
//       $(".sort-btn ul li").removeClass("active");   //ボタンのli要素の全てのactiveを削除し
//       $(this).addClass("active");           //allにactiveクラスを付与
//       grid.show('');                  //ギャラリーの全ての画像を表示
//     }else{
//       if($(".all").hasClass("active")){       //allクラス名にactiveクラスが付いていたら
//         $(".sort-btn ul li.all").removeClass("active");//ボタンallのactiveクラスを消し
//       }
//       $(this).addClass("active");           //クリックしたチェックボックスへactiveクラスを付与
//       filterDo();                   //並び替えを行う
//     }

//   }
  
// });

// //＝＝＝画像の並び替え設定
// function filterDo(){
//   var selectElms = $(".sort-btn ul li.active"); //全てのボタンのactive要素を取得
//   var selectElemAry = [];             //activeクラスがついているボタンのクラス名（sortXX）を保存する配列を定義
//   $.each(selectElms, function(index, selectElm) {
//     var className = $(this).attr("class")   //activeクラスがついている全てのボタンのクラス名（sortXX）を取得
//     className = className.split(' ');     //ボタンのクラス名を分割して配列にし、
//     selectElemAry.push("."+className[0]);   //selectElemAry配列に、チェックのついたクラス名（sortXX）を追加
//   })
//   str = selectElemAry.join(',');        //selectElemAry配列に追加されたクラス名をカンマ区切りでテキストにして
//   grid.filter(str);               //grid.filter(str);のstrに代入し、ボタンのクラス名と<li>につけられたクラス名が一致したら出現
// }

// });

/*===========================================================*/
/* 関数をまとめる */
/*===========================================================*/

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
    fadeAnime();//印象編 4 最低限おぼえておきたい動きの関数を呼ぶ
    PageTopAnime();//機能編 8-1-6 ページの指定の高さを超えたら出現し、フッター手前で止まる関数を呼ぶ
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
    PageTopAnime();//機能編 8-1-6 ページの指定の高さを超えたら出現し、フッター手前で止まる関数を呼ぶ
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