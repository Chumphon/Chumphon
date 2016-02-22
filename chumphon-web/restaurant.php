<?
$title = "CHUMPHON WEB SITE";

$content = <<<END

<!--breadcrumb -->
<section id="breadcrumb">
  <div class="container">
      <div class="row">
          <div class="btn-group btn-breadcrumb">
              <a href="index.html" class="btn btn-default">หน้าแรก</a>
              <a href="#restaurant" class="btn btn-default"><div class="active">ร้านอาหาร</div></a>
          </div>
      </div>
	</div>
</section>

  <section id="restaurant">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 col-md-offset-3  col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-offset-1 col-xs-10 col-xs-offset-1 col-lg-offset-3 col-lg-6 col-lg-offset-3 title">
          <h3 data-wow-delay="0.9s">ร้านอาหาร</h3>
          <hr>
          <h5></h5>
        </div>
      </div>
    </div>
    </section>

    END;

    include __DIR__ . '\_layouts\default.php';
