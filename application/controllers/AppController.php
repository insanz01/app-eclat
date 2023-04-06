<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AppController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    if(!$this->session->userdata('SESS_KANIGARA_USERID')) {
      redirect('auth');
    }

    // $this->load->model('AppModel', 'app_m');
  }

  public function index()
  {
    // $data['total_bpd'] = $this->app_m->get_total_biaya_perjalanan_dinas();
    // $data['total_lpd'] = $this->app_m->get_total_laporan_perjalanan_dinas();
    // $data['total_sppd'] = $this->app_m->get_total_surat_perintah_perjalanan_dinas();
    // $data['total_spt'] = $this->app_m->get_total_surat_perintah_tugas();

    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/dashboard');
    $this->load->view('templates/panel/footer');
  }

  public function unggah() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/unggah/index');
    $this->load->view('templates/panel/footer');
  }

  public function do_unggah() {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('userfile'))
    {
      $error = array('error' => $this->upload->display_errors());

      $this->session->set_flashdata("pesan", "<div class='alert alert-danger' role='alert'>Gagal Upload Data</div>");

      // $this->load->view('upload_form', $error);
    }
    else
    {
      $data = array('upload_data' => $this->upload->data());

      $this->session->set_flashdata("pesan", "<div class='alert alert-success' role='alert'>Berhasil Upload Data</div>");

      // $this->load->view('upload_success', $data);
    }

    redirect('panel/unggah');
  }

  public function laporan() {
    $this->load->view('templates/panel/header');
    $this->load->view('templates/panel/sidebar');
    $this->load->view('templates/panel/navbar');
    $this->load->view('app/laporan/index');
    $this->load->view('templates/panel/footer');
  }
}
