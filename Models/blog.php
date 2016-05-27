<?php

class Blog
{
    //MEMBER variables
    protected $hero;
    protected $title;
    protected $date;
    protected $post;
    protected $author;

    //Generic class constructor
    function __construct($_title, $_post)
    {
        $this->setTitle($_title);
        $this->setDate($_date);
        $this->setPost($_post);
    }

    //Getter/Setter for $hero MEMBER
    public function setHero($_hero)
    {
        $this->hero = $_hero;
    }

    public function getHero()
    {
      return $this->hero;
    }

    //Getter/Setter for $title MEMBER
    public function setTitle($_title)
    {
        $this->title = $_title;
    }

    public function getTitle()
    {
      return $this->title;
    }

    //Getter/Setter for $date MEMBER
    public function setDate()
    {
      $this->date = date("F j, Y");
    }

    public function getDate()
    {
      return $this->date;
    }

    //Getter/Setter for $post MEMBER
    public function setPost($_post)
    {
        $this->post = $_post;
    }

    public function getPost()
    {
      return $this->post;
    }
}

?>
