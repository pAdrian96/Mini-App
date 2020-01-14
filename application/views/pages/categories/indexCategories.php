<div class="row mt-4">
	<div class="container">
		<h2>Acestea sunt categoriile stocate</h2>
	</div>
	<div class="container">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#formAddCategory"><i class="far fa-plus-square fa-2x"></i></button>
	
	<!-- modal -->
	<div class="modal fade" id="formAddCategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<form action="<?php echo base_url('createCategory'); ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="nume">Nume Categorie</label>
									<input type="text" class="form-control" name="nume" placeholder="Nume Categorie">
								</div>
								<div class="form-group">
									<label for="descriere">Descriere</label>
									<input type="text" class="form-control" name="descriere" placeholder="Descriere">
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
				<th scope="col">Nume Categorie</th>
				<th scope="col">Descriere</th>
				<th scope="col">Editeaza</th>
				<th scope="col">Sterge</th>
				<th scope="col">Vezi categoria impreuna cu elementele sale</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($categories as $category) :?>
				<tr>
					<td><?php echo $category['id'];?></td>
					<td><?php echo $category['nume'];?></td>
					<td><?php echo $category['descriere'];?></td>
					<td>
						<?php echo "<a href='editCategory/".$category['id']."' class='btn btn-primary btn-sm'>Editeaza</a>" ?>
					</td>
					<td>
						<?php echo "<a href='deleteCategory/".$category['id']."' class='btn btn-danger btn-sm'>Sterge</a>" ?>
					</td>
					<td>
						<?php echo "<a href='viewCategory/".$category['id']."' class='btn btn-info btn-sm'>Vizualizeaza</a>" ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	</div>
</div>
