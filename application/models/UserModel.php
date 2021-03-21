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
        ->order_by('galeri.TANGGAL', 'DESC')
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

        $email = $this->input->post('emailTamu', true);
        $cek = $this->db->get_where('buku_tamu', ['EMAIL_TAMU' => $email], ['IS_READ' => 0])->row_array();
        if($cek['EMAIL_TAMU'] == $email && $cek['IS_READ'] == 0){

            $this->session->set_flashdata('buku', 'Pesan anda sebelumnya belum dibaca oleh pihak admin, Mohon tunggu untuk menghindari spam. Terimakasih');
			redirect('user/bukutamu');
        } else{
            $data = [
            
                "NAMA_TAMU" => $this->input->post('namaTamu', true),
                "EMAIL_TAMU" => $email,
                "PESAN" => $this->input->post('isiTamu', true),
                "IS_READ" => 0
             ];
            $this->db->insert('buku_tamu', $data);
            $this->session->set_flashdata('buku', 'Form Berhasil Dikirim');
			redirect('user/bukutamu');
        }
    }

    // Mengambil Data Penyiar
    public function getPenyiar(){

        $queryPenyiar = " SELECT * FROM `penyiar` ORDER BY 'ID_GALERI' DESC LIMIT 3";
        $penyiar = $this->db->query($queryPenyiar)->result_array(); 

        return $penyiar;
    }

    // Mengambil Data Jadwal
    public function getJadwal(){

        $queryJadwal = $this->db->select('*')->from('jadwal')
        ->join('penyiar', ' jadwal.ID_PENYIAR = penyiar.ID_PENYIAR ' )
        ->order_by('jadwal.ID_PENYIAR', 'DESC')->get()->result_array();
        return $queryJadwal;
    }

    // Mengambil File
    public function getAudio(){

        $queryAudio = " SELECT * FROM `galeri` WHERE `KATEGORI` LIKE 'audio' ORDER BY 'ID_GALERI' DESC LIMIT 5";
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
    public function getStream()
    {
        return $this->db->order_by('ID_STREAM', 'DESC')->get('link_stream')->row_array();
    }
    public function getInfoUser()
   {
	 
		echo json_encode($this->AdminModel->getUserById($_POST['id']));
		
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

        $this->db->where('ID_USER', $this->input->post('idPro'));
        $this->db->update('user', $data);
    }

    public function updateRatingW($idW,$web)
    {
        $cek = $this->db->get_where('rating', ['ID_USER' => $idW], ['KATEGORI_RATING' => $web])->row_array();
        if($cek['ID_USER'] == $idW && $cek['KATEGORI_RATING'] == $web){
            $ratingW = [
                'ID_USER' => $idW,
                'KATEGORI_RATING' => $web,
                'RATING' => $this->input->post('ratingW'),
                'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaW', true))
            ];
            $this->db->where('ID_USER', $idW);
            $this->db->where('KATEGORI_RATING', $web);
            $this->db->update('rating', $ratingW);
        } else {
            $ratingW = [
                'ID_USER' => $idW,
                'KATEGORI_RATING' => $web,
                'RATING' => $this->input->post('ratingW'),
                'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaW', true))
            ];
            $this->db->insert('rating', $ratingW);
        }
    }

    public function updateRatingJ($idJ,$Jadwal)
    {
        $cek = $this->db->get_where('rating', ['ID_USER' => $idJ], ['ID_JADWAL' => $Jadwal])->row_array();
        if($cek['ID_USER'] == $idJ && $cek['ID_JADWAL'] == $Jadwal){
            $ratingJ = [
                'ID_JADWAL' => $Jadwal,
                'ID_USER' => $idJ,
                'KATEGORI_RATING' => null,
                'RATING' => $this->input->post('ratingJ'),
                'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaR', true))
            ];
            $this->db->where('ID_USER', $idJ);
            $this->db->where('ID_JADWAL', $Jadwal);
            $this->db->update('rating', $ratingJ);
        } else {
            $ratingJ = [
                'ID_JADWAL' => $Jadwal,
                'ID_USER' => $idJ,
                'KATEGORI_RATING' => null,
                'RATING' => $this->input->post('ratingJ'),
                'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaR', true))
            ];
            $this->db->insert('rating', $ratingJ);
        }
    }

    public function komentar()
    {
        $kw = $this->input->post('floatingTextareaW', true);
        $kr = $this->input->post('floatingTextareaR', true); 
        if($kw || $kr){
            if($kw != null){
                $komentar = [
                    'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaW', true))
                ];
                $this->db->insert('komentar', $komentar);
                $kw = null;
            } else if($kr != null){
                $komentar = [
                    'KOMENTAR' => htmlspecialchars($this->input->post('floatingTextareaR', true))
                ];
                $this->db->insert('komentar', $komentar);
                $kr = null;
            }
            
        }
        
    }

}
?>