<?php

class TextFile
{
    public $path;
    protected $data;

    public function getData()
    {
        return $this->data;
    }

    public function append($text)
    {
        $this->data[] = $text;
        return $this;
    }

    public function save()
    {
        file_put_contents($this->path, implode("\n", $this->data));
    }
}