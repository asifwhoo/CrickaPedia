<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post</title>
    <link href="{{ asset('bootstrap-5.0.2-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Post New Blog</h3>
            <form method="POST" action="{{ route('create_blog.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="user_name" id="UserName" class="form-control form-control-lg" required />
                    <label class="form-label" for="UserName">User Name</label>
                  </div>
                </div>
              </div>

              

              <div class="mb-4">
                <label for="blog_text" class="form-label">Wirte Here</label>
                <textarea class="form-control" id="blog_text" name="blog_text" rows="3" placeholder="Wirte you blog here"></textarea>
              </div>

              
              <div class="mt-4 pt-2 text-center">
                <input class="btn btn-primary btn-lg" type="submit" value="Add" />
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="{{ asset('bootstrap-5.0.2-dist/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
</x-app-layout>