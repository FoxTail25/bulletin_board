<?php
$title = 'home title';
$content = '<h5 class="text-center">Выбор рубрики</h5>';
$query = "SELECT * FROM subject";
$res = mysqli_query($site_base_link, $query);
for($data = []; $row = mysqli_fetch_assoc($res); $data[]= $row);

$content .= "<br/><ol>";
foreach($data as $elem) {
	$content .= "<li><a href=\"page/$elem[slug]\">$elem[name]</a></li>";
}
$content .= "</ol>";

// $content .= '<form method="POST">
// 	<label for="cat_name">Новая категория</label><br/>
// 	<input id="cat_name" type="text" name="сategory_name"><br/>
// 	<input type="submit" value="создать новую категорию">
// </form>';

return ['title' => $title, 'content' => $content];
?>
