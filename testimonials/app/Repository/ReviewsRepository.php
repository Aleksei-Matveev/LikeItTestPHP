<?php
define('__ROOT__', dirname(__FILE__, 2));
require_once(__ROOT__ . '../Database/DB.php');

class ReviewsRepository implements IReviewsRepository
{
    protected PDO $db;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    /**
     * @return array|bool
     */
    public function getAll($admin = false): array|bool
    {
        $a = '';
        if(!$admin){
            $a = 'AND r.active = 1';
        }
        $db = DB::getInstance();

        $res = $db->prepare("SELECT *, (SELECT GROUP_CONCAT(NAME SEPARATOR ';') FROM images AS i WHERE r.id = i.review_id) AS files FROM review AS r, user AS u WHERE r.author_id = u.id  " . $a);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
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