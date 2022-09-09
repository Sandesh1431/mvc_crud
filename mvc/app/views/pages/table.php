<?php

if (!isset($_SESSION['admin'])) {
    $var = URLROOT . 'pages/index';
    header('Location: '.$var);
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <!-- datatabel css -->
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- datatabel css ends -->

    <!-- export css -->

    <link rel="stylessheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylessheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">


    <!-- export css ends -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URLROOT . 'css/emp_add.css' ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT . 'js/emp_add.js' ?>"></script>
    <style>
        button.dt-button.buttons-excel.buttons-html5 {
            background-color: black;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;

        }
    </style>
    <?php
    include('nav.php');
    ?>
</head>

<body class="" style="background-color: #E8E8E8" >
    <?php
    // print_r($data['title'][0]);
    $em = array_column($data['title'][0], 'email');
    foreach ($em as $ky => $va) {
        //    print_r($va);
    }

    //    print_r($va);
    session_start();

    // if(isset($_SESSION['edited']))

    // print_r($_SESSION['edited']);
    ?>

    <script>
        //    let em = document.forms['addform']['email'].value;

        var emails = '<?php echo json_encode($em);  ?>';

        // console.log(emails.length);

        // console.log(typeof emails);

        // var array = emails.split();


        // array.forEach(function (item) {
        //     console.log(typeof item);
        //         });
    </script>

    <script>
        $(function() {
            setTimeout(function() {
                $('#ghdiv').fadeOut('fast');
            }, 5000); // <-- time in milliseconds
            $('#ghdiv').val('');
        });

        function validateForm() {
            // alert('validate');
            let x = document.forms["editforme"]["zip"].value;

            if (x.toString().length != 5) {
                alert("Invalid zip code!");
                return false;

            }
            let no = document.forms['editforme']['no'].value;

            if (no.toString().length != 10) {
                alert("Invalid phone no!");
                return false;

            }

            let mail = document.forms["editforme"]["email"].value;
            let position = emails.search(mail);
            //alert ( typeof position);

            if (position >= 1) {
                alert("Email id already exist!");
                return false;
            }



        }


        function addvalidateForm() {
            // alert('validate');
            let x = document.forms["addform"]["zip"].value;

            if (x.toString().length != 5) {
                alert("Invalid zip code!");
                return false;

            }
            let no = document.forms['addform']['no'].value;

            if (no.toString().length != 10) {
                alert("Invalid phone no!");
                return false;

            }

            let mail = document.forms["addform"]["email"].value;
            let position = emails.search(mail);
            //alert ( typeof position);

            if (position >= 1) {
                alert("Email id already exist!");
                return false;
            }

        }
        //         if ( window.history.replaceState ) {
        //   window.history.replaceState( null, null, window.location.href );

        //   $(window).on('popstate', function(event) {
        //  alert("pop");
        // });
        //}
        // window.addEventListener('popstate', (event) => {
        //     console.log(`location: ${document.location}, state: ${JSON.stringify(event.state)}`);
        // });
    </script>


    <div class="container table_admin" >
        <div style="display: flex;">
            <!-- Trigger the modal with a button -->
            <button style="margin-left: 2em; margin-bottom: 1em;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Details</button>

        </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width:50em;">
                    <div class="modal-header">
                        <h2 class="modal-title">Add Details</h2>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>
                    <div class="modal-body">
                        <form name="addform" onsubmit=" return addvalidateForm()" action="<?php echo URLROOT . 'pages/emp_add' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                                <div class="col">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col">
                                    <input type="number" name="no" class="form-control" placeholder="Phone no">
                                </div>
                                <div class="col">
                                    <input type="text" name="street" class="form-control" placeholder="Street">
                                </div>
                                <div class="col">
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <input type="text" name="state" class="form-control" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="country" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col">
                                        <input type="number" name="zip" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col">
                                            <input type="file" name="file" class="form-control" placeholder="Photo">
                                        </div>

                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer" style="margin-top: 2em;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <!--*************************************************************************************************** -->


    <!-- edit model start -->

    <div class="container">


        <!-- Modal -->
        <div class="modal fade" id="btnmodal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width:50em;">
                    <div class="modal-header">
                        <h2 class="modal-title">Edit Details</h2>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>
                    <div class="modal-body">
                        <form name="editforme" action="<?php echo URLROOT . 'pages/editfrm/' ?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                            <div class="row">

                                <div class="col">
                                    <input type="text" name="first_name" id="firs_name" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="col">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" required>
                                </div>
                                <div class="col">
                                    <input type="number" name="no" id="phone" class="form-control" placeholder="Phone no" required>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">

                                <div class="col">
                                    <input type="text" id="street" name="street" class="form-control" placeholder="Street" required>
                                </div>
                                <div class="col">
                                    <input type="text" id="city" name="city" class="form-control" placeholder="City" required>
                                </div>
                                <div class="col">
                                    <input type="text" id="state" name="state" class="form-control" placeholder="State" required>
                                </div>
                                <div class="row" style="margin-top: 20px;">

                                    <div class="col">
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Country" required>
                                    </div>
                                    <div class="col">
                                        <input type="number" id="zip" name="zip" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="col">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col">
                                            <input type="file" id="photo" name="file" class="form-control" placeholder="Photo">
                                        </div>
                                        <div class="col">
                                            <input type="text" name="id" id="id" class="form-control" placeholder="id" style="display: none;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" id="ed" style="margin-top: 20px;">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer" style="margin-top: 2em;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <!-- edit model end -->



    <!-- delete model -->

    <div class="container">


        <!-- Modal -->
        <div class="modal fade" id="delbtnmodal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content" style="width:50em;">
                    <div class="modal-header">
                        <h2 class="modal-title">Edit Details</h2>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo URLROOT . 'pages/editfrm' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="id" id="id" class="form-control" placeholder="id">
                                </div>
                                <div class="col">
                                    <input type="text" name="first_name" id="firs_name" class="form-control" placeholder="First name">
                                </div>
                                <div class="col">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name">
                                </div>

                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col">
                                    <input type="number" name="no" id="phone" class="form-control" placeholder="Phone no">
                                </div>
                                <div class="col">
                                    <input type="text" id="street" name="street" class="form-control" placeholder="Street">
                                </div>
                                <div class="col">
                                    <input type="text" id="city" name="city" class="form-control" placeholder="City">
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <input type="text" id="state" name="state" class="form-control" placeholder="State">
                                    </div>
                                    <div class="col">
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Country">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="zip" name="zip" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col">
                                            <input type="file" id="photo" name="file" class="form-control" placeholder="Photo">
                                        </div>
                                        <div class="col">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <div class="modal-footer" style="margin-top: 2em;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- end delete model -->

    <div class="card">
        <div class="card-body">
            <table id="datatablefrm" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Phone No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Street</th>
                        <th scope="col">City</th>
                        <th scope="col">State</th>
                        <th scope="col">Country</th>
                        <th scope="col">Zip</th>
                        <th scope="col">Photo</th>
                        <th class="ac" style="text-align: center;">Action</th>
                    </tr>
                </thead>



                <tbody>

                    <?Php

                    if (isset($data))

                        //   $emp = json_encode($data);

                        //   print_r($emp);
                        //   exit;
                        $daf = (array) $data;
                    foreach ($daf as $key => $value) {


                        // print_r($value);

                        $object_id = array_column($value[0], 'id');
                        $first_name = array_column($value[0], 'first_name');
                        $last_name = array_column($value[0], 'last_name');
                        $phone_no = array_column($value[0], 'phone_no');
                        $email = array_column($value[0], 'email');
                        $street = array_column($value[0], 'street');
                        $city = array_column($value[0], 'city');
                        $state = array_column($value[0], 'state');
                        $country = array_column($value[0], 'country');
                        $zip = array_column($value[0], 'zip');
                        $photo = array_column($value[0], 'photo');
                        $d =  count($object_id);
                        for ($i = 0; $i < $d; $i++) {


                    ?>
                            <tr class="tr">

                                <td><?php echo $object_id[$i]; ?></td>
                                <td><?php echo $first_name[$i];  ?></td>
                                <td><?php echo $last_name[$i];  ?></td>
                                <td><?php echo $phone_no[$i]; ?></td>
                                <td><?php echo $email[$i];  ?></td>
                                <td><?php echo $street[$i];  ?></td>
                                <td><?php echo $city[$i]; ?></td>
                                <td><?php echo $state[$i];  ?></td>
                                <td><?php echo $country[$i];  ?></td>
                                <td><?php echo $zip[$i];  ?></td>
                                <td class="img_pro">
                                    <h1 style="display: none;"><?php echo $photo[$i] ?></h1><img class="img" src='http://localhost/mvc/img/<?php echo $photo[$i] ?>'>
                                </td>
                                <td><button class="btn editbtn">edit</button><a href="http://localhost/mvc/pages/deletefrm/?id=<?php echo $object_id[$i]; ?>">Delete</a></td>

                            </tr>
                    <?php
                        }
                    }
                    ?>

                </tbody>


            </table>
            <?php
            if (isset($edit)) {
                echo "dfsdf";
                echo "<div class='msg'>";
                print_r($edit->title);
                echo "</div>";
            }
            ?>
        </div>
    </div>


    <script>
        $(document).ready(function() {

            $('.editbtn').on('click', function() {
                $('#btnmodal').modal('show');
                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                $('#id').val(data[0]);
                $('#firs_name').val(data[1]);
                $('#last_name').val(data[2]);
                $('#phone').val(data[3]);
                $('#email').val(data[4]);

                $('#street').val(data[5]);
                $('#city').val(data[6]);
                $('#state').val(data[7]);
                $('#country').val(data[8]);
                $('#zip').val(data[9]);
                $('#photo').val(data[10]);
            });

        });
    </script>




    <!-- datatable js cdn -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- datatable js cdn end -->


    <!-- export -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
    <!-- export ends -->
    <script>
        $(document).ready(function() {
            $('#datatablefrm').DataTable({

                dom: 'Bfrtip',

                buttons: [

                    'excel'
                ]
            });


        });


        $(document).ready(function() {
            var edit = '<?php echo $_SESSION['edited']; ?>';
            if (edit != '') {
                alert(edit);
            }
            var del = '<?php echo $_SESSION['del']; ?>';
            if (del != '') {
                alert(del);
            }
            var add = '<?php echo $_SESSION['added']; ?>';
            if (add != '') {
                alert(add);
            }

        });
    </script>
    <?php
    unset($_SESSION["edited"]);
    unset($_SESSION["del"]);
    unset($_SESSION["added"]);
    ?>





</body>

</html>