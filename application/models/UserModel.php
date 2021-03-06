<?php 
class UserModel extends CI_Model
{

    // Mengambil Format File
    public function getKategori0(){

        $queryKategori0 = " SELECT * FROM `galeri` Join `kategori_galeri` ON `galeri`.`ID_KATEGORI` = `kategori_galeri`.`ID_KATEGORI` ";
        $kategori = $this->db->query($queryKategori0)->result_array();

        return $kategori;
    }

    // Mengambil Format File
    public function getKategori1($kate){

        return $this->db->select('*')->from('galeri')
        ->join('kategori_galeri', 'galeri.ID_KATEGORI = kategori_galeri.ID_KATEGORI')
        ->WHERE('KATEGORI', $kate)
        ->get()->result_array();
    }

    // Mengambil Data Kategori Galeri
    public function getFormat(){

        $queryKategori = " SELECT * FROM `kategori_galeri` ";
        $kategori = $this->db->query($queryKategori)->result_array(); 

        return $kategori;
    }

    // kirim data bukuTamu
    public function bukuTamu(){

        $data = [
            
            "NAMA_TAMU" => $this->input->post('namaTamu', true),
            "EMAIL_TAMU" => $this->input->post('emailTamu', true),
            "PESAN" => $this->input->post('isiTamu', true)
         ];
        $this->db->insert('buku_tamu', $data);

    }

    // Mengambil Data Penyiar
    public function getPenyiar(){

        $queryPenyiar = " SELECT * FROM `penyiar` ";
        $penyiar = $this->db->query($queryPenyiar)->result_array(); 

        return $penyiar;
    }

    // Mengambil Data Jadwal
    public function getJadwal(){

        $queryJadwal = " SELECT * FROM `jadwal` ";
        $jadwal = $this->db->query($queryJadwal)->result_array(); 

        return $jadwal;
    }

    // Mengambil File
    public function getAudio(){

        $queryAudio = " SELECT * FROM `galeri` WHERE `KATEGORI` LIKE 'audio' ";
        $audio = $this->db->query($queryAudio)->result_array();

        return $audio;
    }

    // Mengambil Role
    public function getRole(){

        $queryRole = " SELECT `user_menu`.`id_menu`, `nama_menu` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id_menu` = `user_access_menu`.`id_menu` WHERE `user_access_menu`.`id_role` = 1 ORDER BY `user_access_menu`.`id_menu` ASC ";
        $role = $this->db->query($queryRole)->result_array();

        return $role;
    }

    // Mengambil Menu User
    public function getMenu(){
        
        $querySubMenu = " SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`id_menu` = `user_menu`.`id_menu` WHERE `user_sub_menu`.`id_menu` = {$m['id_menu']} AND `user_sub_menu`.`sub_active` = 1 AND `user_sub_menu`.`id_menu` != 1 AND `user_sub_menu`.`id_menu` != 2 ";
        $menu = $this->db->query($querySubMenu)->result_array();

        return $menu;
    }

    // Register Akun User
    public function register(){

        $data = [
            
            'ID_ROLE' => 3,
            'EMAIL' => htmlspecialchars($this->input->post('EmailU', true)),
            'NAMA' => htmlspecialchars($this->input->post('NamaU', true)),
            'PASSWORD' => password_hash($this->input->post('passwordR'),PASSWORD_DEFAULT),
            'NO_TLP' => ' ',
			'USER_ACTIVE' => 0,
			'GAMBAR' => 'default.jpg'

        ];

        var_dump($data);
        $this->db->insert('user', $data);
    }

    // Mendapatkan IP Pengunjung
    public function ipAdd($ip){

        $data = [

            'IP' => $ip,
            'TANGGAL_IP' => date("y-m-d")

        ];
        // var_dump($data);
        $this->db->insert('user_ip', $data);
    }

    public function getKategori($kat){
        $queryKategori = " SELECT * FROM `galeri` JOIN `kategori_galeri` ON `galeri`.`ID_KATEGORI` = `kategori_galeri`.`ID_KATEGORI` where `KATEGORI` = $kat ";
        $kategori = $this->db->query($queryKategori)->result_array();

        return $kategori;
    }

    public function getUserById($id)
   {
        return $this->db->select('*')->from('user')
        ->join('user_role', 'user.ID_ROLE = user_role.ID_ROLE')
        ->where('ID_USER', $id)
        ->get()->row_array();
   }

   public function ubahProfil($namaBerkas)
    {
        $data = [
            
            "EMAIL" => $this->input->post('emailR', true),
            "NAMA" => $this->input->post('namaR', true),
            "NO_TLP" => $this->input->post('notlpR', true),
            "GAMBAR" => $namaBerkas,
            
        ];

        $this->db->where('ID_USER', $this->input->post('idR'));
        $this->db->update('user', $data);
    }

}
?>