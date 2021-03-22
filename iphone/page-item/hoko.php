<?php 
include_once('../w/wp-load.php');
$query = "?".$_SERVER['QUERY_STRING'];
// $search = array('?a=index.php&','?a=index.php');
$query2 = str_replace($search, '', $query);
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html>
<html lang="ja">

<head>

    <?php 
    include ('../tags/headTag.php'); ?>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T329LCK');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="true" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="../style.css?ver=1" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://ダイエット成功ガイド.com/w/wp-content/themes/nyusan/style.css" rel="stylesheet">
    <title>ダイエット成功ガイド</title>
    <style>
    .searchbox {
        text-align: left !important;
    }

    .tabs>li {
        width: 30%;
    }

    .tabs>li>a {
        color: #666;
        padding: 0;
        display: block;
        text-align: center;
        text-decoration: none;
        font-size: 15px;
        line-height: 20px;
        border-bottom: 2px solid transparent;
        -webkit-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .tabs>li.active>a {
        color: #fff;
    }

    .swiper-container-2 {
        padding: 30px 0;
        overflow: hidden;
    }

    .swiper-container-2 .swiper-slide {
        background: #fff;
        border: 1px dashed #ccc;
        padding: 0;
        box-sizing: border-box;
    }

    .swiper-pagination {
        width: 100%;
    }

    .swiper-pagination-clickable .swiper-pagination-bullet {
        margin-right: 10px;
    }

    .swiper-pagination-bullet-active {
        opacity: 1;
        background: orange;
    }

    .accordion-page-item {
        display: none;
    }
    </style>
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T329LCK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <?php include "logo.php" ?>

    <?php include "ham.php" ?>


    <div id="wrapper">

        <a href="../">
            <img src="../img/sub-header-01-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>

        <h1 class="midashi-01">
            ホコニコのラクトフェリン+乳酸菌のおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/hoko.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    ホコニコのラクトフェリン+乳酸菌には、ビフィズス菌やフェカリス菌といった、2つの菌を合計210億個も摂取することができます。
                    しっかりと優しさにこだわって作られているため、サプリメントに入っている添加物が気になるという方でも、
                    気軽に摂取することの出来るサプリメントに仕上がっています。<br><br>

                    配合されている原材料なども、ほかのサプリメントに比べるとかなり少ない傾向にあります。
                    そのため、サプリメントでは珍しく子供でも飲むことが出来るということが言われています。
                    優しく包み込んでくれて、様々な場面にてサポートをしてくれるサプリメントとなっています。

                </p>

                <p class="bold">・ダイエットのサポートをしてくれる</p>

                <p>
                    ホコニコのラクトフェリン+乳酸菌は、ダイエットのサポートをしてくれます。普段忙しければダイエットをする暇もありません。
                    しかしながら、このホコニコのラクトフェリン+乳酸菌は飲むことでしっかりとダイエットのサポートをしてくれるので、忙しい方でも難なくダイエットをすることが出来るのです。
                </p>

                <p class="bold">・体の基礎作りに</p>

                <p>ホコニコのラクトフェリン+乳酸菌は、体の基礎作りをサポートをしてくれるラクトフェリン・ビフィズス菌・フェカリス菌などが配合されています。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ホコニコのラクトフェリン+乳酸菌の飲み方</h2>

                <p>ホコニコのラクトフェリン+乳酸菌の飲み方ですが、とにかく継続して飲むということが一番重要な飲み方となっています。
                    飲む時間としては、朝・昼・晩の食後となっています。また、野菜を食べた後に乳酸菌を摂取すると、野菜に含まれている食物繊維が乳酸菌の餌になることによって、
                    更にパワーアップして、より良い結果が得られると言われていますので、野菜摂取はおすすめです。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ホコニコのラクトフェリン+乳酸菌のキャンペーン</h2>


                <p>
                    ホコニコのラクトフェリン+乳酸菌のキャンペーンですが、通常購入よりも毎月らくらくコースの方がお得となっています。通常購入だと7800円なのですが、
                    毎月らくらくコースだと初回がなんと約77%OFFの1780円（税別）になります。2回目以降も、約42%OFFの4500円にてお届けしてくれるので、
                    大変おすすめとなっています。また、その他にも毎月らくらく2袋コースなどもありますので、自身に合ったコースを選ぶことをおすすめします。
                </p>



                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/hoko.php<?php echo "?".$query2; ?>"
                        target="_blank">
                        <img alt="" src="../img/n_img/btn_site_go_01.png" / width="100%">
                    </a>
                </div>

            </div>


        </div>


        <div id="banner-wrap">
            <a href="../contact.php">
                <img src="../img/sub-header-bn-sp.png" alt="" width="100%">
            </a>
            <a href="../supple.php">
                <img src="../img/sub-header-01-sp.png" alt="" width="100%">
            </a>
            <a href="../column.php">
                <img src="../img/sub-header-02-sp.png" alt="" width="100%">
            </a>

            <a href="../qna.php">
                <img src="../img/sub-header-03-sp.png" alt="" width="100%">
            </a>

        </div>


        <div id="menu">

            <div class="menubox">
                <ul id="menu1">
                    <li>
                        <a href="../">TOPへ</a>
                    </li>
                    <li>
                        <a href="../unei.php">運営者情報</a>
                    </li>
                    <li>
                        <a href="../entry4.php">ランキング調査概要</a>
                    </li>
                    <li>
                        <a href="../privacy.php">プライバシーポリシー</a>
                    </li>
                </ul>
            </div>

        </div>


        <footer>

            Copyright (C) 2019 <br>ダイエット成功ガイド All Rights Reserved.

            <script type="text/javascript">
            window._pt_lt = new Date().getTime();
            window._pt_sp_2 = [];
            _pt_sp_2.push('setAccount,4387eec7');
            var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            (function() {
                var atag = document.createElement('script');
                atag.type = 'text/javascript';
                atag.async = true;
                atag.src = _protocol + 'js.ptengine.jp/pta.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(atag, s);
            })();
            </script>
            <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-98179377-1', 'auto');
            ga('send', 'pageview');
            </script>

            <script>
            $(".ham-btn").click(function() {
                $("#ham-menu").addClass("open");
                $('.ham-btn').hide();
            });
            $(".close").click(function() {
                $("#ham-menu").removeClass("open");
                $('.ham-btn').fadeIn(2000);
            });
            </script>

            <script>
            $(function() {
                var Accordion1 = function(el, multiple) {
                    this.el = el || {};
                    this.multiple = multiple || false;

                    var links = this.el.find('.accordion-title');
                    links.on('click', {
                        el: this.el,
                        multiple: this.multiple
                    }, this.dropdown)
                }

                Accordion1.prototype.dropdown = function(e) {
                    var $el = e.data.el;
                    $this = $(this),
                        $next = $this.next();

                    $next.slideToggle();
                    $this.parent().toggleClass('open');

                    if (!e.data.multiple) {
                        $el.find('.accordion-page-item').not($next).slideUp().parent().removeClass('open');
                    };
                }
                var accordion1 = new Accordion1($('.menu-list-wrap'), false);
            });
            </script>


        </footer>


</body>

</html>