<?php

class Rs extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('model_rs');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		
	}

	public function index()
	{
		if(isset($_POST['id1'])){
			
			$data['bagan'] = 	$this->model_bagan->edit($_POST['id1'], $_POST['jabatan1'], $_POST['badan1'], $_POST['id2'], $_POST['jabatan2'], $_POST['badan2']);
			
		};
		
		$data['rp'] = $this->model_rs->all();
		$data['rp2'] = $this->model_rs->all2();
        $this->load->view("viewer", $data);
	}

	public function editor()
	{
		
		if(isset($_SESSION['nama'])){
			$data['rp'] = $this->model_rs->all();
			$data['rp2'] = $this->model_rs->all2();
        	$this->load->view("editor", $data);
		}else{
			$this->load->view("forbid");
			
		}	
		
	}

	public function add(){
		if(isset($_POST['nama'])){
			
			$this->model_rs->insertRP();
			unset($_POST['nama']);
			unset($_POST['kelas']);
			redirect('rs/editor');
		};
	}

	public function add2(){
		if(isset($_POST['nama'])){
			
			$this->model_rs->insertRP2();
			unset($_POST['nama']);
			unset($_POST['kelas']);
			redirect('rs/editor');
		};
	}
	
	function delete($id)
	{
		$this->model_rs->row_delete($id);
		redirect('rs/editor');  
	}

	function delete2($id)
	{

		$this->model_rs->row_delete2($id);
		redirect('rs/editor');  
	}

	function update($id)
    {
        $data = array (
            'nama' => $_POST['nama'],
            'kelas' => $_POST['kelas']
            );
		$this->model_rs->update_record($id, $data);
		redirect('rs/editor');  
	}
	
	function update2($id)
    {
        $data = array (
            'nama' => $_POST['nama'],
            'kelas' => $_POST['kelas']
            );
		$this->model_rs->update_record2($id, $data);
		redirect('rs/editor');  
	}
	

	function data($id)
    {
        $data = array (
            'jumlah' => $_POST['jumlah'],
			'lama' => $_POST['lama'],
			'baru' => $_POST['baru'],
			'pulang' => $_POST['pulang'],
			'pria' => $_POST['pria'],
			'wanita' => $_POST['wanita'],
			'umum' => $_POST['umum'],
			'janda' => $_POST['janda'],
			'bpjs' => $_POST['bpjs'],
            );
		$this->model_rs->update_data($id, $data);
		redirect('rs/editor');  
	}
	
	function data2($id)
    {
        $data = array (
            'jumlah' => $_POST['jumlah'],
			'inap' => $_POST['inap'],
			'rj' => $_POST['rj'],
			'aps' => $_POST['aps'],
			'rujuk' => $_POST['rujuk'],
			'doa' => $_POST['doa'],
			'umum' => $_POST['umum'],
			'janda' => $_POST['janda'],
			'bpjs' => $_POST['bpjs'],
            );
		$this->model_rs->update_data2($id, $data);
		redirect('rs/editor');  
    }
	
	
}