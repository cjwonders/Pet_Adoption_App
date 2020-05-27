<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d">

    @include('nav')

    <main role="main" class="container">

    <container class='petcontainer'>
    <img src= {{ $dog->image }}>
    <h2> {{ $dog->name }} </h2>
    </container>

    </main>
    
    @include('footer')
    
</body> <!-- END Body -->
</html>