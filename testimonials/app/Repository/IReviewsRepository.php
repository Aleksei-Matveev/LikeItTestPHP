<?php

if (!defined('__ROOT__'))
    define('__ROOT__', dirname(__FILE__, 2));
require_once(__ROOT__ . '../Database/DB.php');

interface IReviewsRepository
{
    public function getAll();

    public function Create($object);

    public function Update($id);

    public function Delete($id);
}