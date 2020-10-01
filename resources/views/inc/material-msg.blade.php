@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="msg msg-error" id="message">
                {{$error}}
        </div>
    @endforeach
    
@endif

@if (session('success'))
    <div class="msg msg-success" id="message">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div class="msg msg-error" id="message">
        {{session('error')}}
    </div>
@endif