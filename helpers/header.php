<?php 

function makeheader() {
    echo <<<'DELIMITER'
    <header class="row">
        <div class="col">
            <img class="float-left" src=".\images\1-Logo-Quantum-Biochemistry.png" alt="Logo">
            <div class="float-none text-center mt-4">
                <h1 class="std">Quantumbiochemistry.org</h1>
                <h2 class="std">The quantum theory applied to biology</h2>
            </div>
        </div>
    </header>
   DELIMITER;
}

?>