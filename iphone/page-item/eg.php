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
            EGタイトLightのおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/eg.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    EGタイトLightは肥満症に効果効能を認められた、脂肪を落とす防風通聖散サプリメントです。肥満やむくみ、つまりの悩みを漢方の力を借りて解決するために作られました。
                </p>

                <p class="bold">・18種類の生薬を配合</p>

                <p>体重を減らすなら、摂取するカロリーより消費するカロリーを多くすることが必須です。とはいえ、特にオフィスワークの方ならどうしても運動量が減ってしまいます。
                    年齢とともに筋力も落ち、代謝も悪くなるものです。そこで肥満症への効能効果が認められた18種類の生薬を配合した第2類医薬品の防風通聖散 EGタイトLightの登場です。
                </p>

                <p class="bold">・漢方の力で脂肪を落とす</p>

                <p>EGタイトLightはボウフウやカイガイをはじめとし、脂肪を燃焼、そしてつまりやむくみの悩み解消が期待できる生薬を18種類も配合されているサプリメントです。
                    確かに漢方は色々と体に良いのは知っていても、ダイエットやむくみに期待できるものを自分で探すのは大変ですから、1粒の中に全部入っているのは嬉しいですね。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">EGタイトLightの飲み方</h2>

                <p class="bold">・飲みやすいタブレットタイプ</p>

                <p>サプリメントとは言え、漢方の独特な匂いや味が苦手、という方もいるでしょう。でもEGタイトLightなら、
                    タブレットタイプなのでそういった心配もなく飲むことができます。粉や顆粒タイプの漢方は飲めないという方でも、
                    味や匂いが気にならない工夫がされているなら安心ですね。</p>

                <p class="bold">・1日3回4錠</p>

                <p>1日3回4錠ずつを目安に水かお湯で服用するようにします。15歳未満の方は服用できないので注意してください。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">EGタイトLightのキャンペーン</h2>

                <p class="bold">・今だけの特別価格</p>

                <p>
                    EGタイトLightは通常1袋180錠、約15日分が4,980円（税込）で販売されていますが、今なら初回限定でお得に購入できる特別定期キャンペーンを行っています。
                    <br><br>
                    なんと約80％OFFの980円（税込）で購入できます。2回目以降は2袋ずつ、約34％オフの6,480円で購入可能です。体質改善のためしばらく飲み続けることを考えれば、
                    かなりお得に購入できるキャンペーンだと言えるでしょう。
                </p>

                <p class="bold">・ほかにもある嬉しい特典</p>

                <p>
                    特別定期キャンペーンは、ただお得なだけではありません。全国送料無料、さらにEGタイトLightガイドブックや、
                    体重・食事を記録するためのレコーディングシートがプレゼントされます。次回発送の10日前までに電話をすれば、変更や解約もいつでもできます。
                    <br><br>
                    とってもお得な4大特典が付いている今のうちに、ぜひ手に入れてくださいね。
                </p>

                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/eg.php<?php echo "?".$query2; ?>"
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