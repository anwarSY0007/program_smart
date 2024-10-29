<?php

class Template {
    private $layout;
    private $title;
    private $content;

    public function __construct($layout) {
        $this->layout = $layout;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function render() {
        ob_start();
        include $this->content; // Sertakan konten dinamis
        $content = ob_get_clean(); // Ambil output konten

        // Sertakan layout
        include $this->layout;
    }
}