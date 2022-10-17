<?php
class Task {
    protected $id;
    protected $tittle;
    protected $description;
    protected $completed;

    public function __construct($id,$completed,$description,$tittle)
    {
        $this->id = $id;
        $this->id = $tittle;
        $this->id = $description;
        $this->id = $completed;
    }
}