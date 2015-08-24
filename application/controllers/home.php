<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
    function __construct(){
	    parent::__construct();
	    
	    $this->load->model('m_cds');
	}
    
	public function index()
	{
		$this->load->view('v_home_index');
	}
    
    public function login()
    {
		$this->load->view('login');
	}
    
    public function view()
    {
        $data['view'] = $this->m_cds->get_all();
        $this->load->view('view', $data);
    }
function edit(){
	    $id = $this->uri->segment(3);
	    $data['cd'] = $this->m_cds->get_by_id($id);	 
	    
	    if ($data['cd'] === false) {
	        show_404();
	    } else {
            if ($this->input->post('submit') == 'submit') {

                $to_save = array(
                    'id' => $id,
                    'titel' => $this->input->post('titel'),
                    'jahr' => $this->input->post('jahr'),
                    'interpret' => $this->input->post('interpret')
                );

                if ( $this->m_cds->save($to_save) ) {
                    redirect('cd/edit/'.$id.'?status=success');
                } else {
                    redirect('cd/edit/'.$id.'?status=false');	        
                }

            }
            $data['status'] = $this->input->get('status');	    
            $this->load->view('edit_cd', $data);
        }
	}
	
	function add(){
        if ($this->input->post('submit') == 'submit') {

            if (
                ($this->input->post('titel') != '')
                && ($this->input->post('jahr') != '')
                && ($this->input->post('interpret') != '')
            )
            $to_save = array(
                'titel' => $this->input->post('titel'),
                'jahr' => $this->input->post('jahr'),
                'interpret' => $this->input->post('interpret')
            );

            if ( $this->m_cds->save($to_save) ) {
                redirect('cd/add/?status=success');
            } else {
                redirect('cd/add/?status=false');	        
            }

        }
        $data['status'] = $this->input->get('status');	    
        $this->load->view('add_cd', $data);
	}
  
    
}
    
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */