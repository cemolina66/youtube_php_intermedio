<?php

function render()
{

    $about = getAbout();

    include_once("views/about.php");
}

function getAbout()
{

    $about = "😎 Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores dicta ab assumenda molestiae illo veniam, blanditiis laborum? Quibusdam, esse nam laboriosam harum, quae molestiae obcaecati expedita veritatis officia iure impedit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt rerum corporis harum eius sed? Harum ex accusamus, necessitatibus reprehenderit quo sint exercitationem asperiores autem enim ipsam architecto voluptas rem? Natus!";

    return $about;
}
