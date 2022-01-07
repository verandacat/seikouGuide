<div class="tab_container">

   <!-- #tab1 総合ランキング-->
   <div id="tab1" class="tab_content">


        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'all',
                    'post_type' => 'post',
                    'meta_key' => 'allrank',
                    'orderby' => 'meta_value_num',
                    'order' => 'asc',
                );
            

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $spurl = get_field('s_link');
                $rnkprice = get_field('rnk-price') ;
                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    
                <?php if($i == 1) : ?>
                    <th class="r-title no-ranking" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                            <img src="./img/no1__badge.png" width="80" />
                        </div>
                <?php else : ?>
                    <th class="r-title no-ranking" colspan="2">
                    
                <?php endif; ?>

                        <p>

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>
            
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td><?php echo $rnkprice; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 6) : ?>
                        <img alt="" src="./img/review_35.gif" />
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
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td>機能性表示食品</td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php if($i==1) : ?>
                            約93円<sup>※2</sup>
                        <?php else : ?>
                        <?php echo $onedayprice; ?>円
                        <?php endif; ?></td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->

        <?php if($post->ID == 391) : //シボヘール　?>
        <div class="meta-notes">
            <p>
                ※1 葛の花由来イソフラボン配合
            </p>
            <p>
                ※2 定期価格2,808円(税込)を30日分として計算
            </p>
        </div>
        <?php elseif($post->ID == 369) : //メタバリア?>
        <div class="meta-notes">
            <p>
                ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
            <p>
                ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
            </p>
            <p>
                ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2 機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
            </p>
            <p>
                ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
            </p>
        </div>
        <?php elseif($post->ID == 1508) :  //メタバリアプレミアム ?>
        <div class="meta-notes">
            <p>
                ※1　糖の吸収を抑える機能性と、継続摂取による腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー
            </p>
            <p>※2　脂肪の吸収を抑える機能は最終製品を用いた臨床試験</p>
            <p>※3　出典：H/Bフーズマーケティング便覧2021　機能志向食品編（2020.11.24発行）p138サラシア2019年（実績）販売高の合計値　(株)富士経済</p>
            <p>※4　継続摂取によりBMいが高めの方のおなかの脂肪（体脂肪・内蔵脂肪・皮下脂肪）・体重・ウエスト周囲径を減らすことで高めのBMIを低下させる機能は、最終製品を用いた臨床試験</p>
            <p>※5　2019年8月時点の消費者庁届出情報より。以下の4つの機能性を届出した機能性表示食品は日本で初めて。当社調べ。</p>
            <p>
            ①本品の継続摂取によりBMIが高めの方におなかの脂肪（体脂肪・内蔵皮下脂肪）・体重を減らすことで高めのBMIを低下させる ②本品の摂取により食事から摂取した脂肪の吸収を抑える ③機能性関与成分サラシノールが食事から摂取した糖の吸収を抑える ④機能性関与成分サラシノールの継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）
            </p>
        </div>

        <?php endif; ?>

        <div class="img-btn">

            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>

        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


        </div>


    <!-- #tab2 体内フローラランキング-->
    <div id="tab2" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '7',
                    'category_name' => 'flora',
                    'post_type' => 'post',
                    'meta_key' => 'frank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <?php if($i == 1) : ?>
                        <th class="r-title no-ranking" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                                <img src="./img/no1__badge.png" width="80" />
                            </div>
                    <?php else : ?>
                        <th class="r-title no-ranking" colspan="2">
                        
                    <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>

            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td>

                        <?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th colspan="2">
                        配合成分
                    </th>
                </tr>
                <tr>
                    <td>体内フローラサポートサプリ</td>
                    <td colspan="2"><?php echo $quantity; ?></td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>



    </div>
    <!--#tab2 end-->






    <!-- #tab3 燃焼ランキング -->
    <div id="tab3" class="tab_content">


        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'burning',
                    'post_type' => 'post',
                    'meta_key' => 'burnrank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <?php if($i == 1) : ?>
                        <th class="r-title no-ranking" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                                <img src="./img/no1__badge.png" width="80" />
                            </div>
                    <?php else : ?>
                        <th class="r-title no-ranking" colspan="2">
                        
                    <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <!-- シボヘール -->
            <?php if($post->ID == 391) : ?>
                <p>
                シボヘールは<span class="red bold">体重やお腹の脂肪（内臓脂肪と皮下脂肪）やウエスト周囲径を減らすのを助ける</span>機能があることが報告されている「葛の花由来イソフラボン」配合！
                </p>


                <p>
                    BMI25～30の肥満気味な方、お腹の脂肪が気になる方、ウエスト周囲径が気になる方に特におすすめの<span class="red bold">機能性表示食品</span>です！
                </p>

                <p>
                    加齢と共に落ちづらくなっていくお腹の脂肪にしっかりアプローチ！値段も<span class="bold">一日たったの約93円<sup>※2</sup></span>だから続けやすい！
                </p>

                <p>
                    <span class="bold">本格的な脂肪対策サプリに挑戦したい方には１番おすすめです。</span>
                </p>
            <?php else : ?>
                <?php echo $content; ?>
            <?php endif; ?>
            
            <!--お腹の脂肪が気になる方のタブレット-->
            <?php if($post->ID == 1287) : ?> 
            <div class="meta-notes">
                <small>※1 肥満気味＝BMI25以上30未満</small>
                <small>※2 摂取目安量：1日3粒</small>
            </div>
            <?php endif; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 6) : ?>
                        <img alt="" src="./img/review_35.gif" />
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
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td>機能性表示食品
                    <?php if($post->ID == 1287) : ?>
                    <br>届出番号C448
                    <?php endif; ?>
                    </td>
                    <td><?php echo $quantity; ?></td>
                    <td>
                        <?php if($post->ID == 391) : ?>
                            約93円<sup>※2</sup>
                        <?php elseif($post->ID == 1287) : ?>
                            <?php echo $onedayprice; ?>円<br>（税込／定期お届けコース／30日換算）
                        <?php else: ?>
                        <?php echo $onedayprice; ?>円
                        <?php endif; ?></td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->

        <?php if($post->ID == 391) : ?>
        <div class="meta-notes">
            <p>
                ※1 葛の花由来イソフラボン配合
            </p>
            <p>
                ※2 定期価格2,808円(税込)を30日分として計算
            </p>
        </div>
        <?php elseif($post->ID == 369) : ?>
        <div class="meta-notes">
            <p>
                ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
            <p>
                ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
            </p>
            <p>
                ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2 機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
            </p>
            <p>
                ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
            </p>
        </div>
        <?php elseif($post->ID == 1508) : ?>
        <div class="meta-notes">
            <p>
                ※1　糖の吸収を抑える機能性と、継続摂取による腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー
            </p>
            <p>※2　脂肪の吸収を抑える機能は最終製品を用いた臨床試験</p>
            <p>※3　出典：H/Bフーズマーケティング便覧2021　機能志向食品編（2020.11.24発行）p138サラシア2019年（実績）販売高の合計値　(株)富士経済</p>
            <p>※4　継続摂取によりBMいが高めの方のおなかの脂肪（体脂肪・内蔵脂肪・皮下脂肪）・体重・ウエスト周囲径を減らすことで高めのBMIを低下させる機能は、最終製品を用いた臨床試験</p>
            <p>※5　2019年8月時点の消費者庁届出情報より。以下の4つの機能性を届出した機能性表示食品は日本で初めて。当社調べ。</p>
            <p>
            ①本品の継続摂取によりBMIが高めの方におなかの脂肪（体脂肪・内蔵皮下脂肪）・体重を減らすことで高めのBMIを低下させる ②本品の摂取により食事から摂取した脂肪の吸収を抑える ③機能性関与成分サラシノールが食事から摂取した糖の吸収を抑える ④機能性関与成分サラシノールの継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）
            </p>
        </div>

        <?php endif; ?>


        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab3 end-->






    <!-- #tab4 糖質ランキング -->
    <div id="tab4" class="tab_content">



        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'sugariness',
                    'post_type' => 'post',
                    'meta_key' => 'sugrank',
                    'orderby' => 'meta_value_num',
					'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                <?php if($i == 1) : ?>
                    <th class="r-title no-ranking" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                            <img src="./img/no1__badge.png" width="80" />
                        </div>
                <?php else : ?>
                    <th class="r-title no-ranking" colspan="2">
                       
                <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

           
            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
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
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td>機能性表示食品</td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->

        <?php if($post->ID == 369) : ?>
        <div class="meta-notes">
            <p>
                ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
            <p>
                ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
            </p>
            <p>
                ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2 機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
            </p>
            <p>
                ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
            </p>
        </div>
        <?php elseif($post->ID == 1508) : ?>
        <div class="meta-notes">
            <p>
                ※1　糖の吸収を抑える機能性と、継続摂取による腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー
            </p>
            <p>※2　脂肪の吸収を抑える機能は最終製品を用いた臨床試験</p>
            <p>※3　出典：H/Bフーズマーケティング便覧2021　機能志向食品編（2020.11.24発行）p138サラシア2019年（実績）販売高の合計値　(株)富士経済</p>
            <p>※4　継続摂取によりBMいが高めの方のおなかの脂肪（体脂肪・内蔵脂肪・皮下脂肪）・体重・ウエスト周囲径を減らすことで高めのBMIを低下させる機能は、最終製品を用いた臨床試験</p>
            <p>※5　2019年8月時点の消費者庁届出情報より。以下の4つの機能性を届出した機能性表示食品は日本で初めて。当社調べ。</p>
            <p>
            ①本品の継続摂取によりBMIが高めの方におなかの脂肪（体脂肪・内蔵皮下脂肪）・体重を減らすことで高めのBMIを低下させる ②本品の摂取により食事から摂取した脂肪の吸収を抑える ③機能性関与成分サラシノールが食事から摂取した糖の吸収を抑える ④機能性関与成分サラシノールの継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）
            </p>
        </div>

        <?php endif; ?>
        
        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>




    </div>
    <!--#tab4 end-->





    <!-- #tab5 酵素サプリランキング-->
    <div id="tab5" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'enzyme',
                    'post_type' => 'post',
                    'meta_key' => 'enzymerank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>

        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <?php if($i == 1) : ?>
                        <th class="r-title no-ranking" colspan="2">
                            <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                                <img src="./img/no1__badge.png" width="80" />
                            </div>
                    <?php else : ?>
                        <th class="r-title no-ranking" colspan="2">
                        
                    <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td><?php echo $rnkprice; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php foreach ($jenre as $value) {
                                        echo $value;
                                    }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>



    </div>
    <!--#tab5 end-->





    <!-- #tab6 ドリンクランキング -->
    <div id="tab6" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '5',
                    'category_name' => 'enzymedrk',
                    'post_type' => 'post',
                    'meta_key' => 'drkrank',
                    'orderby' => 'meta_value_num',
                              'order' => 'asc',
                              
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                <?php if($i == 1) : ?>
                    <th class="r-title no-ranking" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                            <img src="./img/no1__badge.png" width="80" />
                        </div>
                <?php else : ?>
                    <th class="r-title no-ranking" colspan="2">
                       
                <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_35.gif" />
                        <?php else : ?>
                        <img alt="" src="./img/review_3.gif" />
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>サプリの種類</th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php foreach ($jenre as $value) {
                                        echo $value;
                                    }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab6 end-->




    <!-- #tab7 スムージランキング -->
    <div id="tab7" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '3',
                    'category_name' => 'smoothie',
                    'post_type' => 'post',
                    'meta_key' => 'smoothierank',
                    'orderby' => 'meta_value_num',
					          'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                <?php if($i == 1) : ?>
                    <th class="r-title no-ranking" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                            <img src="./img/no1__badge.png" width="80" />
                        </div>
                <?php else : ?>
                    <th class="r-title no-ranking" colspan="2">
                       
                <?php endif; ?>

                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>


            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td>
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_4.gif" />
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
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php 
                                      foreach ($jenre as $value) {
                                        echo $value;
                                 
                                }
                            ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円</td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab7 end-->



    <!-- #tab8 防風通聖散ランキング -->
    <div id="tab8" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '3',
                    'category_name' => 'medi',
                    'post_type' => 'post',
                    'meta_key' => 'medirank',
                    'orderby' => 'meta_value_num',
					'order' => 'asc',
                );
               

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $rnkprice = get_field('rnk-price') ;

                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    <th class="r-title" colspan="2">
                        <p>
                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>

                    </td>

                </tr>
                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>
            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>
            <?php if($post->ID == 941) : ?>

            <div class="coupon-box">
                <div style="text-align: left"><span class="rred tenmetsu f-13">速報！！</span></div>
                <div>
                    <a href="./links/bouhu.php<?php echo "?" . $_SERVER['QUERY_STRING'] ?>" target="_blank">
                        <img src="./img/coupon.jpg">
                    </a>
                </div>
                <div class="coupon-text">
                    <div style="text-align: left"><span class="bold f-13">公式サイト限定！</span></div>
                    <div><span class="rred">＼更に1,100円（税込）OFFクーポンをプレゼント／</span></div>
                </div>
                ※上記、クーポンコードを購入確認画面でご入力ください。
            </div>
            <?php endif; ?>

            <?php if($post->ID == 941) : ?>
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <span class="link font-link">→ クーポン付きページはこちら</span>
                </p>
            </a>
            <?php else : ?>
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>
            <?php endif; ?>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th colspan="2">価格</th>
                    <th>容量</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php echo $rnkprice; ?>
                    </td>
                    <td><?php echo $amount; ?></td>
                    
                </tr>
                <tr>
                    <th>
                        種類
                    </th>
                    <th>
                        配合成分
                    </th>
                    <th>
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td><?php 
                        foreach ($jenre as $value) {
                            echo $value;
                        } ?>
                    </td>
                    <td><?php echo $quantity; ?></td>
                    <td><?php echo $onedayprice; ?>円 <?php if($i==1) : ?>(税込)<?php endif; ?>
                </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->



        <div class="img-btn">
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>
        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


    </div>
    <!--#tab8 end-->


     <!-- #tab9 血糖値ランキング-->
    <div id="tab9" class="tab_content">

        <?php wp_reset_postdata();
                
                $args = array(
                    'posts_per_page' => '-1',
                    'category_name' => 'bldcare',
                    'post_type' => 'post',
                    'meta_key' => 'bloodrank',
                    'orderby' => 'meta_value_num',
                    'order' => 'asc',
                );
            

                $the_query = new WP_Query( $args );
                $i = 1;
                if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $point= get_field('point');
                $content= get_field('content');
                $catch= get_field('catch');
                $amount= get_field('amount');
                $quantity= get_field('quantity');
                $regularly= get_field('regularly');
                $onedayprice= get_field('onedayprice');
                $jenre= get_field('jenre');
                $url= get_field('url');
                $spurl = get_field('s_link');
                $rnkprice = get_field('rnk-price') ;
                ?>



        <table class="r-table" cellspacing="0">

            <tbody>

                <tr>
                    
                <?php if($i == 1) : ?>
                    <th class="r-title no-ranking" colspan="2">
                        <div class="img-center badge" style="position: absolute; top:0px; right:20px;">
                            <img src="./img/no1__badge.png" width="80" />
                        </div>
                <?php else : ?>
                    <th class="r-title no-ranking" colspan="2">
                    
                <?php endif; ?>

                        <p>

                            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                                target="_blank">
                                <span class="f-13"><?php the_title(); ?></span>
                            </a>
                        </p>　
                    </th>
                </tr>

                <tr>
                    <td class="r-img">

                        <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>"
                            target="_blank">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </td>

                </tr>

                <tr>

                    <td>

                        <ul class="r-list">

                            <?php echo $point; ?>

                        </ul>

                    </td>

                </tr>

            </tbody>
        </table>



        <div class="r-txtbox">

            <?php echo $content; ?>
            
            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <p class="link_txt">
                    <?php if(!empty($catch)) : ?>
                        <span class="link">→ <?php echo $catch; ?></span><br>
                        <span class="link font-link">特別キャンペーンページはこちら</span>
                    <?php else : ?>
                        <span class="link font-link">→ 特別キャンペーンページはこちら</span>
                    <?php endif; ?>
                </p>
            </a>

        </div>

        <table class="r-r-table" cellspacing="1">
            <tbody>
                <tr>
                    <th>価格</th>
                    <th>容量</th>
                    <th>おすすめ度</th>
                </tr>
                <tr>
                    <td><?php echo $rnkprice; ?></td>
                    <td><?php echo $amount; ?></td>
                    <td>
                        <?php if($i === 1) : ?>
                        <img alt="" src="./img/review_5.gif" />
                        <?php elseif($i === 2) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 3) : ?>
                        <img alt="" src="./img/review_45.gif" />
                        <?php elseif($i === 4) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 5) : ?>
                        <img alt="" src="./img/review_4.gif" />
                        <?php elseif($i === 6) : ?>
                        <img alt="" src="./img/review_35.gif" />
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
                        1日あたりの価格
                    </th>
                </tr>
                <tr>
                    <td>機能性表示食品</td>
                    <td><?php echo $quantity; ?></td>
                    <td>
                        <?php echo $onedayprice; ?>円
                    </td>
                </tr>

            </tbody>
        </table>
        <!--.r-r-table end-->

        <?php if($post->ID == 391) : ?>
        <div class="meta-notes">
            <p>
                ※1 葛の花由来イソフラボン配合
            </p>
            <p>
                ※2 定期価格2,808円(税込)を30日分として計算
            </p>
        </div>
        <?php elseif($post->ID == 369) : ?>
        <div class="meta-notes">
            <p>
                ※1 糖の吸収を抑える機能性と、継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー</p>
            <p>
                ※2 継続摂取によりBMIが高めの方のおなかの脂肪（体脂肪・内臓脂肪）・体重を減らすことで高めのBMIを改善する機能は、最終製品を用いた臨床試験
            </p>
            <p>
                ※3 出典：㈱富士経済 H･Bフーズマーケティング便覧2019 No.2 機能志向食品編(2018.12.25発行)サラシアを関与成分とする全てのカテゴリにおける2017年(実績)販売高の合計値
            </p>
            <p>
                ※4 2007年10月～2019年3月までのメタバリアシリーズの累計販売個数
            </p>
        </div>
        <?php elseif($post->ID == 1508) : ?>
        <div class="meta-notes">
            <p>
                ※1　糖の吸収を抑える機能性と、継続摂取による腸内環境を整える（おなかの中のビフィズス菌を増やす）機能性は機能性関与成分サラシノールによる研究レビュー
            </p>
            <p>※2　脂肪の吸収を抑える機能は最終製品を用いた臨床試験</p>
            <p>※3　出典：H/Bフーズマーケティング便覧2021　機能志向食品編（2020.11.24発行）p138サラシア2019年（実績）販売高の合計値　(株)富士経済</p>
            <p>※4　継続摂取によりBMいが高めの方のおなかの脂肪（体脂肪・内蔵脂肪・皮下脂肪）・体重・ウエスト周囲径を減らすことで高めのBMIを低下させる機能は、最終製品を用いた臨床試験</p>
            <p>※5　2019年8月時点の消費者庁届出情報より。以下の4つの機能性を届出した機能性表示食品は日本で初めて。当社調べ。</p>
            <p>
            ①本品の継続摂取によりBMIが高めの方におなかの脂肪（体脂肪・内蔵皮下脂肪）・体重を減らすことで高めのBMIを低下させる ②本品の摂取により食事から摂取した脂肪の吸収を抑える ③機能性関与成分サラシノールが食事から摂取した糖の吸収を抑える ④機能性関与成分サラシノールの継続摂取により腸内環境を整える（おなかの中のビフィズス菌を増やす）
            </p>
        </div>

        <?php endif; ?>

        <div class="img-btn">

            <a target="_blank" href="<?php echo $url; ?><?php echo "?".$_SERVER['QUERY_STRING']; ?>" target="_blank">
                <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
            </a>

        </div>


        <?php $i++; endwhile; endif; wp_reset_postdata(); ?>


        </div>
        <!-- .#tab9 end -->

</div>
<!-- .tab_container -->