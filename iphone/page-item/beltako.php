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
            ベルタこうじ生酵素のおすすめポイント
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/belta.jpg" alt="">

            </div>

            <div class="txt-wrap">

                <p>
                    ベルタこうじ生酵素は、酵素エキスの食材の数がなんと622種となっており、これは他のどの商品と比較しても群を抜いてかなり多く配合されています。
                    また、乳酸菌酸性物質も16種類も配合がされており、その他、女性に嬉しい美容効果を期待することの出来る成分も配合されています。
                </p>

                <p class="bold">・スッキリする！</p>

                <p>
                    ベルタこうじ生酵素には、乳酸菌が多く配合されていることにより、体内環境をしっかりとサポートしてくれます。
                    また、配合されている成分の中にフルーツのドラゴンフルーツが配合されており、
                    このドラゴンフルーツにはバナナの約65倍もの食物繊維が含まれているということから、ダブルでかなり期待することが出来るのではないのでしょうか。
                </p>

                <p class="bold">・ダイエット効果</p>

                <p>ベルタこうじ生酵素にはダイエットのサポート成分として、コエンザイムQ10、コンブチャなどが含まれています。
                    その他にも、アミノ酸などを18種含んでいるなど、本来ならばダイエット中に不足しがちな成分を摂取するということにかなり適しています。
                </p>


            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ベルタこうじ生酵素の飲み方</h2>

                <p class="bold">・1日2粒</p>

                <p>ベルタこうじ生酵素の飲み方ですが、袋に直接1日2粒が推奨と書かれていることから、
                    大体の方が朝晩の食前もしくは食後に水もしくはぬるま湯と一緒に１粒ずつ飲むようにしているようです。時間帯も、毎日同じ時間帯に飲むことが良いでしょう。
                    <br><br>
                    少し粒が大きめですが、特に飲みにくいことはありません。大体数週間経った頃ぐらいから、効果を実感していくことが出来ます。
                    とにかく、毎日欠かさずに飲み続けていくということが大切となっています。
                </p>

            </div>


            <div class="txt-wrap">

                <h2 class="midashi-h2-01">ベルタこうじ生酵素のキャンペーン</h2>


                <p>
                    ベルタこうじ生酵素のキャンペーンですが、通常購入より定期便にて購入をするほうがかなりお得となっています。
                    通常購入だと5980円のところが、定期便だと初回のみ約91%OFFの500円（税抜）送料無料にて購入をすることができます。
                    また、初回だけでなく2回目以降の購入も33%OFFの3980円にて購入をすることが出来るので、かなりお得なことから
                    、通常購入よりも定期便の方で購入をするほうが大変おすすめとなっています。
                    <br><br>
                    定期便も、ほかのサプリメントのサイトではなかなかありえない、1回のお届けのみで解約することが可能なので、ぜひお試しください。
                </p>


                <div class="img-btn">
                    <a target="_blank"
                        href="https://xn--eckalq1hua9ak9609eoj6a.com/links/berunama.php<?php echo "?".$query2; ?>"
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