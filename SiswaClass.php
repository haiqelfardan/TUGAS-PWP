<?php
class Siswa
{
    public function __construct()
    {
        $host = "localhost";
        $dbname = "sekolah";
        $username = "root";
        $password = "";
        $this->db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    }
  
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM tb_siswa");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}
?>