<!doctype html>
<html lang="en">

@include('head')

<!-- START body -->
<body style="background-color: #4d4d4d !important">

    @include('nav')

    <main role="main" class="container">

         <div class="row mb-5">
            <div class="col-12">
                 <div class="card bg-dark">
                    <img class="card-img-top" src=<?php echo $featured->image ?> alt="Card image cap">
                    <div class="card-footer text-light text-center">
                        <h2>Featured</h2>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    <div class='flex-container'>
    @foreach ($pets as $pet)
        <div class="col-lg-4 mb-4">
            <div class="card bg-dark">
                <img class="card-img-top" src=<?php echo $pet->image ?> alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-light"><?php echo $pet->name ?></h5>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    

    </main>
    
    @include('footer')

</body> <!-- END Body -->
</html>