<?php

class UserRepository implements IReviewsRepository
{
    protected PDO $db;
    protected array $users = [];

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return mixed
     */
    public function getAll(): mixed
    {
        $res = $this->db->prepare("SELECT * FROM users");
        $res->execute();
        $this->users = $res->fetchAll(PDO::FETCH_ASSOC);
        return $this->users;
    }

    /**
     * @param $review
     * @return mixed
     */
    public function Create($review)
    {
        // TODO: Implement Create() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Update($id)
    {
        // TODO: Implement Update() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Delete($id)
    {
        // TODO: Implement Delete() method.
    }
}