<?php include __DIR__. '/parts/config.php'; 

$sql = "SELECT * FROM `memberprofilevv` LEFT JOIN `hpmemberlevelvv` ON `memberprofilevv`.`bng_level` = `hpmemberlevelvv`.`level`";
$cardVv = $pdo->query($sql)->fetchAll();



?>
<?php
$title= 'BNG_homepage_Vv'
?>

<?php include __DIR__. '/parts/BNG_head_Vv.php';?>

<link rel="stylesheet" href="<?= WEB_ROOT ?>/css/BNG_homepage_Vv.css">
</head>

<?php include __DIR__. '/parts/BNG_navbar_topButton_Vv.php';?>


        <div class="hpBodyWrapVv">
        <div class="hpContentVv">
            <div class="hpBannerWrapVv">
                <div class="hpsloganWrapVv">
                    <div class="hpTitleVv">享受前所未有的騎行體驗</div>
                    <div class="hpSubtitleVv">Let the unforgettable riding experience begin</div>
                </div>
                <div class="hpSloganLinesVv">
                    <img src="./img/slogan lines.2.svg" alt="">
                </div>
                <div class="hpBannerArrowLeftVv">
                    <img src="./img/iconArrowRightWhite.svg" alt="">
                </div>
                <div class="hpBannerArrowRightVv">
                    <img src="./img/iconArrowRightWhite.svg" alt="">
                </div>
                <ul class="imgWrapVv d-flex list-unstyled">
                    <li><img src="./img/hpBanner1.png" alt=""></li>
                    <li><img src="./img/hpBanner2.png" alt=""></li>
                    <li><img src="./img/hpBanner3.png" alt=""></li>
                </ul>
                <ul class="hpSliderDotsVv">
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!-- 以下為AboutUs -->
            <div class="hpAboutUsVv hpSectionMobileVv" id="hpAboutUsVv">
                <div class="hpDashLineBgVv">
                    <svg xmlns="http://www.w3.org/2000/svg" width="949.009" height="4004.147"
                        viewBox="0 0 949.009 4004.147">
                        <path id="Path_11" data-name="Path 11"
                            d="M705,1025s-198,112-116,290,510.667,380,440.667,862C1008.317,2324.01,778,2409,652,2505c-202,144-390,270-446,540s411,584,382.333,888-366.667,326.667-464,612S176,5025,176,5025"
                            transform="translate(-89.837 -1022.956)" fill="none" stroke="rgba(223,227,192,0.61)"
                            stroke-linecap="round" stroke-width="3" stroke-dasharray="15" />
                    </svg>
                </div>
                <div class="hpDecorationAboutUsLeftVv">
                    <img src="./img/treeBig.svg" alt="">
                </div>
                <div class="hpDecorationAboutUsRightVv">
                    <img src="./img/hillSmall.svg" alt="">
                </div>
                <div class="hpTitleMarkWrapVv">
                    <div class="hpTitleMarkVv">
                        <div class="hpTitleMarkContentVv ">關於我們</div>
                    </div>
                </div>
                <div class="hpAboutContentWrapVv">
                    <div class="hpAboutUsCotentBCCVv">
                        <div class="hpAboutUsContentVv">
                            <div class="hpTitleOrangeVv hpTitleOrangeLineVv orangePositionVv">BikeNGo，有bike就可Go！</div>
                            <p class="hpP16Vv">近年來戶外運動風氣盛行<br>
                                單車人口不斷增加<br>
                                台灣本有成熟的單車工業<br>
                                後疫情時代單車更是健康安全的休閒運動<br>
                                然而，不論資深車友或入門初學者<br>
                                難免有不易找到同伴交流的困擾<br>
                                透過網路搜尋、商家或親友，獲得資訊往往零碎紛雜<br>
                                於是我們便提供喜愛單車的朋友一個完整方便的交流平台<br>
                                認識同好，隨時呼朋引伴，並參加行程開騎</p>
                        </div>
                        <div class=" hpMobileShowVv">
                            <div class="hpTitleOrangeVv hpTitleOrangeLineVv orangePositionVv">BikeNGo，有bike就可Go！</div>
                            <p class="hpP16Vv">
                                近年來戶外運動風氣盛行，單車人口不斷增加，台灣本有成熟的單車工業，後疫情時代單車更是健康安全的休閒運動，然而，不論資深車友或入門初學者，難免有不易找到同伴交流的困擾，透過網路搜尋、商家或親友，獲得資訊往往零碎紛雜，於是我們便提供喜愛單車的朋友，一個完整方便的交流平台，認識同好，隨時呼朋引伴，並參加行程開騎。
                            </p>
                        </div>
                    </div>
                    <div class="hpAboutUsImgWrapVv">
                        <img src="./img/hpAboutUs.png" alt="">
                    </div>
                </div>
            </div>
            <!-- 以下為SelectedTrip -->
            <div class="hpSelectedTripVv hpSectionVv hpSectionMobileVv" id="hpSelectedTripVv">
                <div class="hpTitleMarkWrapVv">
                    <div class="hpTitleMarkVv">
                        <div class="hpTitleMarkContentVv">精選行程</div>
                    </div>
                </div>
                <div class="hpP22Vv centerVv">『　依照不同需求，為您規劃好專屬於您的完美行程　』</div>
                <div class="row flex-xl-row justify-content-xl-center rowMtVv">
                    <div class="col-12 col-xl-2 d-flex flex-xl-column ">
                        <div class="col-5 col-xl-12 flex-xl-shrink-1 px-0 hpSelectedTripPicBigWrapVv">
                            <div class="hpSelectedTripPicWrapOutVv hpSelectedTripPicWrapOutVv1 ">
                                <div class="hpSelectedTripPicWrapVv mx-auto">
                                    <img src="./img/1598514291phpsCxGBc.jpeg" alt="">
                                </div>
                                <div class="hpSelectedTripCurveWordsVv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="294" height="400"
                                        viewBox="0 0 294 294">
                                        <defs>
                                            <path id="tophalf" d="M0,200S.68,61.29,147,53c0,0,139.42-1.08,147,147"
                                                transform="translate(0 -60)" />
                                        </defs>
                                        <!-- <circle id="Ellipse_61" data-name="Ellipse 61" cx="147" cy="147" r="147"
                                            fill="#f1f1f1" /> -->
                                        <text x="0" y="10" style="stroke: #003366;" text-anchor="middle">
                                            <textPath xlink:href="#tophalf" startOffset="50%"
                                                style="letter-spacing: 10px;">
                                                ITINERARY</textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-7 col-xl-12 flex-xl-column justify-content-xl-center                         align-items-xl-center centerVv hpSelectedTripContentVv">
                            <div class="hpTitleOrangeVv">地區</div>
                            <div class="hpP16Vv centerVv ">
                                依照北、中、南、東部<br>
                                來劃分行程路線
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-2 d-flex flex-row-reverse flex-xl-column ">
                        <div class="col-5 col-xl-12 flex-xl-shrink-1 px-0 hpSelectedTripPicBigWrapVv">
                            <div class="hpSelectedTripPicWrapOutVv hpSelectedTripPicWrapOutVv2 ">
                                <div class="hpSelectedTripPicWrapVv mx-auto">
                                    <!-- <img src="./img/1598514291phpsCxGBc.jpeg" alt=""> -->
                                    <img src="./img/long-shot-man-riding-bike (1).png" alt="">
                                </div>
                                <div class="hpSelectedTripCurveWordsVv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="294" height="400"
                                        viewBox="0 0 294 294">
                                        <defs>
                                            <path id="tophalf" d="M0,200S.68,61.29,147,53c0,0,139.42-1.08,147,147"
                                                transform="translate(0 -60)" />
                                        </defs>
                                        <!-- <circle id="Ellipse_61" data-name="Ellipse 61" cx="147" cy="147" r="147"
                                            fill="#f1f1f1" /> -->
                                        <text x="0" y="10" style="stroke: #003366;" text-anchor="middle">
                                            <textPath xlink:href="#tophalf" startOffset="50%"
                                                style="letter-spacing: 10px;">
                                                ITINERARY</textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-7 col-xl-12 flex-xl-column justify-content-xl-center  px-0  align-items-xl-center centerVv hpSelectedTripContentVv">
                            <div class="hpTitleOrangeVv">熱門景點</div>
                            <div class="hpP16Vv centerVv webVv">
                                嚴選人氣景點<br>安排最流暢的路線
                            </div>
                            <div class="hpP16Vv centerVv wordsWrapVv mobileVv">
                                嚴選人氣景點，安排最流暢的路線
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-2 d-flex flex-xl-column ">
                        <div class="col-5 col-xl-12 flex-xl-shrink-1 px-0 hpSelectedTripPicBigWrapVv">
                            <div class="hpSelectedTripPicWrapOutVv hpSelectedTripPicWrapOutVv3 ">
                                <div class="hpSelectedTripPicWrapVv mx-auto">
                                    <!-- <img src="./img/1598514291phpsCxGBc.jpeg" alt=""> -->
                                    <img src="./img/pexels-pixabay-248547.png" alt="">
                                </div>
                                <div class="hpSelectedTripCurveWordsVv">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="294" height="400"
                                        viewBox="0 0 294 294">
                                        <defs>
                                            <path id="tophalf" d="M0,200S.68,61.29,147,53c0,0,139.42-1.08,147,147"
                                                transform="translate(0 -60)" />
                                        </defs>
                                        <!-- <circle id="Ellipse_61" data-name="Ellipse 61" cx="147" cy="147" r="147"
                                            fill="#f1f1f1" /> -->
                                        <text x="0" y="10" style="stroke: #003366;" text-anchor="middle">
                                            <textPath xlink:href="#tophalf" startOffset="50%"
                                                style="letter-spacing: 10px;">
                                                ITINERARY</textPath>
                                        </text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-7 col-xl-12 flex-xl-column justify-content-xl-center                         align-items-xl-center centerVv hpSelectedTripContentVv">
                            <div class="hpTitleOrangeVv">難易度</div>
                            <div class="hpP16Vv centerVv">
                                依照等級區分，找到最<br>
                                適合自己的路線
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ViewMore Button -->
                <div class="hpViewMoreButtonWrapVv d-flex justify-content-center align-items-center">
                    <a href="#">
                        <div class="hpViewMoreButtonVv d-flex justify-content-center align-items-baseline">
                            <div class="hpViewMoreVv">VIEW MORE</div>
                            <div class="arrowWrapVv"><img src="./img/arrowThin.svg" alt=""></div>
                        </div>
                    </a>
                </div>
                <!-- 無頭照片分隔 -->
                <div class="noheadimgWrapVv webVv">
                    <img src="./img/hpPic1.png" alt="">
                    <img src="./img/hpPic1Bottom.png" alt="">
                </div>
            </div>
            <div class="noheadimgWrapVv mobileVv">
                <img src="./img/hpPic1.png" alt="">
                <img src="./img/hpPic1Bottom.png" alt="">
            </div>
            <!-- 以下為Friend -->
            <div class="hpContainerVv">
                <div class=" hpFriendVv hpSectionVv hpSectionMobileVv justify-content-xl-center" id="hpFriendVv">
                    <div class="col-xl-2 offset-xl-2">
                        <div class="hpTitleMarkWrapVv">
                            <div class="hpTitleMarkVv">
                                <div class="hpTitleMarkContentVv">認識好友</div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-2 hpP22Vv">『　加個好友，<br>一同享受前所未有的騎行體驗吧！　』</div>
                    <div class="hpFriendCarouselVv d-flex d-xl-none mx-auto justify-content-center flex-wrap">
                        <!-- <div class="col-xl-1 d-none d-xl-flex align-items-center justify-content-center">
                            <div class="arrowOrangeWrapVv">
                                <img src="./img/arrowOrange.svg" alt="">
                            </div>
                        </div> -->


                       
                        <?php
                       $indexVv =0;
                    //    設定變數從第0筆開始
                       shuffle($cardVv);
                    //    shuffle洗牌打亂資料表內所有資料順序
                       list($array1Vv, $array2Vv) = array_chunk($cardVv, ceil(count($cardVv)/2));
                    //    將資料陣列分成2大塊陣列
                
                    
