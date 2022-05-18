<div class="member-box">
    <?php
        $accountsUrl = '../database/accounts.json';
        $accountsContent = file_get_contents($accountsUrl);
        $accounts = json_decode($accountsContent, true);
    ?>
    <p class="title">MEMBRES —
        <?php
            $memberNumber = null;
            for($i = 0; $i < count($accounts); $i++) {
                for ($j = 0; $j < count($accounts[$i]["groups"]); $j++) {
                    $fileName = $accounts[$i]["groups"][$j]['file_group_title'];
                    if (strtolower($fileName) == strtolower($currentGroup)) {
                        $memberNumber++;
                    }
                }
            }
            echo $memberNumber; ?></p>
        <?php
        for($i = 0; $i < count($accounts); $i++) {
            for ($j = 0; $j < count($accounts[$i]["groups"]); $j++) {
                $fileName = $accounts[$i]["groups"][$j]['file_group_title'];
                if (strtolower($fileName) == strtolower($currentGroup)) {
                    echo "<div class='item'>" . $accounts[$i]["username"] . "</div>";
                }
            }
        }
    ?>
</div>