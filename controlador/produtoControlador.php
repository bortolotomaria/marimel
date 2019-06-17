<?php
function adicionar () {
    if (ehPost()) {
        $preco = $_POST["preco"];
        $nomeprod = $_POST["nomeprodu"];
        $descricao = $_POST["descricao"];
        $imagem = $_POST["imagem"];
        $estoquemax = $_POST["estoquemax"];
        $estoquemin = $_POST["estoquemin"];
        $error = array ();
        $msg = adicionarProduto ($preco, $nomeprod, $descricao, $imagem, $estoquemax, $estoquemin);
        echo $msg;
    } else {
    }
        exibir("usuario/formulario");
    
}