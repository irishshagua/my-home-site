<?php 
    $requested_url = $_SERVER['REQUEST_URI']; 
    
    $logo = "     __  __       ____     ____        __    __    ____    __    __\\n    /  \\\/  \\\     / __ \\\   / __ \\\      /  \\\  /  /  |  __|   \\\ \\\  / /\\n   /  /\\\/\\\  \\\   | |  | | | |  | |    /    \\\/  /   | |__     \\\ \\\/ /\\n  /  /    \\\  \\\  \\\ |__| / \\\ |__| /   /  /\\\    /    | |__      |  |\\n /__/      \\\__\\\  \\\____/   \\\____/   /__/  \\\__/     |____|     |__|\\n    _______   _______           __       __               _______\\n   /  ____/  |  _____|  ______  \\\ \\\     / /  ______      /  __   \\\ \\n  /  /_      |  |__    |  __  \\\  \\\ \\\   / /  |  ____|    /  |__|  | \\n  \\\__  \\\     |   __|   | |__| |   \\\ \\\_/ /   |  |__     /  __   _/ \\n     \\\  \\\    |  |____  |  _  /     \\\___/    |   __|   /  /  \\\  \\\ \\n   __/  /    |_______| | | \\\ \\\              |  |___  /__/    \\\__\\\ \\n  /____/               |_|  \\\_\\\             |______|";
    
    $term_header = "\"$logo \\n\\nMooney {: Server (http://www.mooney-server.tk)"
                    . "\\nA 404 code was returned when trying to access the following URI: $requested_url"
                    . "\\nEither you have requested a link which doesn't exist, or Zombie Aliens have already eaten $requested_url"
                    . "\\nUse the `help` command to see your available options\\n\\n\"";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="css/jquery.terminal.css"></script>
        
        <script src="js/jquery.js"></script>
        <script src="js/jquery.terminal.js"></script>
    </head>
    <body id="term" class="terminal">
        <div id="beer-bot" style="display: none; position: absolute; top: 50%; left: 50%">
            <img id="the-slender-nipple-slipped-out-of-the-keepers-grip-before-the-aerial-collision" src="images/beer-bot.png"/>
        </div>
        <script>
            $('#term').terminal(function(command, term) {
                    if (command == 'help') {
                        term.echo("Below are a list of the supported commands:\n\n\t + clear: Clear the Screen\n\t + home: Return To Main Page\n\t + other: Suggest some good alternate sites to read\n\t + scan: perform self diagnostics\n\t + bot: activate the beer bot");
                        
                    } else if (command == 'home') {
                        window.location.href = 'http://www.mooney-server.tk';
                        term.echo("Returning to Home Page...");
                        term.set_prompt("");
                    } else if (command == "scan") {
                        term.error("Diagnostics Have Failed!");
                    } else if (command == "other") {
                        term.echo("call php to get some random links");
                    } else if (command == "bot") {
                        if ($('#beer-bot').css('display') == 'none') {
                            term.echo("Beer Bot activated");
                            $('#beer-bot').css('display', 'block');
                        } else {
                            term.echo("Beer Bot dis-activated");
                            $('#beer-bot').css('display', 'none');
                        }
                    } else {
                        term.error('Illegal Command [' + command + ']:\n\tUse `help` command to list your options');
                    }
                }, 
                { 
                    prompt: '$: ', 
                    greetings: <? echo $term_header; ?>,
                    name: 'MooneyServer 404',
                    onClear: function(t) {
                        t.echo("<? echo $logo; ?>\n\n");
                    }
                });
            
            $('#the-slender-nipple-slipped-out-of-the-keepers-grip-before-the-aerial-collision').click(function(){
                $("#beer-bot").css("display", "none");
            });
        </script>
    </body>
</html>
