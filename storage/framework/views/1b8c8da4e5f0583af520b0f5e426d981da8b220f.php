<li class="nav-item">
    <a href="<?php echo e(route('alumnos.index')); ?>"
       class="nav-link <?php echo e(Request::is('alumnos*') ? 'active' : ''); ?>">
        <p>Alumnos</p>
    </a>
</li>


<li class="nav-item">
    <a href="<?php echo e(route('cursos.index')); ?>"
       class="nav-link <?php echo e(Request::is('cursos*') ? 'active' : ''); ?>">
        <p>Cursos</p>
    </a>
</li>


<?php /**PATH C:\Users\Dell\Documents\Laravel\adminlte-generator\resources\views/layouts/menu.blade.php ENDPATH**/ ?>