<?php

namespace alrobale\menu;

use alrobale\menu\Menu as Menu;

class MenuController {
    private $menuList;
    private $path;
    private $isOk;

    public function __construct()
    {
        $this->menuList = array();
    }

    public function setPath($path) {
        if ($this->checkPath($path)) {
            $splittedPath = str_split($path);
            if (end($splittedPath) != "/") {
                $this->path = $path . "/*";
            } else {
                $this->path = $path . "*";
            }
            $this->isOk = true;
        } else {
            $this->isOk = false;
            return 4;   //path is not a directory error code
            exit();
        }
    }

    public function setList() { 
        foreach (glob($this->path) as $menu) {
            $menuItem = new Menu();
            if (!is_dir($menu)) {
                $formattedName = $this->menuNameFormat($menu);
                $menuItem->setPath($menu);
                $menuItem->setName($formattedName);
                array_push($this->menuList, $menuItem);
            }
        }
    }

    public function getList() {
        if ($this->isOk) {
            return $this->menuList;
        }
    }

    private function menuNameFormat($menu) {
        $stringProcessing1 = explode("/", $menu);
        $stringProcessing2 = end($stringProcessing1);
        $stringProcessing3 = explode(".", $stringProcessing2);
        $stringProcessing4 = $stringProcessing3[0];
        $stringProcessing5 = str_replace("_", " ", $stringProcessing4);
        return $stringProcessing5;
    }

    private function checkPath($path) {
        if (is_dir($path)) {
            return true;
        } else {
            return false;
        }
    }
}