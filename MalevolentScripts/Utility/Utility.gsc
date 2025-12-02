///////////////////////////////////////////////
// Utility Kick Player Function              //
///////////////////////////////////////////////
// Kicks the given player from the server    //
///////////////////////////////////////////////
utility_kick_player(reason)
{
    executeCommand("clientkick_for_reason  " + self GetEntityNumber() + " \"" + reason + "\"");
}

/////////////////////////////////////////
// Utility Format Time Function        //
/////////////////////////////////////////
// Returns formatted time from seconds //
/////////////////////////////////////////
utility_format_time(time)
{
    totalSeconds = int(time);

    hours = int(totalSeconds / 3600);
    minutes = int((totalSeconds % 3600) / 60);
    secs = totalSeconds % 60;

    if (hours < 10)
        hourStr = "0" + hours;
    else
        hourStr = hours + "";

    if (minutes < 10)
        minuteStr = "0" + minutes;
    else
        minuteStr = minutes + "";

    if (secs < 10)
        secondStr = "0" + secs;
    else
        secondStr = secs + "";

    return hourStr + ":" + minuteStr + ":" + secondStr;
}

///////////////////////////////////////////////////
// Utility Get Map Function                      //
///////////////////////////////////////////////////
// Returns the current map the server is running //
///////////////////////////////////////////////////
utility_get_map()
{
    switch(getDvar("ui_zm_mapstartlocation"))
    {
        case "processing": return "Buried"; break;
        case "rooftop": return "DieRise"; break;
        case "prison": return "Prison"; break;
        case "nuked": return "Nuketown"; break;
        case "tomb": return "Origins"; break;
        case "town": return "Town"; break;
        case "farm": return "Farm"; break;
        case "transit":
            if (getDvar("ui_gametype") == "zclassic")
        	    return "Tranzit";
            else
        	    return "Depot";
            break;
        default: return "NA";
    }
}

////////////////////////////////////////////
// Utility Format Number Function         //
////////////////////////////////////////////
// Returns numbers formatted by thousands //
////////////////////////////////////////////
utility_format_number(num)
{
    strNum = num + "";

    len = 0;
    while (strNum[len] != undefined) {
        len++;
    }

    if (len <= 3)
        return strNum;

    formatted = "";
    firstGroupLen = len % 3;
    if (firstGroupLen == 0)
        firstGroupLen = 3;

    for (i = 0; i < firstGroupLen; i++) {
        formatted += strNum[i];
    }

    for (i = firstGroupLen; i < len; i += 3) {
        formatted += ",";
        for (j = 0; j < 3; j++) {
            formatted += strNum[i + j];
        }
    }

    return formatted;
}