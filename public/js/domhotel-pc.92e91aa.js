/* v1.0 2017/09/29 */
/**
 * domhotel-pc.js
 *
 */

 $(function() {
    /* ----------------------------------------------------------
     modal
    ---------------------------------------------------------- */
        /* 最近見た施設 */
        $(document).on("click", ".js-domhotel-modal-recent", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-recent',
                    type: 'inline'
                }
            });
        });

        /* こども人数入力 */
        $(document).on("click", ".js-domhotel-modal-child-number", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-child-number',
                    type: 'inline'
                }
            });
        });

        /* 内訳 */
        $(document).on("click", ".js-domhotel-modal-breakdown", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-breakdown',
                    type: 'inline'
                }
            });
        });

        /* ペットの宿泊について */
        $(document).on("click", ".js-domhotel-modal-about-pet", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-about--pet',
                    type: 'inline'
                }
            });
        });

        /* お子様の宿泊について */
        $(document).on("click", ".js-domhotel-modal-about-child", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-about--child',
                    type: 'inline'
                }
            });
        });

        /* ノ－マライゼーションについて */
        $(document).on("click", ".js-domhotel-modal-about-normalization", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-about--normalization',
                    type: 'inline'
                }
            });
        });

        /* ペットの宿泊について */
        $(document).on("click", ".js-domhotel-modal-about-pet", function(e) {
            e.preventDefault();

            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-about--pet',
                    type: 'inline'
                }
            });
        });
        /* TOP 地図から探す */
        $(document).on("click", ".js-domhotel-modal-area-map", function(e) {
            e.preventDefault();
            $.magnificPopup.open({
                items: {
                    src: '.domhotel-modal-area',
                    type: 'inline'
                }
            });
        });

      //閉じるリンクの設定
      $(document).on('click', '.js-dom-modal-close', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
      });

    /* ----------------------------------------------------------
     地図表示
    ---------------------------------------------------------- */
        $mapShowBtn = $(".js-domhotel-map-search-btn");
        $mapContents = $(".js-domhotel-map-contents");
        $mapFixContents = $(".js-domhotel-result-header,.js-domhotel-result-pager");

        $(document).on("click touchend", ".js-domhotel-map-search-btn", function() {
            $mapContents.fadeToggle().toggleClass("is-show");
            $(this).toggleClass("is-active");
            return false;
        });
        $(document).on("click touchend", ".js-domhotel-map-hide-btn", function() {
            $mapContents.fadeOut().removeClass("is-show");
            $mapShowBtn.removeClass("is-active");
            $mapFixContents.removeClass("is-fixed");
        });
        //地図内ピン
        $(document).on("click touchend", ".js-domhotel-map-pin", function() {
            $(".js-domhotel-map-pin").removeClass("is-active");
            $(".js-domhotel-map-box").removeClass("is-active");
            $(this).addClass("is-active");
            $(".js-domhotel-map-box").addClass("is-active");
            $(".js-domhotel-map-box-close").on("click touchend", function() {
                $(".js-domhotel-map-box").removeClass("is-active");
                $(".js-domhotel-map-pin").removeClass("is-active");
            });
        });
        $(window).on('load resize', function() {
        // 3-1 周辺地図を上部に固定
            if($(".js-domhotel-main").length){
                mapContentsPos = $('.js-domhotel-main').offset().top;
                fixedClass = 'is-fixed';
                $(window).on('load scroll', function() {
                    var value = $(this).scrollTop();
                    if ( value > mapContentsPos && $mapContents.hasClass("is-show")) {
                        $mapContents.addClass(fixedClass);
                        $mapFixContents.addClass(fixedClass);
                    } else {
                        $mapContents.removeClass(fixedClass);
                        $mapFixContents.removeClass(fixedClass);
                    }
                });
            }

        //area 一覧地図を上部に固定
            if($(".js-domhotel-search-location").length){
                var $afterContents = $('.js-domhotel-after-search-location');
                var $mapSearchContents = $('.js-domhotel-search-location');
                mapSearchContentsPos = $mapSearchContents.offset().top;
                releasePos = $afterContents.offset().top;

                fixedClass = 'is-fixed';
                releaseClass = 'is-released';
                $(window).on('load scroll', function() {
                    var value = $(this).scrollTop();

                    if ( value > mapSearchContentsPos ) {
                        $mapSearchContents.removeClass(releaseClass);
                        $mapSearchContents.addClass(fixedClass);
                    } else {
                        $mapSearchContents.removeClass(fixedClass,releaseClass);
                    }
                    if ( value > releasePos ) {
                        $mapSearchContents.removeClass(fixedClass);
                        $mapSearchContents.addClass(releaseClass);
                    }

                });
            }
        });

    /* ----------------------------------------------------------
     画像スライダー slick
    ---------------------------------------------------------- */
        //宿泊共通 カウンター付スライダー
        $(".js-domhotel-hotel-slider").on("init", function(event, slick) {
            $(this).append('<div class="dom-slick-counter"><span class="dom-slick-current"></span> / <span class="dom-slick-total"></span></div>');
            $(".dom-slick-current").text(slick.currentSlide + 1);
            $(".dom-slick-total").text(slick.slideCount);
        })
        .slick({
            dots:true,
            fade: true
        })
        .on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            $(".dom-slick-current").text(nextSlide + 1);
        });

        //ギャラリー
        $(".js-domhotel-gallery").slick({
            speed:0,
            dots:true,
            fade: true,
            autoplay:true,
            pauseOnHover:true,
            pauseOnDotsHover:true,
            customPaging: function(slick,index) {
                var targetImage = slick.$slides.eq(index).find('img').attr('src');
                return '<img src="'+ targetImage +'">';
            }
        });
        $(".js-domhotel-gallery").on("mouseenter", ".slick-dots > li", function() {
            $(this).click();
        } );

        //レストランスライダー
        $(".js-domhotel-restaurant-slider").slick({
            infinite:false,
            slidesToShow: 5,
            slidesToScroll: 2
        });

        //お風呂スライダー
        $(".js-domhotel-bath-slider").slick({
            infinite:false,
            slidesToShow: 5,
            slidesToScroll: 2
        });

        //プラン詳細スライダー
        $(".js-domhotel-plan-image").slick({
            arrows:false,
            speed:0,
            dots:true,
            fade: true,
            autoplay:false,
            customPaging: function(slick,index) {
                var targetImage = slick.$slides.eq(index).find('img').attr('src');
                return '<img src="'+ targetImage +'">';
            }
        });
        //プラン詳細スライダー（サムネイルなし）
        $(".js-domhotel-plan-image-no-thumbnail").slick({
            arrows:false,
            speed:0,
            dots:false,
            fade: true,
            autoplay:false
        });
        $(".js-domhotel-plan-image").on("mouseenter", ".slick-dots > li", function() {
            $(this).click();
        } );

    /* ----------------------------------------------------------
     モーダル地図から探す
    ---------------------------------------------------------- */
        $.fn.svgJapanMap = function(options) {
            function composeIdName(prefix, name, area) {
                var id = "#";
                if (prefix != "") {
                    id += prefix + "-";
                }
                if (name != "") {
                    id += name + "-"
                }
                id += area;
                return id;
            }
            var defaults = {
                svgFile: "",
                prefix:  "",
                onHover: function(e) {},
                onOut: function(e) {},
                associated: []
            };
            var setting = $.extend(defaults, options);
            setting.associated.push("");

            // SVGに設定したid
            var areas = [
                "hokkaido",
                "aomori",
                "iwate",
                "miyagi",
                "akita",
                "yamagata",
                "fukushima",
                "ibaraki",
                "tochigi",
                "gunma",
                "saitama",
                "chiba",
                "tokyo",
                "kanagawa",
                "nigata",
                "toyama",
                "ishikawa",
                "fukui",
                "yamanashi",
                "nagano",
                "gifu",
                "shizuoka",
                "aichi",
                "mie",
                "shiga",
                "kyoto",
                "osaka",
                "hyogo",
                "nara",
                "wakayama",
                "tottori",
                "shimane",
                "okayama",
                "hiroshima",
                "yamaguchi",
                "tokushima",
                "kagawa",
                "ehime",
                "kochi",
                "fukuoka",
                "saga",
                "nagasaki",
                "kumamoto",
                "oita",
                "miyazaki",
                "kagoshima",
                "okinawa"
            ];
            var $this = this;
            // $.get(setting.svgFile, function (data) { // mod20180416 get 不要では
                var in_event = "mouseenter";
                var out_event = "mouseleave";
                // IEで動かない対策
                if (navigator.userAgent.match("MSIE") || navigator.userAgent.match("Trident")) {
                    in_event  = "mouseover";
                    out_event = "mouseout";
                }
                // $this.append($(data.documentElement)); // mod20180416 append 不要では
                $.each(areas, function(i, area) {
                    $.each(setting.associated, function(j, name) {
                        $(composeIdName(setting.prefix, name, area)).bind(in_event, function (e) {
                            e.areaName = area;
                            setting.onHover(e);

                            $.each(setting.associated, function (k, name2) {
                                $(composeIdName(setting.prefix, name2, area)).css({
                                    "fill": "#f0b2b2",
                                });
                                $(composeIdName(setting.prefix, name2, area)).addClass("is-active");
                            });
                                return false;
                        }).bind(out_event, function(e) {
                            setting.onOut(e);
                        $.each(setting.associated, function (k, name2) {
                            $(composeIdName(setting.prefix, name2, area)).css({
                                "fill": "#ddd",
                            });
                            $(composeIdName(setting.prefix, name2, area)).removeClass("is-active");
                        });
                        return false;
                    });
                    });
                });
            // }); // mod20180416 get 不要では
        };

         // mod20180416 js-domhotel-modal-svgmap が存在するページでのみ呼び出す
        var $modalSvgMap = $(".js-domhotel-modal-svgmap");
        if ($modalSvgMap[0]) {
            $modalSvgMap.svgJapanMap({
                associated: ["domhotel-modal-area__text"]
            });
        }

        /* ----------------------------------------------------------
         特集ページ
        ---------------------------------------------------------- */
            /*---- accordion ----*/
            $(document).on('click', '.js-domhotel-accordion-btn', function() {
                if($(this).closest('.js-domhotel-accordion').find('.js-domhotel-accordion-content').not(':animated').length >= 1){
                    $(this).toggleClass('is-open');
                    $(this).closest('.js-domhotel-accordion').children('.js-domhotel-accordion-content').slideToggle(200);
                }
            });
            /*---- もっと見る ----*/
            $('.js-domhotel-planlist').each(function () {
                var bnrList = $(this).children('.js-domhotel-planlist-bnr-list');
                var linkList = $(this).children('.js-domhotel-planlist-link-list');
                var moreBtn = $(this).children('.js-domhotel-planlist-btn-more');
                var numBnr = bnrList.find('li').length;
                var linkListHeight = linkList.height();

                if(numBnr > 1){
                    bnrList.addClass('is-hide');
                    linkList.addClass('is-hide');
                    moreBtn.addClass('is-show');
                } else if(linkList) {
                    bnrList.addClass('is-hide');
                    linkList.addClass('is-hide');
                    moreBtn.addClass('is-show');
                }

                moreBtn.click(function(){
                    if($(this).hasClass("is-open")){
                        bnrList.addClass('is-hide');
                        linkList.addClass('is-hide');
                        $(this).removeClass('is-open');
                    }else {
                        bnrList.removeClass('is-hide');
                        linkList.removeClass('is-hide');
                        $(this).addClass('is-open');
                    }
                });
            });
    /* ----------------------------------------------------------
     エリア一覧ページ
    ---------------------------------------------------------- */
        /*---- もっと見る ----*/
        $('.js-domhotel-arealist-block').each(function () {
            $(this).children('.js-domhotel-arealist-btn-more').click(function(){
                if($(this).hasClass("is-open")){
                    $(this).parents('.js-domhotel-arealist-block').removeClass('is-open');
                    $(this).removeClass('is-open');
                }else {
                    $(this).parents('.js-domhotel-arealist-block').addClass('is-open');
                    $(this).addClass('is-open');
                }
            });
        });
    /* ----------------------------------------------------------
     プラン詳細 チェックイン日・泊数・人数・室数 プルダウンからモーダルを開く
    ---------------------------------------------------------- */
        // プルダウンオープンイベント
        $(document).on('click', '.js-domhotel-reserve-pulldown', function(e) {
            if(!$(event.target).closest('.domhotel-btn-clear,.domhotel-select-column__panel').length) {
                $(document).trigger("open-js-domhotel-reserve-pulldown", {$target: $(this)});
            }
        });
        $(document).on('open-js-domhotel-reserve-pulldown', function(e, data) {
            $("html,body").animate({scrollTop:data.$target.offset().top});//プルダウンまでスクロール
            data.$target.addClass('is-active');
            $('body').addClass('is-panel-active');
        });
        // プルダウンクローズイベント
        $(document).on('click', '.js-domhotel-panel-overlay,.js-domhotel-panel-close-btn', function(e) {
            $(document).trigger("close-js-domhotel-reserve-pulldown", {$target: $(this).closest('.js-domhotel-reserve-pulldown')});
        });
        $(document).on('close-js-domhotel-reserve-pulldown', function(e, data) {
            $(data.$target).removeClass('is-active');
            $('body').removeClass('is-panel-active');

            // Spook側処理の呼び出し
            $(document).trigger("planDetailAfterPulldownCloseEvent", {$target: data.$target});
        });
    /* ----------------------------------------------------------
        施設詳細のタブメニューを固定
    ---------------------------------------------------------- */
        var hotelMenu = $(".js-domhotel-hotel-menu");
        if (hotelMenu.length) {
            var hotelMenuPos = hotelMenu.offset().top;
            var fixedClass = 'is-fixed';
            $(window).scroll(function () {
                if ($(this).scrollTop() > hotelMenuPos) {
                    hotelMenu.addClass(fixedClass);
                } else {
                    hotelMenu.removeClass(fixedClass);
                }
            });
        }
    /* ----------------------------------------------------------
     観光情報 アコーディオン
     https://www.jtb.co.jp/_common/js/kokunai/tourism.js より取得
    ---------------------------------------------------------- */
        var open = 'js-open';

        /* タイトル */
        $(document).on('click', '.js-accordion', function() {
            var $target = $(this);
            if($target.hasClass(open)){
                $target.removeClass(open);
                $target.next().slideUp('fast');
            } else {
                $target.addClass(open);
                $target.next().slideDown('fast');
            }
        });
    });//end
