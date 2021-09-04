<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

        <h1>DUMO Forum</h1>
        <p>Your current timezone is: {{ $timezone }}</p>

        @foreach($posts as $post)
        <div class="card mb-3" >
            <div class="row g-0">
                <div class="card-header">
                    <img class="rounded-circle" width="20" heigth="20" src="{{ $post['author_avatar'] }}" data-holder-rendered="true">
                    <span style="color:red;"><strong>{{ $post['author_name'] }}</strong></span> posted on {{ $post['created_at'] }}
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-3">
                            <img src="{{ $post['image_url'] }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-9">
                            <h5 class="card-title">{{ $post['title'] }}</h5>
                            <p class="card-text">{{ $post['body'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>