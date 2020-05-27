<!doctype html>
<html lang="en">

@include('head')


<body style="background-color: #4d4d4d !important">

    @include('nav')

    <div class='formcontainer'>

    {{Form::open(['url' => '/petadded', 'method' => 'post'])}}

    <?php

    echo Form::label('pet_name', 'Name');
    echo '<br>';
    echo Form::text('pet_name');
    echo '<br>';
    echo Form::label('pet_image', 'Image');
    echo '<br>';
    echo Form::text('pet_image');
    echo '<br>';
    echo Form::label('pet_type', 'Type');
    echo '<br>';
    echo Form::text('pet_type');
    echo '<br>';
    echo Form::submit('Add Pet!');

    echo form::close()

    ?>

    </div>

    <!--
    <main role="main" class="container">
    <form method='post'>
    <label for="pet_name"> Pet's Name </label>
    <input type='text' name='pet_name'>
    <label for="image"> Pet's Image </label>
    <input type='text' name='image'>
    <label for="pet_type"> Pet's Type </label>
    <input type='text' name='pet_type'>
    <button type='submit'> Add Pet </button>
    </form>
    </main>
     -->

    @include('footer')
    
</body> <!-- END Body -->
</html>