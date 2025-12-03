/////////////////////////////////////
// Utility Request Function        //
/////////////////////////////////////
// Sends a HTTP request to a URL   //
/////////////////////////////////////
utility_request(headers, data, url)
{
    request = httpPost(getDvar("api_url") + url, jsonSerialize(data, 0), headers);
    request waittill("done", result);
    return result;
}