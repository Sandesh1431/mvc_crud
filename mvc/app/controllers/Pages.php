<?php
class Pages extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    // $data = [
    //   'title' => 'TraversyMVC',
    // ];

    $this->view('pages/index');
  }

  public function test()
  {
    // print_r("controller");
    // exit;
    $model = $this->model('Model');
    $data_emp = $model->emp_d();

    // print_r($data_emp);
    // exit;
    $array = array($data_emp);
    // print_r($array);
    // exit;
    $this->view('pages/test', $array);
  }


  public function guest()
  {
    $model = $this->model('Model');
    $data_emp = $model->emp_d();

    // print_r($data_emp);
    // exit;
    $array = array($data_emp);

    $data = [
      'title' => $array
    ];
    $this->view("pages/gust", $data);
  }




  public function deletefrm()
  {
    $id = $_GET['id'];

    $model = $this->model('Model');
    $data_emp = $model->delemp($id);

    // print_r("deleted");
    // exit;
    $array = [
      'message' => 'Deleted'
    ];


    $model = $this->model('Model');
    $data_emp = $model->emp_d();

    // print_r($data_emp);
    // exit;
    $array = array($data_emp);

   
    // print_r($array);
    // exit;
    $data = [
      'title' => $array,
      'del' => 'Deleted successfully!'
    ];
    session_start();
    $_SESSION['del'] = 'Deleted successfully!';
    $var = URLROOT . 'pages/table';
    header('Location: '.$var);
    exit;

  }





  public function editfrm()
  {

    // print_r($_POST);
    // exit;
    if ($_FILES['file']['name'] == '') {
      $filename = '';
    } else {
      $filename = $_FILES["file"]["name"];
      $tempname = $_FILES["file"]["tmp_name"];
      $folder = "../public/img/" . $filename;
    }
    move_uploaded_file($tempname, $folder);
    $data = [$_POST, $filename];
    // $data = $_POST;
    $model = $this->model('Model');
    $data_edt = $model->editfrm($data);


    $model = $this->model('Model');
    $data_emp = $model->emp_d();

    // print_r($data_emp);
    // exit;
    $array = array($data_emp);

    $data = [
      'title' => $array,
      'msg' => 'Edited successfully!'
    ];
    session_start();
    $_SESSION['edited'] = 'Edited successfully!';
    $var = URLROOT . 'pages/table';
    header('Location: '.$var);
    exit;


    // $edit = [
    //   'title' => 'Edited successfully!'
    // ];

    // print_r($array);
    // exit;
    // $this->view('pages/table' ,$edit);


  }



  public function table()
  {


    if ($_SESSION['admin']) {

      $model = $this->model('Model');
      $data_emp = $model->emp_d();

      // print_r($data_emp);
      // exit;
      $array = array($data_emp);

      $data = [
        'title' => $array
      ];
      $this->view("pages/table", $data);
    } else {
      $var = URLROOT . 'pages/index';
      header('Location: '.$var);
      exit;
    }
  }


  public function login()
  {

    if ($_POST['name'] == '' || $_POST['pass'] == '') {
      
      $this->view('pages/index');
    }

    if (($_POST['name'] != username) || ($_POST['pass'] != password)) {

      $data = [

        'title' => 'invalid user!'
      ];
      $this->view('pages/index', $data);
    }

    if ($_POST['name'] == username && $_POST['pass'] == password) {
      session_start();
      $_SESSION['admin'] = 'admin';
      $var = URLROOT . 'pages/table';
      header('Location: '.$var);
      exit;
    }
  }



  public function logout()
  {
    session_unset();
    session_destroy();

    // unset($_SESSION['admin']);
    $this->view('pages/index');
  }





  public function emp_add()
  {
    // print_r($_FILES);
    // exit;

    $filename = $_FILES["file"]["name"];
    $tempname = $_FILES["file"]["tmp_name"];
    $folder = "../public/img/" . $filename;

    move_uploaded_file($tempname, $folder);
    $data = [$_POST, $filename];
    // print_r($data);
    // exit;
    $model = $this->model('Model');
    $data = $model->add_model($data);


    $model = $this->model('Model');
    $data_emp = $model->emp_d();

    // print_r($data_emp);
    // exit;
    $array = array($data_emp);

    $data = [
      'title' => $array,
      'added' => 'Added successfully!'
    ];
    session_start();
    $_SESSION['added'] = 'Added successfully!';
    $var = URLROOT . 'pages/table';
    header('Location: '.$var);
    exit;
  }
}
