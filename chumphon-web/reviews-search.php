<?
$title = "CHUMPHON WEB SITE";

$content = <<<END

<!--breadcrumb -->
<section id="breadcrumb">
  <div class="container">
      <div class="row">
          <div class="btn-group btn-breadcrumb">
              <a href="index.html" class="btn btn-default">หน้าแรก</a>
              <a href="#reviews-search" class="btn btn-default"><div class="active">ค้นหารีวิว</div></a>
          </div>
      </div>
	</div>
</section>

<!--Search-->
  <section id="reviews-search">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4  col-sm-offset-3 col-sm-6 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-xs-offset-2 col-lg-offset-4 col-lg-4 col-lg-offset-4 title">
              <h2 data-wow-delay="0.9s">ค้นหารีวิว</h2>
          <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" button">Go!</button>
                </span>
                  </div> <!-- /input-group -->
            </div>
          </div>
        </div>
        </section>

    END;

    include __DIR__ . '\_layouts\default.php';
