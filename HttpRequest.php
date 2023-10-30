<?php


class HttpRequest
{
    private $_buffer = [];
    private $_patch = [];
    private $_header = [];


    function __construct()
    {
        parse_str(file_get_contents('php://input'), $this->_patch);
        $this->getRequestHeaders();
        $this->execute();
        return $this;
    }
    private function execute()
    {
        foreach ($_GET as $index => $item) {
            $this->_buffer[$index] = $item;
        }
        foreach ($_POST as $index => $item) {
            $this->_buffer[$index] = $item;
        }
        if (isset($_SESSION)) {
            foreach ($_SESSION as $index => $item) {
                $this->_buffer[$index] = $item;
            }
        }

        foreach ($_FILES as $index => $item) {
            $this->_buffer[$index] = $item;
        }
        foreach ($this->_patch as $index => $item) {
            $this->_buffer[$index] = $item;
        }
        $json = json_decode(file_get_contents('php://input'), true);
        if (is_array($json)) {
            foreach ($json  as $index => $item) {
                $this->_buffer[$index] = $item;
            }
        }

        foreach ($this->_header as $index => $item) {
            $this->_buffer[$index] = $item;
        }

        foreach ($_SERVER as $index => $item) {
            $this->_buffer[$index] = $item;
        }
    }
    private function getRequestHeaders()
    {
        $headers = array();
        foreach ($_SERVER as $key => $value) {
            if (substr($key, 0, 5) <> 'HTTP_') {
                // continue;
            }
            $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
            $headers[$header] = $value;
        }
        foreach (getallheaders() as $key => $value) {
            if (!isset($headers[$key])) {
                $headers[$key] = $value;
            }
        }


        $this->_header = $headers;
    }
    public function add($indexName, $value)
    {
        foreach ($this->_buffer  as $index => $item) {
            if ($indexName == $index) {
                $this->_buffer[$index] = $value;
                return true;
            }
        }
        $this->_buffer[$indexName] = $value;
        return  true;
    }
    public function getBy($indexName)
    {
        foreach ($this->_buffer as $index => $item) {
            if ($indexName == $index) {
                return $item;
            }
        }

        return null;
    }



    public function getAll()
    {
        return $this->_buffer;
    }
}
