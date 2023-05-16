<?php
include '../layout/app.php';
?>

<?php
include '../components/navbar.php';
?>

<div class="m-4">
    <div class="card">
        <div class="card-header">
            <h4>Ejercicio 1 de substring</h4>
        </div>
        <form action="controllers/EjercicioController.php" method="post">
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="texto" name="texto" placeholder="name@example.com">
                    <label for="texto">Ingrese Texto</label>
                </div>
            </div>

            <div class="card-footer">
              <button class="btn btn-primary" name="procesar">procesar</button>
            </div>
        </form>
    </div>
</div>

<?php
include '../components/footer.php';
?>