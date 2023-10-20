<?php

function render()
{

    $contacts = getContact();

    include_once("views/contact.php");
}

function getContact()
{

    $contact = [
        ['name' => 'Usuario 1', 'email' => 'usuario1@example.com'],
        ['name' => 'Usuario 2', 'email' => 'usuario2@example.com'],
    ];

    return $contact;
}
