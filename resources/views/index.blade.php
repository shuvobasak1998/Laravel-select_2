<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Select_2</title>
    {{-- Bootstrap css cdn start--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Bootstrap css cdn end--}}

    {{-- select2 css cdn start--}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- select2 css cdn end--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    <div class="container mx-auto">
        <form action="" method="POST" id="multi_select_form">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="title"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Hobby</label>
                <select class="form-select " name="fevourit_hobby[]" id="favourite-hobby" multiple="multiple" aria-label="Default select example">
                    <option >Open this select menu</option>
                    <option value="Travelling">Travelling</option>
                    <option value="Singing">Singing</option>
                    <option value="Playing">Playing</option>
                    <option value="watching">watching</option>
                    <option value="jumping">jumping</option>
                    <option value="Playing">Playing</option>
                    <option value="Dumpingx">Dumpingx</option>
                </select>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   




        {{-- jquery js (cdn) start--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        {{-- jquery js (cdn) end--}}

        {{-- Bootstrap js cdn start--}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
        {{-- Bootstrap js cdn end--}}

        {{-- select2 js start--}}
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        {{-- select2 js end--}}


        {{-- select2 script start--}}
       
        <script>
            $(document).ready(function() {
                $('#favourite-hobby').select2();
                $('#multi_select_form').on('submit', function(event) {
                    event.preventDefault();
        
                    var formData = $(this).serialize();
        
                    $.ajax({
                        url: " {{ route('categoty.store') }}", // Fix the typo in 'category'
                        type: "POST", // Fix the typo in 'type'
                        data: formData,
                        success: function(response) {
                            if (response.success) {
                                alert('Data saved successfully.'); // Fix the typo in 'alert'
                                $('#favourite-hobby, #exampleInputEmail1, #email').val('').trigger('change');
                                // $('#favourite-hobby').val('').trigger('change');
                                // $('#exampleInputEmail1').val('').trigger('change');
                                // $('#email').val('').trigger('change');

                            }
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        },
                    });
                });
            });
        </script>
        
        {{-- select2 script end--}}

</body>

</html>
