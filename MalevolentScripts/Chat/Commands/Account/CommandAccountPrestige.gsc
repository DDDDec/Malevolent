///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Account Prestige Script      //
//////////////////////////////////////////
// Lets players prestige their account  //
//////////////////////////////////////////
command_account_prestige(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];

    if (int(player[2]) == int(getDvar("account_max_prestige"))) {
        data["language_id"] = 4;
        data["master_prestige"] = getDvar("account_max_prestige");
        self tell(utility_request(data, "language"));
        return;
    }

    if (int(player[3]) < int(getDvar("account_max_level"))) {
        data["language_id"] = 5;
        data["max_level"] = getDvar("account_max_level");
        self tell(utility_request(data, "language"));
        return;
    }

    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));
    cost = int(getDvar("account_prestige_cost")) * int(player[2]);
    next_prestige = int(account[0][0]["user_prestige"]) + 1;

    if (int(account[0][0]["user_money"]) < int(cost)) {
        data["language_id"] = 6;
        data["prestige_cost"] = int(cost);
        data["next_prestige"] = next_prestige;
        self tell(utility_request(data, "language"));
        return;
    }

    database_query("UPDATE users SET user_money=user_money-?, user_prestige=? WHERE id=?", array(cost, next_prestige, self.guid));
    data["language_id"] = 7;
    data["next_prestige"] = next_prestige;
    self tell(utility_request(data, "language"));
    self.pers["player-data"] = player[0] + ";" + account[0][0]["user_rank"] + ";" + next_prestige + ";" + account[0][0]["user_level"] + ";" + account[0][0]["user_language"] + ";" + account[0][0]["user_color"];
    self rename("[^" + account[0][0]["user_color"]  + "L" + account[0][0]["user_level"] + "^7][^" + account[0][0]["user_color"]  + "P" + next_prestige + "^7] " + player[0] + "^7");
}