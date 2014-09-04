<?php 
    function get_post_by_id($id)
    {
        $link = open_database_connection();

        $id = intval($id);
        $query = 'SELECT cur_timestamp, title FROM post WHERE id = '.$id;
        $result = $link->query($query);


        $row = $result->fetch_assoc();

        $result->free();
        close_database_connection($link);

        return $row;

    }

    function get_all_posts()
    {
        $link = open_database_connection();
        $query = 'SELECT id, title FROM post';

        $sql = <<<SQL
                SELECT id, title
                FROM `post`
SQL;

        $result = $link->query($sql);

        $posts = array();
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
        
        $result->free();
        close_database_connection($link);
        return $posts;
    }

    function open_database_connection()
    {
        $link = new mysqli('localhost', 'root', 'newpwd', 'blog_db');
        if ($link->connect_errno) {
            die('Unable to connect to database. Reason: [' . $link->connect_error . ']');
        } 
        return $link;
    }
    function close_database_connection($link)
    {
        $link->close();
    }
?>