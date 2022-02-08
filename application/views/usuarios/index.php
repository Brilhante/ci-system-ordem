<?php $this->load->view('layout/sidebar.php'); ?>



<!-- Main Content -->
<div id="content">

	<?php $this->load->view('layout/navbar.php'); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('/'); ?>">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $titulo; ?></li>
		</ol>
	</nav>

	<?php if($message = $this->session->flashdata('error')): ?>
	<?php endif; ?>

	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
		<strong><?= $message ?></strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span></button>
	</div>
	

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a title="Cadastrar novo usuário" href="#" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i>&nbsp;Novo</a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-right">
							<th>#</th>
							<th>Usuarios</th>
							<th>Login</th>
							<th>Ativo</th>
							<th class="no-sort">Ações</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($usuarios as $user) : ?>
							<tr class="text-right">
								<td><?= $user->id ?></td>
								<td><?= $user->username ?></td>
								<td><?= $user->email ?></td>
								<td><?= $user->active ?></td>
								<td>
									<a title="Editar" href="<?= base_url('usuarios/edit/' .$user->id) ?>" class="btn btn-sm btn-primary"><i class="fas fa-user-edit"></i></a>
									<a title="Excluir" href="#" class="btn btn-sm btn-danger"><i class="fas fa-user-times"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>
<!-- End of Main Content -->