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
            <img src="../img/sub-header-02-sp.png" alt="" width="100%">
        </a>

        <div class="sub-header">

            <div class="top_link_sub">
                <a href="../">&lt; TOPに戻る</a>
            </div>

        </div>

        <h1 class="midashi-02">
            短期間で結果を出したい人におすすめのダイエット法
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-11.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <p>
                    ダイエットは本来、長い期間をかけて生活改善をし、健康に配慮して行うものです。でもそんな時間の余裕はない、
                    急にお呼ばれのお誘いが来たけどドレスが入らない、など今すぐ痩せたいという人におすすめのダイエット法を紹介します。
                    <br><br>
                    元の身長体重にもよりますが、まずは2週間でマイナス3㎏～5㎏を目標とします。基本的には、①溜まったものを排出する。
                    ②食事制限で摂取カロリーを減らす。③運動で消費カロリーを増やす。の３つの柱で取り組みます。短期間で確実に結果を出さなければいけないので全て本気で行います。
                    <br><br>
                    まず１つ目。むくみや便秘などで身体に溜まった老廃物を排出することで体重を落としていきます。
                    老廃物が流れると全体の代謝が良くなり、体脂肪も落ちやすくなるので必ずやっておきたいですね。
                    身体の水分を排出しやすくしてくれる栄養素はカリウム。カリウムはニラ、ナス、水菜、トマトなどの
                    野菜や納豆などの豆類に多く含まれます。バナナやかんきつ類にも多く含まれますが、果物は糖分も多いので注意が必要です。
                    <br><br>
                    また、硬度の高い水はミネラルが豊富なので、浮腫みを取ると同時に便通も良くしてくれます。
                    人によっては老廃物を流しただけでマイナス３㎏になることもあります。常に老廃物が溜まらないような生活を続けることが
                    痩せやすく太りにくい体質になる鍵です。
                    <br><br>
                    ２つ目は王道の食事制限をすること。まずは炭水化物を制限します。制限といっても、不健康になっては元も子もないので
                    最低限は必ず摂ります。標準的な体格の大人で、炭水化物の最低必要量は１日100ｇです。
                    これはいつもの食事の炭水化物を軽めにしていただくとちょうど良いくらいになります。
                    <br><br>
                    ご飯茶碗一杯には55ｇ、食パン６枚切り1枚には27ｇの炭水化物が含まれています。うどん麺１玉には50ｇ、
                    カツ丼にはご飯のほかカツの衣や調味料の糖質を入れると100g以上の炭水化物を含むため、一食でオーバーしてしまうことも。
                    短期ダイエット期間中は麺類や丼ものなどは避けた方が賢明です。もちろん、清涼飲料水やジュースも控えます。
                    100％果汁のオレンジジュースにもコップ1杯で20gの糖質が入っています。
                    <br><br>
                    また、油脂類にも気を付けましょう。揚げ物や油っこいものは避けるのは言うまでもなく、ドレッシングやポタージュスープ、
                    調理パンなどには隠れた油脂がたくさん使われています。スナック菓子やファストフードなど加工食品には特に多く含まれることはご存じの通りです。
                    <br><br>
                    食物繊維の豊富な野菜はたくさん食べて、便秘にならないよう心がけます。たんぱく質は絶対に不足しないようにしましょう。
                    1日のたんぱく質必要量は、目標体重×1～1.5gが目安です。
                    <br><br>
                    また、食事に気を付けること以外に、１つ目でもふれた水分摂取も大切になってきます。炭水化物などの食事を減らした分、
                    食品に含まれる水分も摂取量が減ってしまいます。その分を補うためにもいつもより多めに水やお茶を飲みましょう。
                    水分不足は便秘を引き起こす以外にも、頭痛や疲れなど不調の原因になります。身体全体の流れを良くするためにも水分は十分摂取しましょう。
                    <br><br>
                    3つ目のポイントは運動で消費カロリーを増やすこと。ジョギングをしたり、ジムに通うのももちろん良いことなので、
                    出来る人はどんどん運動をすることをおすすめします。そういった時間が取れない人は、電車を利用していたのを一駅分歩く、
                    エレベーターをやめて出来るだけ階段を使用する、など日常のちょっとした工夫でも消費カロリーは違ってきます。
                    <br><br>
                    以前は20分以上の運動でないと効果はないと言われていましたが、最近の研究では短時間の運動でも回数を多くして継続すれば効果はある、
                    ということがわかっています。とにかくこまめによく動くことが大切です。身体を動かすことで代謝も上げて、
                    痩せやすい身体作りをしていきましょう。
                    <br><br>
                    短期間でダイエットの結果を出すためには自分の精神力、モチベーションを持ち続けることが一番大切です。
                    1つ目の老廃物を排出することから始めて、2つ目と3つ目のポイントを押さえて取り組めばきっと効果が出ます。
                    無理のない目標を決めて、ぜひ短期ダイエットを成功させてください。
                </p>

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