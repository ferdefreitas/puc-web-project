<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">ID do Usuário</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php
            if($pedidos){
                foreach ($pedidos as $pedido) {
                    echo "<th scope='row'>".$pedido['id']."</th>";
                    echo "<td>".$pedido['descricao']."</th>";
                    echo "<td>".$pedido['id_usuario']."</th>";
                }
            }else{
                echo "<td> Nenhum pedido encontrado! </th>";
            }
        ?>
    </tr>
    </tbody>
</table>