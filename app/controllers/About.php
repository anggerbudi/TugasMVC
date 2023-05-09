<?php

class About
{
    public function index($nama = 'Antonius', $pekerjaan = 'Coder', $umur = '21') {
        $this->view('about/index');
    }
    public function page() {
        $this->view('about/page');
    }
}