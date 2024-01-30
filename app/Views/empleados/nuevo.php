<?php echo $this->extend('plantilla'); ?>

<?= $this->section('contenido'); ?>

<h3 class="my-3">Nuevo empleado</h3>

<?php if (session()->getFlashdata('error') !== null) { ?>
    <div class="alert alert-danger">
        <?= session()->getFlashdata('error'); ?>
    </div>
<?php } ?>

<form action="<?= base_url('empleados'); ?>" class="row g-3" method="post" autocomplete="off">

    <div class="col-md-4">
        <label for="clave" class="form-label">Clave</label>
        <input type="text" class="form-control" id="clave" name="clave" value="<?= set_value('clave') ?>" required autofocus>
    </div>

    <div class="col-md-8">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= set_value('nombre') ?>" required>
    </div>

    <div class="col-md-6">
        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?= set_value('fecha_nacimiento') ?>" required>
    </div>

    <div class="col-md-6">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="telefono" class="form-control" id="telefono" name="telefono" value="<?= set_value('telefono') ?>" required>
    </div>

    <div class="col-md-6">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
    </div>

    <div class="col-md-6">
        <label for="departamento" class="form-label">Departamento</label>
        <select class="form-select" id="departamento" name="departamento" required>
            <option value="">Seleccionar</option>
            <?php foreach ($departamentos as $departamento) : ?>
                <option value="<?= $departamento['id']; ?>"><?= $departamento['nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="col-12">
        <a href="<?= base_url('empleados'); ?>" class="btn btn-secondary">Regresar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>

</form>

<?= $this->endSection(); ?>