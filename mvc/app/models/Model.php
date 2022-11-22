<?php
class Model extends Database
{

    public function add_model($data)
    {
//my pr request
        //    print_r($data[1]);
        // exit;
        $first_name =  $data[0]['first_name'];
        $last_name =    $data[0]['last_name'];
        $email =    $data[0]['email'];
        $no =    $data[0]['no'];
        $street =    $data[0]['street'];
        $city =   $data[0]['city'];
        $state =   $data[0]['state'];
        $country =    $data[0]['country'];
        $zip =    $data[0]['zip'];
        $file =    $data[1];
        //  print_r($first_name);
        //  print_r($last_name);
        //  print_r($email);
        //  print_r($no);
        //  print_r($city);
        //  print_r($state);
        //  print_r($country);


        $this->query("INSERT INTO emp_add(first_name , last_name , phone_no , street , city , 
     state , country ,  zip , email ,photo )value('$first_name' , '$last_name' , '$no' , '$street' , '$city' ,
     '$state' , '$country' , '$zip' ,  '$email', '$file' ) ");
        // $this->resultSet();
        // WHERE NOT EXISTS(SELECT email FROM  emp_add WHERE email = '$email')

        // exit;
        return  $this->execute();
    }

    public function editfrm($data)
    {
        //  print_r($data);
        $id = $data[0]['id'];
        $first_name =  $data[0]['first_name'];
        $last_name =    $data[0]['last_name'];
        $email =    $data[0]['email'];
        $no =    $data[0]['no'];
        $street =    $data[0]['street'];
        $city =   $data[0]['city'];
        $state =   $data[0]['state'];
        $country =    $data[0]['country'];
        $zip =    $data[0]['zip'];
        $file =    $data[1];

        if ($file == '') {
            // print_r('empty');
            // exit;

            $this->query("UPDATE emp_add SET first_name = '$first_name', last_name = '$last_name', phone_no= '$no', street = '$street', city = 
 '$city', state ='$state', country = '$country', zip = '$zip' ,  email = '$email' WHERE id = $id");
        } else {
            $this->query("UPDATE emp_add SET first_name = '$first_name', last_name = '$last_name', phone_no= '$no', street = '$street', city = 
 '$city', state ='$state', country = '$country', zip = '$zip' ,  email = '$email' , photo = '$file'WHERE id = $id");
        }
        // $this->resultSet();
        return  $this->execute();
    }

    public function delemp($id)
    {
        $this->query("DELETE FROM emp_add WHERE id = $id");

        return $this->execute();
    }

    public function emp_d()
    {
        $this->query("SELECT * FROM emp_add");
        return $this->resultSet();
    }
}
