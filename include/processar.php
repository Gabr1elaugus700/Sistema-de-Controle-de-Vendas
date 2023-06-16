<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['produtos'])) {
        $produtosSelecionados = $_POST['produtos'];
        
        // Processar os produtos selecionados
        foreach ($produtosSelecionados as $produto) {
            echo "Produto selecionado: " . $produto . "<br>";
        }
    } else {
        echo "Nenhum produto selecionado.";
    }
}
?>
