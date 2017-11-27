<?php

function getUserList()
{
    return [
        'Jane' => [
            'name' => 'Патрик',
            'hash' => '$2y$10$e3eBEw/sOr3H8JMfOewmaeC/HGN0rgpG8dckOPe9rGX4oNdp5P52.'
        ],
        'Lisbon' => [
            'name' => 'Тереза',
            'hash' => '$2y$10$VwOkfu7yrCItZ4gXMpqFYO87jHi17IBYDGQCfjOlPqf6KeG0AJZym'
        ],
        'Admin' => [
            'name' => 'Слава',
            'hash' => '$2y$10$b3eGVATvzyMsxPjo8NlyfeEoXkHPySmtVFvcwvFIubkLOycXFcnn2'
        ]
    ];
}

function existUser($login)
{
    if (isset(getUserList()[$login])) {
        return true;
    }
    return false;
}

function checkPassword($login, $password)
{
    if (existUser($login)) {
        $hash = getUserList()[$login]['hash'];
        if (password_verify($password, $hash)) {
            return true;
        }
    }
    return false;
}

function getCurrentUser()
{
    if (!empty($_SESSION['login']) && existUser($_SESSION['login'])) {
        return getUserList()[$_SESSION['login']]['name'];
    }
    return null;
}