

<style>
    #section-045 {
        padding: 8px;
    }
      #pickup-box {
        margin: 50px auto 20px;
        max-width: 100%;
        box-sizing: border-box;
        padding: 10px;
        box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), inset 0 0 0 10px #e22626;
      }
      #pickup-box .pickup-title {
        position: relative;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
      }
    
      #pickup-box .pickup-title h2 {
        font-size: 1.5rem;
        color: white;
        font-weight: bold;
        text-align: center;
        border-radius: 0;
        box-shadow: none;
        background-color: #e22626;
        margin: 0!important;
         /* border-top: 4px solid lemonchiffon; */
         border-bottom: 4px solid yellow;
         padding: 10px 10px 20px;
      }
      h3.pickup-name {
          margin: 0!important;
          text-align: center;
          padding: 20px 0;
          background-color: transparent!important;
          border-bottom: none!important; 
          border-radius: none!important;
          box-shadow: none!important;
      }
      h3.pickup-name a {
          text-decoration: underline;
          color: #4887d9!important;
          border-bottom: none!important; 
          font-size: 1.5rem;
      }
    
      #pickup-box .pickup-content {
          display: flex;
          margin-bottom: 10px;
          padding: 20px 8px;
      }
      #pickup-box .pickup-content .pickup-image {
        width: 40%;
        margin-right: 10px;
      }
      #pickup-box .pickup-content .pickup-image a {
          display: block;
      }
      #pickup-box .pickup-content .pickup-image a img {
          width: 100%;
      }
      #pickup-box .pickup-content .pickup-descript {
        width: 90%;
        margin-top: 15px;
      }
      #pickup-box .pickup-content .pickup-descript p{
          font-size: 16px;
          line-height: 1.5;
      }
      .pickup-button {
          width: 95%;
          margin: auto;
      }
      @media (max-width: 680px) {
        #pickup-box {
            margin-top: 10px;
            padding: 0 0 30px;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.2), inset 0 0 0 5px #e22626;
        }
        #pickup-box .pickup-title h2 {
            font-size: 1.2rem;
            padding: 10px;
            border-top: 4px solid lemonchiffon;
        }
        #pickup-box .pickup-content {
            flex-direction: column;
        }
        #pickup-box .pickup-content .pickup-image {
            width: 100%;
            text-align: center;
        }
        #pickup-box .pickup-content .pickup-image a img {
            width: 50%;
        }
        #pickup-box .pickup-content .pickup-descript {
            width: 100%;
            padding: 0 8px;
            box-sizing: border-box;
        }
      }
    </style>

          <div id="pickup-box">
            <div class="pickup-title">
                
                <h2>
                    <span style="font-weight: normal"><?php echo date('Y'); ?>???<?php echo date('n'); ?>???</span><br>
                    ????????????PICK UP ????????????
                </h2>

                <h3 class="pickup-name">
                    <a href="./links/bouhu.php<?php echo "?" . $query2; ?>" rel="noopener" target="_blank" >????????????????????????????????????</a>
                </h3>
            </div>
            <div class="pickup-content flex">
              <div class="pickup-image">
                <a
                  href="./links/bouhu.php<?php echo "?" . $query2; ?>"
                  rel="noopener" target="_blank"><img src="img/bouhu-pick.jpg" alt="" /></a>
              </div>

              <div class="pickup-descript">
              <p>
                ?????????????????????????????????<span class="red bold">???????????????????????????????????????????????????????????????????????????</span>????????????????????????????????? ??????????????????18????????????????????????27.1g???<span class="red bold">????????????</span>???????????????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????<span class="red bold">?????????????????????</span>??????????????????????????????
                <br><br>
                ??????30?????????????????????????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????????????????????????????<span class="red bold">50???OFF???????????????4,290???(??????)????????????</span>???????????????????????????
            </p>
              </div>
            </div>
            <div class="pickup-button">
                <div class="img-btn">
                <a target="_blank" href="./links/bouhu.php<?php echo "?" . $query2; ?>">
                    <img alt="" src="./img/n_img/btn_site_go_01.png" width="100%">
                </a>
            </div>

            </div>
          </div>