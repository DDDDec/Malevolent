///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Account LevelUp Script       //
//////////////////////////////////////////
// Lets players level up their account  //
//////////////////////////////////////////
command_account_level_up(args)
{
    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    headers = [];
    headers["Content-Type"] = "application/json";

    data = [];
    data["language"] = "en";
    data["language_id"] = 0;

    message = utility_request(headers, data, "language");
    self tell(message);
}