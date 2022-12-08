<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_kriteria');
        $this->load->model('M_alternatif');
        $this->load->model('M_proses');
        $this->load->model('M_kantor');
        $this->load->model('M_supir');
        $this->load->model('M_loader');
        $this->load->model('M_excavator');
        $this->load->model('M_pengawas_pu');
        $this->load->model('M_labor');
        $this->load->model('M_limbah');
        $this->load->model('M_security');
        $this->load->model('M_maintenance');
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['sortasi'] = $this->M_alternatif->countAlternatif('sortasi');
        $data['proses'] = $this->M_alternatif->countAlternatif('proses');
        $data['kantor'] = $this->M_alternatif->countAlternatif('kantor');
        $data['supir'] = $this->M_alternatif->countAlternatif('supir');
        $data['loader'] = $this->M_alternatif->countAlternatif('loader');
        $data['excavator'] = $this->M_alternatif->countAlternatif('excavator');
        $data['pengawas_pu'] = $this->M_alternatif->countAlternatif('pengawas_pu');
        $data['labor'] = $this->M_alternatif->countAlternatif('labor');
        $data['limbah'] = $this->M_alternatif->countAlternatif('limbah');
        $data['security'] = $this->M_alternatif->countAlternatif('security');
        $data['maintenance'] = $this->M_alternatif->countAlternatif('maintenance');

        // RANGKING DARI PREFERENSI
        $data['hitung'] = $this->M_alternatif->hitung();
        $data['ntbobot'] = $this->M_alternatif->normalisasi_terbobot();
        $data['max'] = $this->M_alternatif->solusi_ideal();
        $data['p_sortasi'] = $this->M_alternatif->preferensi();
        $data['p_proses'] = $this->M_proses->preferensi();
        $data['p_kantor'] = $this->M_kantor->preferensi();
        $data['p_supir'] = $this->M_supir->preferensi();
        $data['p_loader'] = $this->M_loader->preferensi();
        $data['p_excavator'] = $this->M_excavator->preferensi();
        $data['p_pengawas_pu'] = $this->M_pengawas_pu->preferensi();
        $data['p_labor'] = $this->M_labor->preferensi();
        $data['p_limbah'] = $this->M_limbah->preferensi();
        $data['p_security'] = $this->M_security->preferensi();
        $data['p_maintenance'] = $this->M_maintenance->preferensi();
        // END RANGKING DARI PREFERENSI

        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }
    // ALTERNATIF
    public function alternatif()
    {
        $data['username'] = $this->db->get('user');
        $data['page_title'] = 'Halaman Alternatif';
        $data['sortasi'] = $this->M_alternatif->get_bidang('sortasi');
        $data['proses'] = $this->M_alternatif->get_bidang('proses');
        $data['kantor'] = $this->M_alternatif->get_bidang('kantor');
        $data['supir'] = $this->M_alternatif->get_bidang('supir');
        $data['loader'] = $this->M_alternatif->get_bidang('loader');
        $data['excavator'] = $this->M_alternatif->get_bidang('excavator');
        $data['pengawas_pu'] = $this->M_alternatif->get_bidang('pengawas_pu');
        $data['labor'] = $this->M_alternatif->get_bidang('labor');
        $data['limbah'] = $this->M_alternatif->get_bidang('limbah');
        $data['security'] = $this->M_alternatif->get_bidang('security');
        $data['maintenance'] = $this->M_alternatif->get_bidang('maintenance');
        $data['hitung'] = $this->M_alternatif->hitung();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/alternatif', $data);
        $this->load->view('templates/footer', $data);
    }
    //// UBAH ALTERNATIF
    //// SORTASI 
    public function ubahAlternatifSortasi()
    {
        $id = $_GET['id'];
        $data['sortasi'] = $this->db->get_where('sortasi', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Data Alternatif Sortasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_sortasi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltSortasi()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true))
        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'sortasi');
        redirect('admin/alternatif');
    }
    //// END SORTASI
    //// PROSES
    public function ubahAlternatifProses()
    {
        $id = $_GET['id'];
        $data['proses'] = $this->db->get_where('proses', ['id' => $id])->result_array();
        $data['page_title'] = 'UBAH PROSES';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltProses()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c8' => htmlspecialchars($this->input->post('c8', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'proses');
        redirect('admin/alternatif');
    }
    //// END PROSES
    //// KANTOR
    public function ubahAlternatifKantor()
    {
        $id = $_GET['id'];
        $data['kantor'] = $this->db->get_where('kantor', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Kantor';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_kantor', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltKantor()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'kantor');
        redirect('admin/alternatif');
    }
    //// END KANTOR
    //// SUPIR
    public function ubahAlternatifSupir()
    {
        $id = $_GET['id'];
        $data['supir'] = $this->db->get_where('supir', ['id' => $id])->result_array();
        $data['page_title'] = 'UBAH Alternatif Supir';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_supir', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltSupir()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'supir');
        redirect('admin/alternatif');
    }
    //// END SUPIR
    //// LOADER
    public function ubahAlternatifLoader()
    {
        $id = $_GET['id'];
        $data['loader'] = $this->db->get_where('loader', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif loader';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_loader', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltLoader()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c11' => htmlspecialchars($this->input->post('c11', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'loader');
        redirect('admin/alternatif');
    }
    //// END LOADER
    //// EXCAVATOR
    public function ubahAlternatifExcavator()
    {
        $id = $_GET['id'];
        $data['excavator'] = $this->db->get_where('excavator', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Excavator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_excavator', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltExcavator()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'excavator');
        redirect('admin/alternatif');
    }
    //// END EXCAVATOR
    //// PENGAWAS PU
    public function ubahAlternatifPengawasPu()
    {
        $id = $_GET['id'];
        $data['pengawas_pu'] = $this->db->get_where('pengawas_pu', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Pengawas PU';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_pengawas_pu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltPengawasPu()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c6' => htmlspecialchars($this->input->post('c6', true)),
            'c7' => htmlspecialchars($this->input->post('c7', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'pengawas_pu');
        redirect('admin/alternatif');
    }
    //// END PENGAWAS PU
    //// LABOR
    public function ubahAlternatifLabor()
    {
        $id = $_GET['id'];
        $data['labor'] = $this->db->get_where('labor', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Labor';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_labor', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltLabor()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c8' => htmlspecialchars($this->input->post('c8', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'labor');
        redirect('admin/alternatif');
    }
    //// END LABOR
    //// LIMBAH
    public function ubahAlternatifLimbah()
    {
        $id = $_GET['id'];
        $data['limbah'] = $this->db->get_where('limbah', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Limbah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_limbah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltLimbah()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c13' => htmlspecialchars($this->input->post('c13', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'limbah');
        redirect('admin/alternatif');
    }
    //// END LIMBAH
    //// SECURITY
    public function ubahAlternatifSecurity()
    {
        $id = $_GET['id'];
        $data['security'] = $this->db->get_where('security', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Security';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_security', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltSecurity()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true)),
            'c9' => htmlspecialchars($this->input->post('c9', true)),
            'c10' => htmlspecialchars($this->input->post('c10', true))

        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'security');
        redirect('admin/alternatif');
    }
    //// END SECURITY
    //// MAINTENANCE
    public function ubahAlternatifMaintenance()
    {
        $id = $_GET['id'];
        $data['maintenance'] = $this->db->get_where('maintenance', ['id' => $id])->result_array();
        $data['page_title'] = 'Ubah Alternatif Maintenance';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubah_alternatif/ubah_maintenance', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahAltMaintenance()
    {
        $id = $this->input->post('id', true);
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true)),
            'c14' => htmlspecialchars($this->input->post('c14', true))
        ];
        $this->M_alternatif->ubahAlternatif($id, $data, 'maintenance');
        redirect('admin/alternatif');
    }
    //// END MAINTENANCE
    //// END UBAH ALTERNATIF
    // END ALTERNATIF
    public function Kriteria()
    {
        $data['page_title'] = 'Halaman Kriteria';
        $data['sortasi'] = $this->M_kriteria->get_kriteria('sortasi');
        $data['proses'] = $this->M_kriteria->get_kriteria('proses');
        $data['kantor'] = $this->M_kriteria->get_kriteria('kantor');
        $data['supir'] = $this->M_kriteria->get_kriteria('supir');
        $data['loader'] = $this->M_kriteria->get_kriteria('loader');
        $data['excavator'] = $this->M_kriteria->get_kriteria('excavator');
        $data['pengawas_pu'] = $this->M_kriteria->get_kriteria('pengawas_pu');
        $data['labor'] = $this->M_kriteria->get_kriteria('labor');
        $data['limbah'] = $this->M_kriteria->get_kriteria('limbah');
        $data['security'] = $this->M_kriteria->get_kriteria('security');
        $data['maintenance'] = $this->M_kriteria->get_kriteria('maintenance');


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/kriteria', $data);
        $this->load->view('templates/footer', $data);
    }

    public function tambah_kriteria()
    {
        $data = [
            'kode_kriteria' => htmlspecialchars($this->input->post('kode_kriteria', true)),
            'nama_kriteria' => htmlspecialchars($this->input->post('nama_kriteria', true)),
            'bobot_kriteria' => htmlspecialchars($this->input->post('bobot_kriteria', true)),
            'atribut_kriteria' => htmlspecialchars($this->input->post('atribut_kriteria', true))
        ];
        $this->db->insert('kriteria', $data);
        redirect('admin/kriteria');
    }

    public function hapus_kriteria()
    {
        $id = $_GET['id'];
        $this->db->delete('alternatif', ['id' => $id]);
        redirect('admin/alternatif');
    }

    public function tambah_alternatif()
    {
        $b = [
            'sortasi' => ['c1', 'c2', 'c3', 'c4','user_id'],
            'proses' => ['c1', 'c2', 'c3', 'c4', 'c8','user_id'],
            'kantor' => ['c1', 'c2', 'c3', 'c4', 'c5','user_id'],
            'supir' => ['c1', 'c2', 'c3', 'c4', 'c12','user_id'],
            'loader' => ['c1', 'c2', 'c3', 'c4', 'c11', 'c12','user_id'],
            'excavator' => ['c1', 'c2', 'c3', 'c4', 'c12','user_id'],
            'pengawas_pu' => ['c1', 'c2', 'c3', 'c6', 'c7','user_id'],
            'labor' => ['c1', 'c2', 'c3', 'c4', 'c8','user_id'],
            'limbah' => ['c1', 'c2', 'c3', 'c4', 'c13','user_id'],
            'security' => ['c3', 'c4', 'c5', 'c9', 'c10','user_id'],
            'maintenance' => ['c1', 'c2', 'c3', 'c4', 'c12', 'c14','user_id'],
        ];
        $bidang = $this->input->post('bidang', true);
        $cs = $b[$bidang];
        $data = [
            'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
            'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
            'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
            'bidang' => $bidang,
        ];
        foreach ($cs as $c) {
            $data[$c] = htmlspecialchars($this->input->post($c, true));
        }
        $this->db->insert('alternatif', $data);
        redirect('admin/alternatif');

        // $b = [
        //     'sortasi' => ['c1', 'c2', 'c3', 'c4','user_id'],
        //     'proses' => ['c1', 'c2', 'c3', 'c4', 'c8','user_id'],
        //     'kantor' => ['c1', 'c2', 'c3', 'c4', 'c5','user_id'],
        //     'supir' => ['c1', 'c2', 'c3', 'c4', 'c12','user_id'],
        //     'loader' => ['c1', 'c2', 'c3', 'c4', 'c11', 'c12','user_id'],
        //     'excavator' => ['c1', 'c2', 'c3', 'c4', 'c12','user_id'],
        //     'pengawas_pu' => ['c1', 'c2', 'c3', 'c6', 'c7','user_id'],
        //     'labor' => ['c1', 'c2', 'c3', 'c4', 'c8','user_id'],
        //     'limbah' => ['c1', 'c2', 'c3', 'c4', 'c13','user_id'],
        //     'security' => ['c3', 'c4', 'c5', 'c9', 'c10','user_id'],
        //     'maintenance' => ['c1', 'c2', 'c3', 'c4', 'c12', 'c14','user_id'],
        // ];
        // $bidang = $this->input->post('bidang', true);
        // $cs = $b[$bidang];
        // $data = [
        //     'kode_alternatif' => htmlspecialchars($this->input->post('kode_alternatif', true)),
        //     'nama_alternatif' => htmlspecialchars($this->input->post('nama_alternatif', true)),
        //     'jns_kelamin' => htmlspecialchars($this->input->post('jns_kelamin', true)),
        // ];
        // foreach ($cs as $c) {
        //     $data[$c] = htmlspecialchars($this->input->post($c, true));
        // }
        // $this->db->insert($bidang, $data);
        // redirect('admin/alternatif');
    }

    public function hapus_sortasi()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'sortasi');
    }
    public function hapus_proses()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'proses');
    }
    public function hapus_kantor()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'kantor');
    }
    public function hapus_supir()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'supir');
    }
    public function hapus_loader()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'loader');
    }
    public function hapus_excavator()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'excavator');
    }
    public function hapus_pengawas_pu()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'pengawas_pu');
    }
    public function hapus_labor()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'labor');
    }
    public function hapus_limbah()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'limbah');
    }
    public function hapus_security()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'security');
    }
    public function hapus_maintenance()
    {
        $id = $_GET['id'];
        $this->M_alternatif->hapusAlternatif($id, 'maintenance');
    }


    // Halaman Proses Perhitungan
    // // SORTASI
    public function proses()
    {
        // $data['kriteria'] = $this->M_kriteria->get_kriteria();
        $data['hitung'] = $this->M_alternatif->hitung();
        $data['ntbobot'] = $this->M_alternatif->normalisasi_terbobot();
        $data['aPlus'] = $this->M_alternatif->solusi_ideal_P();
        $data['aMin'] = $this->M_alternatif->solusi_ideal_M();
        $data['max'] = $this->M_alternatif->solusi_ideal();
        $data['preferensi'] = $this->M_alternatif->preferensi();

        $data['page_title'] = 'Halaman Proses Perhitungan';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses', $data);
        $this->load->view('templates/footer', $data);
    }
    // // PROSES
    public function proses_proses()
    {
        $data['hitung'] = $this->M_proses->hitung();
        $data['ntbobot'] = $this->M_proses->normalisasi_terbobot();
        $data['aPlus'] = $this->M_proses->solusi_ideal_P();
        $data['aMin'] = $this->M_proses->solusi_ideal_M();
        $data['max'] = $this->M_proses->solusi_ideal();
        $data['preferensi'] = $this->M_proses->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_proses', $data);
        $this->load->view('templates/footer', $data);
    }
    // // KANTOR
    public function proses_kantor()
    {
        $data['hitung'] = $this->M_kantor->hitung();
        $data['ntbobot'] = $this->M_kantor->normalisasi_terbobot();
        $data['aPlus'] = $this->M_kantor->solusi_ideal_P();
        $data['aMin'] = $this->M_kantor ->solusi_ideal_M();
        $data['max'] = $this->M_kantor->solusi_ideal();
        $data['preferensi'] = $this->M_kantor->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_kantor', $data);
        $this->load->view('templates/footer', $data);
    }
    // // SUPIR
    public function proses_supir()
    {
        $data['hitung'] = $this->M_supir->hitung();
        $data['ntbobot'] = $this->M_supir->normalisasi_terbobot();
        $data['aPlus'] = $this->M_supir->solusi_ideal_P();
        $data['aMin'] = $this->M_supir->solusi_ideal_M();
        $data['max'] = $this->M_supir->solusi_ideal();
        $data['preferensi'] = $this->M_supir->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_supir', $data);
        $this->load->view('templates/footer', $data);
    }
    // // LOADER
    public function proses_loader()
    {
        $data['hitung'] = $this->M_loader->hitung();
        $data['ntbobot'] = $this->M_loader->normalisasi_terbobot();
        $data['aPlus'] = $this->M_loader->solusi_ideal_P();
        $data['aMin'] = $this->M_loader->solusi_ideal_M();
        $data['max'] = $this->M_loader->solusi_ideal();
        $data['preferensi'] = $this->M_loader->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_loader', $data);
        $this->load->view('templates/footer', $data);
    }
    // // EXCAVATOR
    public function proses_excavator()
    {
        $data['hitung'] = $this->M_excavator->hitung();
        $data['ntbobot'] = $this->M_excavator->normalisasi_terbobot();
        $data['aPlus'] = $this->M_excavator->solusi_ideal_P();
        $data['aMin'] = $this->M_excavator->solusi_ideal_M();
        $data['max'] = $this->M_excavator->solusi_ideal();
        $data['preferensi'] = $this->M_excavator->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_excavator', $data);
        $this->load->view('templates/footer', $data);
    }
    // // PENGAWAS PU
    public function proses_pengawas_pu()
    {
        $data['hitung'] = $this->M_pengawas_pu->hitung();
        $data['ntbobot'] = $this->M_pengawas_pu->normalisasi_terbobot();
        $data['aPlus'] = $this->M_pengawas_pu->solusi_ideal_P();
        $data['aMin'] = $this->M_pengawas_pu->solusi_ideal_M();
        $data['max'] = $this->M_pengawas_pu->solusi_ideal();
        $data['preferensi'] = $this->M_pengawas_pu->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_pengawas_pu', $data);
        $this->load->view('templates/footer', $data);
    }
    // // LABOR
    public function proses_labor()
    {
        $data['hitung'] = $this->M_labor->hitung();
        $data['ntbobot'] = $this->M_labor->normalisasi_terbobot();
        $data['aPlus'] = $this->M_labor->solusi_ideal_P();
        $data['aMin'] = $this->M_labor->solusi_ideal_M();
        $data['max'] = $this->M_labor->solusi_ideal();
        $data['preferensi'] = $this->M_labor->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_labor', $data);
        $this->load->view('templates/footer', $data);
    }
    // // LIMBAH
    public function proses_limbah()
    {
        $data['hitung'] = $this->M_limbah->hitung();
        $data['ntbobot'] = $this->M_limbah->normalisasi_terbobot();
        $data['aPlus'] = $this->M_limbah->solusi_ideal_P();
        $data['aMin'] = $this->M_limbah->solusi_ideal_M();
        $data['max'] = $this->M_limbah->solusi_ideal();
        $data['preferensi'] = $this->M_limbah->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_limbah', $data);
        $this->load->view('templates/footer', $data);
    }
    // // SECURITY
    public function proses_security()
    {
        $data['hitung'] = $this->M_security->hitung();
        $data['ntbobot'] = $this->M_security->normalisasi_terbobot();
        $data['aPlus'] = $this->M_security->solusi_ideal_P();
        $data['aMin'] = $this->M_security->solusi_ideal_M();
        $data['max'] = $this->M_security->solusi_ideal();
        $data['preferensi'] = $this->M_security->preferensi();

        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_security', $data);
        $this->load->view('templates/footer', $data);
    }
    // // MAINTENANCE
    public function proses_maintenance()
    {
        // $data['kriteria'] = $this->M_kriteria->get_kriteria();
        $data['hitung'] = $this->M_maintenance->hitung();
        $data['ntbobot'] = $this->M_maintenance->normalisasi_terbobot();
        $data['aPlus'] = $this->M_maintenance->solusi_ideal_P();
        $data['aMin'] = $this->M_maintenance->solusi_ideal_M();
        $data['max'] = $this->M_maintenance->solusi_ideal();
        $data['preferensi'] = $this->M_maintenance->preferensi();


        $data['title'] = 'Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/proses_perhitungan/proses_maintenance', $data);
        $this->load->view('templates/footer', $data);
    }

    // END PROSES PERHITUNGAN

    public function ubahPassword()
    {
        $this->form_validation->set_rules('password', 'Paswword', 'required|trim');
        $this->form_validation->set_rules('password2', 'Paswword2', 'required|trim');
        $this->form_validation->set_rules('password3', 'Paswword3', 'required|trim|matches[password2]', [
            'matches' => 'Password dont match!'
        ]);

        $data['title'] = 'Alternatif';

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('admin/ubahPassword', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->proses_password();
        }
    }

    private function proses_password()
    {
        $password1 = htmlspecialchars($this->input->post('password', true));
        $password2 = htmlspecialchars($this->input->post('password2', true));
        $password3 = htmlspecialchars($this->input->post('password3', true));
        $password = $this->db->get('user')->result_array();

        $where = [
            'id' => $password[0]['id']
        ];

        $data = [
            'username' => 'admin',
            'password' => $password2
        ];
        if ($password1 == $password[0]['password']) {
            if ($password2 == $password3) {
                $this->M_user->ubah_password($where, $data, 'user');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Telah Berubah !</div>');
                redirect('admin/ubahPassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Harus Sama !</div>');
                redirect('admin/ubahPassword');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
            redirect('admin/ubahPassword');
        }
    }

    public function logout()
    {
        redirect('auth');
    }


    //UBAH BOBOT KRITERIA

    // // SORTASI
    public function ubah_sortasi()
    {
        $data['sortasi'] = $this->M_kriteria->get_kriteria('sortasi');
        $data['page_title'] = 'Ubah Bobot Kriteria Sortasi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_sortasi', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaSortasi()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true))
        ];
        $this->M_kriteria->ubahKriteria('sortasi', $data);
        redirect('admin/kriteria');
    }

    // // END SORTASI

    // PROSES
    public function ubah_proses()
    {
        $data['proses'] = $this->M_kriteria->get_kriteria('proses');
        $data['titlePage'] = 'Ubah Proses';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_proses', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaProses()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c8' => htmlspecialchars($this->input->post('c8', true))

        ];
        $this->M_kriteria->ubahKriteria('proses', $data);
        redirect('admin/kriteria');
    }

    // // END PROSES
    // KANTOR
    public function ubah_kantor()
    {
        $data['kantor'] = $this->M_kriteria->get_kriteria('kantor');
        $data['titlePage'] = 'Ubah kantor';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_kantor', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaKantor()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true))

        ];
        $this->M_kriteria->ubahKriteria('kantor', $data);
        redirect('admin/kriteria');
    }
    // // END KANTOR
    // SUPIR
    public function ubah_supir()
    {
        $data['supir'] = $this->M_kriteria->get_kriteria('supir');
        $data['titlePage'] = 'Ubah supir';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_supir', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaSupir()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_kriteria->ubahKriteria('supir', $data);
        redirect('admin/kriteria');
    }
    // // END SUPIR
    // LOADER
    public function ubah_loader()
    {
        $data['loader'] = $this->M_kriteria->get_kriteria('loader');
        $data['titlePage'] = 'Ubah loader';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_loader', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaLoader()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c11' => htmlspecialchars($this->input->post('c11', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_kriteria->ubahKriteria('loader', $data);
        redirect('admin/kriteria');
    }
    // // END LOADER
    // EXCAVATOR
    public function ubah_excavator()
    {
        $data['excavator'] = $this->M_kriteria->get_kriteria('excavator');
        $data['titlePage'] = 'Ubah excavator';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_excavator', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaExcavator()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true))

        ];
        $this->M_kriteria->ubahKriteria('excavator', $data);
        redirect('admin/kriteria');
    }
    // // END EXCAVATOR
    // PENGAWAS PU
    public function ubah_pengawas_pu()
    {
        $data['pengawas_pu'] = $this->M_kriteria->get_kriteria('pengawas_pu');
        $data['titlePage'] = 'Ubah Pengawas PU';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_pengawas_pu', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaPengawasPu()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c6' => htmlspecialchars($this->input->post('c6', true)),
            'c7' => htmlspecialchars($this->input->post('c7', true))

        ];
        $this->M_kriteria->ubahKriteria('pengawas_pu', $data);
        redirect('admin/kriteria');
    }
    // // END PENGAWAS PU
    // LABOR
    public function ubah_labor()
    {
        $data['labor'] = $this->M_kriteria->get_kriteria('labor');
        $data['titlePage'] = 'Ubah labor';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_labor', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaLabor()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c8' => htmlspecialchars($this->input->post('c8', true))

        ];
        $this->M_kriteria->ubahKriteria('labor', $data);
        redirect('admin/kriteria');
    }
    //  // END LABOR
    // LIMBAH
    public function ubah_limbah()
    {
        $data['limbah'] = $this->M_kriteria->get_kriteria('limbah');
        $data['titlePage'] = 'Ubah limbah';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_limbah', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaLimbah()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c13' => htmlspecialchars($this->input->post('c13', true))
        ];
        $this->M_kriteria->ubahKriteria('limbah', $data);
        redirect('admin/kriteria');
    }
    // // END LIMBAH
    // SECURITY
    public function ubah_security()
    {
        $data['security'] = $this->M_kriteria->get_kriteria('security');
        $data['titlePage'] = 'Ubah security';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_security', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaSecurity()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c5' => htmlspecialchars($this->input->post('c5', true)),
            'c9' => htmlspecialchars($this->input->post('c9', true)),
            'c10' => htmlspecialchars($this->input->post('c10', true))

        ];
        $this->M_kriteria->ubahKriteria('security', $data);
        redirect('admin/kriteria');
    }
    // // END SECURITY
    // MAINTENANCE
    public function ubah_maintenance()
    {
        $data['maintenance'] = $this->M_kriteria->get_kriteria('maintenance');
        $data['titlePage'] = 'Ubah maintenance';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('admin/ubahKriteria/ubah_maintenance', $data);
        $this->load->view('templates/footer', $data);
    }

    public function ubahKriteriaMaintenance()
    {
        $id = ['id' => $this->input->post('id', true)];
        $data = [
            'c1' => htmlspecialchars($this->input->post('c1', true)),
            'c2' => htmlspecialchars($this->input->post('c2', true)),
            'c3' => htmlspecialchars($this->input->post('c3', true)),
            'c4' => htmlspecialchars($this->input->post('c4', true)),
            'c12' => htmlspecialchars($this->input->post('c12', true)),
            'c14' => htmlspecialchars($this->input->post('c14', true))

        ];
        $this->M_kriteria->ubahKriteria('maintenance', $data);
        redirect('admin/kriteria');
    }
    // // END MAINTENANCE

    // END BOBOT KRITERIA
    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['p_sortasi'] = $this->M_alternatif->preferensi();
        $data['p_proses'] = $this->M_proses->preferensi();
        $data['p_kantor'] = $this->M_kantor->preferensi();
        $data['p_supir'] = $this->M_supir->preferensi();
        $data['p_loader'] = $this->M_loader->preferensi();
        $data['p_excavator'] = $this->M_excavator->preferensi();
        $data['p_pengawas_pu'] = $this->M_pengawas_pu->preferensi();
        $data['p_labor'] = $this->M_labor->preferensi();
        $data['p_limbah'] = $this->M_limbah->preferensi();
        $data['p_security'] = $this->M_security->preferensi();
        $data['p_maintenance'] = $this->M_maintenance->preferensi();


        $this->load->view('admin/exportLaporan', $data);

        $paper_size = 'A4';
        $orentation = 'portrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orentation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan Data Kinerja karyawan.pdf", ['attachment' => 0]);
    }
}
