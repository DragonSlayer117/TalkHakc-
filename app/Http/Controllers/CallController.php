<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class CallController extends Controller
{

    public $headers = array(
        'apikey: eyJ4NXQiOiJZamd5TW1GalkyRXpNVEZtWTJNMU9HRmtaalV3TnpnMVpEVmhZVGRtTnpkaU9HUmhNR1kzWmc9PSIsImtpZCI6ImFwaV9rZXlfY2VydGlmaWNhdGVfYWxpYXMiLCJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiJyYWRpc3lzQGNhcmJvbi5zdXBlciIsImFwcGxpY2F0aW9uIjp7Im93bmVyIjoicmFkaXN5cyIsInRpZXJRdW90YVR5cGUiOm51bGwsInRpZXIiOiJVbmxpbWl0ZWQiLCJuYW1lIjoicnN5cy1jbW9yYS50YWRoYWNrMjIuZW5nYWdlLmFpIiwiaWQiOjY4LCJ1dWlkIjoiY2U0OTdlOTMtOTE5Ny00ZDViLTg4NzktMzIxN2QwMDdhODYxIn0sImlzcyI6Imh0dHBzOlwvXC9hcGltLmVuZ2FnZWRpZ2l0YWwuYWk6NDQzXC9vYXV0aDJcL3Rva2VuIiwidGllckluZm8iOnsiVW5saW1pdGVkIjp7InRpZXJRdW90YVR5cGUiOiJyZXF1ZXN0Q291bnQiLCJzdG9wT25RdW90YVJlYWNoIjp0cnVlLCJzcGlrZUFycmVzdExpbWl0IjowLCJzcGlrZUFycmVzdFVuaXQiOm51bGx9fSwia2V5dHlwZSI6IlBST0RVQ1RJT04iLCJzdWJzY3JpYmVkQVBJcyI6W3sic3Vic2NyaWJlclRlbmFudERvbWFpbiI6ImNhcmJvbi5zdXBlciIsIm5hbWUiOiJDYWxsQVBJUHJvZHVjdCIsImNvbnRleHQiOiJcL2FwaVwvdjEiLCJwdWJsaXNoZXIiOiJyYWRpc3lzIiwidmVyc2lvbiI6IjEuMC4wIiwic3Vic2NyaXB0aW9uVGllciI6IlVubGltaXRlZCJ9XSwiaWF0IjoxNjY1Njc3Mzc1LCJqdGkiOiIxOTg2MzQzNi0zZDAzLTQ2MDItOTUxMC04YWYwYzJlMjE0ZjgifQ==.hisyFuZ3IOUiCNFWdUylUzUsUkv06LStZfI74mTvfmNSI_DstQ9C8tt4CoO54l82Sr8Nj55Cd-AlYIiRmqrzypsXdq1C9eK0aCe2gmczeb8GqRXhEJCx9aQETx2dQI3PeSGNbBI-tqyFtd3gWQfVF4leXCNq1WTzdX0kqbyxs1ZEuTTCQ01WE6t98HSSoJtoWrboqH5rwB1KrX8Mv9TLR4OO-toE-ifS0dIkMBOPLzcejolab_ze12DWtZbvKNKhKiVr2etdUJcd69k3LLQhmMyp4f9-PXWlanCxXO8YZ7_AqIUTdUfmFufq1OMLKWb3nAmhAznflIcxxdCBF6n-wA==',
        'Content-Type: application/json'
    );
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date = Carbon::now();
        $date->format("Y-m-d");

        $curl = curl_init();
        
        curl_setopt_array(
            $curl, array(
                CURLOPT_URL => "https://apigateway.engagedigital.ai/api/v1/accounts/AC-a52ed94d-5278-4b1b-bc09-c8cfb49eb9e9/call?Status=SUCCESS&EndTime=".$date->toDateString(),
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0,
                CURLOPT_HTTPHEADER => $this->headers,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "GET"//TIPO DE PETICION A HACER = GET, POST, PUT
                )
            );

            $response = curl_exec($curl);
            $response = collect(json_decode($response));
        
        return view('Calls.Call')->with("calls", $response['callDetailRecordList']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
