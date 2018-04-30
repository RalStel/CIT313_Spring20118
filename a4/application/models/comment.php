<?php
class Comment extends Model{


    function getComment($commentID){
        $sql = 'SELECT u.first_name, u.last_name, c.commentID, c.uID, c.commentText, c.date FROM comments c
            INNER JOIN posts p on p.pID = c.postID,
		INNER JOIN users u on u.uID = c.uID
		WHERE c.commentID = ?
		';
        $results = $this->db->getrow($sql, array($commentID));

        $post = $results;

        return $post;

    }

//    public function getUserPosts($uID){
//
//        $sql = 'select * from posts where uID = ?';
//
//        $results = $this->db->execute($sql, $uID);
//
//        while ($row=$results->fetchrow()) {
//            $posts[] = $row;
//        }
//
//        return $posts;
//    }
//
//    public function getCatPosts($cID){
//
//        $sql = 'select * from posts where categoryID = ?';
//
//        $results = $this->db->execute($sql, $cID);
//
//        while ($row=$results->fetchrow()) {
//            $posts[] = $row;
//        }
//
//        return $posts;
//    }
//
    
  
    
    public function getAllComments($limit = 0){
        if($limit > 0){

            $numcomments = ' LIMIT '.$limit;
        }

        $sql = 'SELECT u.first_name, u.last_name, c.uID, c.commentText, c.date, c.postID FROM comments c
		INNER JOIN posts p on p.pID = c.postID 
                INNER JOIN users u on u.uID = c.uID'.$numcomments;

//        $sql =  'SELECT p.pID, p.title, p.content, p.uid, p.categoryid, p.date, c.name as name, u.first_name, u.last_name FROM posts p
//		INNER JOIN categories c on c.categoryid = p.categoryid
//		INNER JOIN users u on u.uid = p.uid'.$numposts;

        // perform query
        $results = $this->db->execute($sql);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;

    }

    

    public function addComment($data){

        $sql='INSERT INTO comments (uID,commentText,date,postID)';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;

    }

//    public function updatePost($data) {
//
//        $sql = 'UPDATE posts SET title = ?, content = ?, categoryID = ?, date = ? where pID = ?';
//        $this->db->execute($sql, $data);
//        $message = "Post updated.";
//        return $message;
//    }
}