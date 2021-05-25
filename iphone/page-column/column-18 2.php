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

                <img src="../img/column-hd-sp-18.png" alt="" width="100%">

            </div>

            <div class="txt-wrap">


                <h2 class="midashi-h2-02">腸活のススメ</h2>
                <p>
                    腸内環境を整えるための「腸活」が話題です。<br>
                    つまり改善はもちろん、美肌やダイエット、免疫力アップなど、美容・健康に大きく関わる腸内環境。<br>
                    この腸内環境をベストコンディションに維持するには、食事の改善やサプリメントの摂取など、「腸活」が必要です。<br>
                    美と健康の土台である腸内環境が整っていないと、その上に何を乗せても上手くは行きません。<br>
                    食事制限しているのに思うように体重が落ちない、美肌のために高級な基礎化粧品に変えたのに、効果が実感できない・・・。そんな時こそ、腸活の始めどきです！ <br>
                </p>


                <h2 class="midashi-h2-02">簡単・続けられることがポイント</h2>
                <p>
                    腸活は続けることに意味があります。<br>
                    腸内環境を改善して、良い状態をキープするには、毎日の積み重ねが大事です。<br>
                    毎日続けることだからこそ、「簡単・手軽」に実践できるのが、一番でしょう。<br>
                    今までの生活習慣や食習慣を180°変えるようなアクションは、続きません。<br>
                    また、どんなに美味しくて効果的でも、時間や手間がかかるレシピは続きません。<br>
                    だからこそ、ライフスタイルを大きく変えず、いつもの食事にちょっとプラスするだけで、簡単・美味しく腸活が実践できる、オススメのレシピをご紹介します。 <br>
                </p>


                <h2 class="midashi-h2-02">ヨーグルトだけでは片手落ち</h2>
                <p>
                    腸活のためにヨーグルトを毎日食べているという方も多いでしょう。<br>
                    でも、残念な食べ方をしていませんか？<br>
                    ヨーグルトに入っている乳酸菌をお腹の中で活発に活動させるには、善玉菌のエサになる食物繊維やオリゴ糖を一緒に食べる必要があります。<br>
                    ヨーグルト単体で食べているとか、ヨーグルトにお砂糖だけを入れて食べるのでは、片手落ちです。<br>
                    そこで、ヨーグルトとともに食物繊維・オリゴ糖を摂ることができて、さらにいつものヨーグルトを新鮮に生まれ変わらせるレシピを一つご紹介します。 <br><br>
                </p>


                <div class="c-link-box">
                    <a href="https://cookpad.com/recipe/5619159" target="_blank"
                        style="color:orangered;">https://cookpad.com/recipe/5619159</a><br>
                    <p class="f-07">出典：カッサータ風♪フローズンヨーグルト by dグルメ 【クックパッド】 簡単おいしいみんなのレシピが314万品</p>
                </div>

                <p>
                    ヨーグルトに食物繊維たっぷりのナッツ類やドライフルーツをミックスして、凍らせるだけ簡単レシピです。<br>
                    いつものヨーグルトが、フローズンヨーグルトに生まれ変わります。<br>
                    夏の冷たいデザートに最適。このレシピでは甘みアップにお砂糖を使っていますが、甜菜糖を使うと腸活的クオリティがもっと上がります。<br>
                    甜菜糖は、乳酸菌の餌になるオリゴ糖を多く含んでいるので、白砂糖をやめて甜菜糖を積極的に使ってみてはいかがでしょう。<br>
                    <br><br>
                    また、サラダにマヨネーズが欠かせないという方は、こんなレシピもおすすめです。 <br>
                </p>

                <div class="c-link-box">
                    <a href="https://oceans-nadia.com/user/21965/recipe/145532" target="_blank"
                        style="color:orangered;">https://oceans-nadia.com/user/21965/recipe/145532</a><br>
                    <p class="f-07">出典：マヨ代用。ヨーグルトマヨネーズ by 若子みな美 | 【Nadia | ナディア】レシピサイト | プロの料理を無料で検索</p>
                </div>

                <p>
                    良質なオリーブオイルで、罪悪感のないクリーミーなドレッシングが出来上がります。<br>
                    便の通りを良くするためには、適量の油脂の摂取が効果的です。<br>
                    良質な脂肪酸を含む芳醇なオリーブオイルと、ヨーグルトの乳酸菌があいまって、お腹の調子をアップさせてくれることでしょう！<br>
                    乳酸菌たっぷりのヘルシードレッシングで、食物繊維たっぷりのお野菜をもりもり食べましょう！<br>
                </p>


                <h2 class="midashi-h2-02">定番メニューで腸活レシピ</h2>

                <p>
                    夏といえばそうめん。<br>
                    でも、そうめんだけの食事では食物繊維が確実に不足します。<br>
                    そこで、こんなアレンジはいかがでしょう。<br>
                </p>

                <div class="c-link-box">
                    <a href="https://oceans-nadia.com/user/11285/recipe/276254" target="_blank"
                        style="color:orangered;">https://oceans-nadia.com/user/11285/recipe/276254</a><br>
                    <p class="f-07">出典：オクラ納豆そうめん。 by 栁川かおり | 【Nadia | ナディア】レシピサイト | プロの料理を無料で検索</p>

                </div>

                <p>
                    納豆は生きて腸まで届く乳酸菌を含みます。<br>
                    その上、大豆オリゴ糖を含んでいるので、「乳酸菌＋オリゴ糖」という腸内環境アップの黄金の組み合わせを一気に叶えられます。<br>
                    ちなみに納豆は、良質なたんぱく質を摂ることができるというメリットもあります。<br>
                    <br><br>
                    またオクラも腸活的には注目食材です。<br>
                    オクラは水溶性食物繊維を豊富に含みます。<br>
                    食物繊維には、水溶性と不溶性がありますが、乳酸菌のエサになるのはおもに水溶性の食物繊維。<br>
                    そのため水溶性食物繊維を多く含むオクラは、腸活メニューの定番野菜として積極的に取り入れたいですね。<br>
                </p>


                <h2 class="midashi-h2-02">腸活最強丼ぶり</h2>

                <p>
                    ワンボウルメニューは、美味しく簡単なので、お料理があまり得意でない人も手軽にトライできると思います。<br>
                    腸活的最強丼ぶりレシピがこちら。
                </p>

                <div class="c-link-box">
                    <a href="https://oceans-nadia.com/user/24312/recipe/160403" target="_blank"
                        style="color:orangered;;">https://oceans-nadia.com/user/24312/recipe/160403</a><br>
                    <p class="f-07">出典：簡単！混ぜるだけ！便秘解消！アボカド納豆丼 by 藤原朋未 | 【Nadia | ナディア】レシピサイト | プロの料理を無料で検索</p>

                </div>

                <p>
                    なんと材料は納豆＋アボカド＋麦ご飯という、腸内環境に良いものだけでできた丼ぶりです！
                    <br><br>
                    アボカドは、食物繊維を多く含む腸活食材です。<br>
                    その上コレステロールを下げる一価不飽和脂肪酸（オレイン酸）やビタミンE
                    などの抗酸化成分もたっぷり含む美容食材でもあります。<br>
                    そしてこの丼レシピの主役「麦ご飯」。<br>
                    白米ではなく、麦ご飯というところが腸活的には最高です。<br>
                    <br><br>
                    「大麦」は、「大麦β−グルカン」という水溶性食物繊維をたっぷり含みます。これが納豆に含まれる乳酸菌のエサとなり、乳酸菌の活動をしっかりサポートしてくれるのです。
                    ちなみに、大麦β−グルカンには血糖値をあげにくいという特徴があるので、ダイエットにもおすすめです。
                    <br><br>
                    いかがですか？どれも簡単で、いつも食べている食材の組み合わせで、気軽に腸活できるものばかりです。
                    <br><br>
                    腸活のバリエーションメニューにぜひどうぞ。<br>
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