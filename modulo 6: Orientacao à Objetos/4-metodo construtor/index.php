<?php
class Post {
  public int $likes = 0;
  public array $comments = [];
  public string $author;

  public function __contruct($qtdLikes = 0) {
    $this->likes = $qtdLikes;
  }

  public function aumentarLike() {
    $this->likes++;
  }
}

$post1 = new Post(25);
$post2 = new Post();

echo "Post 1: ".$post1->likes."<br/>";
echo "Post 2: ".$post2->likes."<br/>";