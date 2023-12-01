<?php

##REUSABLE QUERY FUNCTION##
function query($pdo, $sql, $parameters = []) {
	$query = $pdo->prepare($sql);
	$query->execute($parameters);
	return $query;
}

##JOKE FUNCTIONS##

function getJoke($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM joke WHERE id = :id', $parameters);
	return $query->fetch();
}

function allPosts($pdo) {
	$posts = query($pdo, 'SELECT post.id, categoryid, `category`, `username`, title, content, `filename` FROM post
	INNER JOIN user ON userid  = user.id
	INNER JOIN category ON categoryid = category.id
    INNER JOIN post_image ON imageid = post_image.id');
	return $posts->fetchAll();
}

function insertPost($pdo, $title, $content, $userid, $categoryid) {
	$query = 'INSERT INTO joke (joketext, jokedate, authorid, categoryid)
	VALUES (:joketext, CURDATE(), :authorid, :categoryid)';
	$parameters = [':joketext' => $joketext, ':authorid' => $authorid, ':categoryid' => $categoryid];
	query($pdo, $query, $parameters);
}

function updateJoke($pdo, $jokeId, $joketext) {
	$query = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
	$parameters = [':joketext' => $joketext, ':id' => $jokeId];
	query($pdo, $query, $parameters);
}

function deleteJoke($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM joke WHERE id = :id', $parameters);
}

##AUTHOR FUNCTIONS##

function allAuthors($pdo) {
	$authors = query($pdo, 'SELECT * FROM author');
	return $authors->fetchAll();
}

##CATEGORY FUNCTIONS##

function allCategories($pdo) {
	$categories = query($pdo, 'SELECT * FROM category');
	return $categories->fetchAll();
}

function getCats($pdo, $id) {
	$parameters = [':id' => $id];
	$query = query($pdo, 'SELECT * FROM category WHERE id = :id', $parameters);
	return $query->fetch();
}

function totalCats($pdo) {
	$query = query($pdo, 'SELECT COUNT(*) FROM category');
	$row = $query->fetch();
	return $row[0];
}

function insertCat($pdo, $cattext) {
	$query = 'INSERT INTO category (categoryName)
	VALUES (:categoryName)';
	$parameters = [':categoryName' => $cattext];
	query($pdo, $query, $parameters);
}

function updateCat($pdo, $catId, $cattext) {
	$query = 'UPDATE category SET categoryName = :cattext WHERE id = :id';
	$parameters = [':cattext' => $cattext, ':id' => $catId];
	query($pdo, $query, $parameters);
}

function deleteCat($pdo, $id) {
	$parameters = [':id' => $id];
	query($pdo, 'DELETE FROM category WHERE id = :id', $parameters);
}