<?php
include './layout/header.php';
$action_menu = $_GET['action_menu'];
?>

<!-- Navigation -->
</div>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Input Mahasiswa</h2>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a>Data Master</a>
			</li>
		</ol>
	</div>
</div>


<!-- Content  -->
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Input Mahasiswa</h5>
				</div>
				<div class="ibox-content">
					<form id="input_form" method="post" action="simpan_mahasiswa.php">
						<div class="form-group  row"><label class="col-sm-2 col-form-label">NIM</label>
							<div class="col-sm-10"><input id="nim" type="text" class="form-control" name="nim"></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Nama</label>
							<div class="col-sm-10"><input id="nama_mhs" type="text" class="form-control" name="nama_mhs"></div>
						</div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Kelamin</label>

							<div class="col-sm-10"><select id="jenis_kelamin" class="form-control m-b" name="jenis_kelamin">
									<option value="L">Laki-Laki</option>
									<option value="P">Perempuan</option>
								</select>
							</div>
						</div>
						<div class="form-group row" id="data_1"><label class="col-sm-2 col-form-label">Tanggal Lahir</label>
							<div class="col-sm-10 input-group date">
								<span class="input-group-addon"><i class="fa fa-calendar"></i></span><input id="tgl_lahir" type="text" class="form-control" name="tgl_lahir">
							</div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Alamat</label>
							<div class="col-sm-10"><textarea id="alamat" type="text" class="form-control" name="alamat"></textarea></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">No Telepon</label>
							<div class="col-sm-10"><input id="no_telp" type="text" class="form-control" name="no_telp" /></div>
						</div>
						<div class="form-group  row"><label class="col-sm-2 col-form-label">Email</label>
							<div class="col-sm-10"><input id="email" type="text" class="form-control" name="email"></div>
						</div>
						<div class="form-group row"><label class="col-sm-2 col-form-label">Semester</label>
							<div class="col-sm-10"><input id="semester" type="text" class="form-control" name="semester"></div>
						</div>
						<div class="hr-line-dashed"></div>

						<div class="form-group row">
							<div class="col-sm-4 col-sm-offset-2">
								<button class="btn btn-white btn-sm" onclick="history.back()" type="button">Cancel</button>
								<button class="btn btn-primary btn-sm" type="submit">Save changes</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Jquery -->
<script>
	$(document).ready(function() {

		$('#data_1 .input-group.date').datepicker({
			todayBtn: "linked",
			keyboardNavigation: false,
			forceParse: false,
			calendarWeeks: true,
			autoclose: true
		});

		$('#input_form').submit(function(e) {
			e.preventDefault();
			$.ajax({
				type: "POST",
				url: 'simpan_mahasiswa.php',
				data: $(this).serialize(),
				success: function(response) {
					var res = JSON.parse(response);
					if (res.status == 1) {
						alert('data sudah disimpan');

						// <!-- reset nilai element input -->
						$('#nim').val("");
						$('#nama_mhs').val("");
						$('#jenis_kelamin').val(1);
						$('#tgl_lahir').val("");
						$('#alamat').val("");
						$('#no_telp').val("");
						$('#email').val("");
						$('#semester').val("");

						$('#nim').focus();
					} else {
						alert('data gagal disimpan');
					}
				},
				error: function(response) {
					alert('data gagal disimpan');
				}
			});
		});
	});
</script>


<?php include './layout/footer.php'; ?>