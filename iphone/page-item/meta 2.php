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
            メタバリアEXのおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/meta.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    メタバリアEXには、サラシノールと呼ばれる食事の糖の吸収を抑える働きのある成分と腸内細菌のうち善玉菌を増加させる成分、
                    さらにお腹の脂肪・体重を減らす成分が配合されている機能性表示食品です。
                </p>

                <p class="bold">・糖の吸収を抑える</p>

                <p>メタバリアEXに含まれるサラシノールという成分は、サラシアというシダ科の植物に多く含まれる天然由来成分です。

                    <!-- が、富士フィルムの研究結果により、
                糖の吸収を抑える働きがあることが科学的に明らかとなりました。 -->

                    <br><br>

                    糖の吸収を抑える働きがあることは、普段慢性的に高血糖となりがちな糖尿病の人にとっては、インスリンをはじめとする高血糖薬に頼らなくても天然の
                    成分で血糖値を低値に保つことができるためありがたいですね。
                </p>

                <p class="bold">・腸内環境を整える</p>

                <p>善玉菌を増やして腸内環境を整えることは、摂取した栄養の消化吸収の効率を良くするだけでなく、体内に関するトラブルを予防する目的もあります。<br><br>

                    メタバリアEXは小腸内での二糖類吸収を抑制する効果が期待できます。この二糖類は腸内細菌を育てる栄養として大変重要な役割を持っています。
                    腸内細菌が最も多く存在するのは、小腸ではなく、どちらかといえば腸の後半、大腸寄りの部分であるため、餌となる二糖類をできるだけ腸の後半に届けることで、
                    より多くの善玉菌を育てる栄養を運ぶ役割が期待されています。<br><br>

                    近年社会問題となっている肥満は、摂取する栄養素も大切ですが、その人が個々に持っている腸内細菌の質によって大きく変化することが分かっています。<br><br>

                    富士フィルムの研究結果では、サラシノールの継続的な摂取によって、腸内の善玉菌の代表とされるビフィズス菌が増加し、
                    腸内環境が向上したとみられる結果が報告されています。

                <p class="bold">・おなかの脂肪・体重を減らす</p>

                <p>さらに、継続的に摂取することによりおなかの脂肪・体重を減らす機能が臨床実験で明らかになりました。
                    メタバリアEXは続ければ続けるほど嬉しい結果が期待できる優秀なサプリメントです。
                </p>
            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">メタバリアEXの飲み方</h2>

                <p class="bold">・1日3回2～4粒</p>

                <p>基本的に、食事の際の糖の吸収を抑える効果があるので、メタバリアEXを飲むときは「食前」に飲みます。
                    水で1回あたり2～4粒を一日3回摂取するのが一つの方法として提案されています。厳格な決まりはありませんが、
                    食事の10分～15分前に摂取するのが良いとのことです。</p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">メタバリアEXのキャンペーン</h2>

                <p>
                    メタバリアEXは今ならキャンペーンを実施していて、初回お一人様1回1個限りで約14日分500円（税別）送料無料のトライアルパックが大変おすすめです。まずは14日間ぜひお試しください。
                </p>

                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/meta.php<?php echo "?".$query2; ?>"
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