
<div class="container">
    <div class="row">
        <div class="col-6">
            @foreach($datas as $data)
            <h1 class="mt-3"> Profile</h1>
            <ul class="list-group">
                <div class="card" >
                    <div class="card-body">
                        <h5 class="card-title">{{$data->first_name}}</h5>
                        <h5 class="card-title">{{$data->last_name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$data->id}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$data->email}}</h6>
                        <a href="{{route('home')}}" class="card-link">Kembali</a>
                    </div>
                </div>
            </ul>
            @endforeach
        </div>
    </div>
</div>
