<?php

class M_gambar extends CI_Model
{
    public function insert($data)
    {
        $this->db->insert('gambar', $data);
    }

    public function delete($id)
    {
        $nama_gambar = $this->db->query("select nama from gambar where id='$id'");
        $this->db->where('id', $id);
        $this->db->delete('gambar');

        return $nama_gambar;
    }

    public function cek_gambar($id)
    {
        return $this->db->query("select id,nama from gambar where id = '$id'");
    }

    public function gambarAlbum()
    {
        return $this->db->query("SELECT * FROM gambar WHERE deskripsi is not null and deskripsi != '' ");
    }
}
