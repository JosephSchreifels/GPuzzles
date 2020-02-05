<?php

include_once 'db_configuration.php';

if (isset($_POST['id'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);

    // Unlink puzzle image
    $puzzleFile = mysqli_real_escape_string($db, $_POST['puzzle_image']);
    unlink($puzzleFile);

    // Unlink solution image test
    $solutionFile = mysqli_real_escape_string($db, $_POST['solution_image']);
    unlink($solutionFile);

    $sql = "DELETE FROM gpuzzles
            WHERE id = '$id'";

    mysqli_query($db, $sql);
    header('location: puzzles_list.php?puzzleDeleted=Success');
}//end if
?>

