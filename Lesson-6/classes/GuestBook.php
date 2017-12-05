<?php
require __DIR__ . '/TextFile.php';

class GuestBook extends TextFile
{
   public function __construct($path)
   {
        $this->path = $path;
        $this->data = file($this->path, FILE_IGNORE_NEW_LINES);
   }
}