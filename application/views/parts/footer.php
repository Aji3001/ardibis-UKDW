</div>
 <!---Container Fluid-->

 </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>&copy Fakultas Bisnis UKDW - 2020</span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url().'assets/js/jquery-ui.js'?>" type="text/javascript"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url()?>assets/js/ruang-admin.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/chart.js/Chart.min.js"></script>
  <script src="<?= base_url()?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url()?>assets/js/custom.js"></script>


  <script src="<?= base_url();?>assets/js/sweetalert2.all.min.js"></script>
	<script src="<?= base_url();?>assets/js/sweetalertcontrol.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript">
		toastr.options = {
		"closeButton": true,
		"debug": false,
		"newestOnTop": true,
		"progressBar": true,
		"positionClass": "toast-bottom-right",
		"preventDuplicates": false,
		"onclick": null,
		"showDuration": "100",
		"hideDuration": "1000",
		"timeOut": "5000",
		"extendedTimeOut": "1000",
		"showEasing": "swing",
		"hideEasing": "linear",
		"showMethod": "fadeIn",
		"hideMethod": "fadeOut"
		}
		<?php if($this->session->flashdata('success')){ ?>
			toastr.success("<?php echo $this->session->flashdata('success'); ?>");
		<?php }else if($this->session->flashdata('error')){  ?>
			toastr.error("<?php echo $this->session->flashdata('error'); ?>");
		<?php }else if($this->session->flashdata('warning')){  ?>
			toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
		<?php }else if($this->session->flashdata('info')){  ?>
			toastr.info("<?php echo $this->session->flashdata('info'); ?>");
		<?php } ?>
	</script>


  <script type="text/javascript">

    $(document).ready(function () {
          $(".select2").select2();
          $('#tableis').DataTable(); 
          $('.dt2').DataTable();
          $('#tableUser').DataTable();
          // autocomplete judul dokumen
          $('#key').autocomplete({
                source: "<?= base_url('main/get_autocomplete');?>",
                select: function (event, ui) {
                    $(this).val(ui.item.label);
                    $("#filter").submit(); 
                }
          });
          $("#username").on({
            keydown: function(e) {
              if (e.which === 32)
                return false;
            },
            change: function() {
              this.value = this.value.replace(/\s/g, "");
            }
          });
          // cek username
          $("#username").keyup(function(){
            $("#userav").html("<span class='text-warning'><i><small>Memeriksa..</small></i></span>");
            var username=$("#username").val();
            if(username.length<4){
              $("#userav").html("<span class='text-warning'><i><small>Min 4 karakter</small></i></span>");
            }else{
              $.ajax({
                type:"post",
                url:"<?= base_url('setting/getUsername')?>",
                data:"username="+username,
                  success:function(data){
                  if(data==0){
                    $("#userav").html("<span class='text-success'><i><small>Tersedia</small></i></span>");
                    $('#txtNewPassword').prop('disabled',false);
                    $('#txtConfirmPassword').prop('disabled',false);
                  }
                  else{
                    $("#userav").html("<span class='text-danger'><i><small>Tidak Tersedia</small></i></span>");
                    $('#txtNewPassword').prop('disabled',true);
                    $('#txtConfirmPassword').prop('disabled',true);
                  }
                }
              });
            }
          });
          // end of cek username
          
    });
    
  </script>  

</body>

</html>