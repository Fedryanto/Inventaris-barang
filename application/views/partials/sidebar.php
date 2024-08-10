<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
		<div class="sidebar-brand-icon rotate-n-15">

		</div>
		<div class="sidebar-brand-text mx-3">Inventaris Sekolah</div>
	</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item <?= $aktif == 'dashboard' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>
	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Master
	</div>

	<li class="nav-item <?= $aktif == 'barang' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('barang') ?>">
			<i class="fas fa-fw fa-box"></i>
			<span> Barang</span></a>
	</li>

	<li class="nav-item <?= $aktif == 'ruangan' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('ruangan') ?>">
			<i class="fas fa-fw fa-folder"></i>
			<span> Ruangan</span></a>
	</li>

	<li class="nav-item <?= $aktif == 'petugas' ? 'active' : '' ?>">
		<a class="nav-link" href="<?= base_url('petugas') ?>">
			<i class="fas fa-fw fa-users"></i>
			<span> Petugas</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

<div class="sidebar-heading">
	Transaksi
</div>

<li class="nav-item <?= $aktif == 'penerimaan' ? 'active' : '' ?>">
	<a class="nav-link" href="<?= base_url('penerimaan') ?>">
		<i class="fas fa-fw fa-file-invoice"></i>
		<span> Penerimaan</span></a>
</li>

<li class="nav-item <?= $aktif == 'pengeluaran' ? 'active' : '' ?>">
	<a class="nav-link" href="<?= base_url('pengeluaran') ?>">
		<i class="fas fa-fw fa-file-invoice"></i>
		<span> Pengeluaran</span></a>
</li>

	<hr class="sidebar-divider">

<div class="sidebar-heading">
	Laporan
</div>

<li class="nav-item <?= $aktif == 'DataLaporan' ? 'active' : '' ?>">
	<a class="nav-link" href="<?= base_url('DataLaporan') ?>">
		<i class="fas fa-fw fa-file-invoice"></i>
		<span> Laporan</span></a>
</li>


	<hr class="sidebar-divider">
	<?php if ($this->session->login['role'] == 'admin') : ?>
		<!-- Heading -->
		<div class="sidebar-heading">
			Pengaturan
		</div>

		<li class="nav-item <?= $aktif == 'pengguna' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('pengguna') ?>">
				<i class="fas fa-fw fa-users"></i>
				<span>Manajemen Administrator</span></a>
		</li>

		<li class="nav-item <?= $aktif == 'sekolah' ? 'active' : '' ?>">
			<a class="nav-link" href="<?= base_url('sekolah') ?>">
				<i class="fas fa-fw fa-building"></i>
				<span>Profil </span></a>
		</li>
		<!-- Divider -->
	<?php endif; ?>
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>