<?php

class ClientsModel
{
    private $table = "katalog_klien";
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllClients()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultSet();
    }

    public function getDetailsById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahdataklien($data)
    {
        $query = "INSERT INTO " . $this->table . "
                    VALUES
                    ('', :nama_client, :email_client, :jenis_order, :tgl_order, :sumber_order, :domain_tujuan, :permalink, :price, :status_order, :tgl_bayar, :id_transaksi, :invoice_link, :acc_paypal_client, :owner_domain, :admin, :glad, :note)";
        
        
        $this->db->query($query);
        $this->db->bind('nama_client', $data['nama_client']);
        $this->db->bind('email_client', $data['email_client']);
        $this->db->bind('jenis_order', $data['jenis_order']);
        $this->db->bind('tgl_order', $data['tgl_order']);
        $this->db->bind('sumber_order', $data['sumber_order']);
        $this->db->bind('domain_tujuan', $data['domain_tujuan']);
        $this->db->bind('permalink', $data['permalink']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('status_order', $data['status_order']);
        $this->db->bind('tgl_bayar', $data['tgl_bayar']);
        $this->db->bind('id_transaksi', $data['id_transaksi']);
        $this->db->bind('invoice_link', $data['invoice_link']);
        $this->db->bind('acc_paypal_client', $data['acc_paypal_client']);
        $this->db->bind('owner_domain', $data['owner_domain']);
        $this->db->bind('admin', $data['admin']);
        $this->db->bind('glad', $data['glad']);
        $this->db->bind('note', $data['note']);
        
        $this->db->execute();

        $row = $this->db->rowCount();
        if($row > 0 ){
            Flasher::setFlash('Data Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL );
            exit;             
        }else{
            Flasher::setFlash('Data Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL );
            exit;
        }
    }

    public function hapusdataklien($id)
    {
        $query = "DELETE FROM " .$this->table." WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

}
