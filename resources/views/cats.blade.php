<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d !important">

    @include('nav')

    <main role="main" class="container">
    <div class='flex-container'>
    @foreach ($cats as $cat)
        <div class="col-lg-4 mb-4">
            <div class="card bg-dark">
                <img class="card-img-top" src=<?php echo $cat->image ?> alt="Card image cap">
                <div class="card-body">
                    <a href="/cats/{{$cat->id}}"><h5 class="card-title text-light"><?php echo $cat->name ?></h5></a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    </main>
    
    @include('footer')
    
</body> <!-- END Body -->
</html>