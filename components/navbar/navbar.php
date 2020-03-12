<?php
    $toggleLogIn = "toggleLogIn()";
?>
<div class="navbar__container">
    <div class="navbar_shadow"></div>
    <nav class="navbar">
        <!-- <div class="drawertogglebutton__container">
            <button class="toggle-button" onclick="drawerToggleClickHandler()" style="cursor: pointer">
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
                <div class="toggle-button__line"></div>
            </button>
        </div> -->
        <div class="navbar__logo">
            <button id="Algorithms" class="toggle-button" onclick="drawerToggleClickHandler()" style="cursor: pointer">
                <!-- <label for="Algorithms">Run algorithm</label> -->
                <img src="src/logoCUCEI.png" alt="logo aqui" class="navlogo">
                <a href=""><legend>QCI Mural</legend></a>
            </button>
        </div>
        
        <ul class="navbar__options">
            <div class="left">
                <li onclick="<?php       ?>" class="navbar__item">Home</li>
            </div>
            <div class="right">
                <li onclick="<?php echo $toggleLogIn; ?>" class="navbar__item right">Log in</li>
                <li onclick="<?php echo $toggleLogIn; ?>" class="navbar__item right">Sign up</li>
            </div>
        </ul>
    </nav>

</div>
<script>
    //Log in
    toggleLogIn = (event, target) => {
        console.log("Event:", event)
        console.log("Target:", target)
        $('#login').toggle();
    }
    //
    handleNavLink = (event, link) => {
        console.log(link);
        ( event.metaKey || event.ctrlKey ) ? window.open(link) : window.location = link;
    }
</script>