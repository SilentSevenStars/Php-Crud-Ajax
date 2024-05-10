<?php
require 'db/action.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body class="container mt-5">
    <div class="row">
        <div class="col-11">
            <h1>Students</h1>
        </div>
        <div class="col-1">
            <button id="showStudentForm" class="btn btn-primary">ADD</button>
        </div>
    </div>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Middle</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="student_tblBody">
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Middle</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </tfoot>
    </table>

    <?php include 'forms/student_form.php' ?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        var studentFormDiv = document.getElementById('studentFormDiv');
        var btnStudentForm = document.getElementById("showStudentForm");
        btnStudentForm.addEventListener('click', function () {
            studentFormDiv.classList.remove("d-none");
        });

        function showAllStudent(){
            $.post('db/ajax.php', { showAllStudent: true }, function(res){
                $('#student_tblBody').html(res); // corrected 'htm' to 'html'
            });
        }

        showAllStudent();
    </script>
</body>
</html>