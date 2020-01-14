<?php
	class Produse_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function getProducts(){
			$query=$this->db->get('produse');
			return $query->result_array(); 
		}
		public function insertProducts($nume, $codDeBara, $codDeBaraSecundar, $pretAchizitie, $pretVanzareTVA, $tva, $descriere, $poza, $idCategorie){
			$query="insert into produse(nume, codDeBara, codDeBaraSecundar, pretAchizitie, pretVanzareTVA, tva, descriere, poza, idCategorie)
				   values('$nume','$codDeBara', '$codDeBaraSecundar', '$pretAchizitie', '$pretVanzareTVA', '$tva', '$descriere', '$poza', '$idCategorie')";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('products'));
			}
		}
		public function editProduct($id){
			$query=$this->db->query("select * from form where id='".$id."'");
			return $query->result();
		}
		public function getProduct($id){
			$query=$this->db->get_where('produse',array('id'=>$id));
			return $query->row_array();
		}
		public function updateProduct($nume, $codDeBara, $codDeBaraSecundar, $pretAchizitie, $pretVanzareTVA, $tva, $descriere, $poza,$id){
			$query="UPDATE produse SET nume='$nume', codDeBara='$codDeBara', codDeBaraSecundar='$codDeBaraSecundar', pretAchizitie='$pretAchizitie',
					 pretVanzareTVA='$pretVanzareTVA', tva='$tva', descriere='$descriere', poza='$poza' WHERE id='$id'";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('products'));
			}
			
		}
		public function deleteProduct($id){
			$query="DELETE  from produse WHERE id='$id'";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('products'));
			}
		}

		public function getProductsById($id){
			$query=$this->db->query("SELECT * from produse where idCategorie='".$id."'");
			return $query->result();
		}
		public function getTotalNumberOfProductsById($id){
			$query=$this->db->query("SELECT * from produse where idCategorie='".$id."'");
			return $query->num_rows();
		}

		public function getAllProductsOnSale($valX){
			$query=$this->db->query("SELECT * from produse where pretVanzareTVA>'".$valX."'");
			return $query->result();
		}
		

		public function getIdOfCategory($valX){
			// $query=$this->db->query("SELECT produse.idCategorie, categoriideproduse.nume, produse.codDeBara 
			// 		FROM produse, categoriideproduse
			// 		WHERE produse.pretVanzareTVA>'".$valX."'
			// 		AND produse.idCategorie=categoriideproduse.id
			// 		GROUP BY categoriideproduse.nume
			// ");
			$queryy=$this->db->query("SELECT produse.idCategorie, categoriideproduse.nume, COUNT(*) as count FROM produse INNER JOIN categoriideproduse ON produse.idCategorie=categoriideproduse.id WHERE pretVanzareTVA>'".$valX."' GROUP BY idCategorie ");
			

			return $queryy->result();
			
		}

	}
