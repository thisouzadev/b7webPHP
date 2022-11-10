<?php
class Post {
  public int $likes = 0;
  public array $comments = [];
  private string $author;

  public function __contruct($qtdLikes = 0) {
    $this->likes = $qtdLikes;
  }

  public function aumentarLike() {
    $this->likes++;
  }
  public function setAuthor($n) {
    if (strlen($n) >= 3) {
      $this->author = ucfirst($n);
    }
  }
  public function getAuthor(){
    return $this->author ?? 'Visitante';
  }
}

$post1 = new Post();
$post1->setAuthor('Thiago');

$post2 = new Post();
$post2->setAuthor('Bonieky');

echo "Post 1: ".$post1->likes."likes -- ".$post1->getAuthor()."<br/>";
echo "Post 2: ".$post2->likes."likes -- ".$post2->getAuthor()."<br/>";