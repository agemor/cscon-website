<?php
  include "header.php";
  ?>

<div id="carousel" class="carousel slide" data-ride="carousel" style="margin-top: -20px">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
    <li data-target="#carousel" data-slide-to="3"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="./images/carousel-1.jpg">
      <div class="carousel-caption">
        <h1>Another example headline.</h1>
        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
      </div>
    </div>
    <div class="item">
      <img src="./images/carousel-2.jpg">
    </div>
    <div class="item">
      <img src="./images/carousel-3.jpg">
    </div>
    <div class="item">
      <img src="./images/carousel-4.jpg">
    </div>
  </div>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <h3>CSCON은?</h3>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">자세히 알아보기 &raquo;</a> <a class="btn btn-primary btn-default" href="#" role="button">일정에 추가</a>
      </p>
    </div>
    <div class="col-md-4">
      <h3>프로그램</h3>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-default" href="#" role="button">프로그램 보기 &raquo;</a>
      </p>
    </div>
    <div class="col-md-4">
      <h3>참가자 네트워크</h3>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-default" href="#" role="button">페이스북 그룹 &raquo;</a>
      </p>
    </div>
  </div>


  <hr>

  <h3>11월 19일 2회 행사가 개최됩니다.</h3>

  <h4>연사자와 스폰서 구하는 중!</h4>


</div>




<?php
  include "footer.php";
  ?>