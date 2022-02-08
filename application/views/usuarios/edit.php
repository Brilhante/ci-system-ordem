<?php $this->load->view('layout/sidebar.php'); ?>



<!-- Main Content -->
<div id="content">

	<?php $this->load->view('layout/navbar.php'); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= base_url('usuarios'); ?>">Usuários</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?= $titulo; ?></li>
		</ol>
	</nav>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a title="Voltar" href="<?= base_url('usuarios'); ?>" class="btn btn-success btn-sm">
				<i class="fas fa-arrow-left"></i>&nbsp;Voltar</a>
		</div>
		<div class="card-body">

			<form method="POST" name="form_edit">
				<div class="form-group row">
					<div class="col-md-4">
						<label>Nome:</label>
						<input type="text" class="form-control" name="first_name" placeholder="Seu nome" value="<?= $usuario->first_name ?>">
						<?= form_error('first_name'); ?>
					</div>

					<div class="col-md-4">
						<label>Sobrenome:</label>
						<input type="text" class="form-control" name="last_name" placeholder="Seu sobrenome" value="<?= $usuario->last_name ?>">
						<?= form_error('last_name'); ?>
					</div>

					<div class="col-md-4">
						<label>E-Mail&nbsp;(Login):</label>
						<input type="email" class="form-control" name="email" placeholder="Seu e-mail (Login)" value="<?= $usuario->email ?>">
						<?= form_error('email'); ?>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-4">
						<label>Usuário:</label>
						<input type="text" class="form-control" name="username" placeholder="Seu usuário" value="<?= $usuario->username ?>">
						<?= form_error('username'); ?>
					</div>
					<div class="col-md-4">
						<label>Ativo:</label>
						<select class="form-control" name="active">
							<option value="0" <?= ($usuario->active == 0) ? 'selected' : '' ?>>Não</option>
							<option value="1" <?= ($usuario->active == 1) ? 'selected' : '' ?>>Sim</option>
						</select>
					</div>

					<div class="col-md-4">
						<label>Perfil de usuário:</label>
						<select class="form-control" name="perfil_usuario">
							<option value="1" <?= ($perfil_usuario->id == 1) ? 'selected' : '' ?>>Administrador</option>
							<option value="2" <?= ($perfil_usuario->id == 2) ? 'selected' : '' ?>>Vendedor</option>
						</select>
					</div>

				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label>Senha:</label>
						<input type="password" class="form-control" name="password" placeholder="Sua senha" value="">
						<?php echo form_error('password'); ?>
					</div>
					<div class="col-md-6">
						<label>Confirme:</label>
						<input type="password" class="form-control" name="confirm_password" placeholder="confirme sua senha" value="">
						<?= form_error('confirm_password'); ?>
					</div>
					<input type="hidden" name="usuario_id" value="<?= $usuario->id?>">
				</div>
				<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			</form>

		</div>
	</div>

</div>
<!-- End of Main Content -->