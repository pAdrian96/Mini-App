<div class="row">
	<div class="container text-center mt-4">
		<h1 class="">Bun venit pe pagina principala!</h1>
		<h4 class="mt-4">Selecteaza una dintre optiunile de mai jos!</h1>
	</div>
</div>
<div class="row mt-4">
	<div class="container text-center mt-4">
		<a href="<?php echo base_url('products'); ?>" class="btn btn-primary mr-4">Produse</a>
		<a href="<?php echo base_url('productsCat'); ?>" class="btn btn-primary mr-4">Categorii de produse</a>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formAfisareProduse">Afisare categorii</button>
	
		<!-- modal -->
		<div class="modal fade" id="formAfisareProduse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<form action="<?php echo base_url('afisareProduse'); ?>" method="GET" enctype="multipart/form-data">
								<div class="form-group">
									<label for="valX">Mai scump la vanzare decat valoarea X: </label>
									<input type="number" class="form-control" name="valX">
								</div>
								<div class="form-group">
									<label for="valY">Valoarea Y pentru numarul minim de produse </label>
									<input type="number" class="form-control" name="valY">
								</div>
								<div class="mt-5">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Renunta!</button>
									<button type="submit" class="btn btn-primary" id="posteaza">Afiseaza!</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end modal -->
	</div>
</div>
