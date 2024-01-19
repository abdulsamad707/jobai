@extends('front_app.layouts.template')
@section('content')
<div class="container" style="padding-top: 15%;">
    <div class="row">
        <div class="col-12">
            <div class="bg-secondary rounded-3 w-auto p-2 d-flex w-75">
                <div>
                <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
            </div>
            <div>
                <h5 class="fw-bold  ">You</h5>
                <p class="text-dark">{{$data}}</p>
            </div>
            </div>
            <div class="bg-dark rounded-3  p-2 d-flex w-50 ms-auto mt-4 text-white ">
                <div>
                <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
            </div>
            <div>
                <h5 class="fw-bold">TEZHLY</h5>
                <p class="text-white" >Ok, ok! I want to help, so lets get started with your name?</p>
            </div>
            </div>
            <div id="chat_area">
            </div>
            <div class=" my-3" id="skill_submit">
                <form action="{{route('skillassement')}}" >
                    <input type="hidden" name="value" value="{{$data}}">
                    <button type="submit" class="btn btn-dark rounded-3 fs-5 px-4">Take Skills Test</button>
                </form>

        </div>
            <input type="hidden" id="response" value="2">
            <div class="input-group my-5" id="full-btn">
                <input type="text" style="background:#A8AAA7!important;border:0px;border-radius:20px 0px 0px 20px;" id="value" name="value" class="form-control py-3 bg-transparent fw-bold text-dark fs-5" placeholder="Write message here..." aria-label="Recipient's username" aria-describedby="button-addon2">
                <button style="background:#A8AAA7;border-radius:0px 20px 20px 0px;" type="button" id="button-addon2"><i class="fas fa-arrow-circle-up fs-3 p-2 rounded-3" style="background:#B7BDBB;"></i></button>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
     $("#skill_submit").hide();
 $(document).ready(function()
 {

    var html = '';
    $('#button-addon2').click(function() {
    let respo_val = $("#response").val();
if (respo_val === "1") {
    $("#response").val("2");
} else if (respo_val === "2") {
    $("#response").val("3");
} else if (respo_val === "3") {
    $("#full-btn").hide();
    $("#response").val("4");
    $("#skill_submit").show();
}

        var inputValue = $("#value").val();


        html+=`<div class="bg-secondary rounded-3 mt-3 w-auto p-2 d-flex w-75">
                <div>
                <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
            </div>
            <div>
                <h5 class="fw-bold  ">You</h5>
                <p class="text-dark">${inputValue}</p>
            </div>
            </div>`

    var csrfToken = $('meta[name="csrf-token"]').attr('content');
        chat1="{{$data}}"
        // Create FormData and append data
        var formData = new FormData();
        formData.append('step', respo_val);
        formData.append('data', chat1);

        // Make the AJAX request with proper headers
        $.ajax({
            method: "POST",
            url: "{{ route('ai-chat') }}", // Replace with your actual API endpoint
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', csrfToken);
            },
            dataType: "json",

            success: function(response) {
                // Handle the successful response here
                console.log(response);
                html += `
                <div class="bg-dark rounded-3  p-2 d-flex w-50 ms-auto mt-4 text-white ">
                <div style="width:60px;">
                <img src="https://t4.ftcdn.net/jpg/04/08/24/43/360_F_408244382_Ex6k7k8XYzTbiXLNJgIL8gssebpLLBZQ.jpg" class="rounded-circle me-3" style="height: 50px;width:50px;" alt="">
            </div>
            <div>
                <h5 class="fw-bold  ">TEZHLY</h5>
                <p class="text-white" >${response}</p>
            </div>
            </div>`;
    $("#chat_area").html(html);
    var inputValue = $("#value").val("");


            },
            error: function(error) {
                // Handle errors here
                console.error("Error:", error);
            }
        });
    });
});
</script>
@endsection
