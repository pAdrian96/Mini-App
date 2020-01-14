<div class="container text-center">
	<h2>Completeaza campurile de mai jos pentru a edita produsul:</h2>
	<div class="container col-lg-6 col-sm-6 col-md-6 text-left mt-4">
		<?php extract($product) ?>
		<form action="<?php echo base_url('updateProduct/'.$id); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nume">Nume Produs</label>
				<input type="text" class="form-control" name="nume" value="<?php echo $nume?>">
			</div>
			<div class="form-group">
				<label for="codDeBara">Cod de bara</label>
				<input type="text" class="form-control" name="codDeBara" value="<?php echo $codDeBara?>">
			</div>
			<div class="form-group">
				<label for="codDeBaraSecundar">Cod de bara secundar</label>
				<input type="text" class="form-control" name="codDeBaraSecundar" value="<?php echo $codDeBaraSecundar?>">
			</div>
			<div class="form-group">
				<label for="pretAchizitie">Pret Achizitie</label>
				<input type="number" class="form-control" name="pretAchizitie" value="<?php echo $pretAchizitie?>">
			</div>
			<div class="form-group">
				<label for="tva">TVA</label>
				<input type="number" class="form-control" name="tva" value="<?php echo $tva?>">
			</div>
			<div class="form-group">
				<label for="descriere">Descriere</label>
				<input type="text" class="form-control" name="descriere" value="<?php echo $descriere?>">
			</div>
			<div class="form-group">
				<label for="poza">Selecteaza poza</label>
				<input type="file" name="poza" name="poza" value="<?php echo $poza?>">
			</div>
			<div class="mt-5">
				<button type="submit" class="btn btn-primary" id="posteaza">Actualizeaza!</button>
			</div>
		</form>

	</div>
</div>
