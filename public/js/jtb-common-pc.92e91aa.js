/* v1.00 2016/10/21 */
/**
 * common.js
 *
 */
 "use strict";
 /* ----------------------------------------------------------
  init
 ---------------------------------------------------------- */
 $(function(){
     checkDevice();
     // スムーススクロール
     pageScroll();

 });
 /* ----------------------------------------------------------
  checkDevice
 ---------------------------------------------------------- */
 var $MQ = "PC";
 var checkDevice = function(){
     // setViewport
     var spView = 'width=device-width,initial-scale=1';
     var tbView = 'width=1130px';
     if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){
         //リキッド+レスポンシブ(スマートフォン)用のviewportを適用
         $('head').prepend('<meta name="viewport" content="' + spView + '" id="viewport">');
         $MQ = "SP";
     } else if(navigator.userAgent.indexOf('iPad') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') == -1) || navigator.userAgent.indexOf('A1_07') > 0 || navigator.userAgent.indexOf('SC-01C') > 0){
         //タブレット用のviewportを適用
         $('head').prepend('<meta name="viewport" content="' + tbView + '" id="viewport">');
         $MQ = "TB";
     }
 }

 /* ----------------------------------------------------------
  pageScroll
 ---------------------------------------------------------- */
 var pageScroll = function(){
     $('.js-scroll').click(function() {
         var speed = 400; // スクロールスピード
         var href= $(this).attr("href");
         var target = $(href == "#" || href == "" ? 'html' : href);
         var position = target.offset().top;
         if(href == '#'){
             // リンク#のときはページの先頭へ
             $('body,html').animate({scrollTop:0}, speed, 'swing');
         } else {
             // それ以外は指定idへ
             $('body,html').animate({scrollTop:position}, speed, 'swing');
         }
         return false;
     });
 }
