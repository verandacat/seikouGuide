<?php include('header.php'); ?>

<div id="wrapper">

    <header>
        <div class="img-wrap">
            <img src="./img/fv/seikou_topBn_pc-h.png" />
        </div>
    </header>

    <div style="padding:50px 0 0;">
        <?php get_search_form(); ?>
    </div>


    <section id="section-01">

        <div class="title-wrap">

            <h1 class="left"><span class="red">「肥満症やむくみを解消したい」<br>「便秘を治したい」</span></h1>

            <h1 class="right">とお悩みの方へ</span></h1>

            <h1 class="center">本当におすすめ！<br>厳選！防風通聖散おすすめ3選を大公開</span></h1>

        </div>
        <!--.title-wrap end-->

        <div class="txt-wrap">

            <p>防風通聖散はよくあるサプリメントとは異なり</p><br>

            <p>おなかに皮下脂肪が多く、便秘がちな方の<span class="bold bg-y">「肥満症」</span>に効く薬として注目を集めている漢方薬です。
            </p><br>

            <p>「本気で防風通聖散で肥満症・むくみ・便秘を解消したい！」とお考えの方は是非参考にしてみてください。</p><br>
            　　　　　　　　　　　　
        </div>
        <!--.txt-wrap end-->

    </section>
    <!--#section-01 end-->



    <div class="img-wrap">
        <img id="rank_bn" src="./img/ranking/ranking-banner-pc-h.png" />
    </div>




    <!----------------------------RANKING-------------------------->

    <section id="section-04">

        <ul class="tabs">
            <li rel="tab1" onclick="rank_bn.src='./img/ranking/ranking-banner-pc.png'">総合<br>人気ランキング</li>
            <li rel="tab2" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-b.png'">体内フローラ<br>サプリ</li>
            <li rel="tab3" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-c-test.png'">脂肪対策<br>サプリ</li>
            <li rel="tab4" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-d.png'">糖質ケア<br>サプリ</li>
            <li rel="tab5" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-e.png'">酵素<br>サプリ</li>
            <li rel="tab6" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-f.png'">酵素<br>ドリンク</li>
            <li rel="tab7" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-g.png'">ダイエット<br>スムージー</li>
            <li class="active" rel="tab8" onclick="rank_bn.src='./img/ranking/ranking-banner-pc-h.png'">防風通聖散</li>
        </ul>

        <?php include 'ranking.php'; ?>


    </section>
    <!--#section-04 end-->

    <!----------------------------RANKING-------------------------->


    <section id="section-03">

        <h1 class="midashi">厳選！防風通聖散選びで失敗しないための３つのポイント</h1>

        <?php include('point.php'); ?>

    </section>
    <!--#section-03 end-->

    <style>
    #special {
        padding: 30px 40px 10px 40px;
        background: antiquewhite;
        margin: 10px 30px 20px;
        font-size: 1.1rem;
    }
    #special .last-item {
        margin: 10px 0 40px;
    }
    #special .last-item p {
        margin-bottom: 10px;
    }
    #special .last-item a {
        text-decoration: underline; 
        font-weight: bold;
        color: #4887d9!important;
    }
    #special .last-item a:hover {
        text-decoration: none;
    }
    #section-04 #tab8 table.r-table th.r-title {
        padding-left: 37px;
    }
    </style>
    <section id="special">
        <!-- 美活ニュース参考 -->
        <div class="last-item item1">
            <p><span class="bold">生漢煎（しょうかんせん）</span> … <span class="bold red bg-y">お腹の脂肪を分解・燃焼・排出促進！</span>効能効果が認められた<span class="red bold">満量処方の漢方薬！</span></p>
            <p class="right">
            <a target="_blank" href="./links/bouhu.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">→ 生漢煎（しょうかんせん）を<br />
                お得に買える公式サイト
                </a>
            </p>
        </div>
        <div class="last-item item1">
            <p><span class="bold">EGタイトLight</span> … <span class="red bold">肥満症</span>に効能効果を認められた、<span class="bg-y red bold">脂肪を落とす防風通聖散！</span></p>
            <p class="right">
            <a target="_blank" href="./links/eg.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">→ EGタイトLightを<br />
                お得に買える公式サイト
                </a>
            </p>
        </div>
        <div class="last-item item1">
            <p><span class="bold">テイシ防風通聖散</span> … <span class="bold red">おなかに皮下脂肪が多く、便秘がちな方</span>の<span class="bold red bg-y">肥満症に効く漢方薬！</span></p>
            <p class="right">
            <a target="_blank" href="./links/teishi.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>">→ テイシ防風通聖散を<br />
                お得に買える公式サイト
                </a>
            </p>
        </div>
    </section>



    <!----------------------------SEARCH-------------------------->


    <!----------------------------SEARCH-------------------------->

    <script>
    $(function() {

        $(".tab_content").hide();
        $(".tab_content:nth-of-type(8)").show();

        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active").css("color", "#333");
            //$(this).addClass("active").css({"color": "darkred","font-weight": "bolder"});
            $(this).addClass("active").css("color", "white");
            $(".tab_content").hide()
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn()
        });
    });
    </script>



    <?php include('footer.php'); ?>