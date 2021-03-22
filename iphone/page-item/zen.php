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
            善玉元気のおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/genki.png" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    善玉元気は、スッキリとしたフローラ美人を目指すことの出来るゼリーとなっています。
                </p>

                <p class="bold">・すっきりサポート</p>

                <p>
                    善玉元気を試した人たちから多く挙げられている声に、すっきりしたということが挙げられています。
                    これまでなかなか出にくかったのが、毎朝スッキリと出るようになると多く声が挙げられており、皆さんスッキリとした朝を迎えることが出来るようになっています。
                </p>

                <p class="bold">・健康的に美しくなれる</p>

                <p>善玉元気には、乳酸菌発酵エキスという健康や美容を向上させるためには欠かせない必須アミノ酸が含まれています。
                    この乳酸菌発酵エキスは、なんと約352種類以上もの有用なる栄養成分から構成がされていることから、かなりの栄養分を体内へと取り入れることが出来るのです。
                    <br><br>
                    この乳酸菌発酵エキスは、いわゆる短鎖脂肪酸となっています。この短鎖脂肪酸は、ダイエットや老化防止をサポートしてくれることで有名です。
                    しっかりと栄養分を体内へと取り入れながらもダイエットや老化防止対策が出来るなんて、かなり素晴らしいゼリーなのではないのでしょうか。
                </p>


            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">善玉元気の飲み方</h2>

                <p class="bold">・1日1～3包</p>

                <p>
                    善玉元気は、ゼリータイプの食べるサプリメントとなっています。1日1～3包食べることが基本的となっています。
                    より早く結果を得たいと思っている方ならば、1日1包ではなかなか出来ませんので、1日3包摂取することがおすすめとなっています。
                    <br><br>
                    ブルーベリー系の香りと味なので、サッパリと嫌味なく食べることが出来るのではないのでしょうか。
                    おやつ感覚でお手軽感もありますので、とても食べやすいものとなっています。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">善玉元気のキャンペーン</h2>

                <p>
                    善玉元気のキャンペーンですが、通常購入よりも、フローラ定期便の方がかなりお得に購入をすることができます。
                    通常購入だと6980円のところが、フローラ定期便だと初回特別価格で61%OFFの2700円（税抜）送料無料にて購入をすることができます。
                    <br><br>
                    また、2回目以降も6980円の約22%OFFである5400円にて購入をすることが出来るので、大変お得となっています。
                    また、このフローラ定期便では3ヶ月以上ご利用いただいているお客様からの喜びの声が多いため、3回以上の継続を推奨しています。
                    <br><br>
                    90日間全額返金保証もついているので、気軽にお試しすることができます。
                </p>


                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/genki.php<?php echo "?".$query2; ?>"
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