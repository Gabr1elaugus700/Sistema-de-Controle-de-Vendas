async function deletaVenda(id_prod) {
  Swal.fire({
    title: 'Tem certeza que deseja apagar?',
    showDenyButton: true,
    showCancelButton: false,
    confirmButtonText: 'Apagar',
    denyButtonText: `Cancelar`,
  }).then(async (result) => {
    if (result.isConfirmed) {
      const dados = await fetch('../include/deleteVendas.php?id=' + id_prod);
      const resposta = await dados.json();
      
      if (resposta['erro']) {
        Swal.fire('Erro!', resposta['msg'], 'error');
      } else {
        Swal.fire('Sucesso!', resposta['msg'], 'success').then(() => {
          location.reload("../tabela.php")
        });
      }
    } else if (result.isDenied) {
      Swal.fire('Operação cancelada!', '', 'info');
    }
  });
}
