<div class="msg-box">
    <?php
    $messagesUrl = "../groups/$currentGroup/messages.json";
    $messagesContent = file_get_contents($messagesUrl);
    $messages = json_decode($messagesContent, true);

    clearstatcache();
    if(filesize($messagesUrl)) {
        $msgNumber = count($messages);
        for($i = count($messages) - 1; $i > -1; $i--) {
            // echo "<div class='msg-item'><div class='img' style='background-image: url(https://cdn.discordapp.com/avatars/729979764445675538/746a206da383de40bb016fbf42ac8273.webp)'></div><p class='username'><span class='name'>ConektNeue</span><img src='../img/star-filled.png'><span class='time'>Hier à 19H</span></p><p class='content'><img src='https://media.discordapp.net/attachments/973257011594678272/973654639591448576/aha.jpg'></p></div>";
            echo "<div class='msg-item'><div class='img' style='background-image: url(https://cdn.discordapp.com/avatars/729979764445675538/746a206da383de40bb016fbf42ac8273.webp)'></div><p class='username'><span class='name'>" . $messages[$i]['username'] . "</span><img src='../img/star-filled.png'><span class='time'>" . $messages[$i]['time'] . "</span></p><p class='content'>" . $messages[$i]['content'] . "</p></div>";
            // for ($j = 0; $j < count($accounts[$i]["groups"]); $j++) {
            //     $fileName = $accounts[$i]["groups"][$j]['file_group_title'];

            //     $currentGroupMetadataUrl = "../groups/$fileName/metadata.json";
            //     $currentGroupeMetadataContent = file_get_contents($currentGroupMetadataUrl);
            //     $currentGroupeMetadata = json_decode($currentGroupeMetadataContent, true);

            //     $menuBarContent[] = $currentGroupeMetadata["title"];
            // }
        }
    }
    ?>
</div>