
<div id="menu">

<div class="content-menu">
    <ul>
        <li>
            <a href="./contact.php">管理栄養士無料相談</a>
        </li>
        <li>
            <a href="./supple.php">人気サプリメント</a>
        </li>
        <li>
            <a href="./column.php">ダイエットコラム</a>
        </li>
        <li>
            <a href="./qna.php">ダイエットQ＆A</a>
        </li>
    </ul>
</div>

<div class="menubox">
    <ul id="menu1">
        <li>
            <a href="./">TOPへ</a>
        </li>
        <li>
            <a href="./unei.php">運営者情報</a>
        </li>
        <li>
            <a href="./entry4.php">ランキング調査概要</a>
        </li>
        <li>
            <a href="./privacy.php">プライバシーポリシー</a>
        </li>
    </ul>
</div>

</div>


<footer>
<?php if($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_GET['pat'] == "d") : ?>
Copyright (C) <?php echo date('Y'); ?> <br>成功ガイド All Rights Reserved.
<?php else :?>
Copyright (C) <?php echo date('Y'); ?> <br>ダイエット成功ガイド All Rights Reserved.
<?php endif; ?>

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
var itemHeights = []; //
$(function() {
    $(".grad-item").each(function() { //ターゲット(縮めるアイテム)
        var thisHeight = $(this).height(); //ターゲットの高さを取得
        itemHeights.push(thisHeight); //それぞれの高さを配列に入れる
        $(this).addClass("is-hide"); //CSSで指定した高さにする
        returnHeight = $(this).height(); //is-hideの高さを取得
    });
});

$(".grad-trigger").click(function() {
    if (!$(this).hasClass("is-show")) {
        var index = $(this).index(".grad-trigger"); //トリガーが何個目か
        var addHeight = itemHeights[index]; //個数に対応する高さを取得
        $(this).addClass("is-show").next().animate({
            height: addHeight
        }, 200).removeClass("is-hide"); //高さを元に戻す
    } else {
        $(this).removeClass("is-show").next().animate({
            height: returnHeight
        }, 200).addClass("is-hide"); //高さを制限する
    }
});
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
            $el.find('.accordion-contents').not($next).slideUp().parent().removeClass('open');
        };
    }
    var accordion1 = new Accordion1($('.menu-list-wrap'), false);
});

</script> 
<?php if($_GET['pat'] == "a" || $_GET['pat'] == "c" || $_SERVER['REQUEST_URI']=="/"|| $_SERVER['REQUEST_URI']=="index_c-test.php"  ) : ?>

<script>
$(function() {
    $('#wrapper').css({
        marginTop: 0
    });
})
</script>
<?php endif; ?>
</footer>

<script src="countdown.js?<?php echo time(); ?>"></script>
<?php if($_GET['pat'] == "a"|| $_SERVER['REQUEST_URI']=="/" || $_GET['pat'] == "c") : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-iagzybmk.js"></script>
<?php elseif($_GET['pat'] == "d") : ?>
<script type="text/javascript" charset="utf-8" src="https://kenga.tech/pop-ups-mwwsbpqr.js"></script>
<?php endif; ?>
<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/339539da33.js" crossorigin="anonymous"></script>
</body>

</html>