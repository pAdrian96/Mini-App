<div class="container text-center">
	<h2>Completeaza campurile de mai jos pentru a edita categoria:</h2>
	<div class="container col-lg-6 col-sm-6 col-md-6 text-left mt-4">
		<?php extract($category) ?>
		<form action="<?php echo base_url('updateCategory/'.$id); ?>" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nume">Nume Categorie</label>
				<input type="text" class="form-control" name="nume" value="<?php echo $nume?>">
			</div>
			<div class="form-group">
				<label for="descriere">Descriere</label>
				<input type="text" class="form-control" name="descriere" value="<?php echo $descriere?>">
			</div>
								
            <div class="mt-5">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta!</button>
                <button type="submit" class="btn btn-primary" id="posteaza">Posteaza!</button>
            </div>
        </form>
	</div>
</div>
