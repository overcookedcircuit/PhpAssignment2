<?php
    namespace app\models;

    class Publication extends \app\core\Model {

        public $publication_id;//PK
	    public $profile_id;//FK
	    public $publication_title;
        public $publication_text;
	    public $timestamp;
        public $publication_status;

        public function get($publication_id) {
            $SQL = "SELECT * FROM publication WHERE publication_id = :publication_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(['publication_id'=>$publication_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Publication');
            return $STMT->fetch();
        }

        public function getAll($profile_id) {
            $SQL = "SELECT * FROM publication WHERE profile_id = :profile_id";
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute(['profile_id'=>$profile_id]);
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Publication');
            return $STMT->fetchAll();
        }
        public function getAllPosts() {
            $SQL = 'SELECT * FROM publication
                    WHERE publication_status = "public"
                    ORDER BY timestamp DESC';
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute();
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Publication');
            return $STMT->fetchAll();
        }
        public function remove() 
        {
            $SQL = "DELETE FROM publication WHERE publication_id = :publication_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(["publication_id" => $this->publication_id]);
        }
        public function insert(){
            $SQL = 'INSERT INTO publication (profile_id,publication_title,publication_text,timestamp,publication_status) VALUES (:profile_id,:publication_title,:publication_text,:timestamp,:publication_status)';
            $STMT = self::$_conn->prepare($SQL);
            $STMT->execute([
                'profile_id'=>$this->profile_id, 
                'publication_title'=>$this->publication_title,
                'publication_text'=>$this->publication_text,
                'timestamp'=>$this->timestamp,
                'publication_status'=>$this->publication_status]
            );
        }
        public function update() {
            $SQL = "UPDATE publication SET publication_title=:publication_title, publication_text = :publication_text, publication_status = :status WHERE publication_id=:publication_id";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(
                ['publication_id'=>$this->publication_id,
                'publication_title'=>$this->publication_title,
                'publication_text'=>$this->publication_text,
                'publication_status'=>$this->publication_status]
            );
        }

        public function getPubByKeyword($keyword){
            $SQL = "SELECT * FROM publication WHERE publication_status = 'public' AND (publication_title LIKE :search_term OR publication_text LIKE :search_term) ORDER BY timestamp DESC";
            $STMT = self::$_connection->prepare($SQL);
            $STMT->execute(["keyword"=>'%'.$keyword.'%']);
            $STMT->setFetchMode(\PDO::FETCH_CLASS,'app\models\Publication');
            return $STMT->fetchAll();
        }
    }
