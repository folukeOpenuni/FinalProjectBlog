<?php

class comment {

	public $UserCommentID;
	public $CommentContent;
	public $ReaderID;
	public $BlogPostID;
        public $CommentTimestamp;


        public function __construct ($UserCommentID, $CommentContent, $ReaderID, $BlogPostID, $CommentTimestamp){

        $this->UserCommentID = $UserCommentID;
        $this->CommentContent = $CommentContent;
        $this->ReaderID = $ReaderID;
        $this->BlogPostID = $BlogPostID;
        $this->CommentTimestamp = $CommentTimestamp;

}

public static function CreateComment() {

$createsql = "INSERT INTO usercomment (UserCommentID, CommentContent, ReaderID, BlogPostID, CommentTimestamp)
        VALUES ('$UserCommentID', '$CommentContent', '$ReaderID', '$BlogPostID', '$CommentTimestamp')";
    
        $result = $pdo->query($createsql);

//    if (isset($_POST['commentSumbit'])) {
//    $UserID = $_POST['UserID'] ;
//    $date = $_POST['date'] ;
//    $message = $_POST['message'] ;
//    
//    //$sql = "INSERT INTO Comment(ReaderID, CommentContent, ReaderID, BlogPostID, TimeStamp)
//            //values ('$UserID','$date','$message')";
//   // $result = $pdo->query($sql);
//    $stmt= $pdo->prepare("insert into comment (UserID, date, message)"
//            . "Values ('$UserID, '$date', $message')");
//$stmt->execute();
//    }
//    
//}

}

public static function EditComment() {


}

public static function DeleteComment() {


}

public static function ReplyComment($UserCommentID) {

}

public static function Notification() {


}

public static function DisplayComment(){
   
$displaysql = 'SELECT CommentContent, ReaderID, BlogPostID, CommentTimestamp'
        . 'INNER JOIN ReaderID'
    
}


}