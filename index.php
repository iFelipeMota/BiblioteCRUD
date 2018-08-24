<?php
	include "cabecalho.php";
?>	
		<div class="container input-group">
		  <input type="text" class="form-control" placeholder="Livros, autores...">
		  <span class="input-group-btn">
			<button class="btn btn-default" type="button">Pesquisar</button>
		  </span>
		</div>		
		
		<div class="container">
					<div class="row">
			<?php
				for ($i = 1; $i <= 13; $i++) {
						include "thumbLivro.php";
					if($i%4 == 0){ ?> 
					</div>
					<div class="row">
				<?php }}
					?>
		</div>
		
		</div>
		</div>
	</body>
</html>