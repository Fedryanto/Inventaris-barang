<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('partials/head.php') ?>
</head>

<body id="page-top">
	<div id="wrapper">
		<!-- load sidebar -->
		<?php $this->load->view('partials/sidebar.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content" data-url="<?= base_url('kasir') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
						</div>
						<div class="float-right">
							<a href="<?= base_url('dashboard') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
						</div>
					</div>
					<hr>
					<?php if ($this->session->flashdata('success')) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('success') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php elseif ($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<?= $this->session->flashdata('error') ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php endif ?>
					<div class="row">
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
								<div class="card-body">
									<form action="<?= base_url('sekolah/proses_ubah') ?>" id="form-tambah" method="POST">
										<div class="form-group">
											<label for="nama_sekolah"><strong>Nama Sekolah : </strong></label>
											<input type="text" name="nama_sekolah" id="nama_sekolah" value="<?= $sekolah->nama_sekolah ?>" placeholder="Masukan Nama Sekolah" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label for="nama_sekolah"><strong>Nama Kepala Sekolah : </strong></label>
											<input type="text" name="nama_kepsek" id="nama_kepsek" value="<?= $sekolah->nama_kepsek ?>" placeholder="Masukan Nama Pemilik" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label for="nama_sekolah"><strong>No Telepon Sekolah : </strong></label>
											<input type="number" name="no_telepon" id="no_telepon" value="<?= $sekolah->no_telepon ?>" placeholder="Masukan No Telepon" class="form-control" readonly>
										</div>
										<div class="form-group">
											<label for="alamat"><strong>Alamat Sekolah :</strong></label>
											<textarea readonly name="alamat" id="alamat" class="form-control" placeholder="Masukan Alamat" style="resize: none;"><?= $sekolah->alamat ?></textarea>
										</div>
										<hr>
										<div class="form-group">
											<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
											<button type="button" class="btn btn-success" id="ubah"><i class="fa fa-pen"></i>&nbsp;&nbsp;Ubah</button>
											<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- load footer -->
			<?php $this->load->view('partials/footer.php') ?>
		</div>
	</div>
	<?php $this->load->view('partials/js.php') ?>
	<script>
		$(document).ready(function() {
			$('#ubah').on('click', function() {
				$('#nama_sekolah').prop('readonly', false)
				$('#nama_kepsek').prop('readonly', false)
				$('#no_telepon').prop('readonly', false)
				$('#alamat').prop('readonly', false)
			})

			$('button[type="reset"]').on('click', function() {
				$('#nama_sekolah').prop('readonly', true)
				$('#nama_kepsek').prop('readonly', true)
				$('#no_telepon').prop('readonly', true)
				$('#alamat').prop('readonly', true)
			})
		})
	</script>
</body>

</html>