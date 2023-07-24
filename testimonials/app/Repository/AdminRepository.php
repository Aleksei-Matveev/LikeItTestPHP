<?php
define('__ROOT__', dirname(__FILE__, 2));
require_once(__ROOT__ . '../Database/DB.php');
include_once ('IReviewsRepository.php');

class AdminRepository implements IReviewsRepository
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
        $res = $this->db->prepare("SELECT r.id, r.review, r.author_id, r.date, r.active, u.name , (SELECT GROUP_CONCAT(NAME SEPARATOR ';') FROM images AS i WHERE r.id = i.review_id) AS files FROM reviews AS r, users AS u WHERE r.author_id = u.id  ");
        $res->execute();
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * return Review
    */


    public function getById($id): bool|array
    {
        $res = $this->db->prepare("SELECT * FROM reviews as r WHERE r.id = ? ");
        $res->execute([$id]);
        return $res->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public function Create($object)
    {
        return '';
    }

    /**
     * @param $id
     * @return mixed
     */
    public function Update($review)
    {
        $res = $this->db->prepare("UPDATE reviews as r Set r.active = ? WHERE r.id  = ?");
        $res->execute([$review->active, $review->id]);
        if($res->rowCount() > 0){
            return ['status' => 'success', 'data'=> $res->rowCount()];
        }else{
            return ['status' => 'error', 'message'=> 'Нет именений'];

        }
    }

    /**
     * @param $id
     * @return array
     */
    public function Delete($id = 0): array
    {
        $res = $this->db->prepare("DELETE FROM reviews  WHERE id  = ?");
        $res->execute([$id]);
        if($res->rowCount() > 0){
            return ['status' => 'success', 'data'=> $res->rowCount()];
        }else{
            return ['status' => 'error', 'message'=> 'Нет именений'];

        }
    }
}