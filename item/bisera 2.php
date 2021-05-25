

                        <p>
                            <a target="_blank"
                                href="./links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13">ビセラ</span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank"
                            href="./links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <img src="./img/bise.jpg" alt="" />
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <li>初回価格500円！SNSでも話題沸騰中！</li>

                            <li>短鎖脂肪酸が体内フローラをしっかりサポート！</li>

                            <li>32種類もの体内フローラサポート菌を1兆個も配合！</li>

                            <li>特殊加工カプセルで、菌が生きたまま腸に届く！</li>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <p>
                「生」菌が1兆個も配合された「BISERA」は、 体内フローラを応援してくれる「短鎖脂肪酸」をダイレクトに配合！ 善玉菌・悪玉菌にアプローチすることで、 体の内側から健康やスタイルケアをサポートします。

            </p>

            <p>
                ラクリス菌、EC-12菌、ナノ乳酸菌など、32種類の菌が 贅沢に１兆個も配合されており、キレイをしっかりサポート！ 特殊加工カプセルを採用しているので、胃で溶けずにしっかり菌を腸まで届けます。
            </p>


            <a target="_blank"
                href="./links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <span class="link_txt">初回500円！<?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
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
                    <td>500円（初回）3980円（定期）</td>
                    <td>30粒（30日分）</td>
                    <td>
                      <?php if ($_GET['pat'] == "b") : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_35.gif" />
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
                    <td>体内フローラサプリ</td>
                    <td>短鎖脂肪酸・ラクリス菌・EC-12・ナノ乳酸菌</td>
                    <td>
                    <?php if ($_GET['pat'] == "l") : ?>
                    <?php else : ?>
                    133円
                    <?php endif; ?>
                    </td>
                </tr>

            </tbody>
        </table>


        <div class="img-btn">
            <a target="_blank"
                href="./links/bise.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>