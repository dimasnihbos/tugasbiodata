<?php

class mahasiswa{
    public $nim = "123";
    public $nama = "dimas";
    public $jurusan = "erpeel";
    function tampil_biodata(){
        echo $this-> nim;
        echo $this-> nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();