// 在最外層的div test-wrapvv跑for迴圈，上下各8筆，總共16筆資料
                    for($xVv = 0; $xVv < 8; $xVv++ ){
                        ?>
                         <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/members/<?=$array1Vv[$xVv]['profile_pics']?>.jpg" alt="">
                                    <!-- $array1Vv[$x]$x代表從第0筆開始抓 -->
                                    <div class="cityTagVv"><?=$array1Vv[$xVv]['location']?></div>
                                </div>
                                <div class="profileNameVv">
                                    <?=$array1Vv[$xVv]['name']?>
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv"><?=$array1Vv[$xVv]['age']?></div>
                                    <div class="levelVv"><?=$array1Vv[$xVv]['present']?></div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>

     


                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/members/<?=$array2Vv[$xVv]['profile_pics']?>.jpg" alt="">
                                    <div class="cityTagVv"><?=$array2Vv[$xVv]['location']?></div>
                                </div>
                                <div class="profileNameVv">
                                    <?=$array2Vv[$xVv]['name']?>
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv"><?=$array2Vv[$xVv]['age']?></div>
                                    <div class="levelVv"><?=$array2Vv[$xVv]['present']?></div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>

                     

                        </div>
                        
                        <?php

                    };

                    ?>

                  

                       
                    </div>
                       
                        <!-- <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="test-wrapvv">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/34.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="hpProfileImgWrapVv">
                                    <img src="./img/69.png" alt="">
                                    <div class="cityTagVv">台北</div>
                                </div>
                                <div class="profileNameVv">
                                    李郝率
                                </div>
                                <div class="d-flex">
                                    <div class="ageVv">28</div>
                                    <div class="levelVv">新手入門</div>
                                </div>
                                <div class="d-flex profileIconsVv mx-auto">
                                    <div class="addFriendVv px-1 justify-content-center align-items-center">
                                        <img src="./img/Icon - icon-user-add.svg" alt="">
                                    </div>
                                    <div class="mailVv px-1">
                                        <img src="./img/mail.svg" alt="">
                                    </div>
                                    <div class="couponVv px-1">
                                        <img src="./img/Icon-icon-coupon.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="d-none col-xl-1 d-xl-flex align-items-center justify-content-center">
                            <div class="arrowOrangeWrapVv scaleXVv">
                                <img src="./img/arrowOrange.svg" alt="">
                            </div>
                        </div> -->
                    
                    <!-- web -->
                    <div class="hpFriendCarouselVv d-none d-xl-flex mx-auto justify-content-center flex-wrap ">

                    <?php 
                    $indexVv = 0;
                    shuffle($cardVv);

                    foreach($cardVv as $eachVv) {
                        if($indexVv < 16){
                             
                            $indexVv++?>
                     <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="hpProfileImgWrapVv">
                                <img src="./img/members/<?=$eachVv['profile_pics']?>.jpg" alt="">
                                <div class="cityTagVv"><?=$eachVv['location']?></div>
                            </div>
                            <div class="profileNameVv">
                            <?=$eachVv['name']?>
                            </div>
                            <div class="d-flex">
                                <div class="ageVv"><?=$eachVv['age']?></div>
                                <div class="levelVv"><?=$eachVv['present']?></div>
                            </div>
                            <div class="d-flex profileIconsVv mx-auto">
                                <div class="addFriendVv px-1 justify-content-center align-items-center">
                                    <img src="./img/Icon - icon-user-add.svg" alt="">
                                </div>
                                <div class="mailVv px-1">
                                    <img src="./img/mail.svg" alt="">
                                </div>
                                <div class="couponVv px-1">
                                    <img src="./img/Icon-icon-coupon.svg" alt="">
                                </div>
                            </div>
                        </div>
                    <?php 
                    }
                    }
                    
                    
                    ?>

                    
                       

                       

                        <!-- <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="hpProfileImgWrapVv">
                                <img src="./img/profile-46.png" alt="">
                                <div class="cityTagVv">台北</div>
                            </div>
                            <div class="profileNameVv">
                                李郝率
                            </div>
                            <div class="d-flex">
                                <div class="ageVv">28</div>
                                <div class="levelVv">新手入門</div>
                            </div>
                            <div class="d-flex profileIconsVv mx-auto">
                                <div class="addFriendVv px-1 justify-content-center align-items-center">
                                    <img src="./img/Icon - icon-user-add.svg" alt="">
                                </div>
                                <div class="mailVv px-1">
                                    <img src="./img/mail.svg" alt="">
                                </div>
                                <div class="couponVv px-1">
                                    <img src="./img/Icon-icon-coupon.svg" alt="">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="hpViewMoreButtonWrapVv d-flex justify-content-center align-items-center">
                        <a href="#">
                            <div class="hpViewMoreButtonVv d-flex justify-content-center align-items-baseline">
                                <div class="hpViewMoreVv">VIEW MORE</div>
                                <div class="arrowWrapVv"><img src="./img/arrowThin.svg" alt=""></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hpReviewBgOutVv">
                <div class="hpCurveBgWrapVv">
                    <div class="hpCurvePathBgVv">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1919.2 101.47">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: none;
                                    }
                                </style>
                            </defs>
                            <g id="hpManBikeVv" data-name="圖層 1"
                                style="position: absolute; z-index:99999999;transform:translateY(-300px)">
                                <path id="Path_340" data-name="Path 340"
                                    d="M78.593,205.761a1.217,1.217,0,0,0,1.713-.252h0a1.217,1.217,0,0,0-.252-1.713L70.07,196.37a1.3,1.3,0,0,0-1.826.276h0a1.136,1.136,0,0,0,.235,1.623Z"
                                    transform="translate(-16.903 -50.207)" fill="#331832" />
                                <path id="Path_341" data-name="Path 341"
                                    d="M84.426,185.569S79.9,193.994,81.114,196.7s6.306,8.871,2.37,8.749c-2.264-.073-7.459-6.25-9.107-7.792s-3.88-2.281-4.058-4.537C70.1,190.682,80.733,181.6,80.733,181.6a15.852,15.852,0,0,0,2.118,2.281C84.734,185.561,84.426,185.569,84.426,185.569Z"
                                    transform="translate(-17.535 -47.474)" fill="#366f8f" />
                                <path id="Path_342" data-name="Path 342"
                                    d="M122.5,131.466c-.925,6.72,4.5,5.682-6.371,18.481-9.74,11.5-20.616,22.06-27.433,25.559-3.385,1.745-7.776-3.912-8.514-6.42-2.1-7.053,7.183-16.46,14.407-28.878,6.233-10.746,11.972-15.048,11.972-15.048Z"
                                    transform="translate(-21.019 -33.027)" fill="#cc6651" />
                                <path id="Path_343" data-name="Path 343"
                                    d="M134.972,93.667c-29.154-2.6-33.983-4.7-36.443-15.892-3.141-14.463-.284-24.82-.146-25.339,0,0,1.217-1.5,8.709-.138,6.672,1.217,7.053,2.8,7.053,2.8s-.6,4.789,1.915,15.584c3.247,13.8,13.863,12.11,28.594,12.11C144.655,82.791,139.314,94.056,134.972,93.667Z"
                                    transform="translate(-25.803 -13.422)" fill="#ffb17d" />
                                <path id="Path_344" data-name="Path 344"
                                    d="M87.054,199.663a1.621,1.621,0,0,1-.276,0l-46.458-7.67a1.649,1.649,0,0,1-1.079-2.573L63.971,154.4a1.648,1.648,0,1,1,2.695,1.9l-23.2,32.871L87.289,196.4a1.629,1.629,0,1,1-.268,3.247Z"
                                    transform="translate(-10.409 -42.219)" fill="#764678" />
                                <path id="Path_345" data-name="Path 345"
                                    d="M30.469,223.33c-9.829,0-18.668-3.6-24.211-9.87-4.919-5.56-7-12.718-6.022-20.7h0c2.484-20.291,12.986-30.777,32.985-32.969a26.918,26.918,0,0,1,21.517,6.591c7.37,6.615,11.817,17.507,11.817,29.162,0,8.62-3.928,15.859-11.363,20.916C48.7,220.9,39.892,223.33,30.469,223.33Zm-28.846-30.4,1.364.17c-.877,7.175.974,13.587,5.357,18.546,5.032,5.681,13.108,8.928,22.15,8.928,16.038,0,33.277-7.832,33.277-25.031,0-10.722-4.164-21.1-10.86-27.109-5.3-4.756-11.826-6.745-19.382-5.909-18.8,2.062-28.221,11.485-30.558,30.566Z"
                                    transform="translate(-0.002 -43.33)" fill="#331832" />
                                <path id="Path_346" data-name="Path 346"
                                    d="M30.256,197.315c.722-5.925,3.928-8.189,8.717-8.717,5.755-.633,8.725,4.618,8.725,9.439s-4.675,7.248-9.545,7.248S29.671,202.1,30.256,197.315Z"
                                    transform="translate(-5.689 -48.782)" fill="#331832" />
                                <rect id="Rectangle_38" data-name="Rectangle 38" width="0.277" height="30.004"
                                    transform="translate(9.162 132.237) rotate(-53.931)" fill="#331832" />
                                <path id="Path_347" data-name="Path 347"
                                    d="M34.182,192.656l-.235-.057L3.81,186.171l.057-.268,29.909,6.38-8.685-27.271.26-.081Z"
                                    transform="translate(-0.719 -41.795)" fill="#331832" />
                                <path id="Path_348" data-name="Path 348"
                                    d="M40.35,192.274,56.664,166.74l.227.146-15.665,24.52,24.284-15.032.146.235Z"
                                    transform="translate(-10.245 -42.112)" fill="#331832" />
                                <path id="Path_349" data-name="Path 349"
                                    d="M40.77,191.968l5.17-30.648.268.049-5.1,30.242,30.234-6.988.057.276Z"
                                    transform="translate(-10.454 -41.068)" fill="#331832" />
                                <path id="Path_350" data-name="Path 350"
                                    d="M66.879,217.5,40.33,198.6l32.417,4.156-.032.268-31.329-4.01,25.656,18.254Z"
                                    transform="translate(-10.376 -50.676)" fill="#331832" />
                                <path id="Path_351" data-name="Path 351"
                                    d="M37.646,229.239l-.276-.024,2.833-31,12.548,27.474-.252.114-12.11-26.533Z"
                                    transform="translate(-9.331 -50.603)" fill="#331832" />
                                <path id="Path_352" data-name="Path 352"
                                    d="M19.535,225.283l-.243-.138L34.071,199.2,6.654,217.442l-.154-.227,28.391-18.9Z"
                                    transform="translate(-1.226 -50.623)" fill="#331832" />
                                <rect id="Rectangle_39" data-name="Rectangle 39" width="32.149" height="0.276"
                                    transform="translate(1.383 152.227) rotate(-7.57)" fill="#331832" />
                                <path id="Path_353" data-name="Path 353"
                                    d="M35.733,198.105c.357-2.9,1.924-4,4.261-4.261,2.808-.308,4.261,2.256,4.261,4.61S41.958,202,39.6,202,35.449,200.459,35.733,198.105Z"
                                    transform="translate(-8.822 -49.775)" fill="#ee8062" />
                                <path id="Path_354" data-name="Path 354"
                                    d="M157.489,223.33c-9.837,0-18.668-3.6-24.211-9.87-4.919-5.56-7-12.718-6.022-20.7,2.484-20.291,12.986-30.777,32.985-32.969a26.917,26.917,0,0,1,21.517,6.591c7.37,6.615,11.777,17.507,11.777,29.162,0,8.62-3.928,15.859-11.363,20.916C175.7,220.9,166.912,223.33,157.489,223.33Zm6.323-60.97a30.033,30.033,0,0,0-3.247.187c-18.8,2.062-28.221,11.485-30.558,30.566h0c-.877,7.175.974,13.587,5.357,18.546,5.032,5.681,13.1,8.928,22.15,8.928,16.038,0,33.277-7.832,33.277-25.031,0-10.722-4.164-21.1-10.86-27.109a23.416,23.416,0,0,0-16.119-6.087Z"
                                    transform="translate(-35.572 -43.33)" fill="#331832" />
                                <path id="Path_355" data-name="Path 355"
                                    d="M157.276,197.315c.722-5.925,3.928-8.189,8.717-8.717,5.755-.633,8.725,4.618,8.725,9.439s-4.7,7.248-9.521,7.248S156.691,202.1,157.276,197.315Z"
                                    transform="translate(-41.26 -48.782)" fill="#331832" />
                                <rect id="Rectangle_40" data-name="Rectangle 40" width="0.276" height="29.941"
                                    transform="translate(103.015 132.116) rotate(-53.93)" fill="#331832" />
                                <path id="Path_356" data-name="Path 356"
                                    d="M161.2,192.656l-.235-.057-30.136-6.428.057-.268,29.9,6.38-8.676-27.271.26-.081Z"
                                    transform="translate(-33.526 -41.795)" fill="#331832" />
                                <path id="Path_357" data-name="Path 357"
                                    d="M167.37,192.274l16.314-25.534.227.146-15.665,24.52,24.284-15.032.146.235Z"
                                    transform="translate(-43.173 -42.112)" fill="#331832" />
                                <path id="Path_358" data-name="Path 358"
                                    d="M167.78,191.968l5.178-30.648.268.049-5.105,30.242,30.242-6.988.057.276Z"
                                    transform="translate(-43.25 -41.068)" fill="#331832" />
                                <path id="Path_359" data-name="Path 359"
                                    d="M193.9,217.5,167.34,198.6l32.425,4.156-.032.268-31.337-4.01,25.664,18.254Z"
                                    transform="translate(-43.167 -50.676)" fill="#331832" />
                                <path id="Path_360" data-name="Path 360"
                                    d="M164.666,229.239l-.276-.024,2.833-31,12.548,27.474-.252.114L167.4,199.265Z"
                                    transform="translate(-42.612 -50.603)" fill="#331832" />
                                <path id="Path_361" data-name="Path 361"
                                    d="M146.555,225.283l-.243-.138,14.78-25.948-27.417,18.246-.154-.227,28.391-18.9Z"
                                    transform="translate(-34.088 -50.623)" fill="#331832" />
                                <rect id="Rectangle_41" data-name="Rectangle 41" width="32.149" height="0.276"
                                    transform="translate(95.636 152.224) rotate(-7.57)" fill="#331832" />
                                <path id="Path_362" data-name="Path 362"
                                    d="M162.753,198.105c.357-2.9,1.924-4,4.261-4.261,2.808-.308,4.261,2.256,4.261,4.61s-2.3,3.547-4.651,3.547S162.469,200.459,162.753,198.105Z"
                                    transform="translate(-40.202 -49.775)" fill="#ee8062" />
                                <path id="Path_363" data-name="Path 363"
                                    d="M163.01,183.707a2.76,2.76,0,0,1-2.654-2.037L141.631,112.5a2.751,2.751,0,1,1,5.308-1.437l18.733,69.168a2.76,2.76,0,0,1-2.662,3.474Z"
                                    transform="translate(-35.858 -30.418)" fill="#764678" />
                                <path id="Path_364" data-name="Path 364"
                                    d="M89.5,192.428a2.768,2.768,0,0,1-2.435-1.445L55.343,132.473a2.767,2.767,0,0,1,4.87-2.63l31.743,58.519a2.76,2.76,0,0,1-1.1,3.734,2.849,2.849,0,0,1-1.347.333Z"
                                    transform="translate(-14.292 -37.451)" fill="#764678" />
                                <path id="Path_365" data-name="Path 365"
                                    d="M85.18,201.368c-.1-8.482,5.3-9.488,10.551-9.488a9.488,9.488,0,0,1,0,18.968C90.48,210.848,85.253,207.1,85.18,201.368Z"
                                    transform="translate(-21.419 -49.41)" fill="#331832" />
                                <path id="Path_366" data-name="Path 366"
                                    d="M100.207,219.161l.828-.26-2-10.852-.828.268,2,10.844Z"
                                    transform="translate(-24.066 -52.456)" fill="#331832" />
                                <path id="Path_367" data-name="Path 367"
                                    d="M106.46,223.248a1.226,1.226,0,0,0,1.5-.877h0a1.242,1.242,0,0,0-.868-1.5l-12.029-3.182a1.307,1.307,0,0,0-1.623.925h0a1.153,1.153,0,0,0,.812,1.4Z"
                                    transform="translate(-23.29 -54.262)" fill="#331832" />
                                <path id="Path_368" data-name="Path 368"
                                    d="M87.922,179.7a2.751,2.751,0,0,1-1.826-4.8l34.227-30.364L80.8,163.521a2.755,2.755,0,0,1-2.386-4.967l57.269-27.515a2.751,2.751,0,0,1,3.011,4.537l-48.95,43.439a2.76,2.76,0,0,1-1.826.69Z"
                                    transform="translate(-21.276 -34.389)" fill="#764678" />
                                <path id="Path_369" data-name="Path 369"
                                    d="M75.176,135.942a38.78,38.78,0,0,0-13.968-2.678c-7.824,0-15.843-2.5-15.421,1.331.657,5.99,10.649,2.9,14.2,6.493C64.219,145.447,79.534,141.535,75.176,135.942Z"
                                    transform="translate(-11.725 -32.754)" fill="#331832" />
                                <path id="Path_370" data-name="Path 370"
                                    d="M108.254,207.277s-1.234,4.2,1.217,6.282,10.292,5.755,6.379,7.459c-2.248.982-10.194-2.654-12.532-3.4s-4.87-.422-6.087-2.54c-1.355-2.329,3.247-10.267,3.247-10.267a9.74,9.74,0,0,0,3.506,2.216,7.784,7.784,0,0,0,4.269.252Z"
                                    transform="translate(-24.394 -51.846)" fill="#366f8f" />
                                <path id="Path_371" data-name="Path 371"
                                    d="M102.6,189c13.2-27.377,26.33-52.927,16.631-64.891-6.233-7.678-15.072-13.124-26.289-16.176a95.312,95.312,0,0,0-27.555-2.857c-16.777.463-24.447-.909-24.447-.909-10.632,34.511,38.147,23.172,52.253,36.272,6.136,5.681-7.54,17.678-6.623,45.874C86.734,191.145,100.386,193.589,102.6,189Z"
                                    transform="translate(-11.741 -32.889)" fill="#ee8062" />
                                <path id="Path_372" data-name="Path 372"
                                    d="M108.476,51.684s-2.492-11.363-15.584-16.46h0A30.23,30.23,0,0,0,85.839,32.2c-54.088-11.55-54.218,72.374-47.132,73.981,35.217,8,69.241-11.079,65.524-19.723C99.873,69.63,99.516,64.979,102,59.671c.812-1.729,2.557-1.972,4.789-4.464a7.581,7.581,0,0,0,1.688-3.523Z"
                                    transform="translate(-10.152 -5.856)" fill="#68a0be" />
                                <ellipse id="Ellipse_11" data-name="Ellipse 11" cx="2.776" cy="10.835" rx="2.776"
                                    ry="10.835" transform="matrix(0.137, -0.991, 0.991, 0.137, 42.153, 41.723)"
                                    fill="#331832" />
                                <path id="Path_373" data-name="Path 373"
                                    d="M97.006,100.087C67.787,97.481,62.195,88.967,59.736,77.775c-3.174-14.463-.292-24.82-.146-25.339,0,0,1.217-1.5,8.709-.138,6.672,1.217,7.053,2.8,7.053,2.8s-.6,4.789,1.915,15.584c3.247,13.8,20.08,16.046,35.883,18.716C113.15,89.4,101.316,100.468,97.006,100.087Z"
                                    transform="translate(-15.774 -13.585)" fill="#ffb17d" />
                                <path id="Path_374" data-name="Path 374"
                                    d="M83.3,53.254h0a.1.1,0,0,1-.073-.114c0-.049,1.144-4.87.56-8.368a.1.1,0,0,1,.081-.114.089.089,0,0,1,.114.081c.584,3.523-.552,8.392-.56,8.441a.1.1,0,0,1-.122.073Z"
                                    transform="translate(-20.342 -11.013)" fill="#331832" />
                                <path id="Path_375" data-name="Path 375"
                                    d="M69.633,95.718c-.722,0-1.688-.812-2.386-1.98a5.211,5.211,0,0,1-.7-2,1.1,1.1,0,0,1,1.9-1.1,5.13,5.13,0,0,1,1.388,1.623h0c.812,1.477.95,2.954.219,3.376A.812.812,0,0,1,69.633,95.718Zm-2.167-5.081a.438.438,0,0,0-.235.057c-.227.122-.325.479-.276.974A4.643,4.643,0,0,0,67.6,93.51c.812,1.339,1.81,1.98,2.256,1.729s.406-1.485-.365-2.825h0a4.821,4.821,0,0,0-1.266-1.477A1.388,1.388,0,0,0,67.466,90.637Z"
                                    transform="translate(-16.314 -22.16)" fill="#e8835c" />
                                <path id="Path_376" data-name="Path 376"
                                    d="M143.869,113.4s5.974-2.857,5.357-5.048-.187-3.88-1.128-4.01-12.329,2.67-12.329,2.67l-15.259,3.482.179,5.462,17.564-4.919,2.07,2.435,3.547-.049Z"
                                    transform="translate(-30.788 -25.836)" fill="#331832" />
                                <path id="Path_377" data-name="Path 377"
                                    d="M154.533,108.157l12.556-4.553-1.656-3.6-13.343,4.886,2.443,3.271Z"
                                    transform="translate(-37.947 -24.652)" fill="#331832" />
                                <path id="Path_378" data-name="Path 378"
                                    d="M165.57,102.414a3.959,3.959,0,0,1,2.435-5.008,4.2,4.2,0,1,1-2.435,5.008Z"
                                    transform="translate(-40.854 -23.941)" fill="#331832" />
                                <path id="Path_379" data-name="Path 379"
                                    d="M110.829,116.791c-.617-2.216.942-4.594,3.482-5.308s5.105.511,5.681,2.727a4.534,4.534,0,0,1-3.474,5.3c-2.54.706-5.105-.5-5.73-2.719Z"
                                    transform="translate(-27.383 -27.442)" fill="#331832" />
                                <path id="Path_380" data-name="Path 380"
                                    d="M121.912,98.14s9.358.333,12.856,4.561,4.764,12.256,2.045,10.1a36.33,36.33,0,0,1-5.438-5.876s5.43,8.214,2.962,8.652-5.584-3.88-5.584-3.88,4.139,7.418,1.672,7.078-5.681-5.949-5.681-5.949,3.863,7.548,1.006,7.086-4-8.116-6.493-7.678-12.434,1.347-14.488-5.373Z"
                                    transform="translate(-27.012 -24.647)" fill="#ffb17d" />
                                <path id="Path_381" data-name="Path 381"
                                    d="M136.685,108.345s-1.169-2.435-2.735-2.727l.065-.4c1.778.284,2.987,2.841,3.036,2.954Z"
                                    transform="translate(-32.836 -25.777)" fill="#e8835c" />
                                <path id="Path_382" data-name="Path 382"
                                    d="M131.416,110.568a6.866,6.866,0,0,0-3.336-3.247l.138-.381a7.11,7.11,0,0,1,3.563,3.506Z"
                                    transform="translate(-31.424 -26.214)" fill="#e8835c" />
                                <path id="Path_383" data-name="Path 383"
                                    d="M127.146,112.774s-1.388-2.938-3.076-3.068V109.3c1.924.146,3.352,3.174,3.409,3.3Z"
                                    transform="translate(-30.427 -26.788)" fill="#e8835c" />
                                <path id="Path_384" data-name="Path 384"
                                    d="M152.743,90s8.344.3,11.46,4.058,4.253,10.925,1.826,9a32.393,32.393,0,0,1-4.87-5.235s4.87,7.3,2.638,7.719-6.355-6.022-6.355-6.022,5.073,9.172,2.873,8.871-6.006-7.3-6.006-7.3,4.375,8.725,1.826,8.311-3.563-7.232-5.771-6.842S141.794,102.5,140,96.493Z"
                                    transform="translate(-35.673 -22.526)" fill="#ffb17d" />
                                <path id="Path_385" data-name="Path 385"
                                    d="M165.325,99.1s-1.047-2.208-2.435-2.435l.057-.357c1.623.26,2.67,2.54,2.711,2.638Z"
                                    transform="translate(-39.912 -23.584)" fill="#e8835c" />
                                <path id="Path_386" data-name="Path 386"
                                    d="M160.621,101.073a6.087,6.087,0,0,0-2.971-2.93l.122-.333a6.371,6.371,0,0,1,3.182,3.117Z"
                                    transform="translate(-38.657 -23.965)" fill="#e8835c" />
                                <path id="Path_387" data-name="Path 387"
                                    d="M156.815,103.05s-1.234-2.622-2.735-2.735V99.95c1.713.13,2.987,2.833,3.036,2.946Z"
                                    transform="translate(-37.767 -24.485)" fill="#e8835c" />
                                <path id="Path_388" data-name="Path 388"
                                    d="M96.433,25.648l1.98-4.423L99,19.934l3.393-7.564-.633,7.865-.381,4.716-.122,1.493a5.219,5.219,0,0,0,.812,3.2c.26.39,2.289,1.859,0,2.565-2.889.877-7.8-1.623-9.456-4.229C92.577,27.978,95.792,27.077,96.433,25.648Z"
                                    transform="translate(-22.948 -2.327)" fill="#ffb17d" />
                                <path id="Path_389" data-name="Path 389"
                                    d="M112.137,9.67a10.487,10.487,0,0,1-.528,4.294c-.812,2.329-2.5-3.839-2.5-3.839Z"
                                    transform="translate(-26.746 -1.819)" fill="#5c305d" />
                                <path id="Path_390" data-name="Path 390"
                                    d="M109.172,13.895c0-4.691-3.247-8.465-7.118-8.425s-7.037,3.863-6.964,8.547,3.247,8.465,7.118,8.425S109.212,18.586,109.172,13.895Z"
                                    transform="translate(-23.691 -1.028)" fill="#ffb17d" />
                                <path id="Path_391" data-name="Path 391"
                                    d="M94.07,10.551l3.433.057a2.492,2.492,0,0,0,1.964-.868c.812-1.006,1.721-1.461,4.87-.958,3.977.641,6.907-1.42,7.6-3.458a2.414,2.414,0,0,0-3.3-3C106.5,3.1,107.681.7,105.765.194c-3.547-.933-4.578,1.769-7.5,1.315-3.863-.592-11.16,1.5-8.7,8.725Z"
                                    transform="translate(-22.521 0.003)" fill="#331832" />
                                <path id="Path_392" data-name="Path 392"
                                    d="M103.849,15.476a.14.14,0,0,0-.032-.268,1.55,1.55,0,0,0-1.745.73.146.146,0,0,0,0,.195c.065.049.138,0,.195-.041a2.484,2.484,0,0,1,1.453-.609.114.114,0,0,0,.13-.008Z"
                                    transform="translate(-24.971 -2.852)" fill="#080435" />
                                <path id="Path_393" data-name="Path 393"
                                    d="M103.238,17.543c.049.333.284.576.528.544s.406-.341.357-.674-.284-.584-.528-.544A.555.555,0,0,0,103.238,17.543Z"
                                    transform="translate(-25.229 -3.174)" fill="#080435" />
                                <path id="Path_394" data-name="Path 394"
                                    d="M110.463,15.686a.114.114,0,0,0,.089-.065.179.179,0,0,0,0-.195,1.006,1.006,0,0,0-1.469,0,.17.17,0,0,0,0,.195.105.105,0,0,0,.154,0,1.477,1.477,0,0,1,1.217,0,.106.106,0,0,0,.008.065Z"
                                    transform="translate(-26.675 -2.843)" fill="#080435" />
                                <path id="Path_395" data-name="Path 395"
                                    d="M108.991,17.3a.56.56,0,0,0,.284.706c.243.057.5-.162.584-.5a.552.552,0,0,0-.284-.706A.537.537,0,0,0,108.991,17.3Z"
                                    transform="translate(-26.63 -3.161)" fill="#080435" />
                                <path id="Path_396" data-name="Path 396"
                                    d="M89.68,12.506s1.721,5.324,4.992,6.1c0,0-2.216-4.172,3.717-5.828C98.389,12.822,93.308,11.337,89.68,12.506Z"
                                    transform="translate(-22.162 -2.268)" fill="#5c305d" />
                                <path id="Path_397" data-name="Path 397"
                                    d="M94.862,16.166a1.461,1.461,0,0,0,2.053-.081,1.542,1.542,0,0,0-2.37-1.948A1.453,1.453,0,0,0,94.862,16.166Z"
                                    transform="translate(-23.102 -2.576)" fill="#ffb17d" />
                                <path id="Path_398" data-name="Path 398"
                                    d="M99.7,13s-.966,4.18-.2,5.089,6.412,1.94,9.188,1.242h0a5.56,5.56,0,0,1-5.259,4.967,7.954,7.954,0,0,1-2.711-.341h0c-1.818-.552-3.531-1.542-4.058-3.36-.17-.552.9-3.693.9-3.693a3.685,3.685,0,0,0-.5-2.987A5.5,5.5,0,0,1,99.7,13Z"
                                    transform="translate(-24.001 -2.446)" fill="#5c305d" />
                                <path id="Path_399" data-name="Path 399"
                                    d="M108.46,22.373a14.366,14.366,0,0,1-4.61-.2,2.216,2.216,0,0,0,2.557,2.1C107.827,24.191,108.46,22.373,108.46,22.373Z"
                                    transform="translate(-25.512 -4.173)" fill="#fff" />
                                <path id="Path_400" data-name="Path 400"
                                    d="M112.508,2.143A1.079,1.079,0,0,1,111.42,1.08h.195a.877.877,0,0,0,.917.86Z"
                                    transform="translate(-27.239 -0.201)" fill="#331832" />
                                <path id="Path_401" data-name="Path 401"
                                    d="M109.44,8.523V8.434a13.262,13.262,0,0,0,2.289-.641c1.063-.414,2.378-1.153,2.605-2.281a1.428,1.428,0,0,0-.162-1.291c-.373-.414-1.169-.333-1.859-.26H112V3.9h.308c.722-.081,1.534-.17,1.948.284a1.534,1.534,0,0,1,.187,1.38c-.195.925-1.112,1.737-2.67,2.346a12.8,12.8,0,0,1-2.329.609Z"
                                    transform="translate(-26.903 -0.72)" fill="#fff" />
                                <path id="Path_402" data-name="Path 402"
                                    d="M100.519,2.665a9.05,9.05,0,0,1-2.289-.308V2.267c4.058,1.063,6.371-1.023,6.388-1.047l.073.073A6.493,6.493,0,0,1,100.519,2.665Z"
                                    transform="translate(-24.195 -0.227)" fill="#fff" />
                                <path id="Path_403" data-name="Path 403"
                                    d="M137.353,102.448c-2.435-4.44-17.759-5.755-17.913-5.763V96.28a75.035,75.035,0,0,1,8.116,1.217c5.633,1.2,9.042,2.792,10.129,4.748Z"
                                    transform="translate(-29.958 -23.675)" fill="#e8835c" />
                            </g>
                            <g id="hpWomanBikeVv" data-name="Group 170"
                                style="position:absolute; z-index:999999998;transform:translate(-352px,-5000px) ">
                                <g id="圖層_2" data-name="圖層 2" transform="translate(152 4670.988)">
                                    <g id="圖層_1" data-name="圖層 1" transform="translate(0 0)">
                                        <rect id="Rectangle_46" data-name="Rectangle 46" width="1.124" height="12.713"
                                            transform="matrix(0.779, -0.627, 0.627, 0.779, 70.174, 153.402)"
                                            fill="#331832" />
                                        <path id="Path_404" data-name="Path 404"
                                            d="M83.335,193s-3.63,6.9-2.618,9.076,5.2,7.191,1.99,7.114c-1.843-.042-6.123-5.041-7.477-6.283s-3.177-1.829-3.351-3.665c-.188-2.018,8.378-9.467,8.378-9.467A13.37,13.37,0,0,0,82,191.613C83.587,192.981,83.335,193,83.335,193Z"
                                            transform="translate(-20.366 -53.03)" fill="#91a4e5" />
                                        <path id="Path_405" data-name="Path 405"
                                            d="M115.29,141.087c-.7,5.48,3.714,4.573-5.062,15.108-7.868,9.453-16.651,18.152-22.18,21.035-2.751,1.445-6.367-3.135-6.981-5.173-1.759-5.732,5.739-13.46,11.526-23.646,5-8.8,9.648-12.35,9.648-12.35Z"
                                            transform="translate(-22.562 -38.061)" fill="#1d5873" />
                                        <path id="Path_406" data-name="Path 406"
                                            d="M136.477,105.709c-23.248-5.355-26.914-7.589-27.647-16.9-.943-12.057,2.541-20.079,2.716-20.477,0,0,1.152-1.082,7.044.859,5.25,1.731,6,.363,6,.363a50.008,50.008,0,0,0-.81,15.485c1.054,11.5,9.844,11.331,21.733,12.979C145.511,97.987,139.947,106.484,136.477,105.709Z"
                                            transform="translate(-30.297 -19.068)" fill="#ffb17d" />
                                        <path id="Path_407" data-name="Path 407"
                                            d="M75.482,199.325l-.216-.049L38.592,187.89a1.34,1.34,0,0,1-.579-2.2l23.877-25.517a1.354,1.354,0,0,1,1.983,1.843l-22.418,23.94,34.614,10.751a1.347,1.347,0,0,1-.586,2.618Z"
                                            transform="translate(-10.474 -43.966)" fill="#764678" />
                                        <path id="Path_408" data-name="Path 408"
                                            d="M21.831,212.578c-7.945-1.1-14.661-4.992-18.452-10.682A20.867,20.867,0,0,1,.83,184.512l1.082.286L.83,184.512C5.1,168.4,14.737,161.11,31.151,161.571a21.994,21.994,0,0,1,16.644,7.735c5.215,6.158,7.547,15.45,6.283,24.861-.97,6.981-4.95,12.371-11.512,15.625C36.792,212.641,29.44,213.632,21.831,212.578Zm11.924-48.542a23.56,23.56,0,0,0-2.667-.216c-15.408-.44-24.072,6.123-28.094,21.266A18.843,18.843,0,0,0,5.25,200.661c3.428,5.145,9.579,8.685,16.888,9.7,12.944,1.787,27.758-2.611,29.678-16.5,1.2-8.657-1-17.51-5.739-23.109a19.094,19.094,0,0,0-12.322-6.716Z"
                                            transform="translate(0.002 -44.512)" fill="#331832" />
                                        <path id="Path_409" data-name="Path 409"
                                            d="M29.383,194.672c1.25-4.706,4.091-6.179,8.015-6.074,4.713.14,6.528,4.713,5.99,8.6s-4.608,5.327-8.5,4.789S28.35,198.463,29.383,194.672Z"
                                            transform="translate(-8.8 -53.475)" fill="#331832" />
                                        <path id="Path_410" data-name="Path 410"
                                            d="M31.962,189.815,14.39,172.871l.154-.161,17.572,16.944Z"
                                            transform="translate(-4.343 -48.9)" fill="#331832" />
                                        <path id="Path_411" data-name="Path 411"
                                            d="M29.51,188.364l-.182-.07L5.71,179.735l.077-.209,23.437,8.5-3.959-23,.216-.035Z"
                                            transform="translate(-1.722 -46.587)" fill="#331832" />
                                        <path id="Path_412" data-name="Path 412"
                                            d="M39.09,189.394,55.12,170.6l.175.14L39.9,188.794l21.287-9.425.091.2Z"
                                            transform="translate(-11.012 -48.268)" fill="#331832" />
                                        <path id="Path_413" data-name="Path 413"
                                            d="M39.37,187.953l7.6-24.163.209.063-7.5,23.849,25.2-2.255.021.223Z"
                                            transform="translate(-11.067 -46.231)" fill="#331832" />
                                        <path id="Path_414" data-name="Path 414"
                                            d="M58.352,216.122,39.02,197.9l25.72,6.975-.063.216-24.854-6.744,18.682,17.614Z"
                                            transform="translate(-10.968 -55.484)" fill="#331832" />
                                        <path id="Path_415" data-name="Path 415"
                                            d="M31.546,222.37l-.216-.049L37.09,197.6l7.051,23.59-.209.063-6.821-22.781Z"
                                            transform="translate(-8.873 -55.394)" fill="#331832" />
                                        <path id="Path_416" data-name="Path 416"
                                            d="M13.9,217.838l-.182-.14,14.836-19.3L4.368,210.067l-.1-.2L29.306,197.78Z"
                                            transform="translate(-1.288 -55.448)" fill="#331832" />
                                        <rect id="Rectangle_47" data-name="Rectangle 47" width="0.223" height="26.209"
                                            transform="translate(1.436 141.727) rotate(-89.73)" fill="#331832" />
                                        <path id="Path_417" data-name="Path 417"
                                            d="M34.61,196.486a3.523,3.523,0,0,1,3.917-2.967c2.3.07,3.191,2.3,2.925,4.189s-2.248,2.6-4.147,2.339S34.156,198.343,34.61,196.486Z"
                                            transform="translate(-9.804 -55.016)" fill="#ee8062" />
                                        <path id="Path_418" data-name="Path 418"
                                            d="M141.081,229.088c-7.945-1.1-14.661-4.992-18.452-10.682a20.878,20.878,0,0,1-2.548-17.391h0c4.273-16.106,13.907-23.395,30.321-22.934a21.968,21.968,0,0,1,16.637,7.736c5.215,6.158,7.554,15.45,6.283,24.861-.963,6.981-4.943,12.364-11.506,15.625C156.035,229.151,148.684,230.135,141.081,229.088Zm-18.85-27.493a18.7,18.7,0,0,0,2.255,15.569c3.421,5.152,9.579,8.685,16.888,9.7,12.944,1.794,27.758-2.6,29.678-16.49,1.2-8.657-1-17.51-5.739-23.109a19.516,19.516,0,0,0-14.989-6.94c-15.408-.433-24.072,6.123-28.094,21.273Z"
                                            transform="translate(-32.667 -49.496)" fill="#331832" />
                                        <path id="Path_419" data-name="Path 419"
                                            d="M148.627,211.174c1.25-4.706,4.1-6.179,8.022-6.067,4.713.133,6.528,4.712,5.99,8.6s-4.608,5.327-8.5,4.789S147.622,214.972,148.627,211.174Z"
                                            transform="translate(-41.47 -57.658)" fill="#331832" />
                                        <path id="Path_420" data-name="Path 420"
                                            d="M151.209,206.325,133.63,189.381l.161-.161,17.572,16.937Z"
                                            transform="translate(-37.747 -53.575)" fill="#331832" />
                                        <path id="Path_421" data-name="Path 421"
                                            d="M148.76,204.871l-.182-.07-23.618-8.559.077-.209,23.437,8.5-3.965-23,.223-.042Z"
                                            transform="translate(-35.169 -50.531)" fill="#331832" />
                                        <path id="Path_422" data-name="Path 422"
                                            d="M158.34,205.9l16.03-18.8.168.147L159.15,205.3l21.287-9.425.091.2Z"
                                            transform="translate(-44.467 -52.224)" fill="#331832" />
                                        <path id="Path_423" data-name="Path 423"
                                            d="M158.62,204.46l7.6-24.17.209.07-7.5,23.849,25.2-2.255.021.223Z"
                                            transform="translate(-44.552 -50.169)" fill="#331832" />
                                        <path id="Path_424" data-name="Path 424"
                                            d="M177.592,232.632,158.26,214.41l25.72,6.974-.056.216-24.854-6.744,18.675,17.607Z"
                                            transform="translate(-44.443 -60.468)" fill="#331832" />
                                        <path id="Path_425" data-name="Path 425"
                                            d="M150.8,238.88l-.216-.049,5.753-24.721,7.058,23.59-.216.063-6.814-22.781Z"
                                            transform="translate(-42.125 -60.377)" fill="#331832" />
                                        <path id="Path_426" data-name="Path 426"
                                            d="M133.141,234.348l-.175-.14L147.8,214.9l-24.184,11.673-.1-.2,25.036-12.085Z"
                                            transform="translate(-34.736 -60.432)" fill="#331832" />
                                        <rect id="Rectangle_48" data-name="Rectangle 48" width="0.223" height="26.209"
                                            transform="translate(87.217 154.152) rotate(-89.74)" fill="#331832" />
                                        <path id="Path_427" data-name="Path 427"
                                            d="M153.855,213a3.515,3.515,0,0,1,3.917-2.967c2.3.07,3.191,2.3,2.925,4.189s-2.248,2.6-4.154,2.339S153.366,214.846,153.855,213Z"
                                            transform="translate(-43.676 -59.145)" fill="#ee8062" />
                                        <path id="Path_428" data-name="Path 428"
                                            d="M154.521,189.809a2.234,2.234,0,0,1-1.913-1.934l-7.386-57.946a2.242,2.242,0,0,1,4.447-.566l7.386,57.946a2.248,2.248,0,0,1-1.941,2.513,2.409,2.409,0,0,1-.593-.014Z"
                                            transform="translate(-41.148 -34.205)" fill="#ee8062" />
                                        <path id="Path_429" data-name="Path 429"
                                            d="M82.514,189.668a2.234,2.234,0,0,1-1.794-1.4L61.626,137.432a2.248,2.248,0,0,1,4.189-1.578l19.087,50.8a2.241,2.241,0,0,1-1.306,2.89,2.29,2.29,0,0,1-1.082.119Z"
                                            transform="translate(-17.325 -37.314)" fill="#ee8062" />
                                        <path id="Path_430" data-name="Path 430"
                                            d="M80.455,205.5c.866-6.856,5.341-7.065,9.572-6.479a7.729,7.729,0,1,1-2.094,15.31C83.673,213.75,79.875,210.113,80.455,205.5Z"
                                            transform="translate(-22.726 -55.759)" fill="#331832" />
                                        <path id="Path_431" data-name="Path 431"
                                            d="M84.114,182.614a2.248,2.248,0,0,1-.936-4.091l31.033-20.693L80.176,168.749a2.248,2.248,0,0,1-1.4-4.273L128.1,148.663a2.241,2.241,0,0,1,1.927,4L85.671,182.258a2.276,2.276,0,0,1-1.557.356Z"
                                            transform="translate(-21.172 -41.727)" fill="#ee8062" />
                                        <path id="Path_432" data-name="Path 432"
                                            d="M76.008,142.744a31.417,31.417,0,0,0-10.982-3.721c-6.283-.88-12.518-3.791-12.567-.656-.14,4.887,8.28,3.533,10.738,6.863C66.1,149.188,78.9,147.75,76.008,142.744Z"
                                            transform="translate(-14.762 -38.875)" fill="#331832" />
                                        <path id="Path_433" data-name="Path 433"
                                            d="M118.4,211.27s.565,3.491,3.093,4.189,9.593.642,7.3,3.267c-1.306,1.508-8.434,1.606-10.409,1.871s-3.721,1.4-5.376.258c-1.815-1.243-1.173-8.713-1.173-8.713a8.028,8.028,0,0,0,3.358.412A6.353,6.353,0,0,0,118.4,211.27Z"
                                            transform="translate(-31.565 -59.52)" fill="#91a4e5" />
                                        <path id="Path_434" data-name="Path 434"
                                            d="M112.174,134.242c-4.189-6.9-10.71-12.287-19.416-16.009a77.746,77.746,0,0,0-21.936-5.383c-13.6-1.5-19.646-3.491-19.646-3.491C38.736,136.043,79.41,132.343,89.324,144.5,93.631,149.8,118.667,144.966,112.174,134.242Z"
                                            transform="translate(-13.191 -30.663)" fill="#366f8f" />
                                        <path id="Path_435" data-name="Path 435"
                                            d="M106.658,62.9S101.366,51,94.021,48.242C70.982,39.7,62.6,55.112,56.175,73.145c-5.515,15.534-10.828,28.687-8.489,29.567,27.549,10.4,49.324.468,47.293-6.933C93.344,81.7,99.907,79.023,99.865,74.234c0-5.816,1.878-7.212,3.407-8.126a16.687,16.687,0,0,0,3.386-3.2Z"
                                            transform="translate(-12.821 -12.637)" fill="#91a4e5" />
                                        <path id="Path_436" data-name="Path 436"
                                            d="M90.637,66.35c-.342,1.2-4.419,1.1-9.118-.223s-8.231-3.379-7.889-4.58,4.419-1.1,9.118.223S91,65.149,90.637,66.35Z"
                                            transform="translate(-20.8 -17.256)" fill="#331832" />
                                        <path id="Path_437" data-name="Path 437"
                                            d="M100.007,105.9c-23.248-5.355-26.844-12.86-27.57-22.173-.963-12.057,2.52-20.044,2.695-20.477,0,0,1.152-1.082,7.044.859,5.264,1.731,5.39,3.065,5.39,3.065s-1.026,3.8-.2,12.8c1.054,11.492,14.424,15.206,26.886,19.122C114.249,99.079,103.456,106.7,100.007,105.9Z"
                                            transform="translate(-20.059 -17.59)" fill="#ffb17d" />
                                        <path id="Path_438" data-name="Path 438"
                                            d="M97.977,65.912h0a.084.084,0,0,1-.049-.1,22.044,22.044,0,0,0,1.4-6.7.07.07,0,1,1,.133-.028,22.063,22.063,0,0,1-1.4,6.758.077.077,0,0,1-.084.077Z"
                                            transform="translate(-27.887 -16.768)" fill="#331832" />
                                        <path id="Path_439" data-name="Path 439"
                                            d="M79.542,104.374a1.452,1.452,0,0,1-.754-.419,4.056,4.056,0,0,1-.936-1.452c-.524-1.278-.433-2.485.2-2.744s1.536.545,2.053,1.829h0a4.189,4.189,0,0,1,.342,1.7,1.082,1.082,0,0,1-.538,1.047A.642.642,0,0,1,79.542,104.374Zm-1.18-4.329a.363.363,0,0,0-.2,0c-.384.154-.489,1.145,0,2.318a3.861,3.861,0,0,0,.859,1.333c.293.272.572.391.768.307s.314-.356.335-.754a3.8,3.8,0,0,0-.314-1.557h0c-.419-.977-1.04-1.592-1.452-1.648Z"
                                            transform="translate(-22.06 -28.364)" fill="#e8835c" />
                                        <path id="Path_440" data-name="Path 440"
                                            d="M143.9,131.022s5.138-1.634,4.887-3.491.286-3.149-.461-3.365-10.256.775-10.256.775l-12.713,1.11-.468,4.433,14.731-2.011,1.152,1.885,3.128.649Z"
                                            transform="translate(-35.147 -35.286)" fill="#331832" />
                                        <path id="Path_441" data-name="Path 441"
                                            d="M157.583,127.359l10.647-2.269-.929-3.1-11.331,2.457,1.613,2.911Z"
                                            transform="translate(-43.752 -34.695)" fill="#331832" />
                                        <path id="Path_442" data-name="Path 442"
                                            d="M169,123.659a3.044,3.044,0,1,1,3.449,2.96A3.232,3.232,0,0,1,169,123.659Z"
                                            transform="translate(-47.685 -34.279)" fill="#331832" />
                                        <path id="Path_443" data-name="Path 443"
                                            d="M115.7,129.758a3.929,3.929,0,1,1,4.315,2.841A3.67,3.67,0,0,1,115.7,129.758Z"
                                            transform="translate(-32.846 -35.765)" fill="#331832" />
                                        <path id="Path_444" data-name="Path 444"
                                            d="M126,114.7s7.519,1.319,9.872,5.117,2.485,10.43.524,8.378a24.5,24.5,0,0,1-3.372-4.706s3.107,6.6,1.061,6.674-4.1-3.707-4.1-3.707,2.541,6.4.586,5.85-3.728-5.453-3.728-5.453,2.094,6.542-.182,5.844-2.325-6.982-4.37-6.919-10.193-.3-11.1-5.962Z"
                                            transform="translate(-31.237 -32.461)" fill="#ffb17d" />
                                        <path id="Path_445" data-name="Path 445"
                                            d="M140.889,125.228s-.7-2.094-1.9-2.506l.091-.321c1.4.433,2.094,2.639,2.094,2.73Z"
                                            transform="translate(-39.57 -34.843)" fill="#e8835c" />
                                        <path id="Path_446" data-name="Path 446"
                                            d="M135.585,126.566a5.585,5.585,0,0,0-2.325-3.03l.154-.286a5.83,5.83,0,0,1,2.492,3.225Z"
                                            transform="translate(-37.931 -35.079)" fill="#e8835c" />
                                        <path id="Path_447" data-name="Path 447"
                                            d="M131.316,128.1s-.789-2.527-2.136-2.793l.07-.321c1.536.335,2.353,2.939,2.388,3.051Z"
                                            transform="translate(-36.773 -35.576)" fill="#e8835c" />
                                        <path id="Path_448" data-name="Path 448"
                                            d="M156.665,110.94s6.709,1.173,8.8,4.559,2.213,9.3.468,7.477a26.174,26.174,0,0,1-3.33-4.768s3.093,6.451,1.271,6.521-4.461-5.585-4.461-5.585,3.072,7.98,1.326,7.484-4.035-6.563-4.035-6.563,2.562,7.533.552,6.912-2.094-6.241-3.9-6.172-6.926-1.012-7.735-6.06Z"
                                            transform="translate(-40.628 -31.422)" fill="#ffb17d" />
                                        <path id="Path_449" data-name="Path 449"
                                            d="M169.013,120.32s-.6-1.9-1.7-2.234l.091-.286c1.25.384,1.864,2.353,1.892,2.437Z"
                                            transform="translate(-47.175 -33.537)" fill="#e8835c" />
                                        <path id="Path_450" data-name="Path 450"
                                            d="M164.274,121.493a5.013,5.013,0,0,0-2.094-2.695l.14-.258a5.145,5.145,0,0,1,2.213,2.876Z"
                                            transform="translate(-45.626 -33.742)" fill="#e8835c" />
                                        <path id="Path_451" data-name="Path 451"
                                            d="M160.476,122.877s-.7-2.255-1.906-2.52l.063-.286c1.4.3,2.094,2.618,2.094,2.723Z"
                                            transform="translate(-44.537 -34.179)" fill="#e8835c" />
                                        <path id="Path_452" data-name="Path 452"
                                            d="M136.963,118.084c-1.494-3.868-21.454-8.964-21.643-9.013l.077-.321c.831.209,20.33,5.194,21.887,9.216Z"
                                            transform="translate(-32.493 -30.883)" fill="#e8835c" />
                                        <path id="Path_453" data-name="Path 453"
                                            d="M121.886,32.069s5.515-1.508,3.924-6.981c-1.4-4.726-1.1-6.981-4.538-8.957-3.819-2.206-4.042-.817-9.488-2.744-3.442-1.222-5.885.642-7.065,3.728s-4.112,14.305,5.369,16.134S121.886,32.069,121.886,32.069Z"
                                            transform="translate(-29.106 -3.921)" fill="#ee8062" />
                                        <path id="Path_454" data-name="Path 454"
                                            d="M105.9,43.254a.321.321,0,0,1-.133-.056.272.272,0,0,1-.035-.384c1.4-1.634,2.576-1.445,2.625-1.438a.272.272,0,0,1,.216.314.279.279,0,0,1-.307.223h0c-.056,0-.97-.112-2.094,1.25A.286.286,0,0,1,105.9,43.254Z"
                                            transform="translate(-30.074 -12.481)" fill="#ee8062" />
                                        <path id="Path_455" data-name="Path 455"
                                            d="M128.9,16.158a.251.251,0,0,1-.119-.049,8.914,8.914,0,0,0-6.465-1.717.273.273,0,0,1-.126-.531,9.523,9.523,0,0,1,6.9,1.8.273.273,0,0,1-.189.5Z"
                                            transform="translate(-34.647 -4.152)" fill="#ee8062" />
                                        <path id="Path_456" data-name="Path 456"
                                            d="M105.4,41.621c1.536.14,1.976-.4,2.793-1.508l2.583-3.449.747-1,4.405-5.885-1.794,6.611-1.075,3.965-.307,1.131a2.793,2.793,0,0,0,1.131,3.107s-1.117,2.094-4.8.761A6.507,6.507,0,0,1,105.4,41.621Z"
                                            transform="translate(-29.889 -8.984)" fill="#ffb17d" />
                                        <path id="Path_457" data-name="Path 457"
                                            d="M113.114,39.089V39.2c-.216,2.2,2.094,4.238,2.094,4.238l.154-.545,1.075-3.965a4.312,4.312,0,0,0-2.611-.7.936.936,0,0,0-.712.859Z"
                                            transform="translate(-32.183 -11.521)" fill="#e49462" />
                                        <circle id="Ellipse_12" data-name="Ellipse 12" cx="8.057" cy="8.057" r="8.057"
                                            transform="translate(75.789 26.517) rotate(-63.14)" fill="#ffb17d" />
                                        <path id="Path_458" data-name="Path 458"
                                            d="M122.973,39.69a16,16,0,0,1-4.81-1.69,2.45,2.45,0,0,0,2,3.065C121.71,41.414,122.973,39.69,122.973,39.69Z"
                                            transform="translate(-33.575 -11.465)" fill="#e8633e" />
                                        <path id="Path_459" data-name="Path 459"
                                            d="M123.01,39.674a3.281,3.281,0,0,1-2.094.126,5.914,5.914,0,0,1-2.716-1.85A24.107,24.107,0,0,0,123.01,39.674Z"
                                            transform="translate(-33.611 -11.45)" fill="#fff" />
                                        <path id="Path_460" data-name="Path 460"
                                            d="M120.328,31.141a.147.147,0,0,0,.126-.077.168.168,0,0,0-.049-.23,1.829,1.829,0,0,0-2.227.084.168.168,0,0,0-.042.237.2.2,0,0,0,.237,0,2.848,2.848,0,0,1,1.85-.07A.14.14,0,0,0,120.328,31.141Z"
                                            transform="translate(-33.621 -9.2)" fill="#080435" />
                                        <path id="Path_461" data-name="Path 461"
                                            d="M118.914,33.417a.656.656,0,0,0,.363.824c.286.063.586-.209.7-.6a.656.656,0,0,0-.363-.824C119.3,32.761,119,33.026,118.914,33.417Z"
                                            transform="translate(-33.859 -9.898)" fill="#080435" />
                                        <path id="Path_462" data-name="Path 462"
                                            d="M128.632,33.749a.161.161,0,0,0,.147,0,.168.168,0,0,0,.042-.23,1.822,1.822,0,0,0-2.094-.775.161.161,0,0,0-.119.2c0,.091.1.126.2.126a2.793,2.793,0,0,1,1.731.642.265.265,0,0,0,.091.035Z"
                                            transform="translate(-36.042 -9.853)" fill="#080435" />
                                        <path id="Path_463" data-name="Path 463"
                                            d="M126.373,35.231a.559.559,0,1,0,.518-.413A.559.559,0,0,0,126.373,35.231Z"
                                            transform="translate(-35.928 -10.505)" fill="#080435" />
                                        <path id="Path_464" data-name="Path 464"
                                            d="M121.841,20.437s6.283-1.313,5.7,7.065c0,0,.7,2.381-2.094.852s-3.491.307-5.159-1.222-1.3-1.459-2.869-1.131.37-2.032-2.96-5.585C112.527,18.405,117.023,18.51,121.841,20.437Z"
                                            transform="translate(-32.276 -5.715)" fill="#ee8062" />
                                        <path id="Path_465" data-name="Path 465"
                                            d="M113.484,23.689s-3.491,1.166-3.491,2.834-.147,2.625-1.208,3.093.7,1.9-.824,2.925-4.538-4.887-4.384-6.283C104.639,17.287,116.507,20.862,113.484,23.689Z"
                                            transform="translate(-29.372 -6.195)" fill="#ee8062" />
                                        <path id="Path_466" data-name="Path 466"
                                            d="M111.078,30.607a1.821,1.821,0,0,0,2.541.649,2.032,2.032,0,0,0,.084-2.737,1.823,1.823,0,0,0-2.541-.656A2.039,2.039,0,0,0,111.078,30.607Z"
                                            transform="translate(-31.464 -8.316)" fill="#ffb17d" />
                                        <path id="Path_467" data-name="Path 467"
                                            d="M73.064,1.094a3.03,3.03,0,0,1,.642.782c.7,1.18,3.281,4.824,8.943,3.491,6.723-1.557,14.172-2.73,16.972-.8s2.094,3.686-1.2,3.379-6.674-.963-8.476,3.121-5.788,8.908-10.717,8.21-1.4-3.253-3.693-4.412-5.027,2.932-9.362-.621S66.962-4.121,73.064,1.094Z"
                                            transform="translate(-18 0.007)" fill="#ee8062" />
                                        <path id="Path_468" data-name="Path 468"
                                            d="M69.3,15.219h0a3.791,3.791,0,0,1-2.318-2.164c-.7-1.592-.419-3.8.7-6.074a3.072,3.072,0,0,1,2.185-1.92c1.564-.286,3.609.789,6.081,3.184,3.749,3.623,5.8,2.492,8.915.775a19.813,19.813,0,0,1,6.283-2.492c4.719-.873,7.491-.768,8.238.314a1.2,1.2,0,0,1,0,1.25.16.16,0,1,1-.272-.168.866.866,0,0,0,0-.9c-.377-.545-1.906-1.292-7.917-.182A19.464,19.464,0,0,0,85,9.305c-3.163,1.7-5.411,2.946-9.327-.81C73.3,6.205,71.293,5.13,69.862,5.4a2.793,2.793,0,0,0-1.955,1.7,7.461,7.461,0,0,0-.656,5.816A3.491,3.491,0,0,0,69.345,14.9a.161.161,0,0,1,.1.2A.154.154,0,0,1,69.3,15.219Z"
                                            transform="translate(-18.626 -1.509)" fill="#fff" />
                                        <path id="Path_469" data-name="Path 469"
                                            d="M85.63,22.3a2.094,2.094,0,0,1-.412-.1c-1.885-.621-2.039-1.592-2.157-2.374s-.182-1.208-1.522-1.333a.161.161,0,0,1-.14-.175.154.154,0,0,1,.168-.147h.23c1.4.188,1.473.866,1.585,1.578s.237,1.557,1.934,2.094c3.337,1.1,7.84-6.981,7.889-7.079a.168.168,0,0,1,.216-.063.161.161,0,0,1,.063.216C93.3,15.31,89.128,22.78,85.63,22.3Z"
                                            transform="translate(-23.064 -4.428)" fill="#fff" />
                                        <path id="Path_470" data-name="Path 470"
                                            d="M119.914,13.038h0a.272.272,0,0,1-.188-.335,4,4,0,0,1,2.793-2.716.273.273,0,1,1,.126.531,3.491,3.491,0,0,0-2.395,2.332.279.279,0,0,1-.335.188Z"
                                            transform="translate(-34.068 -3.007)" fill="#ee8062" />
                                        <path id="Path_471" data-name="Path 471"
                                            d="M106.319,155.847s-4.189,40.255,3.2,40.144,9.774-.077,11.3-5.913c1.843-7.072,9.97-26.711,9.4-41.5C129.979,142.345,106.319,155.847,106.319,155.847Z"
                                            transform="translate(-29.565 -40.1)" fill="#366f8f" />
                                        <path id="Path_472" data-name="Path 472"
                                            d="M119.3,225.933a1,1,0,0,0,.775-1.18h0a1,1,0,0,0-1.18-.782l-9.935,2.039a1.075,1.075,0,0,0-.831,1.264h0a.936.936,0,0,0,1.1.7Z"
                                            transform="translate(-30.634 -63.348)" fill="#764678" />
                                        <path id="Path_473" data-name="Path 473"
                                            d="M60.955,161.834a1.906,1.906,0,0,1-1.313-.447,37.428,37.428,0,0,0-7.98-4.719c-6.283-2.793-12.308-3.449-17.873-2.046a1.955,1.955,0,1,1-.956-3.784c6.374-1.613,13.46-.817,20.512,2.3a40.492,40.492,0,0,1,8.79,5.243,1.948,1.948,0,0,1-1.18,3.449Z"
                                            transform="translate(-8.746 -42.567)" fill="#ee8062" />
                                    </g>
                                </g>
                            </g>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_1-2" data-name="圖層 1">
                                    <path class="cls-1" id="myPathVv" w
                                        d="M1918,43.54c-1-1.89,1.68-2,1.12-3.69-3.13-.59-15.57-2.89-36.11-6.1-21.92-3.42-57.74-8.59-103.84-13.75-51.82-5.81-105.81-10.43-160.47-13.75C1550.37,2.1,1480.8,0,1411.92,0c-22.76,0-46.3.43-70,1.28-22.51.8-45.86,2-69.4,3.59-43.33,2.9-88.11,7.06-136.9,12.72-90.34,10.47-178.93,24.33-264.6,37.73h0C817.42,63.71,766.77,71.63,716.21,78.7c-27.16,3.79-51.7,7-75,9.73C615.1,91.51,591.13,94,567.92,96c-25.49,1.86-50.86,3.26-75.39,4.16-23.45.87-46.79,1.31-69.35,1.31-36.29,0-71.8-1.13-105.56-3.38-30.69-2-60.62-5-89-8.9-47.73-6.53-91.88-15.62-131.23-27C82,57.68,67.23,52.82,53.6,47.72c-10.9-4.07-21.11-8.31-30.34-12.59C8.3,28.2.78,23.41,0,22.9v.64" />
                                </g>
                            </g>
                            <animateMotion xlink:href="#hpManBikeVv" dur="5s" begin="0s" keyPoints="1;0" keyTimes="0;1"
                                fill="freeze" from="100%" calcMode="linear" repeatCount="indefinite">
                                <mpath xlink:href="#myPathVv" />
                            </animateMotion>
                            <animateMotion xlink:href="#hpWomanBikeVv" dur="5s" begin="0s" keyPoints="1;0"
                                keyTimes="0;1" fill="freeze" from="100%" calcMode="linear" repeatCount="indefinite">
                                <mpath xlink:href="#myPathVv" />
                            </animateMotion>
                        </svg>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1920.001" height="152.489"
                        viewBox="0 0 1920.001 152.489">
                        <path id="Subtraction_1" data-name="Subtraction 1"
                            d="M2059,152.489H139V22.848c.067.045,7.582,4.982,23.341,12.285,9.233,4.279,19.442,8.515,30.343,12.592,13.623,5.094,28.369,9.951,43.83,14.435,39.352,11.412,83.5,20.505,131.231,27.027,28.335,3.872,58.265,6.868,88.957,8.907,33.76,2.242,69.274,3.378,105.556,3.378,22.565,0,45.9-.44,69.35-1.307,24.534-.907,49.9-2.308,75.391-4.165,23.214-2.01,47.183-4.486,73.277-7.568,23.313-2.754,47.851-5.938,75.014-9.735C905.855,71.63,956.5,63.707,1010.113,55.32l.01,0h.008c85.673-13.4,174.263-27.261,264.6-37.732,48.791-5.655,93.571-9.816,136.9-12.719,23.538-1.578,46.888-2.786,69.4-3.591C1504.706.429,1528.245,0,1551,0c68.884,0,138.455,2.1,206.781,6.25,54.664,3.318,108.654,7.944,160.469,13.75,46.1,5.165,81.917,10.328,103.844,13.75,23.845,3.721,36.778,6.225,36.906,6.25V152.488Z"
                            transform="translate(-139)" fill="#f1f1f1" />
                    </svg>
                    <!-- <div class="girlBikeVv">
                        <img src="./img/bikeWoman.svg" alt="">
                    </div>
                    <div class="boyBikeVv">
                        <img src="./img/bikeMan.svg" alt="">
                    </div> -->
                </div>
                <div class="hpReviewBgVv">
                    <div class="hpContainerVv">
                        <div class="justify-content-xl-center">
                            <div class="col-xl-2 offset-xl-2 hpPaddingX30Vv">
                                <div class="hpTitleMarkWrapVv">
                                    <div class="hpTitleMarkVv">
                                        <div class="hpTitleMarkContentVv">好評不斷</div>
                                    </div>
                                </div>
                            </div>
                            <div class="offset-xl-2 hpP22Vv hpPaddingX30Vv">『　有您的支持與鼓勵，是我們最棒的動力　』</div>
                            <div class="hpReviewCarouselVv d-flex d-xl-flex mx-auto justify-content-center">
                                <!-- <div class="d-none col-xl-1 d-xl-flex align-items-center justify-content-center">
                                    <div class="arrowOrangeWrapVv ">
                                        <img src="./img/arrowOrange.svg" alt="">
                                    </div>
                                </div> -->
                                <div class="px-3">
                                    <div class="d-flex flex-column align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                在BikeNGo網站上
                                                結交到許多和我一樣
                                                熱愛騎公路車的朋友
                                                讓我不用擔心找不到一起
                                                騎公路車的夥伴！
                                            </div>
                                            <div class="reviewNameVv">
                                                好好
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/72.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-column  align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                有BikeNGo的行程帶路，
                                                讓我慢慢進入單車的領域，
                                                培養出專業的興趣，
                                                非常推薦大家加入!
                                            </div>
                                            <div class="reviewNameVv">
                                                泱泱
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/woman-standing-relaxing-after-exercising-holding-bottle-water-touch-face.png"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-column  align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column  align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                每到假日就好期待能與車友們，一同挑戰突破自己的騎行紀錄!
                                            </div>
                                            <div class="reviewNameVv">
                                                家家
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/portrait-smiling-handsome-asian-man.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-column  align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column  align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                想出遊又懶得排行程，自從使用BIKENGO，再也不用煩惱規劃行程了。
                                            </div>
                                            <div class="reviewNameVv">
                                                Q醬
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/profile.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-column  align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column  align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                在這裡認識許多志同道合的朋友，
                                                非常推薦大家一起來玩!
                                            </div>
                                            <div class="reviewNameVv">
                                                James Bond
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/80.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <div class="d-flex flex-column  align-items-center blueBgVv">
                                        <div
                                            class="borderDashVv col-12 d-flex flex-column  align-items-center">
                                            <div class="starsWrapVv d-flex px-1">
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                                <div class="starSizeVv"><img src="./img/star.svg" alt=""></div>
                                            </div>
                                            <div class="col-12 hpreviewWordsVv hpP16Vv whiteVv">
                                                如果我不在騎車，那我就在準備騎車的路上。我喜歡騎車的自由與突破極限，過去常因追求自己的興趣而沒時間交朋友，現在我邊交友邊騎車!
                                            </div>
                                            <div class="reviewNameVv">
                                                哈里
                                            </div>
                                            <div class="bigHeadWrapVv">
                                                <img src="./img/profile-27 (1).png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="d-none col-xl-1 d-xl-flex align-items-center justify-content-center">
                                    <div class="arrowOrangeWrapVv scaleXVv">
                                        <img src="./img/arrowOrange.svg" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hpMemberTotalVv d-none d-xl-flex justify-content-xl-center">
                <div class="col-xl-2 d-xl-flex flex-xl-column justify-content-xl-center align-items-xl-center ">
                    <div class="amountTitle">會員數量</div>
                    <!-- <div class="hpNumberVv">9867</div> -->
                    <div class="hpNumberVv">0</div>
                </div>
                <div
                    class="col-xl-2 d-xl-flex flex-xl-column justify-content-xl-center align-items-xl-center dashlineVv">
                    <div class="amountTitle">好評數量</div>
                    <!-- <div class="hpNumberVv">15248</div> -->
                    <div class="hpNumberVv">0</div>
                </div>
                <div class="col-xl-2 d-xl-flex flex-xl-column justify-content-xl-center align-items-xl-center">
                    <div class="amountTitle">已成團的行程數量</div>
                    <!-- <div class="hpNumberVv">249</div> -->
                    <div class="hpNumberVv">0</div>
                </div>
            </div>
            <div class="hpContactUsVv  hpSectionMobileVv justify-content-xl-center" id="hpContactUsVv">
                <div class="hpDecorationContactUsVv">
                    <img src="./img/treeAndHill.svg" alt="">
                </div>
                <div class="hpContainerVv">
                    <div class="col-xl-2 offset-xl-2 hpPaddingX30Vv">
                        <div class="hpTitleMarkWrapVv">
                            <div class="hpTitleMarkVv">
                                <div class="hpTitleMarkContentVv">聯絡我們</div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-2 hpP22Vv hpPaddingX30Vv">『　若有相關問題或疑問，歡迎與我們聯繫，謝謝　』</div>
                    <div class="hpContactUsFormVv d-xl-flex justify-content-center align-items-center">
                        <div class="d-none col-xl-6 d-xl-flex px-0 mt-0 hpContactUsMapWrapVv">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.005109018512!2d121.54120951494447!3d25.03390068397243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442abd379a5ec97%3A0xedc006d25a9e35df!2z6LOH562W5pyDIOaVuOS9jeaVmeiCsueglOeptuaJgCDmlbjkvY3kurrmiY3ln7nogrLkuK3lv4M!5e0!3m2!1szh-TW!2stw!4v1620031926196!5m2!1szh-TW!2stw"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                        <div class="col-12 col-xl-2 d-flex flex-column justify-content-center align-items-center">
                            <input id="nameVv" type="text" name="name" placeholder="姓名：">
                            <input id="contactVv" type="text" name="contact" placeholder="聯絡方式：">
                            <input id="e-mailVv" type="e-mail" name="text" placeholder="E-mail：">
                            <textarea id="commentsVv" class="
                            textareaVv" name="comments" cols="25" rows="5" placeholder="請輸入相關問題或疑問："></textarea>
                            <div class="hpSendButtonWrapVv">
                                送出
                                <div class="hpDogWrapVv">
                                    <img src="./img/dogvv.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

<?php include __DIR__. '/parts/BNG_footer_Vv.php'; ?>
<?php include __DIR__. '/parts/BNG_scripts_Vv.php'; ?>
<?php include __DIR__. '/parts/BNG_homepage_scripts_Vv.php'; ?>



        

    