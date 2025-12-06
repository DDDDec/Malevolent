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
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];

    if (int(player[3]) == 1000) {
        data["language_id"] = 0;
        message = utility_request(data, "language");
        self tell(message);
        return;
    }

    if (int(player[2]) < int(getDvar("account_max_prestige")) && int(player[3]) == int(getDvar("account_max_level"))) {
        data["language_id"] = 1;
        message = utility_request(data, "language");
        self tell(message);
        return;
    }

    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (int(player[2]) == int(getDvar("account_max_prestige")) && isDefined(args[1]) && args[1] == "all" || args[1] == "max") {
        data["language_id"] = 2;
        data["user_level"] = 2;
        data["user_cost"] = 2000;
        message = utility_request(data, "language");
        self tell(message);
        return;
    }

    data["language_id"] = 2;
    data["user_level"] = 2;
    data["user_cost"] = 2000;
    message = utility_request(data, "language");
    self tell(message);
}