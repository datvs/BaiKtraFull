<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nghiphep extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Nghiphep_model');
	}

	public function index()
	{
		$nghiphep = $this->Nghiphep_model->getAll();
		$data['data_nghiphep'] = $nghiphep;
		$this->load->view('nghiphep/Nghiphep_view', $data);
	}

	
	function add()
	{
		$object = $this->input->post();
		if ($this->Nghiphep_model->add($object)) {
			echo ('<script type="text/javascript">');
			echo 'alert("More success")';
			echo ('</script>');
			redirect('nghiphep','refresh');
		}
		else{
			echo ('<script type="text/javascipt">');
			echo 'alert("Add failed")';
			echo ('</script>');
			redirect('nghiphep','refresh');
		}
	}

	function delete($id)
	{
		// echo ($id);
		if ($this->Nghiphep_model->delete($id)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Delete successful")';
			echo '</script>';
			redirect('nghiphep','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Delete failed")';
			echo '</script>';
			redirect('nghiphep','refresh');
		}
						
	}

	function laydulieu($id)
	{
		$data = $this->Nghiphep_model->laydulieu($id);
		$data['data_suanghiphep'] = $data;
		$this->load->view('nghiphep/suanghiphep_view', $data);
	}

	function sua()
	{
		$data = $this->input->post();
		if ($this->Nghiphep_model->update($data)) {
			echo ('<script type="text/javascript">');
			echo 'alert("Fix Successful")';
			echo '</script>';
			redirect('nghiphep','refresh');
		}
		else{
			echo ('<script type="text/javascript">');
			echo 'alert("Fix failed")';
			echo '</script>';
			redirect('nghiphep','refresh');
		}
	}


}

/* End of file Monhoc.php */
/* Location: ./application/controllers/Monhoc.php */