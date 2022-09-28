<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.0/dist/css/bootstrap.min.css">
        <title>Cadastro de Produto</title>
        <meta name="csrf-token" content="{{ csrf_token()}} " 
    </head>
<body>
    <style>
        body {
            padding: 20px;
        }

        .navbar{
            margin-bottom: 20px;
        }
    </style>

    <div class="container">
        @component('nav', ["current" => $current ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>



    </div>

    

</body>
</html>