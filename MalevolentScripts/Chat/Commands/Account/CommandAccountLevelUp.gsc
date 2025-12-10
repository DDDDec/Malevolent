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
    data["language_type"] = "CommandLevelUp";

    if (int(player[3]) == 1000) {
        data["language_id"] = 0;
        self tell(utility_request(data, "language"));
        return;
    }

    if (int(player[2]) < int(getDvar("account_max_prestige")) && int(player[3]) == int(getDvar("account_max_level"))) {
        data["language_id"] = 1;
        self tell(utility_request(data, "language"));
        return;
    }

    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (int(account[0][0]["user_money"]) < int(getDvar("account_level_cost")) * int(player[3])) {
        data["language_id"] = 2;
        data["user_level"] = int(player[3]) + 1;
        data["user_cost"] = int(getDvar("account_level_cost")) * int(player[3]);
        self tell(utility_request(data, "language"));
        return;
    }

    if (isDefined(args[1]) && args[1] == "all") {
        cost = int(getDvar("account_level_cost")) * int(account[0][0]["user_level"]);
        overall_cost = 0;

        while (int(account[0][0]["user_money"]) >= cost) {
            if (int(account[0][0]["user_prestige"]) == int(getDvar("account_max_prestige")) && int(account[0][0]["user_level"]) == int(getDvar("account_master_prestige"))) {
                break;
            } else if (int(account[0][0]["user_prestige"]) <= int(getDvar("account_max_prestige")) && int(account[0][0]["user_level"]) == int(getDvar("account_max_level"))) {
                break;
            }

            cost = int(getDvar("account_level_cost")) * int(account[0][0]["user_level"]);
            overall_cost += int(cost);
            account[0][0]["user_money"] = int(account[0][0]["user_money"]) - int(cost);
            account[0][0]["user_level"] = int(account[0][0]["user_level"]) + 1;
        }

        self.pers["player-data"] = player[0] + ";" + account[0][0]["user_rank"] + ";" + account[0][0]["user_prestige"] + ";" + account[0][0]["user_level"] + ";" + account[0][0]["user_language"] + ";" + account[0][0]["user_color"];
        self rename("[^" + account[0][0]["user_color"]  + "L" + account[0][0]["user_level"] + "^7][^" + account[0][0]["user_color"]  + "P" + account[0][0]["user_prestige"] + "^7] " + player[0] + "^7");

        update = database_query("UPDATE users SET user_money=?, user_level=? WHERE id=?", array(account[0][0]["user_money"], account[0][0]["user_level"], self.guid));

        data["language_id"] = 3;
        data["user_level"] = account[0][0]["user_level"];
        data["user_cost"] = overall_cost;
        self tell(utility_request(data, "language"));
        return;
    }

    cost = int(getDvar("account_level_cost")) * int(account[0][0]["user_level"]);

    account[0][0]["user_level"] = int(account[0][0]["user_level"]) + 1;
    account[0][0]["user_money"] = int(account[0][0]["user_money"]) - int(cost);

    self.pers["player-data"] = player[0] + ";" + account[0][0]["user_rank"] + ";" + account[0][0]["user_prestige"] + ";" + account[0][0]["user_level"] + ";" + account[0][0]["user_language"] + ";" + account[0][0]["user_color"];
    self rename("[^" + account[0][0]["user_color"]  + "L" + account[0][0]["user_level"] + "^7][^" + account[0][0]["user_color"]  + "P" + account[0][0]["user_prestige"] + "^7] " + player[0] + "^7");

    update = database_query("UPDATE users SET user_money=?, user_level=? WHERE id=?", array(account[0][0]["user_money"], account[0][0]["user_level"], self.guid));

    data["language_id"] = 3;
    data["user_level"] = account[0][0]["user_level"];
    data["user_cost"] = cost;
    self tell(utility_request(data, "language"));
}