<?php

    function guestbook ()
    {
        return file(__DIR__ . '/data/message.txt', FILE_IGNORE_NEW_LINES);
    }

