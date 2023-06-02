<?php class Book{
    private $book_id;
    private $img_path;
    private $title;
    private $price;
    private $description;
    
    public function __construct($img_path,$title,$price,$description){

        $this->img_path=$img_path;
        $this->title=$title;
        $this->price=$price;
        $this->description=$description;
    
    }

public function getImg_path(){
return $this->img_path;
}
public function setImg_path($img_path){
    $this->img_path=$img_path;
}

public function getTitle(){
    return $this->title;
    }
public function setTitle($title){
     $this->title=$title;
}

public function getPrice(){
    return $this->price;
    }
public function setPrice($price){
    $this->price=$price;
    }

public function getDescription(){
    return $this->description;
    }
public function setDescription($description){
    $this->description=$description;
    }


}
?>