<?
class Author
{
    //Class MEMBER variables
    protected $photo;
    protected $first;
    protected $last;
    protected $bio;

    //Generic Class Constructor 
    function __construct($_photo, $_first, $_last, $_bio)
    {
        $this->setPhoto($_photo);
        $this->setFirst($_first);
        $this->setLast($_last);
        $this->setBio($_bio);
    }

    //Getter/Setter for $photo MEMBER variable
    protected function setPhoto($_photo)
    {
      $this->photo = $_photo;
    }

    public function getPhoto()
    {
      return $this->photo;
    }

    //Getter/Setter for $first MEMBER variable
    protected function setFirst($_first)
    {
      $this->first = $_first;
    }

    public function getFirst()
    {
      return $this->first;
    }

    //Getter/Setter for $last MEMBER variable
    protected function setLast($_last)
    {
      $this->last = $_last;
    }

    public function getLast()
    {
      return $this->last;
    }

    //Getter/Setter for $bio MEMBER variable
    protected function setBio($_bio)
    {
      $this->bio = $_bio;
    }

    public function getBio()
    {
      return $this->bio;
    }
}
?>
