<?php
$query = "SELECT * FROM subject WHERE slug = '$params[catSlug]'";
$res = mysqli_fetch_assoc(mysqli_query($site_base_link, $query));

$content = "<h6>Рубрика $res[name]</h6>";
$content .= "<p><a href=\"\\\">вернуться к выбору рубрик</a></p>";

if(!empty($_POST['advertisements_head']) and !empty($_POST['advertisements_body'])) {

	$slug = time();
	$query = "INSERT INTO advertisements (slug, ad_head, ad_body, subject_id) VALUES ('$slug', '$_POST[advertisements_head]', '$_POST[advertisements_body]', '$res[id]')";
	mysqli_query($site_base_link, $query);
	unset($_POST['advertisements_head']);
	$content .="<p>объявление добавлено</p>";
	$content .="<a href=\"/page/$params[catSlug]\">OK</a>";

} else {

	
	$content .= '<form method="POST">
	<label for="head_ad_">Заголовок объявления<br/>
	<input id="head_ad_" name="advertisements_head"/>
	</label><br/>
	
	<label for="body_ad_">текст объявления<br/>
	<textarea id="body_ad_"/  name="advertisements_body"></textarea>
	</label><br/>
	
	<input type="submit" value="Добавить объявление">
	</form>';
}
$query = "SELECT * FROM advertisements WHERE subject_id = '$res[id]'";
$db_answer = mysqli_query($site_base_link, $query);
for($data=[]; $row = mysqli_fetch_assoc($db_answer); $data[] = $row);

if(count($data)>0) {
	$content .="<ol>";

	foreach($data as $elem) {
		$content .="<li><a href=\"$params[catSlug]/$elem[slug]\">$elem[ad_head]</a></li>";
		
	}

	$content .="</ol>";
} else {
	$content .="<h6 class=\"pt-4\">Объявлений в этой категории ещё нет</h6>";
}
return ['title' => 'advert', 'content'=> $content ];
?>
