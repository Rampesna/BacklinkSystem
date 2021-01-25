<?php

require_once('../../wp-config.php');

try {
    $db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);

    if (isset($_POST["postList"]) && $_POST["postList"] != "") {
        $query = $db->query("SELECT * FROM wp_posts WHERE ID NOT IN (" . $_POST['postList'] . ") AND post_type = 'post' ORDER BY RAND() LIMIT 1", PDO::FETCH_ASSOC);
    } else {
        $query = $db->query("SELECT * FROM wp_posts WHERE post_type = 'post' ORDER BY RAND() LIMIT 1", PDO::FETCH_ASSOC);
    }

    if ($query->rowCount()) {
        foreach ($query as $row) {
            $oldPostContent = $row["post_content"];
            $ID = $row["ID"];
        }
    }

    if ($_POST["add_type"] == 1) {
        $newPostContent = $_POST["introduction_text"];
    } else {
        $newPostContent = $oldPostContent . '<br><div style="display:none">' . $_POST["introduction_text"] . '</div>';
    }

    $query = $db->prepare("UPDATE wp_posts SET post_content = :new_post_content WHERE ID = :ID");
    $update = $query->execute(array(
        "ID" => $ID,
        "new_post_content" => $newPostContent
    ));
    if ($update) {
        $query = $db->query("SELECT * FROM wp_posts WHERE ID = '{$ID}'")->fetch(PDO::FETCH_ASSOC);
        if ( $query ){
            $result = [
                'post_id' => $ID,
                'url' => $query['post_name']
            ];
            print_r(json_encode($result));
        }
//        print_r($ID);
    }

} catch (PDOException $e) {
    print $e->getMessage();
}
