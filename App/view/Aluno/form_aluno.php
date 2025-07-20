<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistBiblioteca - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div>
        <?php include INCLUDES . 'navbar.php' ?>

        <h1>Cadastro de Aluno</h1>

        <form method="POST" action="/curso-mvc-mysql/App/aluno/cadastrar" class="p-5">
            <input type="hidden" name="id" value="<?= $model->Id?>">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" value="<?= $model->Nome?>">
            </div>
            <div class="mb-3">
                <label for="ra" class="form-label">RA:</label>
                <input type="number" class="form-control" name="ra" id="ra" value="<?= $model->RA?>">
            </div>
            <div class="mb-3">
                <label for="curso" class="form-label">Curso:</label>
                <input type="text" class="form-control" name="curso" id="curso" value="<?= $model->Curso?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>