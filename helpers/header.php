<?php 

function makeheader() {
    echo <<<'DELIMITER'
                <div class="col text-end">
                    <img class="image-fluid" 
                        src=".\images\1-Logo-Quantum-Biochemistry.png" 
                        alt="quantumbiochemistry.org">
                </div>

                <div class="col-9 align-self-center">
                    <h1 class="text-break olive">quantumbiochemistry.org</h1>
                    <h2 class="red">The quantum theory applied to biology</h2>
                </div>
    DELIMITER;
}

?>