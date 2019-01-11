<?php

class File
{
    private $length;
    private $sent;

    /**
     * @return mixed
     */
    public function length()
    {
        return $this->length;
    }

    /**
     * @return mixed
     */
    public function sent()
    {
        return $this->sent;
    }
}
