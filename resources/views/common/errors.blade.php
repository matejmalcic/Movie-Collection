@if (count($errors) > 0)
    <!-- Form Error list -->
    <div class="alert alert-danger">
        <strong>Dogodila se pogreška!!</strong>

        <br><br>

        <ul>    
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
        </ul>
    </div>
@endif
