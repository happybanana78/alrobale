<?php

namespace alrobale\slideshow;

class Slide {

    private $path;
    private $imgList;
    
    public function __construct($path)
    {   
        $splittedPath = str_split($path);
        if (end($splittedPath) != "/") {
            $this->path = $path . "/*";
        } else {
            $this->path = $path . "*";
        }
        $this->imgList = array();
    }

    public function loopDir() {
        
        foreach (glob($this->path) as $file) {
            if (!is_dir($file)) {
                array_push($this->imgList, $file);
            }
        }

        return $this->imgList;
    }
}