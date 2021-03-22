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
            ベルタ酵素ドリンクのおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/bel.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    本気で置き換えダイエットをしたいのであれば、ベルタ酵素ドリンクが大変おすすめとなっています。
                    熱に強く、酸に強く、低カロリー、低分子ということから、他社の酵素ドリンクと比較してもかなり優秀な酵素ドリンクとなっています。
                </p>

                <p class="bold">・ダイエット効果を期待することが出来る</p>

                <p>
                    ベルタ酵素ドリンクは、置き換えダイエットを目的としているドリンクであることから、上手く行えばしっかりとダイエット効果を期待することが出来ます。
                </p>

                <p class="bold">・美容ケアを行うことが出来る</p>

                <p>
                    ベルタ酵素ドリンクは、ダイエット目的のみではなく、美容面のケアも行うことが出来ます。野菜や果物が165種類も配合されており、
                    美容成分も4つ配合されています。また、その中でも馬プラセンタやコラーゲンペプチドから、かなりの美容効果を期待することが出来ます。脂質もゼロなのも嬉しいポイントです。
                </p>


            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ベルタ酵素ドリンクの飲み方</h2>

                <p>
                    そんなベルタ酵素ドリンクの飲み方ですが、主に置き換えダイエットを推奨しているドリンクであることから、少し飲み方が変わってきます。
                    <br><br>
                    ①ダイエットをすることを身体に知らせるためにファスティングを開始する前の日にはお昼ご飯や夕食に消化の良いものを食べ、20時以降には何も食べ物を食べては行けません。
                    <br><br>
                    ②1日1食ファスティングを開始します。朝または夜にご飯の代わりにベルタ酵素ドリンクを飲むことが必須となっています。例としては、朝にベルタ酵素ドリンクを飲み、
                    食前にベルタ酵素の粒を飲み、昼と夜は低糖質のものを食べることがおすすめとなっています。注意点としては食事と食事の間を6時間以上開けてはなりません。

                </p>

                <p class="bold">・おすすめの飲み方</p>

                <p>おすすめの飲み方ですが、原液のまま飲むことも良いですし、水3〜5：ベルタ酵素ドリンク1、ソーダ水3〜5：ベルタ酵素ドリンク1、
                    無糖紅茶3〜5：ベルタ酵素ドリンク1、無糖ヨーグルトに混ぜるなどがおすすめとなっています。
                    様々な飲み方があるので、あなた自身に合った飲み方にて飲むことをおすすめ致します。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ベルタ酵素ドリンクのキャンペーン</h2>


                <p>
                    ベルタ酵素ドリンクのキャンペーンですが、
                    通常購入よりも、ベルタ酵素ドリンク2本とベルタこうじ生酵素1袋のセットの置き換えダイエットパックが大変お得でおすすめとなっています。
                    <br><br>
                    通常購入だと、16618円のところがお得な置き換えダイエットパックだと10200円（税込）と約39%OFFで購入することが出来ます。
                    このコースは、1回で定期購入を解約することが出来るので、定期の継続ノルマが無いのも見逃せないポイントです。
                </p>


                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/beru.php<?php echo "?".$query2; ?>"
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