<?php

class Uploader
{
    public $form;

    public function __construct($nameForm)
    {
        $this->form = $nameForm;
    }

    public function isUploaded()
    {
        if (isset($_FILES[$this->form]) && 0 == $_FILES[$this->form]['error']) {
            if ($_FILES[$this->form]['type'] == 'image/png' || $_FILES[$this->form]['type'] == 'image/jpeg') {
                return true;
            }
        }
        return false;
    }

    public function upload()
    {
        if ($this->isUploaded()) {
            return move_uploaded_file($_FILES[$this->form]['tmp_name'],
            __DIR__ . '/../img/' . $_FILES[$this->form]['name']);
        }
        return false;
    }
}
