   //    let em = document.forms['addform']['email'].value;

   var emails = '<?php echo json_encode($em);  ?>';
   
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
               swal("Alert!", "Invalid zip code!");
               return false;

           }
           let no = document.forms['editforme']['no'].value;

           if (no.toString().length != 10) {
               swal("Alert!", "Invalid phone no!");
               return false;

           }

           let mail = document.forms["editforme"]["email"].value;
           let position = emails.search(mail);
           //alert ( typeof position);

           if (position >= 1) {
               swal("Alert!", "Email id already exist!");
               return false;
           }



       }


       function addvalidateForm() {
           // alert('validate');
           let x = document.forms["addform"]["zip"].value;

           if (x.toString().length != 5) {
               swal("Alert!", "Invalid zip code!");
               return false;

           }
           let no = document.forms['addform']['no'].value;

           if (no.toString().length != 10) {
               swal("Alert!", "Invalid phone no!");
               return false;

           }

           let mail = document.forms["addform"]["email"].value;
           let position = emails.search(mail);
           //alert ( typeof position);

           if (position >= 1) {
               swal("Alert!", "Email id already exist!");
               return false;
           }

       }

       function delid() {

   var msg = confirm('Are you sure you want to delete this file!');
   if(msg == false) {
       return false;
   }

       }