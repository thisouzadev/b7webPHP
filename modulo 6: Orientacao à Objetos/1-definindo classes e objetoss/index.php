<?php
class Post {
  public $like = 0;
  public $comments = [];
  public $author;
}

$post1 = new Post();
$post1->likes = 3;

$post2 = new Post();
$post2 ->likes = 10;

echo "Post 1: ".$post1->likes."<br/>";
echo "Post 2: ".$post2->likes."<br/>";