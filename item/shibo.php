
                        <p>
                            <a target="_blank"
                                href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13">シボヘール</span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank"
                            href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <img src="./img/shibo.jpg" alt="" />
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <li><span class="bold">科学的根拠</span>が認められている<span class="red bold">機能性表示食品</span></li>

                            <li><span class="bold red">内臓脂肪</span><span class="bold red">や皮下脂肪</span>を減らすのを助ける！</li>

                            <li>一日たった<span class="bold red">93円！</span>だから続けやすい！</li>

                            <li><span class="bold">お腹の脂肪を減らす</span>のを助ける<span class="bold">葛の花由来イソフラボン</span>をたっぷり配合！
                            </li>


                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <p>
                <span class="red bold">お腹の脂肪を減らす</span>のを助けてくれる「シボヘール」は、<span class="bold red">脂肪合成の抑制</span>や
                脂肪の分解・燃焼のサポートしてくれると科学的に証明された「葛の花由来イソフラボン」配合！</span>


            </p>


            <p>
                BMI25～30の肥満気味な方には特にオススメで、お腹の脂肪が平均20cm減少したというデータが得られている<span class="red bold">機能性表示食品</span>です！
            </p>

            <p>
                加齢と共に落ちづらくなっていくお腹の脂肪にしっかりアプローチ！値段も<span class="bold">一日たったの97円</span>だから続けやすい！
            </p>

            <p>
                <span class="bold">本格的なダイエットサプリに挑戦したい方には１番おすすめです。</span>
            </p>


            <a target="_blank"
                href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <span class="link_txt">一日たった97円！<?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>ユーザー評価</th>
                </tr>
                <tr>
                    <td>2,918円(税込)</td>
                    <td>120粒</td>
                    <td>
                    <?php if ($_GET['pat'] == "a" || $_GET['pat'] == "c") : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                    <?php if ($_GET['pat'] == "l") : ?>
                    <?php else : ?>
                        1日あたりの価格
                    <?php endif; ?>
                    </th>
                </tr>
                <tr>
                    <td>カット・燃焼サプリ</td>
                    <td>葛の花由来のイソフラボン</td>
                    <td>
                    <?php if ($_GET['pat'] == "l") : ?>
                    <?php else : ?>
                        97円
                    <?php endif; ?>
                    </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank"
                href="./links/sibo.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>