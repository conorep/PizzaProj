<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS, custom styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <?php
    if ($pageName == "Guestbook Admin") {
        echo '      <link rel="stylesheet" href="../Guestbook/styles/styles.css">
                        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
                        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">';
    } elseif ($pageName == "Portfolio") {
        echo '<link rel="stylesheet" href="Guestbook/styles/styles.css">';
    } elseif ($pageName == "PortfolioMain") {
        echo '<link rel="stylesheet" href="305/Guestbook/styles/styles.css">';
    }
    else {
        echo '<link rel="stylesheet" href="styles/styles.css">';
    }


    ?>

    <!--<link rel="stylesheet" href="../Guestbook/styles/styles.css">-->

    <title><?php echo $pageName ?></title>

    <!--  Favicon  -->
    <?php
    if ($pageName == "Portfolio") {
        echo '<link rel="icon" type="image/png" href="images/fallWork.jpg">';

    } elseif ($pageName == "PortfolioMain") {
        echo '<link rel="icon" type="image/png" href="305/images/fallWork.jpg">';
    } else {
        echo '<link rel="icon" type="image/png" href="../images/fallWork.jpg">';
    }
    ?>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">

</head>