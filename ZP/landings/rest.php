<?php
function CallRest($url, $data = false, $method = 'GET')
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if (!empty($data))
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if (!empty($data))
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    return curl_exec($curl);
}
function CRMCallRest($method, $parameters, $url, $debug = false)
{
	ob_start();
	$curl_request = curl_init();

	curl_setopt($curl_request, CURLOPT_URL, $url);
	curl_setopt($curl_request, CURLOPT_POST, 1);
	curl_setopt($curl_request, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
	curl_setopt($curl_request, CURLOPT_HEADER, 1);
	curl_setopt($curl_request, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl_request, CURLOPT_FOLLOWLOCATION, 0);

	$jsonEncodedData = json_encode($parameters);

	if ($debug) echo "\n\033[01;31mJSON SENT:\033[0m\n", $jsonEncodedData, "\n";

	$post = array(
		 "method" => $method,
		 "input_type" => "JSON",
		 "response_type" => "JSON",
		 "rest_data" => $jsonEncodedData
	);

	curl_setopt($curl_request, CURLOPT_POSTFIELDS, $post);
	$result = curl_exec($curl_request);

	if ($debug) echo "\n\033[01;31mRESPONSE:\033[0m\n", $result, "\n\n";

	curl_close($curl_request);

	$result = explode("\r\n\r\n", $result, 2);
	$response = json_decode($result[1]);
	ob_end_flush();

	return $response;
}
?>