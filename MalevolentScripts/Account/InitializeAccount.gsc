////////////////////////////////////////
// Include Base Game Scripts          //
////////////////////////////////////////
#include maps/mp/_utility;            //
#include common_scripts/utility;      //
#include maps/mp/zombies/_zm_utility; //
////////////////////////////////////////

///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/Utility;         //
///////////////////////////////////////////////

///////////////////////////////////////////////
// Account Initialize Function               //
///////////////////////////////////////////////
// Sorts the players account data            //
///////////////////////////////////////////////
initialize_account() {
    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (account[0].size == 0) {
        database_query("INSERT INTO user_plutonium (`plutonium_id`, `plutonium_name`, `created_at`, `updated_at`) VALUES (?, ?, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)", array(self.guid, self.name));
        utility_kick_player("                                                                                                                                                                                                           [^5Malevolent^7] You are not ^5REGISTERED^7                                         Register at ^5https://malevolent.website^7                                          [^5GUID^7]^5 " + self.guid + "^7 [^5Username^7] ^5" + self.name);
        return;
    }

    if (int(account[0][0]["user_banned"]) == 1) {
        utility_kick_player("                                                                                                                                                                                                                   [^5Malevolent^7] You are ^5BANNED^7                                                                                                                                                                      Appeal at ^5https://malevolent.website^7");
        return;
    }

    server = database_query("SELECT * FROM servers WHERE server_port=?", array(getDvar("net_port")));

    if (int(account[0][0]["user_rank"]) < 5 && int(server[0][0]["server_maintenance"]) == 1) {
        utility_kick_player("                                                                                                                                                                                                     [^5Malevolent^7] Server under ^5MAINTENANCE^7                                                                                                                                                             Visit ^5https://malevolent.website^7");
        return;
    }

    self.pers["player-data"] = self.name + ";" + account[0][0]["user_rank"] + ";" + account[0][0]["user_prestige"] + ";" + account[0][0]["user_level"] + ";" + account[0][0]["user_language"] + ";" + account[0][0]["user_color"];
    self rename("[^" + account[0][0]["user_color"]  + "L" + account[0][0]["user_level"] + "^7][^" + account[0][0]["user_color"]  + "P" + account[0][0]["user_prestige"] + "^7] " + self.name + "^7");
}