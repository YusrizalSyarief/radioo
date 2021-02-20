<?php 
class UserModel extends CI_Model
{

    // mengambil format file
    public function getDataFormat(){

        // $jenis = 'youtube';
        $queryFormat = " SELECT * FROM `galeri` WHERE `KATEGORI` LIKE 'youtube' ";
        $format = $this->db->query($queryFormat)->result_array();

        return $format;
    }

    // mengambil kategori galeri
    public function getKategori(){

        $queryKategori = " SELECT * FROM `kategori_galeri` ";
        $kategori = $this->db->query($queryKategori)->result_array(); 

        return $kategori;
    }

    public function bukuTamu(){

        $data = [
            
            "NAMA_TAMU" => $this->input->post('namaTamu', true),
            "EMAIL_TAMU" => $this->input->post('emailTamu', true),
            "PESAN" => $this->input->post('isiTamu', true)
         ];
        $this->db->insert('buku_tamu', $data);

    }


}
?>