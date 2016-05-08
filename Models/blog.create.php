<?php

class Blogpost
{
    //MEMBER variables
    protected $hero;
    protected $title;
    protected $date;
    protected $post;
    protected $author;

    //Generic class constructor
    function __construct($_hero, $_title, $_post)
    {
        $this->setHero($_hero);
        $this->setTitle($_title);
        $this->setDate($_date);
        $this->setPost($_post);
    }

    //Getter/Setter for $hero MEMBER
    protected function setHero($_hero)
    {
      if(is_string($_hero))
      {
        $this->hero = $_hero;
      }
    }

    public function getHero()
    {
      return $this->hero;
    }

    //Getter/Setter for $title MEMBER
    protected function setTitle($_title)
    {
      if(is_string($_title))
      {
        $this->title = $_title;
      }
    }

    public function getTitle()
    {
      return $this->title;
    }

    //Getter/Setter for $date MEMBER
    protected function setDate()
    {
      $this->date = date("F j, Y");
    }

    public function getDate()
    {
      return $this->date;
    }

    //Getter/Setter for $post MEMBER
    protected function setPost($_post)
    {
      if(is_string($_post))
      {
        $this->post = $_post;
      }
    }

    public function getPost()
    {
      return $this->post;
    }
}

?>
