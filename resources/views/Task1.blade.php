<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    {{-- jquery CDN link --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <title>Task1</title>
</head>

<body>
    <div class="container">
        <div class="header h2 my-2 py-2">
            Registration form
        </div>
        <div class="container-fluid">
            <div class="col-6 ">
                <form action="javascript:void(0)" id="regform">
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" id="Name" class="form-control"
                            placeholder="Enter You Name" required>
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" id="Email" class="form-control"
                            placeholder="Enter You Email id" required>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="Password" id="Password" class="form-control"
                            placeholder="Enter Your Password" required>
                    </div>

                    <button type="submit" value="submit" class="btn btn-success m-2 p-2 btn-lg"> Submit </button>
                </form>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $("#regform").submit(function() {
                $.ajax({
                    method: "POST",
                    url: "registarion",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        Name: $("#Name").val(),
                        Email: $("#Email").val(),
                        Password: $("#Password").val(),
                    },
                    success: function(data) {
                        if (data == "") {

                        }
                    }
                })
            })
        })
    </script>
</body>

</html>
