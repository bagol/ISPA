<?php

class M_Artikel extends CI_Model
{
    public function get_all()
    {
        return $this->db->query('SELECT a.judul as judul, a.isi_artikel as isi, b.nama as nama_gambar, a.tanggal as tanggal, a.hit_view as hit,a.id as artikel_id,b.id as gambar_id , a.penulis as penulis FROM artikel a INNER JOIN gambar b on a.gambar_id=b.id ');
    }

    public function get_one($id)
    {
        return $this->db->query("SELECT a.judul as judul, a.isi_artikel as isi, b.nama as nama_gambar, a.tanggal as tanggal, a.hit_view as hit,a.id as artikel_id,b.id as gambar_id , a.penulis as penulis FROM artikel a INNER JOIN gambar b on a.gambar_id=b.id where a.id='$id'");
    }

    public function readmore($id)
    {
        $this->db->query("update artikel set hit_view= hit_view+1 where id='$id'");

        return $this->get_one($id);
    }

    public function popular($limit)
    {
        return $this->db->query('SELECT a.judul as judul, a.isi_artikel as isi, b.nama as nama_gambar, a.tanggal as tanggal, a.hit_view as hit,a.id as artikel_id,b.id as gambar_id , a.penulis as penulis FROM artikel a INNER JOIN gambar b on a.gambar_id=b.id GROUP by hit desc LIMIT '.$limit);
    }

    public function insert($data)
    {
        $this->db->insert('artikel', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('artikel', $data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
    }
}
