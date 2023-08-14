<html>
<?php
    include './helpers/head.php';
    include './helpers/header.php';
    include './helpers/footer.php';
?>

<head>
    <?php makehead(); ?>
    <title>Quantum Biochemistry</title>
</head>
<body>
    <div class="container">
        <header class="row mb-3">
            <div class="col text-center">
                <?php makeheader() ?>
            </div>
        </header>
        <section class="row mb-3">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chemical Software</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="row mb-3">
            <div class="col">
                <h4 class="olive mb-2">Introduction</h4>
                <div class="bg-body-tertiary rounded p-2">
                    <p>If you want to do quantum chemical calculations then you have to install the proper software.</p>
                    <p>
                        It is possible to set up a working system at a low price. Many commercially available personal
                        computers are fast enough to do the job. Those computers that are designed to give top performance
                        for computer games will be perfect for the calculations too. But you may not need the expensive
                        graphic card.
                    </p>
                </div>
                <div class="bg-body-tertiary rounded p-2">
                    <p>
                        Our technical information page is made for those that use a personal computer to do the calculations. The information we
                        provide is based on our own experience. We did set up an inexpensive installation that allows
                        us to do the calculations we need.
                    </p>
                    <p>
                        We used
                        <a href="http://www.wolfram.com/mathematica/">Wolfram Mathematica</a> to create 3 dimensional images of the molecules. If you want to view
                        these images you must download the
                        <a href="http://www.wolfram.com/cdf-player/">Wolfram CDF player</a> !
                    </p>
                </div>
            </div>
        </section>
        <section class="row mb-3">
            <div class="col">
                <h4 class="olive mb-2">Quantum chemical software</h4>
                <div class="bg-body-tertiary rounded p-2">
                    <p>
                        To do quantum chemical calculations you will need software that performs the calculations.
                        <a href="http://en.wikipedia.org/wiki/List_of_quantum_chemistry_and_solid-state_physics_software" target="_blank">
                            A list of available packages is on wiki </a>.
                    </p>
                    <p>
                        We use
                        <a href="http://www.msg.ameslab.gov/" target="_blank">GAMESS</a>. GAMESS is a well know software system and the number of possible calculations
                        is really huge. Check out the website to find out how you can get it. There you find all
                        information you need to compile, install and run the software.
                    </p>
                    <p>
                        If you don't have much experience with installing GAMESS then read this
                        <a href="http://www.d.umn.edu/~psiders/courses/chem4642/quantumchemsoftware/installation/installation.html" target="_blank">
                            extra information
                        </a>.
                    </p>
                    <p>
                        You probably need some software to view molecules in 3 dimensions. There are
                        <a href="http://en.wikipedia.org/wiki/List_of_software_for_molecular_mechanics_modeling" target="_blank">
                            several molecular modelling software systems
                        </a> available, some of them expensive. A popular software is
                        <a href="https://two.avogadro.cc/" target="_blank">Avogadro</a>.
                        We use Avogadro a free and open source software. We also use
                        <a href="http://brettbode.github.io/wxmacmolplt/" target="_blank">MacMolPlt</a> a freeware software.
                    </p>
                </div>
            </div>
        </section>
        <?php makefooter();  ?>
    </div>
</body>
</html>