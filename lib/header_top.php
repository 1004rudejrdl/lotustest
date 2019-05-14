<?php  ?>
<!-- header start -->
<div class="header-top">
  <div id="navbar" class="topnav sticky">
    <!-- id for sticky -->
    <div class="dropdown logo_center">
      <button class="logo"><a href="./index.php"> <img id="navbar_img" src="./main_img/lotus_logo_text_black.png" alt=""></a></button>
    </div>
    <div class="dropdown">
      <button class="dropbtn">
        <a>ABOUT&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>ABOUT COMPANY</h2>
        </div> <!-- header -->
        <div class="row">
          <div class="column">
            <h3>회사소개</h3>
            <a href="./about_company/brandstory.php">Brand Story 브랜드스토리</a>
            <a href="./about_company/ceo.php">CEO 대표</a>
            <a href="./about_company/history.php">History 연혁</a>
            <a href="./about_company/com_location.php">Location 오시는 길</a>
          </div> <!-- column -->
          <div class="column">
            <h3>사업소개</h3>
            <a href="./about_chain/chain_intro.php">가맹소개</a>
            <a href="./about_chain/chain_inquiry.php">가맹문의</a>
            <a href="./about_chain/chain_apply.php">가맹신청</a>
          </div> <!-- column -->
          <div class="column">
            <h3>매장찾기</h3>
            <a href="./about_search_chain/search_chain.php">매장찾기</a>
          </div> <!-- column -->
          <div class="column">
            <h3>회사소식</h3>
            <a href="./about_com_notice/com_ann.php">공지사항</a>
            <a href="./about_com_notice/com_event.php">이벤트</a>
            <a href="./about_com_notice/social_attr.php">사회공헌</a>
          </div> <!-- column end -->
        </div> <!-- row end -->
      </div> <!-- dropdown-content end -->
    </div> <!-- dropdown end -->
    <div class="dropdown">
      <button class="dropbtn">
        <a>CUSTOMER SERVICE&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>CUSTOMER SERVICE</h2>
        </div> <!-- header -->
        <div class="row">
          <div class="column">
            <h3>다운로드</h3>
            <a href="./service_download/manual.php">설명서 다운로드</a>
            <a href="./service_download/software.php">소트프웨어 다운로드</a>
            <a href="./service_download/driver.php">드라이버 다운로드</a>
          </div> <!-- column -->
          <div class="column">
            <h3>서비스센터</h3>
            <a href="./service_center/serv_anno.php">공지사항</a>
            <a href="./service_center/search_center.php">전국 지점 찾기</a>
            <a href="./service_center/visit_serv_apply.php">방문 서비스 신청</a>
          </div> <!-- column -->
          <div class="column">
            <h3>고객의 소리</h3>
            <a href="./service_customer/cus_praise.php">칭찬 게시판</a>
            <a href="./service_customer/cus_complain/cus_complain_main.php">민원 게시판</a>
            <a href="./service_customer/cus_qna.php">질문 게시판</a>
          </div> <!-- column -->
        </div> <!-- row -->
      </div> <!-- dropdown-content -->
    </div> <!-- dropdown -->
    <div class="dropdown">
      <button class="dropbtn">
        <a>RECRUIT&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
      </button>
      <div class="dropdown-content alignR">
        <div class="header">
          <h2>RECRUIT</h2>
        </div> <!-- header -->
        <div class="row">
          <div class="column">
            <h3>직무안내</h3>
            <a href="./recruit_job/job_intro.php">직무소개</a>
            <a href="./recruit_job/job_story.php">직무스토리</a>
            <a href="./recruit_job/job_partner.php">COMPANY人</a>
          </div> <!-- column -->
          <div class="column">
            <h3>채용안내</h3>
            <a href="./recruit_recr_notice/recr_news.php">채용소식</a>
            <a href="./recruit_recr_notice/candidate.php">인재상</a>
            <a href="./recruit_recr_notice/welfare.php">복리후생</a>
          </div> <!-- column -->
          <div class="column">
            <h3>인재지원</h3>
            <a href="./recruit_apply/rec_ap_ann.php">공지사항</a>
            <a href="./recruit_apply/upload_submit/upload_submit_main.php">이력서 제출</a>
            <a href="./recruit_apply/submit.php">이력서 작성</a>
          </div> <!-- column -->
        </div> <!-- row -->
      </div> <!-- dropdown-content -->
    </div> <!-- dropdown -->
    <div class="dropdown ">
      <?php
        $url_board=(isset($_SESSION['userid']))?("./board_member/mem_free_bd/mem_free_bd_main.php"):("./board_guest/op_free_bd/op_free_bd_main.php");
      ?>
      <button class="dropbtn">
        <a>BOARD&nbsp;&nbsp;<i class="fa fa-caret-down"></i></a>
      </button>
      <div class="dropdown-content">
        <div class="header">
          <h2>COMMUTE BOARD</h2>
        </div> <!-- header -->
        <div class="row">
          <div class="column">
            <h3>회원전용</h3>
            <a href="./board_member/mem_free_bd/mem_free_bd_main.php">자유게시판</a>
            <a href="./board_member/mem_comunity.php">커뮤니티</a>
            <a href="./board_member/mem_ad.php">홍보</a>
          </div> <!-- column -->
          <div class="column">
            <h3>공개게시판</h3>
            <a href="./board_guest/op_free_bd/op_free_bd_main.php">자유게시판</a>
            <a href="./board_guest/memo/memo_main.php">한줄메모</a>
          </div> <!-- column -->
        </div> <!-- row -->
      </div> <!-- dropdown-content -->
    </div> <!-- dropdown -->
    <!-- <div class="dropdown dd_right">
      <button class="logo"><a href="./index.php"> <img src="./main_img/lotus_logo_img2.png"></a></button>
    </div> -->
    <div class="dropdown dd_right">
      <button class="dropbtn"><a href="./index.php">LOGIN</a></button>
    </div> <!-- dropdown -->
    <div class="dropdown dd_right">
      <button class="dropbtn"><a href="./index.php">JOIN</a></button>
    </div> <!-- dropdown -->
  </div> <!-- topnav end -->
  <img id="header_img" src="./main_img/lotus_main_img3.png" alt="SEA" style="width:100%;">
</div>

<!-- modal signup form -->

<!-- common effect -->
<!-- sticky goto top -->
<button onclick="topFunction()" id="gotoTopBtn" title="Go to top">Top</button>
<!-- sticky goto top end -->
<!-- sticky social icon -->
<div class="icon-bar">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>
<!-- sticky social icon end-->
<!-- common effect end-->

<script src="./js/effect_common.js"></script><!-- Sticky event를 위해서 상단에 올리지 못함 -->
<!-- header end -->
