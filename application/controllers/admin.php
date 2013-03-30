class Admin extends CI_Controller{

function Admin()
{
	$this->__construct();
}
function __construct(){
	parent::__construct();
}
$user_id = $this->session->userdata('user_id');
         $this->data['user_name'] = $this->user_lib->get($user_id);
        }
}