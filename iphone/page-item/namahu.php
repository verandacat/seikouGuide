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
            生酵素フローラ+HMBのおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/hmb.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    生酵素フローラ+HMBは、生酵素・乳酸菌・HMBの組み合わせにこだわっているサプリメントです。本格的な3つの成分を一気に摂取することが出来るのは、この生酵素フローラ+HMBだけ。
                </p>

                <p class="bold">・ダイエット効果を期待することが出来る</p>

                <p>
                    生酵素フローラ+HMBには、HMBという成分が含まれています。
                    HMBは、アミノ酸の一種のロイシンから、たった5%しか作ることが出来ない貴重な物質で、ダイエットのサポートやスポーツの分野で人気の成分です。
                    <br><br>
                    その他にも、BCAAや白インゲン豆エキスなど様々なダイエットに良い成分が配合されています。
                </p>

                <p class="bold">・すっきりをサポート！</p>

                <p>
                    生酵素フローラ+HMBには、乳酸菌が含まれています。この乳酸菌には、EC-12という種類が使用されており、
                    EC-12には善玉菌を増やして体内環境をサポートする作用があることから、すっきりを期待することが出来ます。
                </p>

                <p class="bold">・綺麗な肌を導く</p>

                <p>
                    生酵素フローラ+HMBには、様々な栄養分が配合されているスーパーフードやスーパーフルーツが入っているということから、
                    様々な美容効果を期待することが出来ます。お肌のトラブルで悩んでいる方でもそのトラブルを解消することが出来るかもしれないのです。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">生酵素フローラ+HMBの飲み方</h2>

                <p class="bold">・1日3粒</p>

                <p>生酵素フローラ+HMBの飲み方ですが、1日3粒が目安となっています。タイミングは自由ですが、
                    ダイエットのサポートのためには運動の３０分前に飲むことが良く、消化のサポートのためには食前に飲むことが良く、
                    美肌やお腹の調子のサポートのためには寝る前に飲むことがおすすめとなっています。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">生酵素フローラ+HMBのキャンペーン</h2>


                <p>

                    そんな生酵素フローラ+HMBのキャンペーンですが、通常購入よりもすっきりお得コースがオススメとなっています。
                    <br><br>
                    通常購入だと7800円がすっきりお得コースだと初回のみ780円（税別）となっており、2回目以降も約23%OFFの5980円にて購入をすることが出来ます。
                    <br><br>
                    また、マニュアルなどのプレゼントや30日間全額返金保証や相談無料など、嬉しいサポートもしっかりと充実しています。
                </p>


                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/nama.php<?php echo "?".$query2; ?>"
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