<footer class="sticky-footer bg-white">
        <div class="container my-auto">
                <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Naya Sherina 2022</span>
                </div>
        </div>
</footer>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header text-center">
                                <h4 class="modal-title" id="exampleModalLabel">TAMBAH DATA KARYAWAN</h4>
                        </div>
                        <div class="modal-body">
                                <hr>
                                <form action="<?= base_url('admin/tambah_alternatif'); ?>" method="post"> 

                                        <div class="form-group">
                                                <label class="text" for="">KODE KARYAWAN</label>

                                                <input type="text" class="form-control" name="kode_alternatif" required>
                                        </div>
                                        <div class="form-group">
                                                <label class="text" for="">NAMA KARYAWAN</label>

                                                <input type="text" class="form-control" name="nama_alternatif" required>
                                        </div>
                                        <div class="form-row">
                                                <div class="form-group">
                                                        <label class="text" for="">JENIS KELAMIN</label>

                                                        <select class="form-control" name="jns_kelamin" required>
                                                                <option selected value="">Pilih...</option>
                                                                <option value="LAKI-LAKI">Laki-laki</option>
                                                                <option value="PEREMPUAN">Perempuan</option>
                                                        </select>
                                                </div>
                                        </div>
                                        <div class="form-row">
                                                <!-- <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="bidang" placeholder="bidang">
                                                </div> -->
                                                <div class="form-group">
                                                        <label class="text" for="">BIDANG</label>
                                                        <select id='bidang' class="form-control" name="bidang" required>
                                                                <option selected>Pilih...</option>
                                                                <option value="sortasi">Sortasi</option>
                                                                <option value="proses">Proses</option>
                                                                <option value="kantor">Kantor</option>
                                                                <option value="supir">Supir</option>
                                                                <option value="loader">Loader</option>
                                                                <option value="excavator">Excavator</option>
                                                                <option value="pengawas_pu">Pengawas PU</option>
                                                                <option value="labor">Labor</option>
                                                                <option value="limbah">Limbah</option>
                                                                <option value="security">Security</option>
                                                                <option value="maintenance">Maintenance</option>
                                                        </select>
                                                </div>
                                        </div>
                                        <hr>
                                        <div id='dataBidang'>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Rendemen</label>
                                                                <input type="text" class="form-control" name="c1">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Tonase</label>
                                                                <input type="text" class="form-control" name="c2">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Absensi</label>
                                                                <input type="text" class="form-control" name="c3">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Kebersihan</label>
                                                                <input type="text" class="form-control" name="c4">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Administrasi</label>
                                                                <input type="text" class="form-control" name="c5">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Prestasi</label>
                                                                <input type="text" class="form-control" name="c6">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Pekerjaan Umum</label>
                                                                <input type="text" class="form-control" name="c7">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Klem</label>
                                                                <input type="text" class="form-control" name="c8">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Keamanan</label>
                                                                <input type="text" class="form-control" name="c9">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Disiplin</label>
                                                                <input type="text" class="form-control" name="c10">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Keterampilan</label>
                                                                <input type="text" class="form-control" name="c11">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Maintenace</label>
                                                                <input type="text" class="form-control" name="c12">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Limbah</label>
                                                                <input type="text" class="form-control" name="c13">
                                                        </div>
                                                </div>
                                                <div class="form-row">
                                                        <div class="form-group">
                                                                <label class="text" for="">Breakdown</label>
                                                                <input type="text" class="form-control" name="c14">
                                                        </div>
                                                </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-success" onclick="return confirm('Tambah Data?');">Tambah Data</button>
                                </form>
                        </div>
                </div>
        </div>
</div>




<div class="modal-footer">
        <!-- BEGIN VENDOR JS -->
        <script src="<?= base_url('assets/'); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/plugins/select2/js/select2.full.min.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>assets/plugins/classie/classie.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/mapplic/js/hammer.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/mapplic/js/mapplic.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/rickshaw/rickshaw.min.js"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/skycons/skycons.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- END VENDOR JS -->
        <!-- BEGIN CORE TEMPLATE JS -->
        <script src="<?= base_url('assets/'); ?>pages/js/pages.min.js"></script>
        <!-- END CORE TEMPLATE JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <script src="<?= base_url('assets/'); ?>assets/js/dashboard.js" type="text/javascript"></script>
        <script src="<?= base_url('assets/'); ?>assets/js/scripts.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS -->
        <script>
                let el = document.querySelector('#bidang');
                el.onchange = () => {
                        let body = `
                                ${ (el.value == 'sortasi') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                               
                                
                                ` : ''
                }          
                                ${ (el.value == 'proses') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Klem</label>
                                                <input type="text" class="form-control" name="c8">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'kantor') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Administrasi</label>
                                                <input type="text" class="form-control" name="c5">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'supir') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Maintenace</label>
                                                <input type="text" class="form-control" name="c12">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'loader') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Keterampilan</label>
                                                <input type="text" class="form-control" name="c11">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Maintenace</label>
                                                <input type="text" class="form-control" name="c12">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'excavator') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Maintenace</label>
                                                <input type="text" class="form-control" name="c12">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'pengawas_pu') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Prestasi</label>
                                                <input type="text" class="form-control" name="c6">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Pekerjaan Umum</label>
                                                <input type="text" class="form-control" name="c7">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'labor') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Klem</label>
                                                <input type="text" class="form-control" name="c8">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'limbah') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Limbah</label>
                                                <input type="text" class="form-control" name="c13">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'security') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Administrasi</label>
                                                <input type="text" class="form-control" name="c5">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Keamanan</label>
                                                <input type="text" class="form-control" name="c9">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Disiplin</label>
                                                <input type="text" class="form-control" name="c10">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }
                                ${ (el.value == 'maintenance') ? `
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Rendemen</label>
                                                <input type="text" class="form-control" name="c1">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Tonase</label>
                                                <input type="text" class="form-control" name="c2">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Absensi</label>
                                                <input type="text" class="form-control" name="c3">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Kebersihan</label>
                                                <input type="text" class="form-control" name="c4">
                                        </div>
                                </div>
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Maintenace</label>
                                                <input type="text" class="form-control" name="c12">
                                        </div>
                                </div>
                                
                                <div class="form-row">
                                        <div class="form-group">
                                                <label class="text" for="">Breakdown</label>
                                                <input type="text" class="form-control" name="c14">
                                        </div>
                                </div>
                                <?php $user = $this->db->get('user')->result_array(); ?>
                                        <?php foreach($user as $data) : ?>
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                        <?php endforeach; ?>
                                                ` : ''
                                }                                     
                        `
                        document.querySelector('#dataBidang').innerHTML = body;
                }
        </script>
        </body>

        </html>