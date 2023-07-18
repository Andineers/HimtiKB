<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ Route::is('auth.login') ? 'Login | HIMTI - UMT' : 'Register | HIMTI - UMT' }}
    </title>

    @include('include.style')

    <style>
        body {
            background: #ffffff url(assets/images/HIMTI.png);
            background-repeat: no-repeat;
            background-size: 70% 100%;
            background-attachment: fixed;
        }

        .container .row .col header h1,
        header h2 {
            color: #191970;
            text-shadow: 0 5px 5px rgba(0, 0, 0, 0.7);
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/css/loginstyle.css') }}">
</head>

<body>
    @yield('content')
    @include('include.js')

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>
