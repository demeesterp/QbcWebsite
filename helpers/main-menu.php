<?php

function make_main_menu() {
    $pageName = basename($_SERVER['PHP_SELF']) ;
    $menuText =  '<ul class="nav nav-tabs">' .
        '<li class="nav-item">' .
            '<a class="nav-link §home" aria-current="page" href="./index.php">'.
                '<strong>Home</strong>' .
            '</a>' .
        '</li>' .
        '<li class="nav-item">' .
            '<a class="nav-link §moleculestructuretheory" href="./moleculestructuretheory.php?pagenbr=1">'.
                '<strong>Molecule Structure Theory</strong>' .
            '</a>'.
        '</li>'.
        '<li class="nav-item">'.
            '<a class="nav-link §chemicalreactivity" href="./chemicalreactivity.php">'.
                '<strong>Lewis Acids and Bases</strong>'.
            '</a>'.
        '</li>'.
        '<li class="nav-item">'.
            '<a class="nav-link §chemicalsoftware" href="./chemicalsoftware.php">'.
                '<strong> Chemical Software</strong>'.
            '</a>'.
        '</li>'.
    '</ul>';
    if ( $pageName == 'index.php') {
        $menuText = str_replace('§home', 'active', $menuText);
        $menuText = str_replace('§moleculestructuretheory', 'link-success', $menuText);
        $menuText = str_replace('§chemicalreactivity', 'link-success', $menuText);
        $menuText = str_replace('§chemicalsoftware', 'link-success', $menuText);
    } else if ( $pageName == 'moleculestructuretheory.php') {
        $menuText = str_replace('§home', 'link-success', $menuText);
        $menuText = str_replace('§moleculestructuretheory', 'active', $menuText);
        $menuText = str_replace('§chemicalreactivity', 'link-success', $menuText);
        $menuText = str_replace('§chemicalsoftware', 'link-success', $menuText);
    } else if ( $pageName == 'chemicalreactivity.php') {
        $menuText = str_replace('§home', 'link-success', $menuText);
        $menuText = str_replace('§moleculestructuretheory', 'link-success', $menuText);
        $menuText = str_replace('§chemicalreactivity', 'active', $menuText);
        $menuText = str_replace('§chemicalsoftware', 'link-success', $menuText);
    } else if ( $pageName == 'chemicalsoftware.php') {
        $menuText = str_replace('§home', 'link-success', $menuText);
        $menuText = str_replace('§moleculestructuretheory', 'link-success', $menuText);
        $menuText = str_replace('§chemicalreactivity', 'link-success', $menuText);
        $menuText = str_replace('§chemicalsoftware', 'active', $menuText);
    }
    return  $menuText;
}






?>