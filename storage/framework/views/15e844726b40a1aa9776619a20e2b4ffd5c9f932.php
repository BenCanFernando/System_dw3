<!-- Nombre Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('nombre', 'Nombre:'); ?>

    <?php echo Form::text('nombre', null, ['class' => 'form-control']); ?>

</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('descripcion', 'Descripcion:'); ?>

    <?php echo Form::text('descripcion', null, ['class' => 'form-control']); ?>

</div>

<!-- Fechainic Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechainic', 'Fechainic:'); ?>

    <?php echo Form::text('fechainic', null, ['class' => 'form-control','id'=>'fechainic']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#fechainic').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Fechafin Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('fechafin', 'Fechafin:'); ?>

    <?php echo Form::text('fechafin', null, ['class' => 'form-control','id'=>'fechafin']); ?>

</div>

<?php $__env->startPush('page_scripts'); ?>
    <script type="text/javascript">
        $('#fechafin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
<?php $__env->stopPush(); ?>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('estado', 'Estado:'); ?>

    <?php echo Form::text('estado', null, ['class' => 'form-control']); ?>

</div><?php /**PATH C:\Users\Dell\Documents\Laravel\adminlte-generator\resources\views/cursos/fields.blade.php ENDPATH**/ ?>