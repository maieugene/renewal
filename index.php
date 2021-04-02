<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title> Dr.Jart </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href=" <?=base_url( "include/indexStyle.css" )?> ">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;1,400&display=swap" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
        <script type="text/javascript">
 
        </script>
        <style>
        </style>
    </head>
    <body>
        <!-- header -->
        <header class="header">
            <!-- logo -->
            <div class="logo_wrap">
                <a href=" <?=base_url( "drj/index" ) ?>" target="_self" class="logo">
                    <img src=" <?=base_url( "drjart_imgs/Dr.Jart_logo.png" )?> " alt="Dr.jart logo">
                </a>
            </div>
            <!-- desktop -->
            <div class="nav_desktop">
                <ul class="nav_menu">
                    <li class="nav_list">
                        <p class="nav_dot nav_dot1"></p>
                        <a href=" <?=base_url( "drj/prd" ) ?>" target="_self" onmouseover="navdrop(this);">SHOP</a>
                    </li>
                    <li class="nav_list">
                        <p class="nav_dot nav_dot2"></p>
                        <a href="#" target="_self" onmouseover="navdrop(this);">EVENT</a>
                    </li>
                </ul>
                <ul class="nav_user">
                    <li class="nav_list"><a href=" <?=base_url( "drj/sign_up" ) ?>" target="_self">LOGIN</a></li>
                    <li class="nav_list"><a href="#" target="_self">CART</a></li>
                </ul>
            </div>
            </div>
            
            <!-- mobile -->
            <div class="nav_mobile">
                <ul class="nav_menu">
                    <li class="nav_list nav_icon">
                        <a href="#"><span class="material-icons md-18">subject</span></a>
                    </li>
                </ul>
                <ul class="nav_user">
                    <li class="nav_list nav_icon">
                        <a href="#"><span class="material-icons md-18">person</span></a>
                    </li>
                    <li class="nav_list nav_icon">
                        <a href="#"><span class="material-icons md-18">shopping_cart</span></a>
                    </li>
                </ul>
            </div>

            <div class="nav_dropbox clearfix">
                <a href="#" class="nav_dropbox-menu nav_dropbox-list-title" ><strong>모든 제품</strong></a>
                <ul class="nav_dropbox-menu">
                    <li class="nav_dropbox-list-title"><a href="#"><strong>민감피부 솔루션</strong></a></li>
                    <li class="nav_dropbox-list"><a href="#">보습/수분</a></li>
                    <li class="nav_dropbox-list"><a href="#">회복진정</a></li>
                    <li class="nav_dropbox-list"><a href="#">수분공급</a></li>
                    <li class="nav_dropbox-list"><a href="#">트러블케어</a></li>
                    <li class="nav_dropbox-list"><a href="#">SUN케어</a></li>
                    <li class="nav_dropbox-list"><a href="#">안티폴루션</a></li>
                    <li class="nav_dropbox-list"><a href="#">커버케어</a></li>
                    <li class="nav_dropbox-list"><a href="#">미백&광채</a></li>
                    <li class="nav_dropbox-list"><a href="#">결/각질케어</a></li>
                    <li class="nav_dropbox-list"><a href="#">안티에이징</a></li>
                    <li class="nav_dropbox-list"><a href="#">스팟관리</a></li>
                    <li class="nav_dropbox-list"><a href="#">모공관리</a></li>
                    <li class="nav_dropbox-list"><a href="#">핸드케어</a></li>
                </ul>
                <ul class="nav_dropbox-menu">
                    <li class="nav_dropbox-list-title"><a href="#"><strong>라인별</strong></a></li>
                    <li class="nav_dropbox-list"><a href="#">세라마이딘</a></li>
                    <li class="nav_dropbox-list"><a href="#">시카페어</a></li>
                    <li class="nav_dropbox-list"><a href="#">바이옴</a></li>
                    <li class="nav_dropbox-list"><a href="#">컨트롤 에이</a></li>
                    <li class="nav_dropbox-list"><a href="#">크라이오 러버</a></li>
                    <li class="nav_dropbox-list"><a href="#">에브리 선 데이</a></li>
                    <li class="nav_dropbox-list"><a href="#">V7</a></li>
                    <li class="nav_dropbox-list"><a href="#">더마스크</a></li>
                    <li class="nav_dropbox-list"><a href="#">더마클리어</a></li>
                </ul>
                <ul class="nav_dropbox-menu">
                    <li class="nav_dropbox-list-title"><a href="#"><strong>유형별</strong></a></li>
                    <li class="nav_dropbox-list"><a href="#">토너/미스트</a></li>
                    <li class="nav_dropbox-list"><a href="#">세럼/에센스</a></li>
                    <li class="nav_dropbox-list"><a href="#">크림/로션</a></li>
                    <li class="nav_dropbox-list"><a href="#">마스크/팩</a></li>
                    <li class="nav_dropbox-list"><a href="#">선케어</a></li>
                    <li class="nav_dropbox-list"><a href="#">비비크림</a></li>
                </ul>
                <a href="#" class="nav_dropbox-menu nav_dropbox-list-title"><strong>온라인 세트</strong></a>
                <div class="nav_dropbox_thum">
                    <img src=" <?=base_url( "drjart_imgs/2x/hidden_nav.png" )?> ">
                    <p class="py-2">세라마이딘</p>
                    <p >더 강력해진 보습 장벽</p>
                </div>
            </div>
        </header>

        <!-- main_banner -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 ></h5>
                    </div>
                    <img class="d-block w-100" src=" <?=base_url( "drjart_imgs/2x/main/mainBanner1@2x.png" )?> " alt="First slide">
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 ></h5>
                    </div>
                    <img class="d-block w-100" src=" <?=base_url( "drjart_imgs/2x/main/mainBanner2@2x.png" )?> " alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- newArrival -->
        <section class="section newArrival">
            <div>
                <div class="section-title-wrap">
                    <h1>01</h1>
                    <span class="section-sub-title">New Arrival</span>
                </div>
                <div class="newArrival-thum-wrap newArrival-thum-wrap-left ">
                    <a href="#" class="newArrival-thum newArrival-thum-left">
                        <img src="<?=base_url( "drjart_imgs/2x/new/newArrival2.png" )?> " >
                    </a>
                </div>
                <div class="newArrival-thum-wrap newArrival-thum-wrap-right">
                    <a href="#" class="newArrival-thum  newArrival-thum-right">
                        <img src="<?=base_url( "drjart_imgs/2x/new/newArrival1.png" )?> " >
                    </a>
                </div>
            </div>
            <div class="prd-info">
                <div class="prd-info-wrap">
                    <h2 class="prd-title">V7</h2>
                    <p class="prd-text">
                        않는 우리의 그러므로 장식하는 가는 설레는 관현악이며, 천하를 품었기 보라. 
                        인간의 공자는 불러 얼음과 우는 황금시대다.
                        <br>
                        <br>
                        기관과 힘차게 이 보라. 온갖 생명을 구하지 열락의 하였으며, 위하여서. 
                        충분히 용기가 웅대한 것은 위하여 것이다. 쓸쓸한 어디 살았으며, 봄바람을 
                        현저하게 동력은 있다. 쓸쓸한 피는 인도하겠다는 못하다 물방아 하였으며, 
                        것이다. 
                    </p>
                    <a href="#" class="viewBtn">view</a>
                </div>
            </div>
        </section>


















        <!-- best seller -->
        <!-- <section class="section bestSeller clearfix">
            <div class="clearfix">
                <span class="section_title">Best Seller</span>
                <a href="#" class="more_btn fr">제품 더 보기</a>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/best/best1@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/best/best2@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/best/best3@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/best/best4@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
        </section> -->

        <!-- derma -->
        <!-- <section class="derma">

        </section> -->

        <!-- new -->
        <!-- <section class="new clearfix">
            <p class="new_title">New Arrival</p>
            <div class="new-container new-container1 col-lg-6 col-md-6 col-sm-12">
                <div class="new_thum-wrap">
                    <a href="#" class="new_thum">
                        <img src=" <?=base_url( "drjart_imgs/2x/new/new1@2x.png" )?> ">
                    </a>
                </div>
                <div class="new_text">
                    <h3 class="new_prd_title"> v7 </h3>
                    <p class="new_ex">우리 불어 청춘의 뛰노는 이상은 주는 황금시대다. 따뜻한 수 있는 유소년에게서 없으면 피고 사라지지 열락의 이 철환하였는가? </p>
                    <a href="#" class="more_btn">
                        제품 더 보기
                    </a>
                </div>
            </div>
            <div class="new-container new-container2 col-lg-6 col-md-6 col-sm-12">
                <div class="new_thum-wrap">
                    <a href="#" class="new_thum">
                        <img src=" <?=base_url( "drjart_imgs/2x/new/new2@2x.png" )?> ">
                    </a>
                </div>
                <div class="new_text">
                    <h3 class="new_prd_title"> v7 </h3>
                    <p class="new_ex">우리 불어 청춘의 뛰노는 이상은 주는 황금시대다. 따뜻한 수 있는 유소년에게서 없으면 피고 사라지지 열락의 이 철환하였는가? </p>
                    <a href="#" class="more_btn">
                        제품 더 보기
                    </a>
                </div>
            </div>
            <script text="javascript">
                $(function(){
                    $(".new-container img").hover(function(){
                        $(this).css("transform","scale(1.1)");
                    },function(){
                        $(this).css("transform","scale(1)")
                    })
                })
            </script>
        </section> -->


        <!-- ceramidin -->
        <!-- <section class="ceramidin">
            <div class="ceramidin_title fl">
                <h2 class="p-x10">ceramidin™</h2>
                <p >아무리 발라도 겉도는 보습에 지쳤다면 이제 깊은 보습을 채워보세요<br>
                    5겹 세라마이드를 담아 피부에 겹겹이 오래 남는 촉촉함<br>
                    # 마르지 않는 힘
                </p>
            </div>
            <div class="ceramidin_prd ceramidin_prd1 fr">
                <div class="ceramidin_thum fr">
                    <img src=" <?=base_url( "drjart_imgs/2x/ceramidin/ceramidin1.png" )?> ">
                </div>
                <div class="ceramidin_text ceramidin_text1 ">
                    <p class="p-x10">STEP1</p>
                    <p class="p-x10">세라마이딘 리퀴드</p>
                    <p class="text-explin">세안 후 화장솜 또는 손바닥에 내용물을
                        충분히 덜어낸 후 얼굴 전체에 고루
                        발라주세요.</p>
                </div>
            </div>
            <div class="clearfix">
                <div class="ceramidin_prd ceramidin_prd2 fl">
                    <div class="ceramidin_thum fl">
                        <img src=" <?=base_url( "drjart_imgs/2x/ceramidin/ceramidin22@2x.png" )?> ">
                    </div>
                    <div class="ceramidin_text ceramidin_text2">
                        <p class="p-x10">STEP2</p>
                        <p class="p-x10">세라마이딘 세럼</p>
                        <p class="text-explin">세라마이딘 리퀴드 사용 후 1-2회
                            펌핑하고 얼굴 전체에 고르게 펴
                            발라 흡수시켜주세요.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix">
                <div class="ceramidin_prd ceramidin_prd3 fr">
                    <div class="ceramidin_thum fr">
                        <img src=" <?=base_url( "drjart_imgs/2x/ceramidin/ceramidin3.png" )?> ">
                    </div>
                    <div class="ceramidin_text ceramidin_text3">
                        <p class="p-x10">STEP3</p>
                        <p class="p-x10">세라마이딘 크림</p>
                        <p class="text-explin">크림을 한 마디만큼 짜서 이마, 볼, 턱
                            순으로 발라주세요.</p>
                    </div>
                </div>
            </div>
        </section> -->


        <!-- sos -->
        <!-- <section class="section skin clearfix">
            <div class="clearfix">
                <span class="section_title">skincare S.O.S</span>
                <a href="#" class="more_btn fr">제품 더 보기</a>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin1@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin2@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin3@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin4@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin5@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin6@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin7@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
            <div class="prd_wrap col-lg-3 col-md-6 col-sm-6" >
                <a href="#" class="prd_thum" target="_self">   
                    <img src=" <?=base_url( "drjart_imgs/2x/skin/skin2@2x.png" )?> ">
                </a>
                <div class="prd_info">
                    <p class="prd_title">시카페어 타이거 글라스 크림</p>
                    <p class="prd_price">36,000원</p>
                </div>
            </div>
        </section> -->
        


        <!-- repair -->
        <!-- <section class="repair">
            <h2> #Repair Shop <br> 고쳐드려요
            <br>
            <br>
            <p>
            리페어샵에서 다양한 물건과 건강, 마음까지 리페어하여 전시합니다.
            전시된 작품과 아티스트에 대한 다양한 이야기를 확인하세요</p>
        </section> -->















        

        <!-- footer -->
        <!-- <footer class="footer clearfix">
            
            <div class="footer-left">
                <a href="#" class="footer_logo">
                    <img src="imgs/Dr.Jart_logo.png">
                </a>
                <ul class="footer_icon-wrap clearfix">
                    <li class="footer_icon"> 
                        <a href="#"><img src="./imgs/icon/instagram@2x.png"></a>
                    </li>
                    <li class="footer_icon"> 
                        <a href="#"><img src="./imgs/icon/facebook@2x.png"></a>
                    </li>
                    <li class="footer_icon"> 
                        <a href="#"><img src="./imgs/icon/twitter@2x.png"></a>
                    </li>
                </ul>
                <p class="copyright">Copyright@Have&Be co., Ltd. All rights reserved.</p>
            </div>
            
            <div class="footer-right">
                <ul class="footer-list-wrap footer-list1">
                   <li class="footer-list"><a href="#">회사소개</a></li> 
                   <li class="footer-list"><a href="#">이용약관</a></li>
                   <li class="footer-list"><a href="#">개인정보 처리방침</a></li>
                   <li class="footer-list"><a href="#">이메일주소 무단 수집 거부</a></li>
                   <li class="footer-list">
                       <a href="#">고객만족센터</a>
                       <ul class="footer-list-sub-wrap">
                           <li class="footer-list-sub"><a href="#">FAQ</a></li>
                           <li class="footer-list-sub"><a href="#">1:1문의</a></li>
                           <li class="footer-list-sub"><a href="#">공지사항</a></li>
                           <li class="footer-list-sub"><a href="#">멤버십 안내</a></li>
                           <li class="footer-list-sub"><a href="#">매장안내</a></li>
                       </ul>
                    </li>
                </ul>
                <ul class="footer-list-wrap footer-list2">
                    <li class="footer-list">
                        <p class="footer-list-sub_title">대표이사</p>
                        <p class="footer-list-sub">이진욱</p>
                    </li> 
                    <li class="footer-list">
                        <p class="footer-list-sub_title">상호명</p>
                        <p class="footer-list-sub">해브앤비(주)</p>
                    </li> 
                    <li class="footer-list">
                        <p class="footer-list-sub_title">사업자 등록 번호</p>
                        <p class="footer-list-sub">214-87-63681</p>
                    </li> 
                    <li class="footer-list">
                        <p class="footer-list-sub_title">동시판매 신고 번호</p>
                        <p class="footer-list-sub">2008 서울 강남-2284호</p>
                    </li> 
                </ul>
                <ul class="footer-list-wrap footer-list2">
                    <li class="footer-list">
                        <p class="footer-list-sub_title">ADDRESS</p>
                        <p class="footer-list-sub">서울특별시 강남구 논현로 72로 13 M-SPACE빌딩 헤브엔비 </p>
                    </li> 
                    <li class="footer-list">
                        <p class="footer-list-sub_title">TELL</p>
                        <p class="footer-list-sub">1544 - 5453<br>
                            운영시간 : 9:00 - 18:00 <br>
                            점심시간 : 11:50 - 12:50</p>
                    </li> 
                    <li class="footer-list">
                        <p class="footer-list-sub_title">FAX</p>
                        <p class="footer-list-sub">02 - 3462 - 9051</p>
                    </li>
                </ul>
                <ul class="footer-list-wrap footer-list2">
                    <li class="footer-list">
                        <a href="#">
                            SITE MAP
                            <span class="material-icons footer-list_icon">keyboard_arrow_up</span>
                        </a>
                    </li> 
                    <li class="footer-list">
                        <a href="#">
                            FAMILY SITE
                            <span class="material-icons footer-list_icon">keyboard_arrow_up</span>
                        </a>
                    </li>
                </ul>
            </div>
        </footer> -->
	</body>
</html>