<?php
include 'IReviewsRepository.php';

class ReviewsRepository implements IReviewsRepository
{
    protected PDO $db;
    protected array $reviews = [];

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return array|bool
     */
    public function getAll(): array|bool
    {
        $res = $this->db->prepare("SELECT r.id, r.review, u.name, r.date, (SELECT GROUP_CONCAT(NAME SEPARATOR ';') FROM images AS i WHERE r.id = i.review_id) AS files FROM reviews AS r, users AS u WHERE r.author_id = u.id AND r.active = 1");
        $res->execute();
        $this->reviews = $res->fetchAll(PDO::FETCH_ASSOC);
        return $this->reviews;
    }

    /**
     * @param $review
     * @return mixed
     */
    public function Create($review)
    {
        return ['Created' => $review];
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