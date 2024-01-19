<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use App\Models\UserSkill;

use Illuminate\Support\Facades\Auth;


class AssessmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function chatval(Request $request){

       $data=$request->value;
       return view('front_app.tezhly_chat',compact('data'));

     }
     public function Assessment(Request $request){

        $question = " generate only quiz of 5 questions related to this keyword " . $request->value ."Ensure there is no answer option containing 'all of the above'";

    $data = Http::withHeaders([
        'Content-type' => 'application/json',
        'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Added a space after 'Bearer'
    ])->post('https://api.openai.com/v1/chat/completions', [
        'model' => 'gpt-3.5-turbo',
        'messages' => [
            [
                'role' => 'system',
                'content' => 'Your Expert Trainer'
            ],
            [
                'role' => 'user',
                'content' => $question,
            ],
        ],
        "temperature" => 0.1, // Corrected 'temprature' to 'temperature'
    ])->json();

    $responseMessages = $data['choices'][0]['message'];
        if (is_array($responseMessages)) {
            $responseMessages = implode("\n\n", $responseMessages);
        }
        preg_match_all('/\d+\.\s.*?(?=\d+\.\s|\z)/s', $responseMessages, $matches);
        foreach ($matches[0] as $match) {
            preg_match('/(\d+)\.\s(.*?)(?=\na\)|\nb\)|\nc\)|\nd\)|\z)/s', $match, $questionMatch);
            if (count($questionMatch) >= 3) {
                $questionNumber = trim($questionMatch[1]);
                $questionText = trim($questionMatch[2]);
                $options = [];
                preg_match_all('/([a-d]\))\s(.*?)(?=\n[a-d]\)|\z)/s', $match, $optionMatches);
                foreach ($optionMatches[1] as $key => $option) {
                    $options[trim($option)] = trim($optionMatches[2][$key]);
                }
                $questions[] = [
                    'question' => $questionText,
                    'options' => $options,
                ];
            }
        }
        return view('front_app.skillassement',compact('questions'));
    }

    public function result(Request $request){

        $question = "Question".$request->questions_0."and answer=".$request->answers_0." , only give answer in true";
        $data = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Add a space after 'Bearer'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Your Expert Trainer'
                ],
                [
                    'role' => 'user',
                    'content' => $question,
                ],
            ],
            // Corrected typo 'temprature' to 'temperature'
        ])->json();
        $answer = $data['choices'][0]['message'];


        $question1 = "Question".$request->questions_1."and answer=".$request->answers_1." , only give answer in true";
        $data2 = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Add a space after 'Bearer'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Your Expert Trainer'
                ],
                [
                    'role' => 'user',
                    'content' => $question1,
                ],
            ],
            // Corrected typo 'temprature' to 'temperature'
        ])->json();
        $answer1 = $data2['choices'][0]['message'];


        $question2 = "Question".$request->questions_2."and answer=".$request->answers_2." , only give answer in true";
        $data3 = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Add a space after 'Bearer'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Your Expert Trainer'
                ],
                [
                    'role' => 'user',
                    'content' => $question2,
                ],
            ],
            // Corrected typo 'temprature' to 'temperature'
        ])->json();
        $answer2 = $data3['choices'][0]['message'];

        $question3 = "Question".$request->questions_3."and answer=".$request->answers_3." , only give answer in true";
        $data4 = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Add a space after 'Bearer'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Your Expert Trainer'
                ],
                [
                    'role' => 'user',
                    'content' => $question3,
                ],
            ],
            // Corrected typo 'temprature' to 'temperature'
        ])->json();
        $answer3 = $data4['choices'][0]['message'];

        $question4 = "Question".$request->questions_4."and answer=".$request->answers_4." , only give answer in true";
        $data5 = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_KEY'), // Add a space after 'Bearer'
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-4',
            'messages' => [
                [
                    'role' => 'system',
                    'content' => 'Your Expert Trainer'
                ],
                [
                    'role' => 'user',
                    'content' => $question4,
                ],
            ],
            // Corrected typo 'temprature' to 'temperature'
        ])->json();
        $answer4 = $data5['choices'][0]['message'];

        $answer_result=$answer['content'];
        $answer_result1=$answer1['content'];
        $answer_result2=$answer2['content'];
        $answer_result3=$answer3['content'];
        $answer_result4=$answer4['content'];

        $trueAnswersCount = 0;

// Check each answer and increment the counter if it is true
if ($answer_result === 'True') {
    $trueAnswersCount++;
}

if ($answer_result1 === 'True') {
    $trueAnswersCount++;
}

if ($answer_result2 === 'True') {
    $trueAnswersCount++;
}

if ($answer_result3 === 'True') {
    $trueAnswersCount++;
}

if ($answer_result4 === 'True') {
    $trueAnswersCount++;
}

        $user=Auth::user();
        $allAnswersTrue = ($answer_result === "True" && $answer_result1 === "True" && $answer_result2 === "True" && $answer_result3 === "True" && $answer_result4 === "True");

        if ($allAnswersTrue) {
            $data = new UserSkill;
            $data->user_id = $user->id;
            $data->name = "Web Development";
            $data->save();

        }
        return response()->json([
            'truecount'=>$trueAnswersCount,
            "status"=>200,

        ]);


    }

}
