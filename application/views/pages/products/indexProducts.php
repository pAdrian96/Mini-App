<div class="row mt-4">
	<div class="container">
		<h2>Acestea sunt produsele stocate</h2>
	</div>
	<div class="container">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formAddProduct"><i class="far fa-plus-square fa-2x"></i></button>
	
	<!-- modal -->
	<div class="modal fade" id="formAddProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
						<h5 class="modal-title w-100" id="myModalLabel">Completează campurile de mai jos:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-left">
                        <div class="container">
							<form action="<?php echo base_url('createProduct'); ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nume">Nume Produs</label>
									<input type="text" class="form-control" name="nume" placeholder="Nume Produs">
								</div>
								<div class="form-group">
									<label for="codDeBara">Cod de bara</label>
									<input type="text" class="form-control" name="codDeBara" placeholder="Cod de bara">
								</div>
								<div class="form-group">
									<label for="codDeBaraSecundar">Cod de bara secundar</label>
									<input type="text" class="form-control" name="codDeBaraSecundar" placeholder="Cod de bara Secundar">
								</div>
								<div class="form-group">
									<label for="pretAchizitie">Pret Achizitie</label>
									<input type="number" class="form-control" name="pretAchizitie" placeholder="Pret Achizitie">
								</div>
								<div class="form-group">
									<label for="tva">TVA</label>
									<input type="number" class="form-control" name="tva" placeholder="TVA">
								</div>
								<div class="form-group">
									<label for="descriere">Descriere</label>
									<input type="text" class="form-control" name="descriere" placeholder="Descriere">
								</div>
								<div class="form-group">
									<label for="poza">Selecteaza poza</label>
            						<input type="file" name="poza">
								</div>
								<div class="form-group">
									<label for="category">Selecteaza o categorie pentru acest produs</label>
									<select class="form-control" name="category">
										<?php foreach($categories as $category) :?>
											<option value="<?php echo $category['id']?>">
												<?php echo $category['id'];?> <?php echo $category['nume'];?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
                                <div class="mt-5">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta!</button>
                                    <button type="submit" class="btn btn-primary" id="posteaza">Posteaza!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

	</div>
	<div class="container mt-4">
	<table class="table">
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
				<th scope="col">Editeaza</th>
				<th scope="col">Sterge</th>
				<th scope="col">idCategorie</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($produse as $produs) :?>
				<tr>
					<td><?php echo $produs['id'];?></td>
					<td><?php echo $produs['nume'];?></td>
					<td><?php echo $produs['codDeBara'];?></td>
					<td><?php echo $produs['codDeBaraSecundar'];?></td>
					<td><?php echo $produs['pretAchizitie'];?></td>
					<td><?php echo $produs['pretVanzareTVA'];?></td>
					<td><?php echo $produs['tva'];?></td>
					<td><?php echo $produs['descriere'];?></td>
					<td><?php echo $produs['poza'];?></td>
					<td>
						<?php echo "<a href='editProduct/".$produs['id']."' class='btn btn-primary btn-sm'>Editeaza</a>" ?>
					</td>
					<td>
						<?php echo "<a href='deleteProduct/".$produs['id']."' class='btn btn-danger btn-sm'>Sterge</a>" ?>
					</td>
					<td><?php echo $produs['idCategorie'];?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
</div>
