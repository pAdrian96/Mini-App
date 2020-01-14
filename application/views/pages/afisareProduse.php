<div class="container mt-4">
	<div class="row">
		<h4>
			Valoarea introdusa pentru X este <?php echo $valX ?><br>
			Valoarea introdusa pentru Y este <?php echo $valY ?>	
		</h4>
	</div>

	<!-- daca numarul de produse dintr-o categorie este mai mare decat valoarea Y-->
	<div class="row">
			<table class="table mt-4" id="tabelAfisareProduse">
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
						<th scope="col">id</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($produse as $produs) :?>
					<tr>
						<td><?php echo $produs->id;?></td>
						<td><?php echo $produs->nume;?></td>
						<td><?php echo $produs->codDeBara;?></td>
						<td><?php echo $produs->codDeBaraSecundar;?></td>
						<td><?php echo $produs->pretAchizitie;?></td>
						<td><?php echo $produs->pretVanzareTVA;?></td>
						<td><?php echo $produs->tva;?></td>
						<td><?php echo $produs->descriere;?></td>
						<td><?php echo $produs->poza;?></td>
						<td><?php echo $produs->idCategorie;?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
	</div>
	
	<?php foreach($test as $test): ?>
		<?php if($test->count >= $valY):?>
			<p>Categoria <?php echo $test->nume; ?> are un numar de cel putin <?php echo $valY ?> produse mai scumpe la vanzare decat valoarea <?php echo $valX; ?></p>
		<?php endif; ?>
	<?php endforeach;?>
	

	
	
</div>
