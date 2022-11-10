<?php
class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post();
$post1->aumentarLike();

$post2 = new Post();
$post2 ->likes = 10;

echo "Post 1: ".$post1->likes."<br/>";
echo "Post 2: ".$post2->likes."<br/>";