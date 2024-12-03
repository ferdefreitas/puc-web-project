<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="text-center mb-4">Lista de Usuários</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($usuarios)) {
                            foreach ($usuarios as $usuario) {
                                echo "<tr>";
                                echo "<th scope='row'>" . htmlspecialchars($usuario['id']) . "</th>";
                                echo "<td>" . htmlspecialchars($usuario['nome']) . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr>";
                            echo "<td colspan='2' class='text-center text-muted'>Nenhum usuário encontrado!</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


