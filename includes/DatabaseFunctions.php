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
		$posts = query($pdo, 'SELECT post.id, categoryid, `category`, `username`, title, content, imagename FROM post
		INNER JOIN user ON userid  = user.id
		INNER JOIN category ON categoryid = category.id');
		return $posts->fetchAll();
	}
}

if(!function_exists('insertPost')){
function insertPost($pdo, $title, $content, $userid, $categoryid, $imagename) {
	$query = 'INSERT INTO post (title, content, userid, categoryid, imagename)
	VALUES (:title, :content, :userid, :categoryid, :imagename)';
	$parameters = [':title' => $title, ':content' => $content, ':userid' => $userid, ':categoryid' => $categoryid, ':imagename' => $imagename];
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