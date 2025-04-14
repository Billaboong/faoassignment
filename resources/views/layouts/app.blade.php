<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>UNEP-EWAD NEWSLETTER</title>
    <link rel="shortcut icon" href="https://wesr.unep.org/sites/default/files/MicrosoftTeams-image%20%283%29_0.png"
        type="image/png" />


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="https://open-source.jagullo.fr/cookie-wall/jquery.cookiewall.js"></script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.dataTables.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.dataTables.js"></script>
 
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.measurementId') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ config('services.ga4.measurementId') }}');
    </script>
    <style>
        .tooltipw {
            position: relative;
            display: inline-block;
            font-size: 16px;
        }

        .tooltipw .tooltiptextw {
            visibility: hidden;
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            width: 120px;
            top: 100%;
            left: 50%;
            margin-left: -60px;
            font-size: 12px;
        }

        .tooltipw:hover .tooltiptextw {
            visibility: visible;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .tooltip {
            visibility: hidden;
            position: absolute;
        }

        .has-tooltip:hover .tooltip {
            visibility: visible;
            z-index: 100;
        }

        div.dt-container select.dt-input {
            padding: 12px;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.permissions').select2();
            $('.country').select2();
            $('.country').on('select2:select', function(e) {
                var data = e.params.data;
                $('.countryflag').html("<img src='https://flagsapi.com/" + data.title +
                "/shiny/32.png'>");
            });

            var id = 17;
            var user = {!! auth()->user()->country_id !!};
            console.log(user);
            var url = "{{ route('country.field', ':id') }}";
            url = url.replace(':id', user);

            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    console.log(data);
                    $('.countryflag').html("<img src='https://flagsapi.com/" + data +
                    "/shiny/32.png'>");
                }
            });



            $(function() {

                var table = $('.data-table').DataTable({
                    processing: true,
                    serverSide: true,
                    /*ordering: false,*/
                    /*iDisplayLength: 10, */
                    "order": [
                        [3, "desc"]
                    ],
                    retrieve: true,
                    responsive: true,
                    ajax: "{{ route('usermanage') }}",
                    columns: [

                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'delete_flag',
                            name: 'delete_flag'
                        },
                        {
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                    ],
                });

            });
            $('[data-toggle="tooltip"]').tooltip({
                placement: 'bottom'
            });




        });
    </script>
</body>

</html>
