/* v1.0 2017/09/29 */
/**
 * dom-common-pc.js
 *
 */

 $(function() {
    /* ----------------------------------------------------------
     modal
    ---------------------------------------------------------- */
        /* お気に入りエラー */
        // [forcia 20180518] favorite-button-action.jsに組み込むためコメントアウト
        // $(document).on("click", ".js-dom-modal-favorite-error", function(e){
        // 	e.preventDefault();
        // 	$.magnificPopup.open({
        // 		items: {
        // 			src: '.dom-modal-favorite-error',
        // 			type: 'inline'
        // 		}
        // 	});
        // });
        //閉じるリンクの設定
        $(document).on("click", ".js-dom-modal-close", function (e) {
            e.preventDefault();
            $.magnificPopup.close();
        });
    /* ----------------------------------------------------------
     pulldown
    ---------------------------------------------------------- */
        $(document).on("click touchend", ".js-dom-pulldown__input", function() {
            var $this = $(this);
            if (!$this.hasClass("is-active")) {
                closePulldown();
                $this.addClass("is-active");
                $this.parents(".js-dom-pulldown").find(".js-dom-pulldown__panel").fadeIn(100)
                if ($this.hasClass("js-dom-search-move-top")) {
                    var targetY = $(".js-dom-top-mv-ttl").offset().top;	// h1まで
                    $('html,body').animate({scrollTop: targetY},500);
                }
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
     accordion
    ---------------------------------------------------------- */
        // forcia spk_dom-common-pc.js で対応するので、元の js は削除
        // $(document).on("click touchend", ".js-dom-accordion-btn", function() {
        // 	$(this).toggleClass("is-open");
        // 	$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideToggle(100);
        // });

        // $(document).on("click touchend", ".js-dom-accordion-btn-02", function() {
        // 	$(this).toggleClass("is-open");
        // 	$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content-02").toggleClass("is-open");
        // });

        /* 閉じるボタン単体 */
        // $(document).on("click", ".js-dom-accordion-btn-close", function() {
        // 	$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideUp(100);
        // 	$(this).parents(".js-dom-accordion").find(".js-dom-accordion-btn,.js-dom-accordion-btn-02,.js-dom-accordion-btn-03").removeClass("is-open");
        // });

        /* コンテンツがトリガーボタンより前にある場合 */
        // $(document).on("click", ".js-dom-accordion-btn-03", function() {
        // 	$(this).toggleClass("is-open");
        // 	$(this).parents(".js-dom-accordion").find(".js-dom-accordion-content").slideToggle(500);
        // 	var targetY=$(this).parents(".js-dom-accordion").offset().top;
        // 	$('html,body').animate({scrollTop: targetY},500);
        // });

    /* ----------------------------------------------------------
     show all
    ---------------------------------------------------------- */
        $(".js-dom-search-conditions__list").each(function(){
            $(this).find("li:gt(4)").each(function(){
                $(this).addClass("is-hide");
            });
            $(this).append("<div class='dom-search-conditions__btn-show-all'><span>すべて表示</span></div>");
            $(this).find("div:last").click(function(){
                $(this).parent().find("li").slideDown().removeClass("is-hide");
                $(this).remove();
            });
        });

    /* ----------------------------------------------------------
     tool tip
    ---------------------------------------------------------- */
        // [forcia 20180518]削除されていたが必要と思われるため残しておく
        /* JTBプレミアムアイコン */
        $(".js-dom-ico-premium").darkTooltip({
            opacity:1,
            gravity:'east'
        });
        /* JTBプレミアム+アイコン */
        $(".js-dom-ico-premiumplus").darkTooltip({
            opacity:1,
            gravity:'east'
        });
        /* JTBプレミアムアイコン */
        $(".js-dom-ico-premium-west").darkTooltip({
            opacity:1,
            gravity:'west'
        });
        /* HELP */
        $(".js-dom-help-place,.js-dom-help-date,.js-dom-help-night,.js-dom-help-people,.js-dom-help-keyword,.js-dom-help-pamphlet,.js-dom-help-plan-code,.js-dom-help-pay,.js-dom-help-dep-area").darkTooltip({
            opacity:1,
            gravity:'north'
        });
        /* お気に入り */
        $(".js-dom-favorite").darkTooltip({
            opacity:1,
            gravity:'north'
        });
        /* SNS */
        $(".js-dom-sns").darkTooltip({
            opacity:1,
            gravity:'north'
        });
        /* アンケート評価 */
        $(".js-dom-rating").darkTooltip({
            opacity:1,
            gravity:'east'
        });
        /* 一部屋あたりの利用人数 */
        $(".js-dom-people-warning").darkTooltip({
            opacity:1,
            gravity:'north'
        });
    /* ----------------------------------------------------------
     tab
    ---------------------------------------------------------- */
        $(document).on("click", ".js-dom-tab-list a", function(e) {
            e.preventDefault();
            $(this).parents(".js-dom-tab").find(".js-dom-tab-contents").removeClass("is-show");
            $($(this).attr("href")).addClass("is-show");
            $(this).parents(".js-dom-tab").find(".js-dom-tab-list a").removeClass("is-active");
            $(this).toggleClass("is-active");
        });

    /* ----------------------------------------------------------
     お気に入りボタン
    ---------------------------------------------------------- */
        // forcia 20180518 お気に入り登録上限を超えて登録しようとした場合、
        // 登録解除の文言を表示させないために、favorite-button-action.jsで組み込み
        // $(document).on("click", ".js-dom-favorite-btn", function() {
        // 	if ($(this).hasClass("is-checked")) {
        // 		$(".js-dom-favorite-tip").text("お気に入りを解除しました");
        // 		$(this).removeClass("is-checked");
        // 		$(this).parent(".js-dom-favorite").find(".js-dom-favorite-tip:not(:animated)").fadeIn("fast",function(){
        // 			$(this).delay(1000).fadeOut("fast");
        // 		});
        // 	} else {
        // 		$(".js-dom-favorite-tip").text("お気に入りに登録しました");
        // 		$(this).addClass("is-checked");
        // 		$(this).parent(".js-dom-favorite").find(".js-dom-favorite-tip:not(:animated)").fadeIn("fast",function(){
        // 			$(this).delay(1000).fadeOut("fast");
        // 		});
        // 	}
        // });
    /* ----------------------------------------------------------
     コピーボタン
    ---------------------------------------------------------- */
        // forcia 20180519 sns-share-button-actionへ移植
        // $(document).on("click", ".js-dom-copy-btn", function(e) {
        // 	e.preventDefault();
        // 	$(".js-dom-copy-tip").text("リンクコピーしました");
        // 	$(this).parent(".js-dom-copy").find(".js-dom-copy-tip:not(:animated)").fadeIn("fast",function(){
        // 		$(this).delay(1000).fadeOut("fast");
        // 	});
        // });
    });
    /* ----------------------------------------------------------
     スクロールに合わせてナビゲーションを固定
    ---------------------------------------------------------- */
    $(function(){
        if($(".js-dom-nav-contents").length){
            var contentsMenu = $(".js-dom-nav-contents");
            var menuPosition = contentsMenu.offset().top;
            var contentsMenuLink = $(".js-dom-nav-contents a[href^=#]");
            var offset = contentsMenu.outerHeight();
            var contentsMenuMargin = 44;
            var scrollTarget = [];

            contentsMenuLink.click(function(event) {
                $("html,body").animate({scrollTop:$($(this).attr("href")).offset().top - offset }, 500);
                return false;
            });
            var setTargetData = function(){
                scrollTarget = [];
                contentsMenuLink.each(function() {
                    var target = $($(this).attr("href"));
                    scrollTarget.push({
                    top:target.offset().top - offset,
                    bottom:target.offset().top + target.outerHeight() - offset
                });
            });
            };
            var contentsMenuFn = function(){
                var current = $(window).scrollTop();
                if(current >= menuPosition && !contentsMenu.hasClass("is-fixed")){
                    contentsMenu.addClass("is-fixed").prev("*").css("margin-bottom",offset+contentsMenuMargin+"px");
                }else if(current <= menuPosition){
                    contentsMenu.removeClass("is-fixed").prev("*").attr("style","");
                }
                for (var i = 0; i < scrollTarget.length; i++) {
                    if(current >= scrollTarget[i].top && current <= scrollTarget[i].bottom){
                        $(".js-dom-nav-contents li").eq(i).addClass("is-active").siblings('li').removeClass("is-active");
                        break;
                    }else if(i === scrollTarget.length - 1){
                        $(".js-dom-nav-contents li").removeClass("is-active");
                    }
                }
            };
            $(window).on("load",function(){
                setTargetData();
                contentsMenuFn();
            });
            $(window).on("scroll",function(){
                contentsMenuFn();
            });
        }
    });

    /* ----------------------------------------------------------
     scroll
    ---------------------------------------------------------- */
    $(function() {
        /* ページ上部へジャンプ */
        var domPageTopBtn = $(".js-dom-btn-page-top");
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                domPageTopBtn.fadeIn();
            } else {
                domPageTopBtn.fadeOut();
            }
        });
        domPageTopBtn.click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
        });

        /* ページ内ジャンプ */
        $(document).on("click", ".js-dom-btn-page-top,.js-dom-fix,.js-dom-scroll", function(e){
            e.preventDefault();
            var speed = 500;
            var href= $(this).attr("href");
            var target = $(!href || href == "#" || href == "" ? "html" : href);
            var position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
        });
    });
