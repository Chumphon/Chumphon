<?
$title = "CHUMPHON WEB SITE";

$content = <<<END

<!--breadcrumb -->
<section id="breadcrumb">
  <div class="container">
      <div class="row">
          <div class="btn-group btn-breadcrumb">
              <a href="index.html" class="btn btn-default">หน้าแรก</a>
              <a href="souvenirs.html" class="btn btn-default">ของฝาก</a>
              <a href="#souvenirs01" class="btn btn-default"><div class="active">กล้วยเล็บมือนาง</div></a>
          </div>
      </div>
	</div>
</section>

<section id="souvenirs01">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 img">
        <h4>กล้วยเล็บมือนาง</h4>
        <hr>
        <img class="img-responsive" src="./images/souvenirs01.jpg" >
        <p></p>
        <p></p>
      </div>
    </div>
  </div>
</section>

END;

include __DIR__ . '\_layouts\default.php';
