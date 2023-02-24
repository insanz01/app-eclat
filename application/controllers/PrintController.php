<?php

class PrintController extends CI_Controller {
  public function __construct() {
    parent::__construct();

    $this->load->model("ProdukModel", "produk_m");
    $this->load->model("CabangModel", "cabang_m");
    $this->load->model("TransaksiModel", "transaksi_m");
  }

  public function index() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/print/setup');
    $this->load->view('templates/panel/footer');
  }

  public function setup() {
    $jenisLaporan = $this->input->post("jenis_laporan");

    switch($jenisLaporan) {
      case "produk":
        $this->produk();
        break;
      case "cabang":
        $this->cabang();
        break;
      case "transaksi":
        $this->transaksi();
        break;
      case "sewa_masuk":
        // $this->sewa_masuk();
        var_dump("sementara fitur ini ga ada, aplikasi xampp nda rusak"); die;
        break;
    }
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