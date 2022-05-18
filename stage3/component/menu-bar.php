<div class="menu-bar">
    <?php
        if ($menuBarContent !== null) {
            foreach ($menuBarContent as $key => $value) {
                if ($value == $currentGroup) {
                    echo "<div class='menubar-item active'><p class='menubaritem-name'>$value</p></div>";
                } else {
                    echo "<div class='menubar-item standard' onclick='location.href = `./?group=$value`;'><p class='menubaritem-name'>$value</p></div>";
                }
            }
        }
    ?>
    <!-- <div class="menubar-item"><p class="menubaritem-name">Groupe de classe</p></div>
    <div class="menubar-item"><p class="menubaritem-name">Astuces cuisines</p></div>
    <div class="menubar-item"><p class="menubaritem-name">Projet d'arts plastiques</p></div> -->
</div>