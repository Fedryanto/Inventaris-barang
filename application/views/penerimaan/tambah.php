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
			<div id="content" data-url="<?= base_url('penerimaan') ?>">
				<!-- load Topbar -->
				<?php $this->load->view('partials/topbar.php') ?>

				<div class="container-fluid">
				<div class="clearfix">
					<div class="float-left">
						<h1 class="h3 m-0 text-gray-800"><?= $title ?></h1>
					</div>
					<div class="float-right">
						<a href="<?= base_url('penerimaan') ?>" class="btn btn-secondary btn-sm"><i class="fa fa-reply"></i>&nbsp;&nbsp;Kembali</a>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<div class="card shadow">
							<div class="card-header"><strong>Isi Form Dibawah Ini!</strong></div>
							<div class="card-body">
								<form action="<?= base_url('penerimaan/proses_tambah') ?>" id="form-tambah" method="POST">
									<h5>Data Petugas</h5>
									<hr>
									<div class="form-row">
										<div class="form-group col-2">
											<label>No. Terima</label>
											<input type="text" name="no_terima" value="BT<?= time() ?>" readonly class="form-control">
										</div>
										<div class="form-group col-3">
											<label>Kode Petugas</label>
											<input type="text" name="kode_petugas" value="<?= $this->session->login['kode'] ?>" readonly class="form-control">
										</div>
										<div class="form-group col-3">
											<label>Nama Petugas</label>
											<input type="text" name="nama_petugas" value="<?= $this->session->login['nama'] ?>" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Tanggal Terima</label>
											<input type="text" name="tgl_terima" value="<?= date('d/m/Y') ?>" readonly class="form-control">
										</div>
										<div class="form-group col-2">
											<label>Jam</label>
											<input type="text" name="jam_terima" value="<?= date('H:i:s') ?>" readonly class="form-control">
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h5>Data Barang</h5>
											<hr>
											<div class="form-row">
												<div class="form-group col-3">
													<label for="nama_barang">Nama Barang</label>
													<select name="nama_barang" id="nama_barang" class="form-control">
														<option value="">Pilih Barang</option>
														<?php foreach ($all_barang as $barang): ?>
															<option value="<?= $barang->nama_barang ?>" readonly min='1'><?= $barang->nama_barang ?></option>
														<?php endforeach ?>
													</select>
												</div>
												<div class="form-group col-3">
													<label>Kode Barang</label>
													<input type="text" name="kode_barang" value="" readonly class="form-control">
												</div>
												<div class="form-group col-3">
													<label>Nama Ruangan</label>
													<input type="text" name="nama_ruangan" value="" readonly class="form-control">
												</div>
												<div class="form-group col-2">
													<label>Jumlah</label>
													<input type="number" name="jumlah" value="" class="form-control" readonly min='1'>
												</div>
												<div class="form-group col-1">
													<label for="">&nbsp;</label>
													<button disabled type="button" class="btn btn-primary btn-block" id="tambah"><i class="fa fa-plus"></i></button>
												</div>
												<input type="hidden" name="satuan" value="">
											</div>
										</div>
									</div>
									<div class="keranjang">
										<h5>Detail Penerimaan</h5>
										<hr>
										<table class="table table-bordered" id="keranjang">
											<thead>
												<tr>
													<td width="30%">Nama Barang</td>
													<td width="18%">Kode Barang</td>
													<td width="17%">Nama Ruangan</td>
													<td width="15%">Jumlah</td>
													<td width="10%">Satuan</td>
													<td width="15%">Aksi</td>
												</tr>
											</thead>
											<tbody>
												
											</tbody>
											<tfoot>
												<tr>
													<td colspan="6" align="center">
														<input type="hidden" name="max_hidden" value="">
														<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
													</td>
												</tr>
											</tfoot>
										</table>
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
		$(document).ready(function(){
			$('tfoot').hide()

			$(document).keypress(function(event){
		    	if (event.which == '13') {
		      		event.preventDefault();
			   	}
			})

			$('#nama_barang').on('change', function(){

				if($(this).val() == '') reset()
				else {
					const url_get_all_barang = $('#content').data('url') + '/get_all_barang'
					$.ajax({
						url: url_get_all_barang,
						type: 'POST',
						dataType: 'json',
						data: {nama_barang: $(this).val()},
						success: function(data){
							$('input[name="kode_barang"]').val(data.kode_barang)
							$('input[name="nama_ruangan"]').val(data.nama_ruangan)
							$('input[name="harga_barang"]').val(data.harga_jual)
							$('input[name="jumlah"]').val(1)
							$('input[name="satuan"]').val(data.satuan)
							$('input[name="max_hidden"]').val(data.stok)
							$('input[name="jumlah"]').prop('readonly', false)
							$('button#tambah').prop('disabled', false)

							$('input[name="sub_total"]').val($('input[name="jumlah"]').val() * $('input[name="harga_barang"]').val())
							
							$('input[name="jumlah"]').on('keydown keyup change blur', function(){
								$('input[name="sub_total"]').val($('input[name="jumlah"]').val() * $('input[name="harga_barang"]').val())
							})
						}
					})
				}
			})

			$(document).on('click', '#tambah', function(e){
				const url_keranjang_barang = $('#content').data('url') + '/keranjang_barang'
				const data_keranjang = {
					nama_barang: $('select[name="nama_barang"]').val(),
					kode_barang: $('input[name="kode_barang"]').val(),
					nama_ruangan: $('input[name="nama_ruangan"]').val(),
					jumlah: $('input[name="jumlah"]').val(),
					satuan: $('input[name="satuan"]').val(),
				}

				$.ajax({
					url: url_keranjang_barang,
					type: 'POST',
					data: data_keranjang,
					success: function(data){
						if($('select[name="nama_barang"]').val() == data_keranjang.nama_barang) $('option[value="' + data_keranjang.nama_barang + '"]').hide()
						reset()

						$('table#keranjang tbody').append(data)
						$('tfoot').show()

						$('#total').html('<strong>' + hitung_total() + '</strong>')
						$('input[name="total_hidden"]').val(hitung_total())
					}
				})
			})


			$(document).on('click', '#tombol-hapus', function(){
				$(this).closest('.row-keranjang').remove()

				$('option[value="' + $(this).data('nama-barang') + '"]').show()

				if($('tbody').children().length == 0) $('tfoot').hide()
			})

			$('button[type="submit"]').on('click', function(){
				$('input[name="kode_barang"]').prop('disabled', true)
				$('input[name="nama_ruangan"]').prop('disabled', true)
				$('select[name="nama_barang"]').prop('disabled', true)
				$('input[name="satuan"]').prop('disabled', true)
				$('input[name="jumlah"]').prop('disabled', true)
			})

			function hitung_total(){
				let total = 0;
				$('.sub_total').each(function(){
					total += parseInt($(this).text())
				})

				return total;
			}

			function reset(){
				$('#nama_barang').val('')
				$('input[name="kode_barang"]').val('')
				$('input[name="nama_ruangan"]').val('')
				$('input[name="jumlah"]').val('')
				$('input[name="jumlah"]').prop('readonly', true)
				$('button#tambah').prop('disabled', true)
			}
		})
	</script>
</body>
</html>