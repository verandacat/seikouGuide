

                        <p>
                            <a target="_blank"
                                href="./links/maarui.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13">旬の実酵素</span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank"
                            href="./links/maarui.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <img src="./img/maarui.jpg" alt="" />
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <li>カラダに優しい乳酸菌が2粒で22種類100憶個、理想の自分に近づく！</li>

                            <li>和漢植物3種配合で「温・活・燃」を促進して内側からメラメラ！</li>

                            <li>完全無添加、抗酸菌、消化酵素で体内フローラを整え美容と健康サポート！</li>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">
            <p>
            旬の実酵素は四季折々の旬の食材315種類を3年間発酵熟成し完全無添加で作られた酵素サプリです。
            </p>
            <p>
            消化酵素を豊富に含み2粒で22種類の乳酸菌100憶個と抗酸菌で美容と健康をサポートし理想の体型へ！！
            また和漢植物3種類で内側からメラメラ燃える働きをサポート！！
            </p>
            <p>
            20代をピークに減少する体内酵素を補い、
            不足がちになるミネラルやビタミンも摂れるので栄養を補うには最適です。
            </p>
           
            <a target="_blank"
                href="./links/maarui.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <span class="link_txt">初回980円！<?php echo date("n"); ?>月の特別キャンペーンページはこちら</span>
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
                    <td>初回980円（税込） 定期：3219円（税込）（2ヶ月毎に２袋6437円で届く）</td>
                    <td>60粒／1袋</td>
                    <td>
                        <?php if($_GET['pat'] == "a") : ?>
                            <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                            <img alt="" src="./img/review_5.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        <?php if($_GET['pat'] == "l") : ?>
                        <?php else : ?>
                            1日あたりの価格
                        <?php endif; ?>
                    </th>
                </tr>
                <tr>
                    <td>酵素サプリ</td>
                    <td>315種類の植物発酵エキス</td>
                    <td>
                        <?php if($_GET['pat'] == "l") : ?>
                        <?php else : ?>
                            107円
                        <?php endif; ?>
                        </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->




        <div class="img-btn">
            <a target="_blank"
                href="./links/maarui.php<?php echo "?" . $_SERVER['QUERY_STRING']; ?>"
                target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>