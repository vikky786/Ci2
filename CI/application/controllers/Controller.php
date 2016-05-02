<?php
class Controller Extends CI_Controller
{
	
	public function index()
	{

	
        $this->db->select('*');
      	$data=$this->db->get('user')->result_array();

      	$name=array();
      	foreach($data as $data)
      	{
      		
          $name[]=$data;
      	
      	}
//$this->load->view('htm');
      $data=json_encode($name);
        	echo $data;
        	//$this->load->view('htm');

	}

	public function angular()
	{

		$this->load->view('htm');
	}

	public function view($id)
	{    
		//echo $id;
		//$id=$this->uri->segment();
		$this->db->select('*');
		$this->db->where('id',$id);
      	$data=$this->db->get('user')->result_array();
          echo json_encode($data);
		//$this->load->view('htm');
	}

	public function test()
	{
		$this->load->view('login');
	}
	public function test2()
	{
	//$data=array('email'=>$this->input->post('email'),
	 
	// 'pwd'=>$this->input->post('pwd'));
	//echo json_encode($data);
$data=json_decode(file_get_contents("php://input"));
$_POST['email'] =$data->email;
$_POST['pwd']=$data->pwd;
//print_r($_POST);
//$get_data->email;
$this->form_validation->set_rules('email','Email','required|valid_email');
$this->form_validation->set_rules('pwd','Password','required');
if(!$this->form_validation->run()){

	echo json_encode(validation_errors());
}
else{


	if($this->db->insert('login',$data))
{

	$login_data=$this->db->get('login')->result_array();
	echo json_encode($login_data);
}
else
{
   echo 'not good';
}
	}
}

public function data_get()
{

	//$this->db->select("*");
	$login_data=$this->db->get('login')->result_array();
	echo json_encode($login_data);
}

public function test3()
{

	$this->load->view('index');
}
public function manage()
{

	$this->load->view('manage');
}
public function add_user()
{

	$this->load->view('Rform');
}
public function student()
{
	$array=array();
  $data_student=$this->db->get('student_info')->result_array();

  
	echo json_encode($data_student);
}
public function add_student()
{
	$add=json_decode(file_get_contents("php://input",true));
     $count=count($add->email);
    // $email=array();
   //print_r($add->email);
    // exit;
     $i=0;
$email_er=array();
while($i<=$count-1 ) {
	  $email[]=  $add->email[$i]->email;
	   $_POST['email'.$i]=$add->email[$i]->email;
	  
	 $email_er[]=  $this->form_validation->set_rules('email'.$i,'Email','required|valid_email');
	   // $email_er[]=form_error('email'.$i);
       $i++;
}
     // $emails=implode($email,',');
     // print_r($_POST);
      foreach ($_POST as $key => $value) {
      	$this->form_validation->set_rules('email'.$key,'Email','required|valid_email');
      	$email_er[]=form_error('email'.$i);
      //	echo $key;
      //	echo"<br>";
      }
      
      //echo validation_errors();
   // exit;
  /* echo json_encode($add);
   exit;
*/

	$_POST['fname']=$add->fname;
    $_POST['lname']=$add->lname;
    $_POST['contact']=$add->contact;
   /* $_POST['email']=$emails;*/
    $_POST['gender']=$add->gender;
//echo json_encode($_POST);
//echo json_encode($_POST);
//exit;
   $this->form_validation->set_rules('email','Email','required|valid_email');
    $this->form_validation->set_rules('fname','First Name','required|alpha');
    $this->form_validation->set_rules('lname','Last Name','required|alpha');
    $this->form_validation->set_rules('contact','Contact','required|numeric|is_natural|min_length[10]');
     $this->form_validation->set_rules('gender','Gender','required');
     $this->form_validation->set_error_delimiters('', '');
     if($this->form_validation->run()==false)
     {
     	$data=array(
              'status'=>'error',
     		'fname_er'=>form_error('fname'),
     		'lname_er'=>form_error('lname'),
     		'email_er'=>form_error('email'),
     		'contact_er'=>form_error('contact'),
     		'gender_er'=>form_error('gender')
     		);
     
     	      echo json_encode($data);
              

     }
     else{

	$this->db->insert('student_info',$add);
	$data=array('status2'=>'ok');
	echo json_encode($data);
}
}
public function delete($id)
{   
	$this->db->delete('student_info',array('id'=>$id));
    $data_student=$this->db->get('student_info')->result_array();
	echo json_encode($data_student);

}
public function edit($id)
{   //echo json_encode($id);
	$edit=json_decode(file_get_contents("php://input"));
	//echo json_encode($edit);
	//exit;
	$this->db->update('student_info',$edit,array('id'=>$id));
    $data_student=$this->db->get_where('student_info',array('id'=>$id))->result_array();
	echo json_encode($data_student);

}
public function upload($id)
{   //echo json_encode($id);

 //print_r($_POST['file']);
 //exit;

	$edit=json_decode(file_get_contents("php://input",true));
	$pic= json_decode(json_encode($edit->file),true);
	//echo json_encode($pic);
//echo $pic['$ngfBlobUrl'];
   // exit;
    $_POST['pic']=$pic['$ngfBlobUrl'];
    echo $_POST['pic'];
    //exit;
    $this->form_validation->set_rules('pic','Picture','required');
    $config['upload_path']= 'uploads/';
			$config['allowed_types']='jpg|jpeg|png';
			$config['max_size']='100000000000000000000000000000000000';
			$config['max_width']='4250';
			$config['max_height']='4550';
			
			$this->load->library('upload',$config);
			
			
			if(! $this->upload->do_upload('pic'))
			{

			
				echo json_encode("not ok");
				//$this->load->library('Template');
		      // $this->template->load('logintemp','form2');
			
		       
	        
			
		}
		else
		{
			$file_data = $this->upload->data();
			$upload=array('pic'=>$file_data['raw_name'].$file_data['file_ext']);


             
			
			
	$this->db->update('student_info',$upload,array('id'=>$id));
    $data_student=$this->db->get_where('student_info',array('id'=>$id))->result_array();
    if($data_student){
    	echo json_encode("all not Good");
    }
	else
	{
	echo json_encode("all good");	
	}

}
}
public function profile_view()
{
	$this->load->view('profile');
}
public function upload_view()
{
	$this->load->view('upload.php');
}

public function page_not_found()
{
	$this->load->view('404.php');
}

public function profile($id)
{
    $data= $this->db->get_where('student_info',array('id'=>$id))->result_array();

	//$id =$this->uri->segment(3);
	echo json_encode($data);
	
}

}


?>