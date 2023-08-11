<?php 

function makeheader() {
    echo <<<'DELIMITER'
    <header class="row">
        <div class="col text-center">
            <div class="d-flex flex-row justify-content-center align-items-center">
                <img src=".\images\1-Logo-Quantum-Biochemistry.png" alt="Logo">
                <div>
                    <h1 class="std">Quantumbiochemistry.org</h1>
                    <h2 class="std">The quantum theory applied to biology</h2>
                </div>
            </div>
        </div>
    </header>
   DELIMITER;
}

?>