<?php
	class Categories_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}
		
		public function getCategories(){
			$query=$this->db->get('categoriideproduse');
			return $query->result_array(); 
		}
		public function insertCategory($nume, $descriere){
			$query="INSERT into categoriideproduse(nume,descriere) VALUES('$nume','$descriere')";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('productsCat'));
			}
		}

		public function getCategory($id){
			$query=$this->db->get_where('categoriideproduse',array('id'=>$id));
			return $query->row_array();
		}

		public function updateCategory($nume, $descriere, $id){
			$query="UPDATE categoriideproduse SET nume='$nume', descriere='$descriere' WHERE id='$id'";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('productsCat'));
			}
		}

		public function deleteCategory($id){
			$query="DELETE from categoriideproduse WHERE id='$id'";
			$this->db->query($query);
			if($query){
				header('location:'.base_url('productsCat'));
			}
		}


		
	}
