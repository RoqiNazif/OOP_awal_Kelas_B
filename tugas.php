//Tugas Function

<!DOCTYPE html>
<html>
<body>

<?php
class Mahasiswa {
  // Properties
  private $Nama;
  private $NIM;
  private $Mata_Kuliah;
  private $Dosen_Killer;

  // Methods
  function set_Nama($Nama) {
    $this->Nama = $Nama;
  }
  function get_Nama() {
    return $this->Nama;
  }
  function set_NIM($NIM) {
    $this->NIM = $NIM;
  }
  function get_NIM() {
    return $this->NIM;
  }
  function set_Mata_Kuliah($Mata_Kuliah) {
    $this->Mata_Kuliah = $Mata_Kuliah;
  }
  function get_Mata_Kuliah() {
    return $this->Mata_Kuliah;
  }
  function set_Dosen_Killer($dk) {
    $this->Dosen_Killer = $dk;
  }
  function get_Dosen_Killer() {
    return $this->Dosen_Killer;
  }
}

$dina = new Mahasiswa();
$dina->set_Nama('dina');
$dina->set_NIM('2255201057');
$dina->set_Mata_Kuliah('PBO');
$dina->set_Dosen_Killer('PakArif');

echo $dina->get_Nama();
echo "<br>";
echo $dina->get_NIM();
echo "<br>";
echo $dina->get_Mata_Kuliah();
echo "<br>";
echo $dina->get_Dosen_Killer();
?>
 
</body>
</html>
