<?php include('header.php'); ?>


<div id="wrapper">

    <header>
        <div class="img-wrap">
            <img src="./img/top-banner-sp-new-h-new.png" />
        </div>
    </header>

    <div style="padding:10px 0 0;">
        <?php get_search_form(); ?>
    </div>



    <section id="section-01">

    <div class="title-wrap">

        <h1 class="left"><span class="red">「肥満症やむくみを解消したい」<br>「便秘を治したい」</span></h1>

        <h1 class="right">とお悩みの方へ</h1>

        <h1 class="center">本当におすすめ！<br>厳選！防風通聖散おすすめ3選を大公開</h1>

        </div>
        <!--.title-wrap end-->

        <div class="txt-wrap">

        <p>防風通聖散はよくあるサプリメントとは異なり</p><br>

        <p>おなかに皮下脂肪が多く、便秘がちな方の<span class="bold bg-y">「肥満症」</span>に効く薬として注目を集めている漢方の医薬品です。
        </p><br>

        <p>「本気で防風通聖散で肥満症・むくみ・便秘を解消したい！」とお考えの方は是非参考にしてみてください。</p><br>
        　　　　　　　　　　　　
    </div>
    <!--.txt-wrap end-->

    </section>
    <!--#section-01 end-->





    <div class="img-wrap">
        <img id="rank_bn" src="./img/ranking/ranking-banner-sp-h.png" />

    </div>

    <!----------------------------RANKING-------------------------->

    <section id="section-04">

        <div class="swiper-container">
            <ul class="swiper-wrapper tabs">
                <li class="tab1 swiper-slide"><a href="#tab1"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp.png'">総合<br>人気ランキング</li>
                <li class="tab2 swiper-slide"><a href="#tab2"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-b.png'">体内フローラ<br>サプリ</a></li>
                <li class="tab3 swiper-slide"><a href="#tab3"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-c.png'">燃焼<br>サプリ</a></li>
                <li class="tab4 swiper-slide"><a href="#tab4"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-d.png'">糖質ケア<br>サプリ</a></li>
                <li class="tab5 swiper-slide"><a href="#tab5"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-e.png'">酵素<br>サプリ</a></li>
                <li class="tab6 swiper-slide"><a href="#tab6"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-f.png'">酵素<br>ドリンク</a></li>
                <li class="tab7 swiper-slide"><a href="#tab7"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-g.png'">ダイエット<br>スムージー</a></li>
                <li class="tab8 swiper-slide active"><a href="#tab8"
                        onclick="rank_bn.src='./img/ranking/ranking-banner-sp-h.png'">防風通聖散</a></li>
                <li class="swiper-slide"></li>
            </ul>
        </div>
        <div class="swiper-pagination"></div>

        <?php include('ranking.php'); ?>

    </section>
    <!--#section-04 end-->

    <!----------------------------RANKING-------------------------->


    <section id="section-03">


        <h1 class="midashi">厳選！防風通聖散選びで<br>失敗しないための３つのポイント</h1>

        <?php include('point.php'); ?>


    </section>
    <!--#section-03 end-->

    <style>
    #special {
        padding: 22px 10px 2px 10px;
        background: antiquewhite;
        margin: 10px;
        font-size: 1.1rem;
    }

    #special .last-item {
        margin: 10px 0 30px;
    }

    #special .last-item p {
        margin-bottom: 10px;
    }

    #special .last-item a {
        text-decoration: underline;
        font-weight: bold;
        color: #4887d9 !important;
    }
    </style>
    <section id="special">
        <!-- 美活ニュース参考 -->
        <div class="last-item item1">
            <p><span class="bold">生漢煎（しょうかんせん）</span> … <span
                    class="bold red bg-y">お腹の脂肪を分解・燃焼・排出促進！</span>効能効果が認められた<span class="red bold">満量処方の漢方薬！</span></p>
            <p class="right">
                <a target="_blank" href="./links/bouhu.php<?php echo "?" . $query2; ?>">→ 生漢煎（しょうかんせん）を<br />
                    お得に買える公式サイト
                </a>
            </p>
        </div>
        <div class="last-item item1">
            <p><span class="bold">EGタイトLight</span> … <span class="red bold">肥満症</span>に効能効果を認められた、<span
                    class="bg-y red bold">脂肪を落とす防風通聖散！</span></p>
            <p class="right">
                <a target="_blank" href="./links/eg.php<?php echo "?" . $query2; ?>">→ EGタイトLightを<br />
                    お得に買える公式サイト
                </a>
            </p>
        </div>
        <div class="last-item item1">
            <p><span class="bold">テイシ防風通聖散</span> … <span class="bold red">おなかに皮下脂肪が多く、便秘がちな方</span>の<span class="bold red bg-y">肥満症に効く漢方薬！</span></p>
            <p class="right">
                <a target="_blank" href="./links/teishi.php<?php echo "?" . $query2; ?>">→ テイシ防風通聖散を<br />
                    お得に買える公式サイト
                </a>
            </p>
        </div>
    </section>


    <script>
    $(function() {

        $(".tab_content").hide();
        $(".tab_content:nth-of-type(8)").show();

        $("ul.tabs li").click(function() {
            $("ul.tabs li").removeClass("active").css("color", "#333");
            //$(this).addClass("active").css({"color": "darkred","font-weight": "bold"});
            $(this).addClass("active").css("color", "white");
            $(".tab_content").hide()
            var activeTab = $(this).attr("rel");
            $("#" + activeTab).fadeIn()
        });
    });
    </script>
    <!-- Swiper JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper_1 = new Swiper('.swiper-container', {
        initialSlide: 7,
        pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 0,
        freeMode: true,
        pagination: { // 페이징 설정
            el: '.swiper-pagination',
            clickable: true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
        },
    });
    $('.tabs > li > a').on('click', function(e) {
        $(this).parent().addClass('active').siblings().removeClass('active');
        var tabIdx = $(this).parent().index();
        swiper_2.slideTo(tabIdx + 1, 300);
        e.preventDefault();
    });

    var tabLen = $('.tabs > li').length;

    /* 2016-05-13 수정 */
    var swiper_2 = new Swiper('.swiper-container-2', {
        initialSlide: 7,
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: true,
        loop: true,
        noSwiping: true,
        noSwipingClass: '.swiper-wrapper',
        onInit: function(swiper) {

        },
        onSlideChangeStart: function(swiper) {
            var idx = swiper.activeIndex - 1;
            if (idx < 0) {
                idx = tabLen - 1;
            } else if (idx == tabLen) {
                idx = 0;
            }
            $('.tabs > li').removeClass('active').eq(idx).addClass('active');
            if (idx < tabLen) {
                swiper_1.slideTo(idx - 1, 300);
            }
        }
    });
    /* //2016-05-13 수정 */
    </script>


    <?php include('footer.php'); ?>