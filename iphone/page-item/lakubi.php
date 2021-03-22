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
            Lakubiのおすすめポイント
        </h1>

        <div id="section-01">


            <div class="center">

                <img src="../img/lakubi-d.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>Lakubiは酪酸菌をはじめ、オリゴ糖、サラシアエキス、植物性キトサン、
                    ビフィズス菌B-3など体内フローラをサポートしてくれる成分が多く含まれています。有名タレントも愛用、
                    インスタグラムでも大流行しているサプリメントです。</p>

                <p class="bold">・健康維持</p>

                <p>体内環境の良し悪しは、健康維持や肌の状態を左右すると言われています。
                    酪酸菌には内側からキレイをサポートする注目の成分「短鎖脂肪酸」を作り出す能力があり、これにより、健康維持をサポートしてくれます。</p>

                <p class="bold">・ダイエットをサポート</p>

                <p>最初に挙げたように、Lakubiには酪酸菌やオリゴ糖など調子を整えるのに役立つ成分が多く含まれていますが、
                    これらが健康状態を整えるだけでなくダイエットサポートも期待できます。
                    良い菌である善玉菌を手助けし、逆に悪玉菌にアプローチすることで、様々なトラブルに立ち向かうための環境をサポートしてくれるという仕組みです。</p>

                <p>もちろんLakubiはダイエットだけではなく、単純にポッコリを解消することも期待できます。
                    最近なんだかスッキリしないという方は、Lakubiで体の中からスッキリを目指してみてはいかがでしょうか。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">Lakubiの飲み方</h2>

                <p class="bold">・１日１回１粒</p><sup>（※目安量）</sup>

                <p>Lakubiはカプセルタイプのサプリメントで、水またはぬるま湯などで飲みます。
                    薬ではないので時間の決まりはありませんが、１日１回、たった1粒を目安に飲むだけと管理がとても簡単です。
                    むしろ一度にたくさん飲むと、人によってはお腹が緩くなってしまう可能性もあるそうですから注意してください。
                    朝起きたら飲む、寝る前に飲むといった習慣をつけると忘れずに続けられますね。</p>

                <p class="bold">・約3ヵ月を目安に！</p>

                <p>Lakubiは毎日欠かさず飲み続けた方が最低でも３か月を目安に、様子を見ながら飲むことがおすすめです。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">Lakubiのキャンペーン</h2>


                <p>通常購入の他、価格が少しお安くなって、さらに送料も無料になる定期購入を選ぶこともできます。通常購入だと1袋約1か月分が2,980円（税込）、定期購入だと1袋が2,740円（税込）ですから、
                    長く続けることを考えれば定期購入が断然お得です。<br><br>

                    今なら1袋31粒、約1か月分が初回モニター980円（税込）送料無料でお手軽に試すことができます。<br><br>

                    さらに、3ヵ月に3個届くおまとめ配送なら、送料や段ボール代が節約できるため、1袋が2,380円（税込）とさらに安くなります。9割のユーザーが選んでいる「おまとめ配送」の活用もぜひ検討してみてください。
                </p>

                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/laku.php<?php echo "?".$query2; ?>"
                        target="_blank">
                        <img alt="" src="../img/n_img/btn_site_go_01.png" / width="100%">
                    </a>
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
                            $el.find('.accordion-page-item').not($next).slideUp().parent().removeClass(
                                'open');
                        };
                    }
                    var accordion1 = new Accordion1($('.menu-list-wrap'), false);
                });
                </script>


            </footer>


</body>

</html>