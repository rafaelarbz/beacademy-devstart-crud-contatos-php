</br>
<div class="row" style="text-align: center;" >
    <div class="col-lg-12">
        <div class="container">
                <div class="user_card">
                    <div class="card-title">
                        <h4 class="text-light">Lista de Contatos</h4>
                    </div>
                    </br>
                    <div class="card-body">

                        <table class="table table-hover table-rounded">
                            <thead class="table-dark" style="text-align: center;">
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody class="text-light" style="text-align: center;">
                                <?php 
                                foreach ($contatos as $posicao => $cadaContato){
                                    $infoContato = explode(';', $cadaContato);
                                    echo "
                                        <tr>
                                            <td>" . $infoContato[0]. "</td>
                                            <td>" . $infoContato[1]. "</td>
                                            <td>" . $infoContato[2]. "</td>
                                            <td>
                                                <a href='/excluir?id={$posicao}' class='btn btn-sm btn-danger'>🗑️</a>
                                                <a href='/editar?id={$posicao}' class='btn btn-sm btn-warning'>✏️</a>
                                            </td>
                                        </tr>
                                    ";
                                }
                                
                                
                                ?>
                            </tbody>
                        </table>

                    </div><!--card-body-->
                </div><!-- user-card-->
        </div><!-- container-->
    </div><!--col-->
</div><!--row-->