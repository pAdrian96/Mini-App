<?php
	class Pages extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->model('produse_model');
			$this->load->model('categories_model');
			$this->load->library('upload');
			$this->load->helper(array('form', 'url'));
		}

		public function view(){
			$this->load->view('templates/header');
			$this->load->view('pages/home');
			$this->load->view('templates/footer');
		}
		public function indexProducts(){
			$data['categories']=$this->categories_model->getCategories();
			$data['produse']=$this->produse_model->getProducts();

			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/products/indexProducts',$data);
			$this->load->view('templates/footer');
		}
		public function createProduct(){
			$nume=$this->input->post('nume');
			$codDeBara=$this->input->post('codDeBara');
			$codDeBaraSecundar=$this->input->post('codDeBaraSecundar');
			$pretAchizitie=$this->input->post('pretAchizitie');
			$tva=$this->input->post('tva');
			$pretVanzareTVA=$pretAchizitie+($pretAchizitie*($tva/100));
			$descriere=$this->input->post('descriere');
			$idCategorie=$this->input->post('category');

			$config['upload_path']='./uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['file_name'] = $_FILES['poza']['name'];
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if($this->upload->do_upload('poza')){
				$uploadData=$this->upload->data();
				$poza=$uploadData['file_name'];
			}else{
				$poza='';
			}
			
			$this->produse_model->insertProducts($nume, $codDeBara, $codDeBaraSecundar, $pretAchizitie, $pretVanzareTVA, $tva, $descriere, $poza, $idCategorie);
			echo "salvate cu succes";
		}

		public function editProduct($id){
			$data["product"]=$this->produse_model->getProduct($id);

			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/products/editProducts',$data);
			$this->load->view('templates/footer');
		}

		public function updateProduct($id){
			$nume=$this->input->post('nume');
			$codDeBara=$this->input->post('codDeBara');
			$codDeBaraSecundar=$this->input->post('codDeBaraSecundar');
			$pretAchizitie=$this->input->post('pretAchizitie');
			$tva=$this->input->post('tva');
			$pretVanzareTVA=$pretAchizitie+($pretAchizitie*($tva/100));
			$descriere=$this->input->post('descriere');
			$poza=$this->input->post('nume');

			$this->produse_model->updateProduct($nume, $codDeBara, $codDeBaraSecundar, $pretAchizitie, $pretVanzareTVA, $tva, $descriere, $poza, $id);
		}

		public function deleteProduct($id){
			$this->produse_model->deleteProduct($id);
		}

		public function indexCategories(){

			$data['categories']=$this->categories_model->getCategories();
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/categories/indexCategories',$data);
			$this->load->view('templates/footer');
		}
		public function createCategory(){
			$nume=$this->input->post('nume');
			$descriere=$this->input->post('descriere');

			$this->categories_model->insertCategory($nume,$descriere);

		}
		public function editCategory($id){
			$data["category"]=$this->categories_model->getCategory($id);
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/categories/editCategory',$data);
			$this->load->view('templates/footer');
		}
		public function updateCategory($id){
			$nume=$this->input->post('nume');
			$descriere=$this->input->post('descriere');

			$this->categories_model->updateCategory($nume,$descriere, $id);
		}
		
		public function deleteCategory($id){
			$this->categories_model->deleteCategory($id);
		}
	
		public function viewCategory($id){

			$data["products"]=$this->produse_model->getProductsById($id);
			$data["category"]=$this->categories_model->getCategory($id);
			$data['totalProducts']=$this->produse_model->getTotalNumberOfProductsById($id);
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/categories/viewProductFromCategory',$data);
			$this->load->view('templates/footer');
		}

		public function afisareProduse(){
			$data=array(
				'valX'=>$this->input->get('valX'),
				'valY'=>$this->input->get('valY')
			);
			$valX=$this->input->get('valX');
			$valY=$this->input->get('valY');

			$data['produse']=$this->produse_model->getAllProductsOnSale($valX);
			$data['test']=$this->produse_model->getIdOfCategory($valX);

			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('pages/afisareProduse',$data);
			$this->load->view('templates/footer');
		}


	}

?>
