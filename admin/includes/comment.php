<?php

class Comment extends DbObject
{

    protected static $db_table="comments";
    protected static $db_table_fields =array('photo_id','author','body');
    public $id,$photo_id,$author,$body;


    public static function createComment($photo_id, $author="Example", $body="")
    {

        if (!empty($photo_id) && !empty($author) && !empty($body)) {

            $comment=new Comment();

            $comment->photo_id=(int)$photo_id;
            $comment->author=$author;
            $comment->body=$body;

            return $comment;
        }
        else {
            return false;
        }

    }

    public static function findTheComments($photo_id=0)
    {
        global $database;

        $sql="SELECT * FROM ".self::$db_table." WHERE photo_id=".$database->escapeString($photo_id)." ORDER BY photo_id ASC";
        return self::findByQuery($sql);
    }


}
