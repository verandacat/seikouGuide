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
            恋愛をすると簡単に痩せられるって本当？
        </h1>

        <div id="section-01">

            <div class="center">

                <img src="../img/column-hd-sp-09.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <h2 class="midashi-h2-02">恋は脳内ホルモンを分泌させる</h2>

                <p>
                    「恋愛をすると綺麗になる」と言いますね。<br>
                    恋をしている友人がすごく綺麗に見えたという経験ありませんか？<br>
                    それは科学的に説明できるようです。<br>
                    ヒトは恋愛をすると様々な脳内物質を分泌します。
                    <br><br>
                    例えば、「ドーパミン」。
                    ドーパミンは、「気持ちが良い」「心地良い」と感じると出る脳内物質です。<br>
                    「意欲」や「快楽」に関係し、分泌が活発になると意欲的で前向きな気分になれます。<br>
                    意欲的で前向きな人は、それだけでオーラがいっぱいで、素敵ですね。<br>
                    また、恋愛初期は特にトキメキ・ドキドキ・高揚感を感じます。<br>
                    それは「フェニルエチルアミン」という脳内物質のために生じます。<br>
                    いわばフェニルエチルアミンは「恋愛ホルモン」。
                    <br><br>
                    ちなみに、このフェニルエチルアミンは、チョコレートの原料カカオに多く含まれています。<br>
                    チョコレートを食べると幸せな気分になるのは、恋愛ホルモンであるフェニルエチルアミンを体の中に取り込んでいるためかもしれません。<br>
                    また、ストレスや疲れがたまると、やたらとチョコレートが食べたくなりますが、それはもしかすると「満たされない」こと「欲求不満」の反動かも！
                </p>

                <h2 class="midashi-h2-02">恋で満たされないから食欲で満たす</h2>

                <p>
                    「寂しい女は太る」とキャッチーな説を唱えて話題になった、キム・ミョンガン先生によると、女性は孤独な状態が続くとカラダや心を緩ませてくれるものを欲するようになるというのです。<br>
                    孤独によって、固くなったからだと心を緩めてくれるのが、甘い食べ物や飲酒、大食い。<br>
                    そうしたもので、気持ちを満たそうとすれば、結果的に太ってしまうのは当然ですね。<br>
                    ドーパミンやフェニルエチルアミンの分泌が不足して、トキメキが足りずに固くなった体と心を緩めようと食べ、その結果太る。<br>
                    そうした「寂しい女は太る」という状態に陥らないためにも、ときめく恋が必要かもしれません。
                </p>




                <h2 class="midashi-h2-02">恋をすると痩せるということを科学が証明</h2>

                <p>
                    では、恋をすると痩せるということに根拠はあるのでしょうか？
                    <br><br>
                    「幸せホルモン」、「愛情ホルモン」などと呼ばれる「オキシトシン」というホルモンがあります。<br>
                    福島県立医科大学の下村教授らと、高須クリニックの共同研究によって、「オキシトシン」に痩身効果があることが明らかになりました。
                    <br><br>
                    オキシトシンが脳に作用して、食べる量を減らしたり、エネルギー消費量を増加させて、内臓脂肪や皮下脂肪を燃焼させる効果があるというのです。<br>
                    研究によると、オキシトシンを含むエサを食べたマウスは、体脂肪が15～20％も減ったというのです。<br>
                    オキシトシンは、女性が妊娠・出産・授乳をする時に多く分泌されるため「愛情ホルモン」と呼ばれます。<br>
                    そして、赤ちゃんを愛おしく感じる母性愛だけでなく、大切なパートナーとのスキンシップでも分泌されるホルモンなのです。<br>
                    つまり、恋をしてパートナーとの間に深い絆が結ばれれば、オキシトシンが分泌され、痩せやすくなるという可能性を科学が証明したのです。
                </p>


                <h2 class="midashi-h2-02">女性ホルモンのおかげで痩せるのではない</h2>

                <p>
                    「恋愛をすると女性ホルモンが出るため、痩せて綺麗になる」と言う意見をよく聞きますが、それはちょっと違います。
                    <br><br>
                    女性ホルモンと呼ばれる「エストロゲン」は、恋愛するしないに関わらず、周期的に分泌されます。<br>
                    女性の体は月経という周期的イベントを繰り返し、妊娠の準備をしています。<br>
                    エストロゲンが多く分泌される生理後から排卵期の前は、肌の艶が良くなったり、精神的に安定するので、「エストロゲン＝綺麗ホルモン」というイメージがあります。
                    <br><br>
                    でも、これはあくまでも周期的に増えたり減ったりするものなので、恋愛の影響で変化することはありません。
                    <br><br>
                    つまり恋愛をすると女性ホルモンが分泌されるから痩せるというのは、ちょっと違うということですね。
                    <br><br>
                    ただ、月経サイクルが変化し更年期を迎えた大人の女性の場合、女性ホルモンの分泌が低下するために、内臓脂肪型の肥満いわゆる「中年太り」につながることはあります。
                </p>

                <h2 class="midashi-h2-02">恋愛で痩せるモチベーションをアップ</h2>

                <p>
                    恋愛をすると痩せホルモンの「フェニルエチルアミン」や「オキシトシン」が分泌されるなら、そのタイミングを逃さず、食事の摂り方を工夫したり、
                    運動に積極的に取り組んでみてはいかがでしょう。
                    <br><br>
                    痩せホルモンが分泌され、いつもより痩せやすい体内環境になっているタイミングを逃すという手はありません。
                    <br><br>
                    大好きな人に綺麗な姿を見て欲しいという思いがダブルの効果を発揮して、より効果的に、綺麗に痩せるのではないでしょうか。


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