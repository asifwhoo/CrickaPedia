<x-app-layout>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iconic Moments</title>
        <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
        <style>
            .content-area {
                margin-left: 4px;
                text-anchor: end;
            }

            .card-custom {
                background-color: rgb(7, 95, 48);
                color: white; 
                font-family: fantasy;
                border: none;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }

            .img_container {
                width: 100%; /* Full width of the card */
                height: 200px; /* Fixed height for the image container */
                overflow: hidden; /* Hide overflow */
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }

            .img_container img {
                width: 100%;
                height: 100%;
                object-fit: cover; /* Cover the container without stretching */
                border-radius: 10px; /* Match the border-radius of the container */
            }

            .card-custom2 {
                background-color: rgb(0, 217, 109);
                color: white; 
                font-family: 'Times New Roman', Times, serif;
                border: none;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            }
        </style>
    </head>
    <body>
        <div class="col py-3 content-area">
            <div class="container text-start">
                <h1>Cricket Products</h1>
                <div class="row"> <!-- Add row class here -->
                    @foreach ($product_data as $data)
                        <div class="col-md-4"> <!-- Add column class here, adjust the number to change the width -->
                            <div class="card card-custom">
                                <div class='img_container'>
                                    @if ($data->picture)
                                        <img src='images/products/{{ $data->picture }}' alt='{{ $data->picture }}' class="img-fluid">
                                    @endif
                                </div>
                                <h2>Product Name: {{ $data->product_name }}</h2>
                                <p>Brand: {{ $data->brand }}</p>
                                <p>Price: {{ $data->price }}</p>
                                <div class="card card-custom2">
                                    <p>Description</p>
                                    <h4>{{ $data->product_details }}</h4>
                                </div>
                                <p>Posted on {{ $data->created_at }}</p>
                                
                               
                            </div>
                        </div>
                    @endforeach
                </div> <!-- Close row div here -->
            </div>
        </div>

        <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    </body>
</x-app-layout>
