<?php
date_default_timezone_set('UTC');
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
        array(
            $_POST ['UserCommentID'],
            $_POST ['CommentContent'],
            $_POST ['ReaderID'],
            $_POST ['BlogPostID'],
            $_POST ['CommentTimestamp']);

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

//public static function EditComment() {
//
//
//}

public static function DeleteComment($UserCommentID) {
      $db = Db::getInstance();
      //make sure $id is an integer
      $UserCommentID = intval($UserCommentID);
      $deletesql = $db->prepare('DELETE FROM usercomment WHERE UserCommentID = :UserCommentID');
      // the query was prepared, now replace :id with the actual $id value
      $delete->execute(array('UserCommentID' => $UserCommentID));

}

public static function ReplyComment($UserCommentID) {

}

//public static function Notification() {
//
//
//}

public static function DisplayComment($UserCommentID){

    $db = Db::getInstance();
    $UserCommentID = intval($UserCommentID);
    $displaysql = $db->prepare ('SELECT usercomment.CommentContent, usercomment.readerID, personaldata.FirstName, personaldata.LastName, blogpost.BlogPostID, usercomment.CommentTimestamp'
        .'FROM usercomment'
        .'INNER JOIN reader ON reader.readerID=usercomment.readerID'
        .'INNER JOIN personaldata ON personaldata.PersonalDataID=reader.PersonalDataID'
        .'INNER JOIN blogpost ON blogpost.BlogPostID=usercomment.BlogPostID');
    foreach ($displaysql->fetchall() as $comment){
        $list [] = new comment ($comment['CommentContent'], $comment['FirstName'],$comment['LastName']);
    }
    return $list;

}

}