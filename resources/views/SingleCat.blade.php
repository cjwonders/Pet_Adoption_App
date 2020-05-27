<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d">

    @include('nav')

    <main class='petcontainer'>
    <img src={{$cat->image}}>
    <h2> {{$cat->name}} </h2>
    </main>
    
    @include('footer')
    
</body> <!-- END Body -->
</html>