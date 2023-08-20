<?php 

function makeheader() {
    echo <<<'DELIMITER'
    <div class="d-flex flex-row justify-content-center align-items-center">
                <img src=".\images\1-Logo-Quantum-Biochemistry.png" alt="Logo">
                <div>
                    <h1 class="olive">quantumbiochemistry.org</h1>
                    <h2 class="red">The quantum theory applied to biology</h2>
                </div>
            </div>
    DELIMITER;
}

?>