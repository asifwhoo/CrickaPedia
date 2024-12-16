   <x-app-layout>
   
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogs</title>
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <style>
            
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 150px; 
                background-color: rgb(255, 255, 255);
                border-right: 1px solid #ddd;
                z-index: 1000;
            }

            /* Margin adjustment for content to not overlap the fixed sidebar */
            .content-area {
                margin-left: 250px; /* Same as the sidebar width */
            }

            
            .card-custom {
                background-color: rgb(135, 175, 235);
                border: none;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
               
                <div class="col-auto px-0 bg-white sidebar">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/create_blog') }}" class="nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Post A Blog</span>
                                </a>
                            </li>
                           
                        </ul>
                    </div>
                </div>

                <div class="col py-3 content-area">
                    <div class="container text-start">

                        <h1>BLogs</h1>

                        @foreach ($blog_data as $data)
                            <div class="card card-custom">
                                <h3>{{ $data->user_name}}</h3>

                                <p>{{ $data->blog_text}}</p>

                            </div>

                        @endforeach
                    </div>
               
                </div>
            </div>
        </div>

        <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    </body>

   </x-app-layout>

