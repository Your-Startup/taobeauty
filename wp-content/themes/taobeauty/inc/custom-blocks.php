<?php

class CustomBlock {
    public function __construct(string $type, mixed $data) 
    {
        $this->type = $type;
        $this->data = $data;
    }

    public function getTemlatePath()
    {
        if (!empty($this->temlatePath)) {
            return $this->temlatePath;
        }

        if (empty($this->type)) {
            return false;
        }

        $path = get_template_directory() . '/template-parts/components/custom-blocks/' . $this->type . '.php';

        if (file_exists($path)) {
            return $this->temlatePath = $path;
        }

        return false;
    }

    public function createBlock()
    {
        if (empty($this->type) || empty($this->data)) {
            return false;
        }

        if ($this->getTemlatePath()) {
            include $this->temlatePath;
        }

        return false;
    }
}

