<?php
class AdminModel extends CI_Model
{
    //galeri 
    public function getDataGaleri($limit, $start) 
   {
    //$x = $this->db->get('kategori_galeri')->result_array();
    $x = $this->db->select('*')->from('galeri')
    ->join('kategori_galeri', ' galeri.ID_KATEGORI = kategori_galeri.ID_KATEGORI ' )
    ->limit($limit, $start)
    ->order_by('galeri.ID_GALERI', 'DESC')->get()->result_array();
    $z = array($x, $this->db->get('kategori_galeri')->result_array()) ;
      
      return $z;
   }
   public function getCountDataGaleri() 
   {
      return $this->db->get('galeri')->num_rows();
   }
   public function tambahGaleri($namaBerkas)
    {
        $data = [
            
            "ID_KATEGORI" => $this->input->post('Kategori', true),
            "NAMA_FILE" => $namaBerkas,
            "KATEGORI" => 'audio',
            "JUDUL" => $this->input->post('JudulGaleri', true),
            "DESCK_GALERI" => $this->input->post('DeskripsiGaleri', true),
            //"TGL_REV_PENGAJUAN" => date("y-m-d"),
            "TANGGAL" => date("y-m-d"),
         ];
        $this->db->insert('galeri', $data);
    }
    public function tambahGaleriYt()
    {
        $data = [
            
            "ID_KATEGORI" => $this->input->post('KategoriYt', true),
            "NAMA_FILE" => $this->input->post('UrlYt', true),
            "KATEGORI" => 'youtube',
            "JUDUL" => $this->input->post('JudulGaleriYt', true),
            "DESCK_GALERI" => $this->input->post('DeskripsiGaleriYt', true),
            //"TGL_REV_PENGAJUAN" => date("y-m-d"),
            "TANGGAL" => date("y-m-d"),
         ];
        $this->db->insert('galeri', $data);
    }
    public function tambahKategoriGaleri()
    {
        $data = [
            
            "NAMA_KATEGORI" => $this->input->post('NamaKategori', true),
         ];
        $this->db->insert('kategori_galeri', $data);
    }
    public function hapusDataGaleri($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('galeri', ['ID_GALERI' => $id]);
    }
    public function getGaleriById($id)
   {
       return $this->db->get_where('galeri', ['ID_GALERI' => $id])->row_array();
   }

   public function ubahGaleriYt()
    {
        $data = [
            "ID_KATEGORI" => $this->input->post('KategoriYt', true),
            "NAMA_FILE" => $this->input->post('UrlYt', true),
            "JUDUL" => $this->input->post('JudulGaleriYt', true),
            "DESCK_GALERI" => $this->input->post('DeskripsiGaleriYt', true),
            
        ];

        $this->db->where('ID_GALERI', $this->input->post('idYt'));
        $this->db->update('galeri', $data);
    }

