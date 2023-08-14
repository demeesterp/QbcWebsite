<?php 

function make_structure_theory_nav($pageNbr) {   
    if ( $pageNbr < 1 && $pageNbr > 7 ) {
        echo "ERROR";
    }
    $previous = "" ;
    $next = "" ;
    
    $next_page_nbr = (int)$pageNbr + 1;  
    $previous_page_nbr = (int)$pageNbr - 1;
    
    $start_invisible = "invisible";
    $end_invisible = "invisible";
    
    switch($pageNbr) {
        case 1:  
            $start_invisible = "invisible";
            $end_invisible = "";        
            $next = "The adiabatic approximation";
            break;
        case 2:
            $start_invisible = "";
            $end_invisible = "";
            $previous = "Introduction" ;
            $next = "Energy and wave function of a molecule";
            break;
        case 3:
            $start_invisible = "";
            $end_invisible = "";
            $previous = "The adiabatic approximation" ;
            $next = "Solving the Schrödinger equation for a molecule";
            break;
        case 4:
            $start_invisible = "";
            $end_invisible = "";
            $previous = "Energy and wave function of a molecule";
            $next = "The Hartee-Fock approximation";
            break;
        case 5;
            $start_invisible = "";
            $end_invisible = "";
            $previous = "Solving the Schrödinger equation for a molecule";
            $next = "Perturbation theory and configuration interaction";
            break;
        case 6;
            $start_invisible = "";
            $end_invisible = "";
            $previous = "The Hartee-Fock approximation";
            $next = "The density functional theory";
             break;
        case 7;
            $start_invisible = "";
            $end_invisible = "invisible";
            $previous = "Perturbation theory and configuration interaction";
            $next = "";
            break;
        default:
            $start_invisible = "";
            $end_invisible = "";
            $previous = "ERROR";
            $next = "ERROR";
    }

    echo"<nav aria-label='Course navigation'>".
            "<ul class='pagination justify-content-center'>".
                "<li class='page-item $start_invisible'>".
                    "<a class='page-link'".
                        "href='./moleculestructuretheory.php?pagenbr=$previous_page_nbr'>".
                        "<strong><< previous</strong>:   $previous".         
                    "</a>".
                "</li>".
                "<li class='page-item $end_invisible'>".
                    "<a class='page-link'".
                        "href = './moleculestructuretheory.php?pagenbr=$next_page_nbr'>".
                        "$next:  <strong>next >> </strong>".
                    "</a>".
                "</li>".
            "</ul>".
        "</nav>";
}

?>