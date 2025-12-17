///////////////////////////////////////////////
// Include Utility Scripts                   //
///////////////////////////////////////////////
#include scripts/zm/Utility/Utility;         //
#include scripts/zm/Utility/UtilityDatabase; //
#include scripts/zm/Utility/UtilityRequest;  //
///////////////////////////////////////////////

/////////////////////////////////////////////
// Event ChatGame Script                   //
/////////////////////////////////////////////
// Spits out a random question for money   //
/////////////////////////////////////////////
event_chat_game()
{
    level endon("end_game");

    while (true) {
        wait 300;

        select = database_query("SELECT * FROM server_chat_games", array());
        level.chat_game = select[0][0]["server_chat_game_answer"];
        level.chat_game_reward = select[0][0]["server_chat_game_reward"];

        say("[^5ChatGame^7] " + select[0][0]["server_chat_game_question"]);

        wait 30;

        if (isDefined(level.chat_game)) {
            say("[^5ChatGame^7] No one was able to give the correct answer");
        }

        level.chat_game = undefined;
    }
}