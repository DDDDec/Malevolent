///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

///////////////////////////////////////////
// Command Bank Withdraw Script          //
///////////////////////////////////////////
// Withdraws money into the players bank //
// Account                               //
///////////////////////////////////////////
command_bank_withdraw(args)
{
    player = strToK(self.pers["player-data"], ";");

    data = [];
    data["language"] = player[4];
    data["language_type"] = "CommandWithdraw";

    max_withdraw = 1000000;
    max_withdrawable = 1000000 - self.score;

    account = database_query("SELECT * FROM users WHERE id=?", array(self.guid));

    if (self.score == int(max_withdraw)) {
        data["language_id"] = 0;
        data["withdraw_amount"] = 0;
        data["new_balance"] = account[0][0]["user_money"];
        self tell(utility_request(data, "language"));
        return;
    }

    if (int(account[0][0]["user_money"]) == 0) {
        data["language_id"] = 0;
        data["withdraw_amount"] = 0;
        data["new_balance"] = account[0][0]["user_money"];
        self tell(utility_request(data, "language"));
        return;
    }

    if (int(account[0][0]["user_money"]) >= int(max_withdrawable)) {
        update = database_query("UPDATE users SET user_money=user_money-? WHERE id=?", array(max_withdrawable, self.guid));

        self.score += int(max_withdrawable);
        data["language_id"] = 0;
        data["withdraw_amount"] = 0;
        data["new_balance"] = int(account[0][0]["user_money"]) - max_withdrawable;
        self tell(utility_request(data, "language"));
        return;
    }

    update = database_query("UPDATE users SET user_money=0 WHERE id=?", array(self.guid));

    self.score += int(account[0][0]["user_money"]);
    data["language_id"] = 0;
    data["withdraw_amount"] = account[0][0]["user_money"];
    data["new_balance"] = 0;
    self tell(utility_request(data, "language"));
    return;
}