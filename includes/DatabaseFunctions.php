<?php
if(!function_exists('insertUser')){
	function query($pdo, $sql, $parameters = []) {
		$query = $pdo->prepare($sql);
		$query->execute($parameters);
		return $query;
	}
}

if(!function_exists('allPosts')){
	function allPosts($pdo) {
		$posts = query($pdo, 'SELECT post.id, categoryid, `category`, `username`, title, content, `filename` FROM post
		INNER JOIN user ON userid  = user.id
		INNER JOIN category ON categoryid = category.id
		INNER JOIN post_image ON imageid = post_image.id');
		return $posts->fetchAll();
}
}

if(!function_exists('insertPost')){
function insertPost($pdo, $title, $content, $userid, $categoryid) {
	$query = 'INSERT INTO joke (joketext, jokedate, authorid, categoryid)
	VALUES (:joketext, CURDATE(), :authorid, :categoryid)';
	$parameters = [':joketext' => $joketext, ':authorid' => $authorid, ':categoryid' => $categoryid];
	query($pdo, $query, $parameters);
}
}

if(!function_exists('updateJoke')){
	function updateJoke($pdo, $jokeId, $joketext) {
		$query = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
		$parameters = [':joketext' => $joketext, ':id' => $jokeId];
		query($pdo, $query, $parameters);
}
}

if(!function_exists('insertUser')){
	function insertUser($pdo, $user, $email, $password) {
		$query = 'INSERT INTO user (username, email, password)
		VALUES (:username, :email, :password)';
		$parameters = [':username' => $user, ':email' => $email, ':password' => $password];
		query($pdo, $query, $parameters);
}
}