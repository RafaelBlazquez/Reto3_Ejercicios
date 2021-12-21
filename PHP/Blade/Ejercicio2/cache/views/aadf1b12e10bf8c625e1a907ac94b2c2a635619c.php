<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Marca</td>
            <td><?php echo e($zapatilla->getMarca()); ?></td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td><?php echo e($zapatilla->getModelo()); ?></td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td><?php echo e($zapatilla->getTipo()); ?></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><?php echo e($zapatilla->getPrecio()); ?></td>
        </tr>
      
    </table>
</body>
</html>

<?php /**PATH /vagrant/Blade/Ejercicio2/views/zapatilla.blade.php ENDPATH**/ ?>