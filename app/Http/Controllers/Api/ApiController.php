<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\IsJson;

class ApiController extends Controller
{

    public $headers = array(
        'apikey: eyJ4NXQiOiJZamd5TW1GalkyRXpNVEZtWTJNMU9HRmtaalV3TnpnMVpEVmhZVGRtTnpkaU9HUmhNR1kzWmc9PSIsImtpZCI6ImFwaV9rZXlfY2VydGlmaWNhdGVfYWxpYXMiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJyYWRpc3lzQGNhcmJvbi5zdXBlciIsImFwcGxpY2F0aW9uIjp7Im93bmVyIjoicmFkaXN5cyIsInRpZXJRdW90YVR5cGUiOm51bGwsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoicnN5cy1jbW9yYS50YWRoYWNrMjIuZW5nYWdlLmFpIiwiaWQiOjY4LCJ1dWlkIjoiY2U0OTdlOTMtOTE5Ny00ZDViLTg4NzktMzIxN2QwMDdhODYxIn0sImlzcyI6Imh0dHBzOlwvXC9hcGltLmVuZ2FnZWRpZ2l0YWwuYWk6NDQzXC9vYXV0aDJcL3Rva2VuIiwidGllckluZm8iOnsiVW5saW1pdGVkIjp7InRpZXJRdW90YVR5cGUiOiJyZXF1ZXN0Q291bnQiLCJzdG9wT25RdW90YVJlYWNoIjp0cnVlLCJzcGlrZUFycmVzdExpbWl0IjowLCJzcGlrZUFycmVzdFVuaXQiOm51bGx9fSwia2V5dHlwZSI6IlBST0RVQ1RJT04iLCJzdWJzY3JpYmVkQVBJcyI6W3sic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJDYWxsQVBJUHJvZHVjdCIsImNvbnRleHQiOiJcL2FwaVwvdjEiLCJwdWJsaXNoZXIiOiJyYWRpc3lzIiwidmVyc2lvbiI6IjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9XSwiaWF0IjoxNjY1Njc3Mzc1LCJqdGkiOiIxOTg2MzQzNi0zZDAzLTQ2MDItOTUxMC04YWYwYzJlMjE0ZjgifQ==.hisyFuZ3IOUiCNFWdUylUzUsUkv06LStZfI74mTvfmNSI_DstQ9C8tt4CoO54l82Sr8Nj55Cd-AlYIiRmqrzypsXdq1C9eK0aCe2gmczeb8GqRXhEJCx9aQETx2dQI3PeSGNbBI-tqyFtd3gWQfVF4leXCNq1WTzdX0kqbyxs1ZEuTTCQ01WE6t98HSSoJtoWrboqH5rwB1KrX8Mv9TLR4OO-toE-ifS0dIkMBOPLzcejolab_ze12DWtZbvKNKhKiVr2etdUJcd69k3LLQhmMyp4f9-PXWlanCxXO8YZ7_AqIUTdUfmFufq1OMLKWb3nAmhAznflIcxxdCBF6n-wA==',
        'Content-Type: application/json'
    );
    public $acountId = "AC-a52ed94d-5278-4b1b-bc09-c8cfb49eb9e9";
    public $url = "https://apigateway.engagedigital.ai/api/v1/accounts/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createCall()
    {
        try {
                $body = array(
                    "From"=> "901045",
                    "To"=> "cmora.tadhack22.engage.ai",
                    "Method"=>"POST",
                    "Eml"=>"<Response><Say>Welcome to Radisys Engage Digital Platform!</Say></Response>",
                    "StatusCallback"=> "http://190.27.248.156:8000/statuscallback",
                    "StatusCallbackMethod"=> "POST",
                    "StatusCallbackEvent"=> "initiated, ringing, answered, completed",
                    "Type"=>"video"
                );

                $ch = curl_init($this->url.$this->acountId."/call");

                curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));

                $rest = curl_exec($ch);
                curl_close($ch);

                return json_decode($rest);
        } catch (\Throwable $th) {
            Log::alert("1 - $rest bad $th");
            return json_decode($rest);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ListCall(Request $request)
    {
        try {
            switch ($request->type) {
                case 1:
                    $type = "SUCCESS";
                    break;
                
                case 2:
                    $type = "FAILED";
                    break;
                
                default:
                    $type = "SUCCESS";
                    break;
            }
    
            $date = Carbon::now();
            $date->format("Y-m-d");
    
            $curl = curl_init();
            
            curl_setopt_array(
                $curl, array(
                    CURLOPT_URL => $this->url.$this->acountId."/call?Status=".$type."&EndTime=".$date->toDateString(),
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
                    CURLOPT_HTTPHEADER => $this->headers,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "GET"//TIPO DE PETICION A HACER = GET, POST, PUT
                    )
                );
    
                $response = curl_exec($curl);
                if (!$response) {
                    Log::debug("$response is bad");
                } else {
                    Log::alert("$response is good");
                }
            return json_decode($response);
        } catch (\Throwable $th) {
            Log::alert("2 - $response bad $th");
            return json_decode($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoom()
    {
        try {
            $curl = curl_init();
            
            curl_setopt_array(
                $curl, array(
                    CURLOPT_URL => $this->url.$this->acountId."/room",
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
                    CURLOPT_HTTPHEADER => $this->headers,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",//TIPO DE PETICION A HACER = GET, POST, PUT
                    CURLOPT_POSTFIELDS => '{
                        "RoomName": "MyRooM",
                        "RoomType": "Audio",
                        "CallerId": "901048",
                        "DialInPhone": "",
                        "GenerateDialInCode": "",
                        "StatusCallbackEvent": "",
                        "Method": "",
                        "StatusCallbackUrl": ""
                    }',
                    )
                );
    
                $response = curl_exec($curl);
                if (!$response) {
                    Log::debug($response." is bad");
                } else {
                    Log::debug($response." is good");
                }
                return json_decode($response);
        } catch (\Throwable $th) {
            Log::alert("3 - $response bad $th");
            return json_decode($response);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function joinRoom(Request $request)
    {
        try {
            $curl = curl_init();
            
            curl_setopt_array(
                $curl, array(
                    CURLOPT_URL => $this->url.$this->acountId."/room/".$request->id."/join",
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
                    CURLOPT_HTTPHEADER => $this->headers,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_CUSTOMREQUEST => "POST",//TIPO DE PETICION A HACER = GET, POST, PUT
                    CURLOPT_POSTFIELDS => '{
                        "Participant": "901048"
                    }',
                    )
                );
    
                $response = curl_exec($curl);
                if (!$response) {
                    Log::debug($response." is bad");
                } else {
                    Log::debug($response." is good");
                }
            return json_decode($response);
        } catch (\Throwable $th) {
            Log::alert("4 - $response bad $th");
            return json_decode($response);
        }
    }
}
