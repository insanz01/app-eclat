<?php

class PrintController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("ProdukModel", "produk_m");
    $this->load->model("CabangModel", "cabang_m");
    // $this->load->model("CabangModel", "cabang_m");
  }

  public function produk() {
    $data['all_laporan'] = $this->produk_m->get_all();

    $this->load->view("app/print/produk", $data);
  }

  public function cabang() {
    $data['all_laporan'] = $this->cabang_m->get_all();;

    $this->load->view("app/print/cabang", $data);
  }

  public function transaksi() {
    $data['all_laporan'] = $this->transaksi_m->get_all_report();;

    $this->load->view("app/print/transaksi", $data);
  }

  public function sewa_masuk() {
    $data['all_laporan'] = [];

    $this->load->view("app/print/sewa_masuk", $data);
  }
}