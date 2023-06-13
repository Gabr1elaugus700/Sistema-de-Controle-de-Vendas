<?php 

include("./include/conecta.php");

	$sql = "SELECT * FROM pusu ORDER BY id DESC;";
	$result = $con->query($sql);

	//print_r($result);
?>
<html>
	<head> 
		<meta charset="utf-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		
		<style type="text/css">
			body{
				background-color: darkgray;
			}
			h3{
				text-align: center;
			}
			form{
				text-align: center;
				
			}
			
			
			
			table,thead,tr{
				border-style:solid;
				font: 1rem/1.5 var(--bs-font-sans-serif);
				text-align: center;
				
			}
			tr {
 				 height: 5px;
				  
			}

			td {
				height: 15px;
  				width: 15px;
			}
		</style>
	
		
	</head> 
	<body>
		
			
		<form name="formg" action="./form.php" method="POST">
			<h3>Preencha esses dados:</h3>
			<div class="mb-3">
				<input type="text" class="form-label" name="name" value="" name="nome" placeholder="Seu nome"></input>	<b>
				<input type="number" class="form-label" name="empresa" value="" name="empresa"placeholder="Empresa padrão"></input> <b>
				<input type="text" class="form-label" name="setor" value="" name="setor" placeholder="Seu setor"></input> <b>
				<input type="submit" value="Enviar"  class="btn  btn-success btn-sm"></input>	
			</div>
		</form>
		
		
		
		<div class="m-5">
		 <table class="table table-striped table-dark table-hover">
			<thead style>
				<tr>
					<th scope="col" >Id</th>
					<th scope="col">Nome do Usuario</th>
					<th scope="col">Empresa</th>
					<th scope="col">Setor</th>
					<th scope="col">#</th>
					
				</tr>
			</thead>
			<tbody style="text-transform: uppercase;">
				
				<?PHP 
					while($dados = mysqli_fetch_assoc($result)){
						$id = $dados['id'];
						echo "<tr>";
						echo "<td>".$dados["id"]."</td>";
						echo "<td>".$dados["name"]."</td>";
						echo "<td>".$dados["empresa"]."</td>";
						echo "<td>".$dados["setor"]."</td>";

					?> 
					<td>
						
						<a class="btn btn-sm btn-primary" href="#">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  								<path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
							</svg>
						</a>
						<!--<a class="btn btn-sm btn-danger" href="exclui.php?id=<?php echo $id?>">-->
						<a class="btn btn-sm btn-danger" 
						onClick="if (confirm('Deseja realmente excluir o item Seq. ')) { removeItemProposta(<?php echo $id; ?>) } else { return false;}" >
					
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  							<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  							<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
							</svg>
				
						</a>
					</td>
					<?php
					}			
				?>
			</tbody>
			 
		 </table>
		 </div>
		 <div id="dvItens">
				
		 </div>
	</body>

</html>
<script language='JavaScript' src='./js/jquery-1.12.4.min.js'></script>
<script type="text/javascript">
	function removeItemProposta(id) {
		//alert('entrou na função '+ id)		
		//window.location="exclui.php?id="+id;

		var dados = 'id=' + id;
                //alert( dados );
                jQuery.ajax({
                    type: "POST",
                    url: "./exclui.php",
                    data: dados,
                    success: function (resultado)
                    {
                        alert(resultado);
                        var resultado = eval('(' + resultado + ')');
                        if (resultado.retorno == "sucesso") {
                            alert('Item removido com sucesso.');                            
							atualizaDados();
                        } else {
                            alert('Erro ao remover item da proposta!');
                        }
                    }
                });
	}

	function atualizaDados(){
		document.getElementById('dvItens').innerHTML = "<table class='table table-striped table-dark table-hover'><thead style><tr><th scope='col' >Id</th><th scope='col'>Nome do Usuario</th><th scope='col'>Empresa</th><th scope='col'>Setor</th><th scope='col'>#</th></tr></thead></table>";
	}
</script>