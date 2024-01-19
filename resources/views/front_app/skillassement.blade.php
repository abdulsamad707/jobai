@extends('front_app.layouts.template')
@section('content')
<style>
    .hidden{
        display:none;
    }
    <style>
  .overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Adjust opacity as needed */
    z-index: 9999; /* Ensure it's on top */
  }

  .spinner-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10000; /* Ensure it's on top of the overlay */
  }
  /* Hide the actual radio buttons */
  input[type="radio"].radio-input {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}

/* Styling for custom labels */
.custom-label {
    display: inline-block;
    cursor: pointer;
    border: 1px solid transparent;
    padding: 8px;
    margin: 5px;
}

/* Highlight the selected custom label */
.custom-label.selected {
    border-color: #333;
    background-color: #ccc;
}

</style>


<section class="pb-5 container-fluid px-5" style="background:   #bfc5c3; padding-top: 10%;" id="quiz">
    <div class="overlay d-none" id="overlay"></div>
<div class="spinner-container d-none" id="spinner-container">
  <div class="spinner-border text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
</div>
    <h1 class="fw-bold display-3">Skills Assessment Test</h1>
    <p class="fw-bold text-dark">Let’s personalize your path, please answer honestly.</p>
    <div class="questions-container py-5" style="height: 600px;">
        <form action="{{route('result-assessment')}}" method="post" id="form-assessment">
            @csrf
            @foreach ($questions as $index => $item)
            <div class="question{{ $index !== 0 ? ' hidden' : '' }}">
                <h2 class="fw-bold mb-3">{{ $item['question'] }}</h2>
                <input class="form-check-input mx-3" type="hidden" name="questions_{{$index}}" value="{{ $item['question'] }}">
                <div class="w-75">
                    @php
                        $labels = ['a', 'b', 'c', 'd'];
                        $labelCounter = 0;
                    @endphp
                    @foreach ($item['options'] as $key => $option)
                        <div class="d-block my-2">
                            <label class="custom-label fw-bold p-3 rounded-3 text-dark fw-bold" style="background:#b1b3ae;" for="radio_{{ trim($option) }}" data-index="{{ $index }}">
                                @if ($labelCounter < count($labels))
                                    {{ $labels[$labelCounter] }}
                                    @php
                                        $labelCounter++;
                                    @endphp
                                @endif
                                {{ $option }}
                                <input class="form-check-input radio-input" type="radio" id="radio_{{ trim($option) }}" name="answers_{{$index}}" value="{{ $option }}">
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach



        <div class="navigation-buttons mt-3">
            <button type="button" class="btn btn-secondary text-dark     fw-bold fs-3 px-5 ms-auto prev-btn" style="display: none;background:#b1b3ae!important;">Previous</button>
            <button type="button" class="btn btn-secondary text-dark fw-bold fs-3 px-5 ms-auto next-btn" style="background:#b1b3ae!important">Next</button>
        </div>
    </div>
</form>
</section>
<section id="success-quiz" class="container-fluid" style="padding-bottom: 10%;padding-top:10%;display:none;">
<h2 class="fw-bold display-1 mt-5 text-center">Result</h2>
<div>
<i class="fas fa-check-circle display-1 m-auto d-block text-center text-success"></i>
</div>
<h2 class="text-center">5/<span id="count"></span></h2>

<h5 class="text-center text-danger" id="msg">Try Again Later</h5>
<a href="{{route('customer-dashboard')}}" class="btn btn-primary m-auto d-block w-25 px-5 my-4 fw-bold fs-4">Go To Dashboard</a>
</section>




<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let currentQuestion = 0;
        const questions = $('.question');
        const prevBtn = $('.prev-btn');
        const nextBtn = $('.next-btn');

        // Show the first question
        showQuestion(currentQuestion);

        // Function to show/hide questions based on index
        function showQuestion(index) {
            questions.addClass('hidden');
            $(questions[index]).removeClass('hidden');

            if (index === 0) {
                prevBtn.hide();
            } else {
                prevBtn.show();
            }

            if (index === questions.length - 1) {
                nextBtn.text('Submit');
            } else {
                nextBtn.text('Next');
            }
        }

        // Next button click event
        nextBtn.click(function() {
            if (currentQuestion < questions.length - 1) {
                currentQuestion++;
                showQuestion(currentQuestion);
            } else {
                let fromData=$("#form-assessment").serialize();
                $.ajax({
                    url:'{{route('result-assessment')}}',
                    method:'POST',
                    data:fromData,
                    beforeSend: function() {
        // Show the spinner before AJAX call
        $('#overlay').removeClass('d-none');
        $('#spinner-container').removeClass('d-none');
    },
                    success:function(response){
                        console.log(response);
                        $('#overlay').addClass('d-none');
        $('#spinner-container').addClass('d-none');
        $("#success-quiz").show();
        $("#quiz").hide();
        $("#count").text(response.truecount);
        if(response.truecount === 5){

            $("#msg").text('Congratulation you have passed the Test')

        }
        else{
            $("#msg").text('Try again later!')
        }
    }
                    , error: function(error) {
        console.error(error);
        // Hide the spinner on AJAX error if needed
        $('#overlay').addClass('d-none');
        $('#spinner-container').addClass('d-none');
    }
                });
            }
        });

        // Previous button click event
        prevBtn.click(function() {
            if (currentQuestion > 0) {
                currentQuestion--;
                showQuestion(currentQuestion);
            }
        });
    });
   // Add click event listeners to custom labels
$('.custom-label').on('click', function() {
    const index = $(this).data('index');

    // Remove 'selected' class from all labels of the current question
    $(`.custom-label[data-index=${index}]`).removeClass('selected');

    // Add 'selected' class to the clicked label
    $(this).addClass('selected');

    // Simulate clicking the corresponding hidden radio button
    $(this).find('.radio-input').prop('checked', true).trigger('click');
});

</script>
@endsection

