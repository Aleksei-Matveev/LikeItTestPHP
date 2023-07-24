<?php

class Review
{
    public int $id;
    public string $review;
    public int $author_id;
    public string $date;
    public int $active;

    public function __construct($array)
    {
        $this->id = $array['id'];
        $this->date = $array['date'];
        $this->active = $array['active'];
        $this->author_id = $array['author_id'];
        $this->review = $array['review'];
    }
    public function changeStatus(){
        $this->active = 1 ^ $this->active;
}

}