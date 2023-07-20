<?php

interface IReviewsRepository
{
    public function getAll($admin);
    public function Create($review);
    public function Update($id);
    public function Delete($id);
}