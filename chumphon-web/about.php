<?
$title = "About";

$breadcrumbs = array(
  array("title" => "About", "link" => "/about")
);

$content = <<<END

<p>This is the about page in PHP. Mr. Kim is awesome!!</p>

END;

include __DIR__ . '/_layouts/default.php';
