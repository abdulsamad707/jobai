@extends('front_app.layouts.template')
@section('content')
<style>
    .light-grey{
        color: #c3cad3;
    }
</style>
<div class="container  py-5">
    <div class="row  pt-2">
        <div class="col-12 mt-5 py-5">
            <h2 class="text-center py-5 fw-bold display-5">Resume Type 1</h2>
        </div>
    </div>
    <div class="row border">
        <div class="col-3 text-white" style="background: rgb(31, 31, 54)">
        <img src="https://img.freepik.com/free-psd/3d-illustration-human-avatar-profile_23-2150671142.jpg?size=338&ext=jpg&ga=GA1.1.1412446893.1705190400&semt=ais" class="rounded-circle m-auto d-block my-5" style="width: 200px;" alt="">
        <div class="py-2 ps-5">
            <h4 class="fw-bold border-bottom pb-2">Contact</h2>
            <h6 class="fw-bold mt-4 mb-0">Phone</h6>
            <small class="fw-bold light-grey">{{$data->phone_no}}</small>
            <h6 class="fw-bold mt-4 mb-0">Email</h6>
            <small class="fw-bold light-grey">{{$data->email_address}}</small>
            <h6 class="fw-bold mt-4 mb-0">Address</h6>
            <small class="fw-bold light-grey">{{$data->city}}</small>
        </div>

        <div class="py-4 ps-5 ">
            <h4 class="fw-bold border-bottom pb-2">Education</h2>

                @foreach (json_decode($data->educations) as $key=>$item)
                @php
                // Explode the values within each set
                $values = explode(',', $item);
            @endphp
 <div class="py-2">
            @foreach ($values as $value)

                <small class="fw-bold light-grey d-block">{{ $value }}</small>

            @endforeach
        </div>
                @endforeach

        </div>
        <div class="py-4 ps-5 ">
            <h4 class="fw-bold border-bottom pb-2">Skills</h2>

                @foreach (json_decode($data->skills) as $key=>$item)
                @php
                // Explode the values within each set
                $values = explode(',', $item);
            @endphp
 <div class="py-1">
            @foreach ($values as $value)

                <small class="fw-bold light-grey d-block">• {{ $value }}</small>

            @endforeach
        </div>
                @endforeach

        </div>
    </div>
        <div class="col-9 bg-white pt-5 px-5">
            <h2 class="display-4 fw-bold">{{$data->full_name}}</h2>
            <h4 class="display-6 ">{{$data->designation}}</h4>
            <p class="mt-3">{{$data->description}}</p>
            <div class="py-2 ">
                <h4 class="fw-bold border-bottom pb-2">Experiences</h2>

                    @foreach (json_decode($data->experiences) as $key=>$item)
                    @php
                    // Explode the values within each set
                    $values = explode(',', $item);
                @endphp
     <div class="py-1">
                @foreach ($values as $key=>$value)
                @if($key === 0 )
                <h4 class="fw-bold  me-2">{{ $value }}  </h4>

                    @elseif($key >= 1 )
                    <small class="  me-2">{{ $value }} /</small>
                    @else
                    <p> @php echo $value @endphp</p>
                    @endif

                @endforeach
            </div>
                    @endforeach

            </div>

            <div class="py-2 ">
                <h4 class="fw-bold border-bottom pb-2">Projects</h2>

                    @foreach (json_decode($data->projects) as $key=>$item)
                    @php
                    // Explode the values within each set
                    $values = explode(',', $item);
                @endphp
     <div class="py-1">
                @foreach ($values as $key=>$value)
                @if($key === 0 )
                <h4 class="fw-bold  me-2">{{ $value }}  </h4>

                    @elseif($key >= 1 )
                    <small class="  me-2">{{ $value }} /</small>
                    @else
                    <p class="d-block"> @php echo $value @endphp</p>
                    @endif

                @endforeach
            </div>
                    @endforeach

            </div>
        </div>




    </div>
</div>


@endsection
