<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Inventario</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center"> Inventario de Productos</h1>
        <hr>
        <div class="row" id="items"></div>
    </div>

    <template id="template-card">
        <div class="col-12 col-md-3">
            <div class="card">
                <img src="" class="card-img-top" alt="..." style="width: 100px; height: 100px;">
                <div class="card-body">
                    <h5 class="card-title">Producto</h5>
                    <p class="card-text">$<span>30.00</span></p>
                </div>
            </div>
        </div>
    </template>

    <script src="app.js"></script>

</body>

</html>