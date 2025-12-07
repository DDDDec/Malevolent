///////////////////////////////////////
// Include Utility Scripts           //
///////////////////////////////////////
#include scripts/zm/Utility/Utility; //
///////////////////////////////////////

///////////////////////////////////////
// Command Chat Script               //
///////////////////////////////////////
// Allows customization of the chat  //
///////////////////////////////////////
command_chat(args)
{
    player_data = strToK(self.pers["player-data"], ";");

    string = "";
    iteration = 0;
    foreach (message in args)
    {
        if (iteration > 0)
            if (string == "")
                string = " " + message;
            else
                string = string + " " + message;

        iteration += 1;
    }

    say("[^" + player_data[5] + "Owner^7][^" + player_data[5] + "L" + player_data[3] + "^7][^" + player_data[5] + "P" + player_data[2] + "^7] ^" + player_data[5] + "" + player_data[0] + " ^7>" + string);
}