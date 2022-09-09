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
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">Welcome</a>
        <form class="form-inline" action="<?php echo URLROOT ?>" method="post">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Go back</button>
        </form>
    </nav>
</head>

<body style="background-color: #E8E8E8">

    <div class="container" style="margin-top: 180px;">

        <!-- Trigger the modal with a button -->

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
                        <form action="<?php echo URLROOT . 'pages/emp_add' ?>" method="post" enctype="multipart/form-data">
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
                                            <input type="text" id="photo" name="file" class="form-control" placeholder="Photo">
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
                                            <input type="text" id="photo" name="file" class="form-control" placeholder="Photo">
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
                                <td><?php echo $photo[$i];  ?></td>

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

    <script>
        $(document).ready(function() {
            $('#datatablefrm').DataTable({

                dom: 'Bfrtip',

                buttons: [

                    'excel'
                ]
            });


        });
    </script>


</body>

</html>