<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d">

    @include('nav')

    <main role="main" class="container">

    <div class='pet-container'>
    <h2> {{$cat->name}} </h2>
    <img src={{$cat->image}}>
    </div>

    </main>
    
    @include('footer')
    
</body> <!-- END Body -->
</html>