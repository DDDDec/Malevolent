///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

//////////////////////////////////////////
// Command Bank Deposit Script          //
//////////////////////////////////////////
// Deposits money into the players bank //
// Account                              //
//////////////////////////////////////////
command_bank_deposit(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];
    data["language_type"] = "CommandDeposit";

    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (self.score == 0) {
        data["language_id"] = 0;
        data["deposit_amount"] = 0;
        data["new_balance"] = int(account[0][0]["user_money"]) + self.score;
        self tell(utility_request(data, "language"));
        return;
    }

    update = database_query("UPDATE users SET user_money=user_money+? WHERE id=?", array(self.score, self.guid));

    data["language_id"] = 0;
    data["deposit_amount"] = self.score;
    data["new_balance"] = int(account[0][0]["user_money"]) + self.score;
    self tell(utility_request(data, "language"));

    self.score = 0;
}