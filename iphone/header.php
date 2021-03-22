<?php
include_once('../w/wp-load.php');
$query = "?" . $_SERVER['QUERY_STRING'];
// $search = array('?a=index.php&','?a=index.php');
$query2 = str_replace($search, '', $query);
print '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html>
<html lang="ja">

<head>

    <script language="javascript">
    (function() {
        var _lgy = document.createElement('script');
        var _lgy_adv = 8219;
        window._lgy_advs = window._lgy_advs || {};
        window._lgy_advs[_lgy_adv] = false;
        window._lgy_options = window._lgy_options || {};
        window._lgy_options[_lgy_adv] = {};
        _lgy.async = true;
        _lgy.src = 'https://dsp.logly.co.jp/seg.js';
        var _lgy0 = document.getElementsByTagName('script')[0];
        _lgy0.parentNode.insertBefore(_lgy, _lgy0);
    })();
    </script>
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
    <link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link href="https://ダイエット成功ガイド.com/w/wp-content/themes/nyusan/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>ダイエット成功ガイド</title>
    <style>
    .searchbox {
        text-align: left !important;
    }

    #c1 input[type="checkbox"],
    #c3 input[type="checkbox"] {
        margin-left: 12px !important;
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
    <?php if($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_GET['pat'] == "d" || empty($_GET['pat'])) : ?>
    <?php else : ?>
    <div id="logo">
        <nav class="logoNav">
            <div class="logoBox">
                <a href="./"><img src="./img/logo-seiko-3.png" alt=""></a>
            </div>
        </nav>
    </div>

    <?php endif; ?>

    <!--ハンバーグメニュ-->
    <div id="ham-menu">
        <div class="close"></div>

        <div class="menu-list-wrap">
            <h1>MENU</h1>

            <div class="ham-content">

                <h2 class="a-title accordion-title">人気サプリメント<span class="ico_ar">▼</span></h2>

                <div class="accordion-page-item">
                    <ul class="ham-list">

                        <a href="../page-item/meta.php">
                        <li>メタバリアEX</li></a>

                        <a href="../page-item/shiboh.php">
                            <li>シボヘール</li>
                        </a>

                        <a href="../page-item/eg.php">
                            <li>EGタイトLight</li>
                        </a>

                        <a href="../page-item/keto.php">
                            <li>ケトジェンヌ</li>
                        </a>

                        <a href="../page-item/zen.php">
                            <li>善玉元気</li>
                        </a>

                        <a href="../page-item/kuro.php">
                            <li>くろしろ</li>
                        </a>

                        <a href="../page-item/hoko.php">
                            <li>ホコニコのラクトフェリン+乳酸菌</li>
                        </a>

                        <a href="../page-item/ec.php">
                            <li>乳酸菌EC-12</li>
                        </a>

                        <a href="../page-item/beltako.php">
                            <li>ベルタこうじ生酵素</li>
                        </a>

                        <a href="../page-item/ura.php">
                            <li>うらら酵素</li>
                        </a>

                        <a href="../page-item/namako.php">
                            <li>よくばりキレイの生酵素</li>
                        </a>

                        <a href="../page-item/namahu.php">
                            <li>生酵素フローラ+HMB</li>
                        </a>

                        <a href="../page-item/kon.php">
                            <li>コンブチャクレンズ</li>
                        </a>

                        <a href="../page-item/beltadrk.php">
                            <li>ベルタ酵素ドリンク</li>
                        </a>

                        <a href="../page-item/yuu.php">
                            <li>優光泉</li>
                        </a>

                        <a href="../page-item/dark.php">
                            <li>ダーククレンズ</li>
                        </a>
                    </ul>
                </div>
            </div>





            <div class="ham-content">
                <?php if($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_GET['pat'] == "d") : ?>
                <h2 class="a-title accordion-title">コラム<span class="ico_ar">▼</span></h2>
                <?php else: ?>
                <h2 class="a-title accordion-title">ダイエットコラム<span class="ico_ar">▼</span></h2>
                <?php endif; ?>

                <div class="accordion-page-item">
                    <ul class="ham-list">

                        <a href="../page-column/column-01.php">
                            <li>寝ないと太る？ダイエットと睡眠の関係性</li>
                        </a>

                        <a href="../page-column/column-02.php">
                            <li>炭水化物や脂質はNG？ダイエットに成功する食事法</li>
                        </a>

                        <a href="../page-column/column-03.php">
                            <li>ダイエットでリバウンド王になるのを防ぐ方法</li>
                        </a>

                        <a href="../page-column/column-04.php">
                            <li>食べても食べても太らない痩せの大食いの秘密とは？</li>
                        </a>

                        <a href="../page-column/column-05.php">
                            <li>糖質制限で痩せる？糖質制限ダイエットのやり方</li>
                        </a>

                        <a href="../page-column/column-06.php">
                            <li>今話題！ケトジェニックダイエットとは？</li>
                        </a>

                        <a href="../page-column/column-07.php">
                            <li>食べすぎた！正月太りを速攻で解消するダイエット法</li>
                        </a>

                        <a href="../page-column/column-08.php">
                            <li>ダイエットに効果的な運動5選</li>
                        </a>

                        <a href="../page-column/column-09.php">
                            <li>恋愛をすると簡単に痩せられるって本当？</li>
                        </a>

                        <a href="../page-column/column-010.php">
                            <li>太る原因は体内フローラに？体内フローラダイエットとは？</li>
                        </a>

                        <a href="../page-column/column-11.php">
                            <li>短時間で結果を出したい人におすすめのダイエット法</li>
                        </a>

                        <a href="../page-column/column-12.php">
                            <li>ダイエットを成功させる10の秘訣</li>
                        </a>

                        <a href="../page-column/column-13.php">
                            <li>ダイエットに失敗するのは脳にあった？脳から痩せるダイエット</li>
                        </a>

                        <a href="./page-column/column-14.php">
                            <li>ヨーグルトは体に良い？毎日食べたほうが良い？</li>
                        </a>

                        <a href="./page-column/column-15.php">
                            <li>短鎖脂肪酸って何で注目されているの？</li>
                        </a>

                        <a href="./page-column/column-16.php">
                            <li>腸内フローラとは？腸内フローラを整える方法</li>
                        </a>

                        <a href="./page-column/column-17.php">
                            <li>乳酸菌とは？ビフィズス菌との違いは？</li>
                        </a>

                        <a href="./page-column/column-18.php">
                            <li>腸活におすすめのレシピを紹介</li>
                        </a>

                        <a href="./page-column/column-19.php">
                            <li>乳酸菌サプリメントの正しい選び方</li>
                        </a>

                        <a href="./page-column/column-20.php">
                            <li>停滞期を楽に乗り切ることができるチートデイの効果とやり方</li>
                        </a>

                        <a href="./page-column/column-21.php">
                            <li>美味しく取り組める！アイスダイエットとは？</li>
                        </a>

                        <a href="./page-column/column-22.php">
                            <li>一時期大流行！朝バナナダイエットとは？</li>
                        </a>


                    </ul>
                </div>

            </div>


            <div class="ham-content">

                <?php if($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_GET['pat'] == "d") : ?>
                <h2 class="a-title accordion-title" href="./qna.php">Q&A<span class="ico_ar">▼</span></h2>
                <?php else: ?>
                <h2 class="a-title accordion-title" href="./qna.php">ダイエットQ&A<span class="ico_ar">▼</span></h2>
                <?php endif; ?>
                <div class="accordion-page-item">
                    <ul class="ham-list ">

                        <a href="../page-qna/qna-01.php">
                            <li>ダイエットサプリは飲むだけで痩せられるのですか？</li>
                        </a>

                        <a href="../page-qna/qna-02.php">
                            <li>ダイエットサプリの正しい選び方を教えてください。</li>
                        </a>

                        <a href="../page-qna/qna-03.php">
                            <li>ダイエットサプリはどのような成分が入ってるの？</li>
                        </a>

                        <a href="../page-qna/qna-04.php">
                            <li>ダイエット中にお酒は飲んでもいいの？</li>
                        </a>

                        <a href="../page-qna/qna-05.php">
                            <li>ダイエットで部分痩せは出来ますか？</li>
                        </a>
                    </ul>
                </div>
            </div>


            <a class="link-btn" href="./contact.php">
                管理栄養士への<br>ダイエット無料メール相談はこちら

            </a>



        </div>
    </div>
    <div class="ham-btn"> </div>