<?php
  $PAGE_TITLE = "대학생 창업 컨퍼런스 YSCON";
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $PAGE_TITLE;?></title>
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/hover-effect.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">
          <img style="max-width:120px; margin-top: -15px; margin-right:18px" src="/images/YSCON-logo.png">
          </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="./">홈</a>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">소개 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./about">컨퍼런스 소개</a>
                </li>
                <li><a href="./sponsors">후원기관</a>
                </li>
                <li><a href="./committee">조직위원회</a>
                </li>
                <li role="separator" class="divider"></li>
                                <li><a href="./press">언론 보도</a>
                <li role="separator" class="divider"></li>

                <li><a href="./notice">공지사항</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">프로그램 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./program">세부 일정</a>
                </li>
                <li><a href="./program">키노트 강연</a>
                </li>
                <li><a href="./program">연합동아리 전시</a>
                </li>
                <li><a href="./program">네트워킹</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">지난 행사 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="./previous-event-1st">1회 (2016. 05)</a>
                </li>
              </ul>
            </li>

            <li><a href="#">참가 신청</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
