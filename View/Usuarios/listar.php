<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
            if($usuario){
                foreach ($usuarios as $usuario) {
                    echo "<th scope='row'>".$usuario['id']."</th>";
                    echo "<td>".$usuario['nome']."</th>";
                }
            }else{
                echo "<td> Nenhum usuario encontrado! </th>";
            }
        ?>
    </tr>
    </tbody>
</table>
