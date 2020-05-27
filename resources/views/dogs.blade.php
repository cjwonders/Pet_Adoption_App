<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d !important">

    @include('nav')

    <main role="main" class="container">
    <div class='flex-container'>
    @foreach ($dogs as $dog)
        <div class="col-lg-4 mb-4">
            <div class="card bg-dark">
                <img class="card-img-top" src=<?php echo $dog->image ?> alt="Card image cap">
                <div class="card-body">
                   <a href="/dogs/{{$dog->id}}"> <h5 class="card-title text-light"><?php echo $dog->name ?></h5></a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    </main>
    
    @include('footer')
    
</body> <!-- END Body -->
</html>