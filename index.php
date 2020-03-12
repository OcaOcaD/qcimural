<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HTML head  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QCI Mural</title>
    <!-- Some libraries and stuff -->
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <!-- Include some components  -->
    <link rel="stylesheet" href="components/navbar/navbar.css">
    <link rel="stylesheet" href="components/login/login.css">
    <link rel="stylesheet" href="components/screen/screen.css">
    <link rel="stylesheet" href="components/board/board.css">
    <link rel="stylesheet" href="components/sideDrawer/sideDrawer.css">
    <link rel="stylesheet" href="components/backdrop/backdrop.css">
    <!-- <link rel="stylesheet" href="./components/footer/footer.css">] -->


</head>
<body>
    <div id="wholeShadow"></div>
    <?php include("components/navbar/navbar.php") ?>
    <?php include("components/sideDrawer/sideDrawer.php") ?>
    <?php include("components/backdrop/backdrop.html") ?>
    <?php include("components/login/login.php") ?>
    <?php include("components/screen/screen.php") ?>
    <div id="backdrop_holder"></div>
    <div id="sidedrawer_holder"></div>
    
    <script>
        /***** Sidedrawer and backdrop */
        $("#backdrop_holder").load( "components/backdrop/backdrop.html" )
        $("#sidedrawer_holder").load( "components/sideDrawer/sideDrawer.php" )
        let sideDrawerOpen = false
        renderBackdropAndSideDrawer = (state) => {
            if ( state == true ){
                //Display the side drawer
                $("#sideDrawer").addClass("open")
                $("#backdrop").show()
            }else{
                //Hide the backdrop and sidedrawer
                $("#sideDrawer").removeClass("open")
                $("#backdrop").hide()
            }
        }
        backdropClickHandler = () => {
            // console.log("bd handler triggered");
            sideDrawerOpen = false;
            renderBackdropAndSideDrawer( sideDrawerOpen );
        };
        drawerToggleClickHandler = () => {
            // console.log("drawerToggleClickHandler triggered");
            // console.log("sd: "+ sideDrawerOpen + "gonna change to: "+!sideDrawerOpen);
            sideDrawerOpen = !sideDrawerOpen
            renderBackdropAndSideDrawer( sideDrawerOpen );
        };
        handleSideLink = ( destino ) => {
            goToByScroll( destino );
            sideDrawerOpen = !sideDrawerOpen
            renderBackdropAndSideDrawer( sideDrawerOpen );
        }
        // console.log( "sidedrawer is: "+sideDrawerOpen );
        renderBackdropAndSideDrawer( sideDrawerOpen );
    </script>
</body>
</html>