//確認を促すモーダル
$(".confirm").modaal({
  type:'confirm',
  confirm_title: 'ログイン画面',//確認画面タイトル
  confirm_button_text: 'ログイン', //確認画面ボタンのテキスト
  confirm_cancel_button_text: 'キャンセル',//確認画面キャンセルボタンのテキスト
  confirm_content: 'ログインが必要です。<br>この画面はボタンを押さなければ閉じません。',//確認画面の内容
});