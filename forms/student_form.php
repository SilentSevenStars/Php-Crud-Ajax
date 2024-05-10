<div id="studentFormDiv" class="position-fixed top-0 start-0 w-100 bg-dark bg-opacity-75 overflow-scroll d-none">
    <div class="container pt-5 mt-5 bg-white border-radius-circle">
        <buton class="position-fixed top-0 end-0 text-white border-0 bg-transparent fs-2 ms-2">x</buton>
        <h1>Add Student</h1>
        <form action="" method="post" id="studentForm">
            <div class="mb-3">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Middle Name</label>
                <input type="text" name="mname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
    <script type="text/javascript">
        var studentFormDiv = document.getElementById("studentFormDiv");

        function hideStudentForm() {
            studentFormDiv.classList.add("d-none");
        }

        var studentForm = document.getElementById("studentForm");
        studentForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Removed the extra comma here
            var data = $('#studentForm').serialize();
            $.ajax({
                type: 'POST',
                url: "db/ajax.php", // Changed '=' to ':'
                data: {
                    data: data, // Removed the extra ':'
                    'addStudent': true,
                },
                success: function(res) {
                    if (res) {
                        hideStudentForm();
                        showAllStudent(); // Assuming showAllStudent() is defined elsewhere
                    } else {

                    }
                },
                error: function(xhr, status, error) {
                    console.log(xhr);
                    console.log(status);
                    console.log(error);
                },
                complete: function() {

                }
            });
        });
    </script>
</div>