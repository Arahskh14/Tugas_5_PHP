<?php

class Mahasiswa
{
    public $nim;
    public $nama;
    public $kuliah;
    public $mataKuliah;
    public $nilai;

    public function __construct($nim, $nama, $kuliah, $mataKuliah, $nilai)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function getStatus()
    {
        return ($this->nilai >= 65) ? "Lulus" : "Tidak Lulus";
    }

    public function getGrade()
    {
        if ($this->nilai >= 85) {
            return "A (Sangat Memuaskan)";
        } elseif ($this->nilai >= 70) {
            return "B (Memuaskan)";
        } elseif ($this->nilai >= 69) {
            return "C (Cukup)";
        } elseif ($this->nilai >= 60) {
            return "D (Kurang)";
        } else {
            return "E (Tidak Lulus)";
        }
    }

    public function getPredikat()
    {
        if ($this->nilai >= 85) {
            return "Sangat Memuaskan";
        } elseif ($this->nilai >= 70) {
            return "Memuaskan";
        } elseif ($this->nilai >= 69) {
            return "Cukup";
        } elseif ($this->nilai >= 60) {
            return "Kurang";
        } else {
            return "Tidak Lulus";
        }
    }
}

?>
