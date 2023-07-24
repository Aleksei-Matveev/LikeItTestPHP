<?php

class UserRepository implements IReviewsRepository
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return mixed
     */
    public function getAll(): array
    {
        $res = $this->db->prepare("SELECT * FROM users");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $review
     * @return mixed
     */
    public function Create($user)
    {
        // TODO: Implement Create() method.
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Update($user)
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