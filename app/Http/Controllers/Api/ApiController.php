<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $headers = array(
            'apikey: eyJ4NXQiOiJZamd5TW1GalkyRXpNVEZtWTJNMU9HRmtaalV3TnpnMVpEVmhZVGRtTnpkaU9HUmhNR1kzWmc9PSIsImtpZCI6ImFwaV9rZXlfY2VydGlmaWNhdGVfYWxpYXMiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJyYWRpc3lzQGNhcmJvbi5zdXBlciIsImFwcGxpY2F0aW9uIjp7Im93bmVyIjoicmFkaXN5cyIsInRpZXJRdW90YVR5cGUiOm51bGwsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoicnN5cy1jbW9yYS50YWRoYWNrMjIuZW5nYWdlLmFpIiwiaWQiOjY4LCJ1dWlkIjoiY2U0OTdlOTMtOTE5Ny00ZDViLTg4NzktMzIxN2QwMDdhODYxIn0sImlzcyI6Imh0dHBzOlwvXC9hcGltLmVuZ2FnZWRpZ2l0YWwuYWk6NDQzXC9vYXV0aDJcL3Rva2VuIiwidGllckluZm8iOnsiVW5saW1pdGVkIjp7InRpZXJRdW90YVR5cGUiOiJyZXF1ZXN0Q291bnQiLCJzdG9wT25RdW90YVJlYWNoIjp0cnVlLCJzcGlrZUFycmVzdExpbWl0IjowLCJzcGlrZUFycmVzdFVuaXQiOm51bGx9fSwia2V5dHlwZSI6IlBST0RVQ1RJT04iLCJzdWJzY3JpYmVkQVBJcyI6W3sic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJDYWxsQVBJUHJvZHVjdCIsImNvbnRleHQiOiJcL2FwaVwvdjEiLCJwdWJsaXNoZXIiOiJyYWRpc3lzIiwidmVyc2lvbiI6IjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9XSwiaWF0IjoxNjY1Njc3Mzc1LCJqdGkiOiIxOTg2MzQzNi0zZDAzLTQ2MDItOTUxMC04YWYwYzJlMjE0ZjgifQ==.hisyFuZ3IOUiCNFWdUylUzUsUkv06LStZfI74mTvfmNSI_DstQ9C8tt4CoO54l82Sr8Nj55Cd-AlYIiRmqrzypsXdq1C9eK0aCe2gmczeb8GqRXhEJCx9aQETx2dQI3PeSGNbBI-tqyFtd3gWQfVF4leXCNq1WTzdX0kqbyxs1ZEuTTCQ01WE6t98HSSoJtoWrboqH5rwB1KrX8Mv9TLR4OO-toE-ifS0dIkMBOPLzcejolab_ze12DWtZbvKNKhKiVr2etdUJcd69k3LLQhmMyp4f9-PXWlanCxXO8YZ7_AqIUTdUfmFufq1OMLKWb3nAmhAznflIcxxdCBF6n-wA==',
            'Content-Type: application/json'
        );
        // $phone1 = "3058172745";
        $phone1 = "901045";
        $phone2 = "cmora.tadhack22.engage.ai";
        $body = '{
            "From":'.$phone1.',
            "To":'.$phone2.',
            
        }';
        $acountId = "AC-a52ed94d-5278-4b1b-bc09-c8cfb49eb9e9";
        
        // dd($body);
        $curl = curl_init();
        
        curl_setopt_array(
            $curl, array(
                CURLOPT_URL => "https://apigateway.engagedigital.ai/api/v1/accounts/".$acountId."/call",
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
                CURLOPT_HTTPHEADER => $headers,
                CURLOPT_POST => 1,//TIPO DE PETICION A HACER = GET, POST, PUT
                CURLOPT_POSTFIELDS => '{
                    "From": "901045",
                    "To": "cmora.tadhack22.engage.ai",
                    "StatusCallback": "http://127.0.0.1:8000/statuscallback",
                    "Eml": "<?xml version=1.0 encoding=UTF-8?><Response><Say>This is Demo</Say></Response>",
                    "StatusCallbackMethod": "POST",
                    "StatusCallbackEvent": "initiated, ringing, answered, completed"
                }',
                )
            );

            $response = curl_exec($curl);
            if (!$response) {
                Log::debug($response." is bad");
            } else {
                Log::debug($response." is good");
            }
            dd($response);
        return collect(json_decode($response));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
