<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistBiblioteca - Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div>
        <?php include INCLUDES . 'navbar.php'?>
        
        <h1>Lista de Alunos</h1> 

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $aluno): ?>
                <tr>
                    <td> <?= $aluno->Id?> </td>
                    <td> 
                        <a href="/curso-mvc-mysql/App/aluno/cadastrar?id=<?= $aluno->Id?>"><?= $aluno->Nome?></a>  
                    </td>
                    <td> <?= $aluno->Curso?> </td>
                </tr>
                <?php endforeach ?>

            </tbody>
        </table>

        <a href="/curso-mvc-mysql/App/aluno/cadastrar">NOVO ALUNO</a>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>