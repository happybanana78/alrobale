<?php

namespace alrobale;

class Menu {
    private $menuName;
    private $menuPath;

    public function setName($name) {
        $this->menuName = $name;
    }

    public function setPath($path) {
        $this->menuPath = $path;
    }

    public function getName() {
        return $this->menuName;
    }

    public function getPath() {
        return $this->menuPath;
    }
}