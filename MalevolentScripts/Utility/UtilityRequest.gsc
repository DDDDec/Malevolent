/////////////////////////////////////
// Utility HTTP Request Function   //
/////////////////////////////////////
// Sends a HTTP request to a URL   //
/////////////////////////////////////
utility_http_request(headers, data, url)
{
    request = httpPost(url, jsonSerialize(data, 0), headers);
    request waittill("done", result);
    return result;
}