    public function ubahGaleri($namaBerkas)
    {
        $data = [
            "ID_KATEGORI" => $this->input->post('Kategori', true),
            "JUDUL" => $this->input->post('JudulGaleri', true),
            "DESCK_GALERI" => $this->input->post('DeskripsiGaleri', true),
            "NAMA_FILE" => $namaBerkas,
            
        ];

        $this->db->where('ID_GALERI', $this->input->post('id'));
        $this->db->update('galeri', $data);
    }
    // jadwal 
    public function getDataJadwal($limit, $start) 
    {
     //$x = $this->db->get('kategori_galeri')->result_array();
     $x = $this->db->select('*')->from('jadwal')
     ->join('penyiar', ' jadwal.ID_PENYIAR = penyiar.ID_PENYIAR ' )
     ->limit($limit, $start)
     ->order_by('jadwal.ID_JADWAL', 'DESC')
     ->get()
     ->result_array();
     $z = array($x, $this->db->get('penyiar')->result_array()) ;
       
       return $z;
    }
    public function getCountDataJadwal() 
   {
      return $this->db->get('jadwal')->num_rows();
   }
    public function tambahJadwal()
    {
        $data = [
            
            "ID_PENYIAR" => $this->input->post('Penyiar', true),
            "JUDUL_JADWAL" => $this->input->post('Judul', true),
            "TANGGAL_JADWAL" => $this->input->post('Tanggal', true),
            "WAKTU" => $this->input->post('Waktu', true),
            "DESCK_JADWAL" => $this->input->post('DeskripsiJadwal', true),
            
         ];
        $this->db->insert('jadwal', $data);
    }
    public function hapusDataJadwal($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('jadwal', ['ID_JADWAL' => $id]);
    }
    public function getJadwalById($id)
   {
       return $this->db->get_where('jadwal', ['ID_JADWAL' => $id])->row_array();
   }
   public function ubahJadwal()
    {
        $data = [
            "ID_PENYIAR" => $this->input->post('Penyiar', true),
            "JUDUL_JADWAL" => $this->input->post('Judul', true),
            "TANGGAL_JADWAL" => $this->input->post('Tanggal', true),
            "WAKTU" => $this->input->post('Waktu', true),
            "DESCK_JADWAL" => $this->input->post('DeskripsiJadwal', true),
            
        ];

        $this->db->where('ID_JADWAL', $this->input->post('idJadwal'));
        $this->db->update('jadwal', $data);
    }
    public function cariJadwal($nilai)
   {
      return $this->db->select('*')->from('jadwal')
         ->join('penyiar', 'jadwal.ID_PENYIAR = penyiar.ID_PENYIAR')
         ->like('JUDUL_JADWAL', $nilai, 'both')
         ->or_like('NAMA_PENYIAR', $nilai, 'both')
         ->order_by('jadwal.ID_JADWAL', 'DESC')
         ->get()->result();
   }
    //penyiar
    public function getDataPenyiar($limit, $start) 
    {
     //$x = $this->db->get('kategori_galeri')->result_array();
     $z = $this->db->order_by('penyiar.ID_PENYIAR', 'DESC')->get('penyiar',$limit, $start)->result_array();
     //$z = array($x, $this->db->get('penyiar')->result_array()) ;
       
       return $z;
    }
    public function tambahPenyiar($namaBerkas)
    {
        $data = [
            
            "NAMA_PENYIAR" => $this->input->post('Nama', true),
            "NO_TLP_PENYIAR" => $this->input->post('NoTlp', true),
            "DESCK" => $this->input->post('Biografi', true),
            "GAMBAR_PENYIAR" => $namaBerkas,
            "FACEBOOK" => $this->input->post('fb', true),
            "INSTAGRAM" => $this->input->post('ig', true),
            "TWITTER" => $this->input->post('twt', true),
         ];
         var_dump($data);
        $this->db->insert('penyiar', $data);
    }
    public function getCountDataPenyiar() 
   {
      return $this->db->get('penyiar')->num_rows();
   }
   public function hapusDataPenyiar($id)
    {
        try {
			// init bootstrapping phase
            $this->db->trans_start(FALSE);
			$this->db->delete('penyiar', ['ID_PENYIAR' => $id]);
            $this->db->trans_complete();
            
		} catch (Exception $e) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">gagal hapus</div>');
			redirect('admin/penyiar');	
		}
        
    }
    public function getPenyiarById($id)
   {
       return $this->db->get_where('penyiar', ['ID_PENYIAR' => $id])->row_array();
   }
   public function ubahPenyiar($namaBerkas)
    {
        $data = [
            "ID_PENYIAR" => $this->input->post('idPenyiar', true),
            "NAMA_PENYIAR" => $this->input->post('Nama', true),
            "NO_TLP_PENYIAR" => $this->input->post('NoTlp', true),
            "DESCK" => $this->input->post('Biografi', true),
            "GAMBAR_PENYIAR" => $namaBerkas,
            "FACEBOOK" => $this->input->post('fb', true),
            "INSTAGRAM" => $this->input->post('ig', true),
            "TWITTER" => $this->input->post('twt', true),
            
        ];

        $this->db->where('ID_PENYIAR', $this->input->post('idPenyiar'));
        $this->db->update('penyiar', $data);
    }
    public function cariPenyiar($nilai)
   {
      return $this->db->select('*')->from('penyiar')
         ->like('NAMA_PENYIAR', $nilai, 'both')
         ->or_like('NO_TLP_PENYIAR', $nilai, 'both')
         ->order_by('penyiar.ID_PENYIAR', 'DESC')
         ->get()->result();
   }

    //admin 
    public function getDataUser($limit, $start) 
    {
     //$x = $this->db->get('kategori_galeri')->result_array();
     $x = $this->db->select('*')->from('user')
     ->join('user_role', ' user.ID_ROLE = user_role.ID_ROLE ' )
     ->limit($limit, $start)
     ->order_by('user.ID_USER', 'DESC')->get()->result_array();
     $z = array($x, $this->db->get('user_role')->result_array()) ;
       
       return $z;
    }
    public function tambahUser($namaBerkas)
    {
        $data = [
            
            "ID_ROLE" => $this->input->post('KategoriUser', true),
            "EMAIL" => $this->input->post('Email', true),
            "NAMA" => $this->input->post('Nama', true),
            "PASSWORD" => $this->input->post('Password2', true),
            "NO_TLP" => $this->input->post('NoTlpUser', true),
            "USER_ACTIVE" => 1,
            "GAMBAR" => $namaBerkas,
         ];
         
        $this->db->insert('user', $data);
    }
    public function getCountUser($id) 
   {
      return $this->db->get_where('user', ['EMAIL' => $id])->num_rows();
   }
   public function getCountDataUser() 
   {
      return $this->db->get('user')->num_rows();
   }
   public function hapusDataUser($id)
   {
           
           $this->db->delete('user', ['ID_USER' => $id]);
          
   }
   public function getUserById($id)
   {
       return $this->db->get_where('user', ['ID_USER' => $id])->row_array();
   }
   public function ubahPass()
    {
        $data = [
            "PASSWORD" => $this->input->post('Ubahpassword2', true),
            
        ];

        $this->db->where('ID_USER', $this->input->post('idGantiPass'));
        $this->db->update('user', $data);
    }

    //buku tamu
    public function getDataTamu($limit, $start) 
    {
     //$x = $this->db->get('kategori_galeri')->result_array();
     
     $z = $this->db->order_by('buku_tamu.ID_TAMU', 'DESC')->get('buku_tamu',$limit, $start)->result_array(); ;
       
        return $z;
    }
    public function getCountDataTamu() 
   {
      return $this->db->get('buku_tamu')->num_rows();
   }
   public function getTamuById($id)
   {
       return $this->db->get_where('buku_tamu', ['ID_TAMU' => $id])->row_array();
   }
}

