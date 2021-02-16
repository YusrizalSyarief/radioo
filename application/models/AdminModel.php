<?php
class AdminModel extends CI_Model
{
    public function getDataGaleri($limit, $start) 
   {
    //$x = $this->db->get('kategori_galeri')->result_array();
    $x = $this->db->select('*')->from('galeri')->join('kategori_galeri', ' galeri.ID_KATEGORI = kategori_galeri.ID_KATEGORI ' )->limit($limit, $start)->get()->result_array();
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

    
}

