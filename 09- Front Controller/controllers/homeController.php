<?php

function render()
{
    $home = getHome();

    include_once("views/home.php");
}

function getHome()
{

    $home = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dicta ab assumenda molestiae illo veniam, blanditiis laborum? Quibusdam, esse nam laboriosam harum, quae molestiae obcaecati expedita veritatis officia iure impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt rerum corporis harum eius sed? Harum ex accusamus, necessitatibus reprehenderit quo sint exercitationem asperiores autem enim ipsam architecto voluptas rem? Natus!";

    return $home;
}
