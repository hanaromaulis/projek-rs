<?php  
	Class Model_rs extends CI_Model{
	 public function __construct() 
     {
           parent::__construct(); 
           $this->load->database();
     }


	function all(){
		$this->db->select('*');
		$this->db->from('ruangperawatan');
		$this->db->order_by('Id','ASC');
		$data = $this->db->get();
		return $data->result();
		
	}
	
	function all2(){
		$this->db->select('*');
		$this->db->from('ruangperawatan2');
		$this->db->order_by('Id','ASC');
		$data = $this->db->get();
		return $data->result();
		
	}

	function insertRP(){
		$nama=$this->input->post('nama');
    	$kelas=$this->input->post('kelas');
    	$data = array(
        	'nama'=>$nama,
        	'kelas'=>$kelas
   	 	);

    	$this->db->insert('ruangperawatan',$data);
	}

	function insertRP2(){
		$nama=$this->input->post('nama');
    	$kelas=$this->input->post('kelas');
    	$data = array(
        	'nama'=>$nama,
        	'kelas'=>$kelas
   	 	);

    	$this->db->insert('ruangperawatan2',$data);
	}

	function row_delete($id)
	{
   		$this->db->where('id', $id);
   		$this->db->delete('ruangperawatan'); 
	}

	function row_delete2($id)
	{
   		$this->db->where('id', $id);
   		$this->db->delete('ruangperawatan2'); 
	}

	function update_record($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ruangperawatan', $data);
	}
	
	function update_record2($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ruangperawatan2', $data);
	}

	function update_data($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ruangperawatan', $data);
    }
	
	function update_data2($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('ruangperawatan2', $data);
    }


	function login(){
		$pass = $this->input->post('password');
		$user = $this->input->post('username');
		$this->db->select('password');
		$this->db->where('username', $user);
		$query = $this->db->get('user')->row();
		if (!empty($query->password)) {
			if ($pass == $query->password) {
				return 1;
			} else { return 0; }
		} else { return 0; }
	}

	function namaPetugas(){
		$pass = $this->input->post('password');
		$user = $this->input->post('username');
		$this->db->select('*');
		$this->db->where('username', $user);
		$query = $this->db->get('user')->row();
		if (!empty($query->password)) {
			if ($pass == $query->password) {
				return $query->nama;
			} else { return 0; }
		} else { return 0; }	
	}
	

	function idPetugas(){
		$pass = $this->input->post('password');
		$user = $this->input->post('username');
		$this->db->select('*');
		$this->db->where('username', $user);
		$query = $this->db->get('user')->row();
		if (!empty($query->password)) {
			if ($pass == $query->password) {
				return $query->id;
			} else { return 0; }
		} else { return 0; }
	}




}

?>