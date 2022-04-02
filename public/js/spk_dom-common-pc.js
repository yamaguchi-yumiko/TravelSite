/* spk_dom-common-pc.js */

$(function() {
	// input タグに disabled プロパティがある場合に、プルダウン機能が動かないようにする
	// クラス名を変更 : js-dom-pulldown__input -> spk_js-dom-pulldown__input

	/* ----------------------------------------------------------
	 pulldown
	---------------------------------------------------------- */
	$(document).on("click touchend", ".spk_js-dom-pulldown__input", function() {
	// $(".spk_js-dom-pulldown__input").on("click touchend", function() {

		var $this = $(this);

		if ($this.find("input").prop("disabled")) {
			// input タグに disabled プロパティがある場合は、プルダウン動作を行わない
			return;
		}
		if (!$this.hasClass("is-active")) {
			closePulldown();
			$this.addClass("is-active");
			$this.parents(".js-dom-pulldown").find(".js-dom-pulldown__panel").fadeIn(100)
		}
		if ($this.hasClass("js-dom-pulldown__calendar-homeward") && $this.hasClass("is-active")) {
			$(".js-dom-pulldown__panel--calendar").addClass("is-active-homeward").fadeIn(100)
		}
	});

	$(document).on("mousedown touchend", function(e) {
		var $target = $(e.target);
		if ($target.closest(".js-dom-pulldown").length == 0) {
			closePulldown();
		}
	});

	function closePulldown() {
		$(".js-dom-pulldown").removeClass("is-active");
		$(".js-dom-pulldown__input").removeClass("is-active");
		$(".spk_js-dom-pulldown__input").removeClass("is-active");
		$(".js-dom-pulldown__panel--calendar").removeClass("is-active-homeward");
		$(".js-dom-pulldown__panel").fadeOut(100).removeAttr("style");
	}

	/* ----------------------------------------------------------
	プラン内容の客室情報、食事情報の画像切替
	---------------------------------------------------------- */
	/* 画像に加えて、キャプションの切り替えも可能にする */
	$(".spk_js-domhotel-plan-image-thumb img").mouseover(function(){
		$(this).parents('.js-domhotel-plan-image').find(".js-domhotel-plan-image-main img").attr("src", $(this).attr("src"));
		$(this).parents('.js-domhotel-plan-image').find(".js-domhotel-plan-image-main img").attr("alt", $(this).attr("alt"));
		$(this).parents('.js-domhotel-plan-image').find(".js-domhotel-plan-image-main figcaption").html($(this).attr("alt"));
	});

	$(document).on("click touchend", ".js-dom-accordion-btn", function(ev) {
		if($(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").not(':animated').length >= 1){
			$(this).toggleClass("is-open");
			$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideToggle(100);
		}
		return false;
	});

	$(document).on("click touchend", ".js-dom-accordion-btn-02", function() {
		if($(this).parents(".js-dom-accordion").find(".js-dom-accordion-content-02").not(':animated').length >= 1){
			$(this).toggleClass("is-open");
			$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content-02").toggleClass("is-open");
		}
		return false;
	});

	$(document).on("click touchend", ".js-dom-accordion-child-btn", function() {
		if($(this).parents(".js-dom-accordion").find(".js-dom-accordion-child-content").not(':animated').length >= 1){
			$(this).toggleClass("is-open");
			$(this).parents(".js-dom-accordion-child").find(".js-dom-accordion-child-content").slideToggle(100);
		}
		return false;
	});

	/* 閉じるボタン単体 */
	$(document).on("click touchend", ".js-dom-accordion-btn-close", function() {
		if($(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").not(':animated').length >= 1){
			$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideUp(100);
			$(this).parents(".js-dom-accordion").find(".js-dom-accordion-btn,.js-dom-accordion-btn-02,.js-dom-accordion-btn-03").removeClass("is-open");
		}
		return false;
	});

	/* コンテンツがトリガーボタンより前にある場合 */
	$(document).on("click touchend", ".js-dom-accordion-btn-03", function() {
		if($(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").not(':animated').length >= 1){
			$(this).toggleClass("is-open");
			$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideToggle(500);
			var targetY=$(this).parents(".js-dom-accordion").offset().top;
			$('html,body').animate({scrollTop: targetY},500);
		}
		return false;
	});

});

