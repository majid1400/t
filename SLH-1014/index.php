<?php
require_once 'posts.php';
$post = get_post();

while ($posts = array_pop($post)){
    echo '<div style="background-color: #dcdcdc; padding: 10px;">' . $posts['post_title'].'</div>';
    echo '<div style="background-color: #b4f6af; padding: 10px;">' . $posts['post_author'].'</div>';
    echo '<div style="background-color: #7dafdc; padding: 10px;">' . $posts['post_data'].'</div>'.'<hr>';
}