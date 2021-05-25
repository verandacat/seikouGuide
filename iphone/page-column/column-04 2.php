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
            食べても食べても太らない痩せの大食いの秘密とは？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-04.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">

                <p>

                    「体重や脂肪が気になっておいしい食事をおなか一杯になるまで食べられない。」そんなあなたのとなりで、おいしそうにたくさん食べているのに痩せ体質の知人。
                    そんなうらやましい、食べても食べても太らない痩せの大食い、あなたの周りにも一人はいますよね？
                    <br><br>
                    実際には人それぞれ違った理由がありそうですが、痩せの大食いには理由があります。
                    今回は食べても食べても太らない痩せの大食いの秘密について、徹底的に検証してみたいと思います。

                </p>

                <h2 class="midashi-h2-02">▼食べることでエネルギーを使う？</h2>

                <p>エネルギー消費と聞くと、運動を思い浮かべる方が多いと思います。しかし実は、たくさんの食事を摂ることでも大量のエネルギーを消費することができます。
                    <br><br>
                    食事を摂ることで消費するエネルギーのことをDIT(食事誘発性体熱産生)といいます。痩せの大食いの人はこのDITが高い人です。逆に食べないのに太ってしまう人はこのDITが低い傾向にあります。
                    <br><br>
                    このDITを上げるためには、食事を摂ることが有効的です。食事には様々な栄養素が含まれていますが、3大栄養素(炭水化物・脂質・たんぱく質)のなかで、最もDITを上げる栄養素は「たんぱく質」です。
                    他の栄養素と比べたんぱく質は、体内で代謝する過程においてたくさんのエネルギーを消費するからです。
                    <br><br>
                    食事の際は意識してたんぱく質を摂ることでDITを上げられそうです。
                </p>

                <h2 class="midashi-h2-02">▼食べ物が体内に留まる時間が短い？</h2>

                <p>普通の人は食べたものをある程度食道や胃などの体の中にとどめてから小腸や大腸に送り、消化・吸収を行います。
                    一方で痩せの大食いの人は胃の出口にある弁が緩んでいて、食べ物が胃の中で完全に消化される前に胃から排出されます。
                    食べ物は消化不良の状態で小腸・大腸と通過していくため、うまく吸収されません。つまり、「食べたものから十分な栄養を得ることができていない状態」になります。
                    <br><br>
                    痩せの大食いの人は、たくさん食べているのに、少ししか吸収されていない、いわば反省エネ体質であると言えそうです。
                </p>


                <h2 class="midashi-h2-02">▼胃下垂も関係がある？</h2>

                <p>「胃下垂」という言葉はほとんどの人が聞いたことがあると思いますが、どういう状態のことかご存知でしょうか？
                    胃下垂とは、胃が普通の人より垂れ下がり、胃の形は下部が延びているI型の状態のことをいいます。
                    <br><br>
                    胃下垂の状態になると、胃は蠕動運動(消化活動)が弱くなり、胃に入ったものがうまく消化されなくなります。
                    つまり、胃下垂の人が食べても太らない原因は、食べたものを消化する力が弱っているからなのです。
                    <br><br>
                    痩せの大食いの人の中にも、調べてみたら実は胃下垂だったという人は多いかもしれません。
                </p>

                <h2 class="midashi-h2-02">▼血糖値が上がりにくい体質？</h2>

                <p>普通は食べると血糖値が上がり、この血糖値の上下の変動が大きいほど太りやすいと言われています。痩せの大食いの人はビフィズス菌が多く、
                    このビフィズス菌の働きによって血糖値が上がりにくく、結果、食べても食べても太りにくい体質であるとも考えられています。
                    <br><br>
                    さらに、血糖値が上がりにくいということは、満腹中枢も刺激されません。痩せの大食いの理論にぴったりと当てはまります。
                </p>


                <h2 class="midashi-h2-02">▼秘密は千差万別</h2>

                <p>今回は食べても食べても太らない痩せの大食いの秘密について、
                    徹底的に検証したくさんの秘密を発見いたしました。また、痩せの大食いの秘密はたくさんあり、一つとは限らず、
                    たくさんの素質が絡み合って完成された体質であることがわかりました。
                    <br><br>
                    ダイエットを志す人にとっては、うらやましい痩せの大食いですが、胃や腸の消化・吸収障害といった、病気が隠れていることもあります。
                    痩せの大食いで悩んでいる人もたくさんいますので、そんな方はぜひこの記事を参考にしてみてください。
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