<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard - Match Details</title>
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <style>
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 250px; 
                background-color: rgb(255, 255, 255);
                border-right: 1px solid #ddd;
                z-index: 1000;

                font-family: 'Times New Roman', Times, serif;
            }

           
            .content-area {
                margin-left: 250px; 

                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; 


            }

            .card-custom {
                background-color: rgb(135, 175, 235);
                border: none;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);

                font-family: fantasy;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto px-0 bg-white sidebar">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <h1>Dashboard</h1>
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/see_iconic') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Iconic Moments</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/see_stadium_details') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Stadiums</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/see_blogs') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Blog Spot</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/show_product') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">See Our Products</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

              
                <div class="col py-3 content-area">
                    <div class="container text-center">
                        <h1>Match Details</h1>

                        @if (empty($data['data']) || count($data['data']) == 0)
                            
                            <p>No match available</p>
                            
                        @else
                            
                            @foreach ($data['data'] as $match)
                                <div class="card card-custom">
                                    <h2>{{ $match['name'] }}</h2>
                                    <p>Status: {{ $match['status'] }}</p>
                                    <p>Venue: {{ $match['venue'] }}</p>
                                    <p>Date: {{ $match['date'] }}</p>
                                    <p>Time: {{ $match['dateTimeGMT'] }}</p>
                        
                                    <h3>Teams</h3>
                                    <ul>
                                        @foreach ($match['teams'] as $team)
                                            <li>{{ $team }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    </body>
</x-app-layout>
