<!DOCTYPE html>
<html lang="en">
<?php include './helpers/helpers-include.php'; ?>
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
                <?php echo make_main_menu() ?>
            </div>
        </section>
        <section class="row mb-3">
            <div class="col">
                <h4 class="olive mb-2">Introduction</h4>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        If you want to do quantum chemical calculations then you have to install the proper software.
                        Because the calculations are way too elaborate to be done manually.
                    </p>
                    <p>
                        With quantum chemical software we mean software that can calculate a numerical solution for the electronic wave function of a molecule.
                        This software is very CPU intensive and depending on the model the calculation can take day, weeks, months to finish a calculation.
                        I use a dedicated computer to do the calculations.
                    </p>
                    <p>
                        Additionally you will probably want to visualise the molecules and the results of the quantum calculations.
                        And for reporting you will need at least a spreadsheet and maybe you can write some of your own software.
                    </p>
                    <p>
                        Writing your own software can take a lot of time.
                        If you plan to do serious research that I advise you to look at more advanced
                        software systems like the <a class="link-success" href="https://www.wolfram.com/" target="_blank">Wolfram Language</a>
                        They are not free of charge but can make you save a lot of time.
                    </p>
                </div>
            </div>
        </section>
        <section class="row mb-3">
            <div class="col">
                <h4 class="olive mb-2">Quantum chemical software</h4>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        Currently only <abbr title="The General Atomic and Molecular Electronic Structure System" class="initialism">GAMESS</abbr> can be obtained free of charge.
                        The software is provided by Mark Gordon's Quantum Theory Group.
                        There is a version available for windows that is easy to install and easy to use.
                        Check out the website at <a class="link-success" href="http://www.msg.ameslab.gov/" target="_blank">http://www.msg.ameslab.gov/</a>
                        for all info related to download, installation and use of their software.
                    </p>
                    <p>
                        A list of other software systems that can be used for quantum chemistry is available on
                        <a class="link-success" href="http://en.wikipedia.org/wiki/List_of_quantum_chemistry_and_solid-state_physics_software" target="_blank">wikipedia</a>
                    </p>
                </div>
                <h4 class="olive mb-2">Software to visualise and build molecules</h4>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        You probably need some software to view molecules in 3 dimensions. There are
                        <a class="link-success" href="http://en.wikipedia.org/wiki/List_of_software_for_molecular_mechanics_modeling" target="_blank">
                            several molecular modelling software systems
                        </a> available, some of them expensive.
                        A popular software is <a class="link-success" href="https://two.avogadro.cc/" target="_blank">Avogadro</a>.
                        We use Avogadro a free and open source software.
                        We also use <a class="link-success" href="http://brettbode.github.io/wxmacmolplt/" target="_blank">MacMolPlt</a> a freeware software.
                    </p>
                </div>
            </div>
        </section>
        <?php makefooter(); ?>
    </div>
</body>

</html>