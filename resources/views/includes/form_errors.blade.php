
@if(count($errors) > 0)

<div class="alert-danger">
    <ul>
        @foreach($errors->all() as $error)

            <li>{{$error}}</li>

        @endforeach
    </ul>        
</div>

@endif