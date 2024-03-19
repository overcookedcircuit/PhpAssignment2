<?php
namespace app\models;

class Comment extends \app\core\Model {
    public $publication_comment_id; // Assume these properties exist and are public
    public $publication_id;
    public $profile_id;
    public $comment;
    public $timestamp;

    public function getAll($publication_id){
        $SQL = "SELECT * FROM comment WHERE publication_id = :publication_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['publication_id'=>$publication_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Comment');
        return $STMT->fetchAll();
    }

    public function get($publication_comment_id){
        $SQL = "SELECT * FROM comment WHERE publication_comment_id = :publication_comment_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['publication_comment_id'=>$publication_comment_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Comment');
        return $STMT->fetch();
    }
    
    public function getProfile() {
        $SQL = "SELECT u.username,p.profile_id FROM user u
                JOIN profile p ON u.user_id=p.user_id
                WHERE p.profile_id = :profile_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['profile_id'=>$this->profile_id]);
        $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Profile');
        return $STMT->fetch();
    }

    public function insert() {
        $SQL = "INSERT INTO comment(publication_id, profile_id, comment, timestamp) 
                VALUES (:publication_id, :profile_id, :comment, :timestamp)";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
            'publication_id'=>$this->publication_id,
            'profile_id'=>$this->profile_id,
            'comment'=>$this->comment,
            'timestamp'=>$this->timestamp
        ]);
    }

    public function remove() {
        $SQL = "DELETE FROM comment WHERE publication_comment_id = :publication_comment_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute(['publication_comment_id'=>$this->publication_comment_id]);
    }

    public function update() {
        $SQL = "UPDATE comment SET comment = :comment WHERE publication_comment_id = :publication_comment_id";
        $STMT = self::$_connection->prepare($SQL);
        $STMT->execute([
            'comment'=>$this->comment,
            'publication_comment_id'=>$this->publication_comment_id
        ]);
    }
}