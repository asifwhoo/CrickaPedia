<x-app-layout>
   
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Iconic Moments</title>
         <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel="stylesheet">
         <style>
             
             
 
             /* Margin adjustment for content to not overlap the fixed sidebar */
             .content-area {
                 margin-left: 4px;
                 
                 text-anchor: end
             }
 
             
             .card-custom {
                 background-color: rgb(95, 7, 49);
                 color: white; 
                 font-family: fantasy;
                 border: none;
                 
                 padding: 20px;
                 margin-bottom: 20px;
                 border-radius: 10px;
                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
             }
             .img_container{


                
                 color: white; 
                 font-family: 'Times New Roman', Times, serif;
                 border: none;
                 padding: 10px;
                 margin-bottom: 20px;
                 border-radius: 10px;
                 box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);


                 
             }

             .card-custom2 {
                 background-color: rgb(217, 0, 112);
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
 
                         <h1>Iconic Moments</h1>
 
                         @foreach ($iconic_data as $data)
                         <div class="card card-custom">

                            <div class='card img_container'>
                            @if ($data->picture)
                            <img src='images/iconic_moments/{{$data->picture}}' alt='{{ $data->picture}}' class="img-fluid">
                        @endif
                    </div>
                             <h2>{{ $data->iconic_name }}</h2>
                             <p>Key Player: {{ $data->player_name }}</p>
                             <p>Date: {{$data->date}}</p>
                             <div class = "card card-custom2">
                             <h4>{{$data->history}}</h4>
                            </div>

                            <p>Posted on {{$data->created_at}}</p>



                            <form action="{{ route('iconic_moments.destroy', $data->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?');">
                                    Delete
                                </button>
                            </form>

                             
                         </div>
                     @endforeach
                     </div>
                
                 </div>
             </div>
         </div>
 
         <script src="/bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
     </body>
 
    </x-app-layout>
 
 