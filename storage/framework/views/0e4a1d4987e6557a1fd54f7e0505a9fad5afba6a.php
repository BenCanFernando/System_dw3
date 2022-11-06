<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Curso</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        <?php echo $__env->make('adminlte-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="card">

            <?php echo Form::model($curso, ['route' => ['cursos.update', $curso->id], 'method' => 'patch']); ?>


            <div class="card-body">
                <div class="row">
                    <?php echo $__env->make('cursos.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="card-footer">
                <?php echo Form::submit('Guardar', ['class' => 'btn btn-primary']); ?>

                <a href="<?php echo e(route('cursos.index')); ?>" class="btn btn-default">Cancelar</a>
            </div>

            <?php echo Form::close(); ?>


        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Documents\Laravel\adminlte-generator\resources\views/cursos/edit.blade.php ENDPATH**/ ?>