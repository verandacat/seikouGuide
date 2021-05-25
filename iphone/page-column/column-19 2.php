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
            乳酸菌とは？ビフィズス菌との違いは？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-19.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <h2 class="midashi-h2-02">サプリメントで手軽に乳酸菌を</h2>
                <p>
                    美と健康に欠かせない成分として、乳酸菌が大ブームです。<br>
                    以前は「乳酸菌といえばヨーグルト」でしたが、最近ではチョコレートなどのお菓子まで、乳酸菌入りのものがたくさん出ています。<br>
                    とはいえ、効率よく乳酸菌を摂るなら、やっぱりサプリメントに勝るものはありません。<br>
                    カプセルやタブレットだからこそ、いつでもどこでも手軽に摂取できます。<br>
                    また何と言っても摂取量が把握しやすく、続けやすいのが魅力。<br>
                    でも乳酸菌のサプリメントもバリエーションが豊富で、どれが良いのか悩んでしまうという方も多いはずです。<br>
                    そこで、数ある乳酸菌サプリメントの中から、自分にフィットするものを正しく選ぶためのポイントをご紹介します。 <br>
                </p>
                <br>
                <h2 class="midashi-h2-02">乳酸菌とは何か</h2>
                <p>
                    正しい乳酸菌選びのために、まずは「乳酸菌」とは何か復習から。<br>
                    私たちのお腹の中には、1000種類・100兆個を超える細菌が住み着いています。<br>
                    この中には、体に有益な「善玉菌」と、害を及ぼす「悪玉菌」、そのどちらでもなく善玉菌にも悪玉菌にもなり得る、ちょっと優柔不断な「日和見菌」があります。<br>
                    健康な人の場合、善玉菌20%、悪玉菌10%、日和見菌70%のバランスになっています。<br>
                    しかし、この腸内のバランスが崩れてしまうと、便秘・肌荒れはもちろん、アレルギーや病気のリスクが高まったり、肥満や老化にまで影響するというから大変です。<br>
                    だからこそ、善玉菌＝乳酸菌を毎日摂って、バランスの良いお腹の環境を維持することに注目が集まっています。 <br>
                </p>
                <br>
                <h2 class="midashi-h2-02">乳酸菌サプリの選び方のポイント</h2>
                <p>
                    乳酸菌サプリメントは毎日飲むものなので、価格が気になるところですが、初回特別価格や返金保証など、お手軽・安心サービスも展開されています。<br>
                    そこで、ここでは機能面にフォーカスして、乳酸菌サプリべストチョイスのための３つのポイントをご紹介します。
                </p>

                <p class="bold">１）乳酸菌の種類をチェックする</p>
                <p>
                    乳酸菌は、ブドウ糖から乳酸を作り出す細菌の総称です。<br>
                    250種類以上もの菌種があり、それぞれに名前がついており、個性を持っています。<br>
                    だからこそ、250種類上の菌の中からご自身の目的にあった菌を選ぶことが大切です。<br><br>

                    菌それぞれに得意分野があるので、ご自身の目的に合う菌を配合したサプリメントを選びましょう。<br>
                    また、様々なタイプの乳酸菌がミックスされているサプリメントもあります。<br>
                    多様な効果をねらってちょっと欲張りたい、まずはとにかく「菌活」をスタートさせたい、自分に何がフィットするかよくわからない時などは、複数の乳酸菌をミックスしたサプリメントも魅力的です。 <br>
                </p>

                <p class="bold">２）菌数と生きて腸まで届くタイプかどうかをチェックする</p>
                <p>
                    乳酸菌サプリには、一回あたりに摂取できる乳酸菌の量が示してあります。<br>
                    数の多い少ないは、重要な選択基準です。<br>
                    ただし、乳酸菌は胃を通過する時に、胃酸でダメージを受けます。<br>
                    だから菌の配合数だけでなく、乳酸菌が生きて腸まで届くように工夫してあるサプリメントを積極的に選ぶと良いでしょう。<br>
                    また、胃酸に強い特性を持った「酪酸菌」や「乳酸菌発酵エキス」配合のタイプを選ぶのもお勧めです。 <br>
                </p>

                <p class="bold">３）乳酸菌と一緒に配合されている成分をチェックする</p>
                <p>
                    有効成分をオールインワンで摂れるのが、乳酸菌サプリメントの魅力です。<br>
                    だからこそ、乳酸菌の働きをサポートする有効成分がしっかり入っているものを選びましょう。<br>
                    乳酸菌がお腹の中で元気よく働くためには、「プレ・バイオティクス」と呼ばれるオリゴ糖や食物繊維が必要です。<br>
                    野菜やフルーツをあまり食べない人は、こうした成分がオールインワンになったサプリメントを選ぶと良いでしょう。<br>
                    また、食物繊維と乳酸菌を一緒に摂ると腸内では「短鎖脂肪酸」という成分が作られます。<br>
                    大腸のエネルギー源になるこの短鎖脂肪酸を直に配合したサプリメントもあります。 <br>
                </p>
                <br>
                <h2 class="midashi-h2-02">いま大注目の乳酸菌</h2>

                <p>
                    様々な乳酸菌サプリメントが登場していますが、最近大注目の乳酸菌のタイプをご紹介します。 <br>
                </p>
                <br>
                <p class="bold">１）酪酸菌</p>
                <p>
                    酪酸菌は、胃酸に強く生きて腸まで届きます。 <br>
                    食物繊維とともに摂取することで、腸の中で「短鎖脂肪酸」を作り出します。 <br>
                    短鎖脂肪酸はバリア機能を高めたり、菌バランスを整えてくれます。 <br>
                </p>

                <p class="bold">２）乳酸菌発酵エキス</p>
                <p>
                    乳酸菌発酵エキスは、豆乳を乳酸菌で発酵して作る、生きて腸まで届く乳酸菌です。 <br>
                    発酵によって乳酸菌が作り出した、短鎖脂肪酸や必須アミノ酸、ビタミンB群などの有効成分が、直接体内に吸収されます。 <br>
                    体の中からスッキリ快調な毎日が期待できます。 <br>
                    また善玉菌の働きをバックアップして、美肌や活動的な毎日を応援してくれます。 <br>
                </p>

                <p class="bold">３）フェカリス菌</p>
                <p>
                    一般的に乳酸菌は「生きたままの菌」が良いと考えられています。 <br>
                    しかしフェカリス菌は違います。 <br>
                    加熱殺菌した「死菌」であっても効果を発揮するのです。 <br>
                    むしろ加熱した死菌の方が良いという研究報告があります。 <br>
                    フェカリス菌が、体内で乳酸菌などの善玉菌のエサとなり、それにより善玉菌が増えるからです。 <br>
                </p>

                <p class="bold">４）ラブレ菌</p>
                <p>
                    ラブレ菌は、京都名物のお漬物から発見された、植物由来の乳酸菌です。<br>
                    塩分や酸の多い過酷な環境で作られる菌なので胃酸に強く、生きて腸まで届きます。<br>
                    腸に届いた後は、腸内に留まって乳酸をつくり出し、菌バランスを整えてくれます。<br>
                </p>

                <p class="bold">5) EC-12</p>
                <p>
                    EC-12は殺菌された「死菌」として腸管に取り込まれ、有効に働きます。<br>
                    EC-12は体内で働きかけることで、良い体内環境へと導いてくれます。<br>
                </p>
                <br><br>
                <p>いかがでしたでしょうか？
                    <br><br>
                    元気と綺麗は「体内環境が作る」と言っても言い過ぎではありません。<br>
                    だからこそ毎日続けやすく、結果が出せる乳酸菌サプリメントとの出会いがありますように！
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