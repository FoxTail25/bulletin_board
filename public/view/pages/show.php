<?php
$query = "SELECT * 
FROM advertisements 
LEFT JOIN
subject ON subject.id = advertisements.subject_id
WHERE
subject.slug='$params[catSlug]' and advertisements.slug = '$params[adSlug]'";
$db_answer = mysqli_fetch_assoc(mysqli_query($site_base_link, $query));

$content ="<h6>$db_answer[ad_head]</h6><p>$db_answer[ad_body]</p>";
$content .= "<br/><a href=\"/page/$params[catSlug]\">назад в категорию</a>";
$content .= "<br/><a href=\"\\\">на главную</a>";

return ['title'=>'show title', 'content'=> $content];
?>