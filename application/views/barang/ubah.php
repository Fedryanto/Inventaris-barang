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
			<div id="content" data-url="<?= base_url('barang') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
					<div class="clearfix">
						<div class="float-left">
							<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
						</div>
						<div class="float-right">
							<a href="<?= base_url('barang') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-12">
							<div class="card shadow">
								<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
								<div class="card-body">
									<form action="<?= base_url('barang/proses_ubah/' . $barang->kode_barang) ?>" id="form-tambah" method="POST" enctype="multipart/form-data">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="kode_barang"><strong>Kode Barang</strong></label>
												<input type="text" name="kode_barang" placeholder="Masukkan Kode Barang" autocomplete="off" class="form-control" required value="<?= $barang->kode_barang ?>" maxlength="8" readonly>
											</div>
											<div class="form-group col-md-6">
												<label for="nama_barang"><strong>Nama Barang</strong></label>
												<input type="text" name="nama_barang" placeholder="Masukkan Nama Barang" autocomplete="off" class="form-control" required value="<?= $barang->nama_barang ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
													<label for="nama_ruangan"><strong>Ruangan</strong></label>
													<select name="nama_ruangan" id="nama_ruangan" class="form-control" required>
														<option value="">Pilih Ruangan</option>
														<?php foreach ($all_ruangan as $ruangan): ?>
															<option value="<?= $ruangan->nama_ruangan ?>"><?= $ruangan->nama_ruangan ?></option>
														<?php endforeach ?>
													</select>
												</div>
											<div class="form-group col-md-6">
												<label for="stok"><strong>Stok</strong></label>
												<input type="number" name="stok" placeholder="Masukkan Stok" autocomplete="off" class="form-control" required value="<?= $barang->stok ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="satuan"><strong>Satuan</strong></label>
												<select name="satuan" id="satuan" class="form-control" required>
													<option value="">-- Silahkan Pilih --</option>
													<option value="pasang" <?= $barang->satuan == 'pasang' ? 'selected' : '' ?>>pasang</option>
													<option value="unit" <?= $barang->satuan == 'unit' ? 'selected' : '' ?>>Unit</option>
													<option value="renceng" <?= $barang->satuan == 'renceng' ? 'selected' : '' ?>>RENCENG</option>
													<option value="pak" <?= $barang->satuan == 'pak' ? 'selected' : '' ?>>PAK</option>
													<option value="kg" <?= $barang->satuan == 'kg' ? 'selected' : '' ?>>KILOGRAM</option>
													<option value="ons" <?= $barang->satuan == 'ons' ? 'selected' : '' ?>>ONS</option>
												</select>
											</div>
											<div class="form-group col-md-6">
												<label for="image"><strong>Image</strong></label>
												<?php echo form_open_multipart('./uploads/barang/');?>
												<input type="file" name="image" placeholder="Masukkan Image" value="<?php echo set_value('userfile'); ?>" autocomplete="off" class="form-control">
												
											</div>
										</div>
										<hr>
										<div class="form-group">
											<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
											<button type="reset" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Reset</button>
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
</body>

</html>