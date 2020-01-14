<div class="row mt-4">
	<div class="container">
		<h2>Acestea sunt produsele care apartin de categoria: <?php echo $category['nume'] ?> </h2>
		<h3>Categoria contine un numar de <?php echo $totalProducts ?> produse</h3>
	</div>
	<div class="container mt-4">
		<table class="table mt-4">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nume produs</th>
				<th scope="col">Cod de bara</th>
				<th scope="col">Cod de bara secundar</th>
				<th scope="col">Pret achizitie</th>
				<th scope="col">Pret vanzare(cu tva)</th>
				<th scope="col">TVA</th>
				<th scope="col">Descriere</th>
				<th scope="col">Poza</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($products as $product) :?>
				<tr>
					<td><?php echo $product->id;?></td>
					<td><?php echo $product->nume;?></td>
					<td><?php echo $product->codDeBara;?></td>
					<td><?php echo $product->codDeBaraSecundar;?></td>
					<td><?php echo $product->pretAchizitie;?></td>
					<td><?php echo $product->pretVanzareTVA;?></td>
					<td><?php echo $product->tva;?></td>
					<td><?php echo $product->descriere;?></td>
					<td><?php echo $product->poza;?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
	
	
</div>

