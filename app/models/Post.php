<?php

namespace app\models;

use app\core\Database;

class Post
{
    //todo make methods here
    use Database;

    public function getAllPosts($posts){
        $query = "select * from posts";
        return $this->fetchAll($query); 
    }
    public function getPostsById($id){
        $query = "select * from posts where :id";
        return $this->queryWithParams($query, ['id' => $id]);
    }
    public function savePost($inputData){
        $query = "insert into posts (title, description) values (:title, :description);";
        return $this->queryWithParams($query, $inputData); 
    }
    public function updatePost($inputData) {
        $query = "update posts set title = :title, description= :description where id = :id"; 
        return $this->queryWithParams($query, $inputData); 
    }

    public function deletePost($inputData) {
        $query = "DELETE FROM posts where id = :id"; 
        return $this->queryWithParams($query, $inputData); 
    }
}