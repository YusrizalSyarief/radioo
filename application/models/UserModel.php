<?php 
class UserModel extends CI_Model
{

    // Mengambil Format File
    public function getDataFormat(){

        // $jenis = 'youtube';
        $queryFormat = " SELECT * FROM `galeri` WHERE `KATEGORI` LIKE 'youtube' ";
        $format = $this->db->query($queryFormat)->result_array();

        return $format;
    }

    // Mengambil Data Kategori Galeri
    public function getKategori(){

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
			'USER_ACTIVE' => 1,
			'GAMBAR' => 'default.jpg'

        ];

        var_dump($data);
        $this->db->insert('user', $data);
    }

    // public function getToken(){

    //     $token = base64_encode(random_bytes(32));
	// 		$user_token = [
	// 			'EMAIL_TOKEN' =>  htmlspecialchars($this->input->post('EmailU', true)),
	// 			'TOKEN' => $token

	// 		];

    //     $this->db->insert('user_token', $user_token);
    //     return $token;
    // }

}
?>