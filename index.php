<!DOCTYPE html>
<html lang="en">
<?php
include './helpers/head.php';
include './helpers/header.php';
include './helpers/footer.php';
?>

<head>
    <?php makehead(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/3Dmol/2.0.1/3Dmol-min.js"></script>
    <script src="https://3Dmol.org/build/3Dmol.ui-min.js"></script>
    <title>Quantum Biochemistry</title>
</head>

<body>
    <div class="container">
        <header class="row mb-3">
            <div class="col-12 text-center">
                <?php makeheader() ?>
            </div>
        </header>
        <section class="row mb-3">
            <div class="col">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="./moleculestructuretheory.php?pagenbr=1">Molecule Structure Theory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="./chemicalreactivity.php">Lewis Acids and Bases</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-success" href="./chemicalsoftware.php">Chemical Software</a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="row mb-3">
            <div class="col-9">
                <h4 class="olive mb-4">Why Quantumbiochemistry.org ?</h4>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        The goal of this site is to demonstrate how quantum mechanics can contribute to the understanding of biochemistry, molecular biology and biology.
                        I am actively doing research on how quantum chemistry can contribute to the progess of bioscience.
                        Content will be added to this site to report new results or conclusions.
                    </p>
                    <p>
                        I do not yet cover every possible use.
                        Instead I chose to limit myself to <span class="fw-semibold">chemical bonding and reactivity</span>,
                        more specifically to <span class="fw-semibold">Lewis acid and base reactions</span>.
                    </p>
                    <p>
                        <span class="fw-semibold">The Lewis acid and base concept</span> is particularly useful for our purpose.
                        Lewis acid and base reactions are very common in biology and cover the large majority of the chemistry in biological organisms.
                    </p>
                    <p>
                        Also they can help us understand enzyme catalysis.
                        Enzymes are real (existing) substances that manipulate atom in an organised way.
                        They are thus potentially a key to the further development of <span class="fw-semibold">nanotechnology</span>.
                    </p>
                </div>
                <div class="bg-body-tertiary rounded p-2">
                    <p>
                        <span class="fw-semibold">Previous research done on this topic :</span>
                    <figure>
                        <blockquote class="blockquote">
                            <p>Studies on the reaction mechanism of RNAse T1 with quantum chemical reactivity indexes.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Journal of Molecular Catalysis B: Enzymatic 15(2001) 29-43
                        </figcaption>
                    </figure>
                    </p>
                </div>
            </div>
            <div class="col-3 align-self-center">
                <img src="./images/intro/intro-schema.svg" class="img-fluid pt-4" alt="introduction">
            </div>
        </section>
        <section class="row">
            <div class="col-9">
                <h4 class="olive mb-4">In a nutshell :</h4>
                <h5 class="red">Molecular Structure Theory</h5>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        The <span class="fw-semibold">molecular structure theory</span> is an application of the quantum theory.
                        It defines <span class="fw-semibold">the Schrödinger equation</span> for a gas of electrons and nuclei.
                        By the way it does not assume that atoms exist.
                    </p>
                    <p>
                        The solution of this differential equation is a mathematical representation of the molecule called <span class="fw-semibold">the molecular wave function</span>.
                        In practice we will only calculate the <span class="fw-semibold">electronic wave function</span> of the molecule. The nuclei are assumed to be in a fixed position.
                    </p>
                    <p>
                        One must use <span class="fw-semibold">advanced mathematics</span> to obtain that wave function and we obtain only an <span class="fw-semibold">approximation</span> of the real electronic wave function.
                        Be aware that the approximation could not be good enough and lead to wrong conclusions.
                    </p>
                    <p>
                        We provide a summary on molecular structure theory with links to further reading for those who want to get into the details.
                        The tutorial provides insight into the mathematical methods, the assumptions and approximations that have been made.
                    </p>
                </div>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        <a class="icon-link icon-link-hover" href="./moleculestructuretheory.php?pagenbr=1">
                            Learn more about molecular structure theory
                            <i class="bi bi-link"></i>
                        </a>
                    </p>
                </div>
                <h5 class="red">Lewis acids and bases</h5>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        This approximate wave function can then be used to <span class="fw-semibold">calculate derived properties</span> that will give us information about the
                        Lewis acid and base properties of the molecule.
                        These properties can then explain <span class="fw-semibold">how and why</span> a molecule engages in a chemical reaction.
                    </p>
                    <p>
                        The how and the why is what we are looking for when doing biochemical research especially when looking at <span class="fw-semibold">enzyme catalysis</span>.
                        If we understand <span class="fw-semibold">why and how a chemical reaction occurs</span> then we also understand
                        <span class="fw-semibold">why and how an atom is manipulated by the enzyme</span>.
                        This in turn might help us with the development of nanotechnology. This reveals a real challenge : how can we manipulate atoms.
                    </p>
                    <p>
                        Next we provide an article on chemical reactivity and Lewis acid base reactions we explain how chemical reactivity is rooted in molecular structure theory.
                        This is a must read otherwise you will not able to understand the research and its added value.
                    </p>
                </div>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        <a class="icon-link icon-link-hover" href="./chemicalreactivity.php">
                            Learn more lewis acids and bases
                            <i class="bi bi-link"></i>
                        </a>
                    </p>
                </div>
                <h5 class="red">Chemical software</h5>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        With our approach to quantum biochemistry anyone with a home computer can do quantum calculations for research, education or personal interest.
                        You don’t need a supercomputer and a whole team of IT experts.
                        That’s why we also have an article about the software that is available free of charge.
                    </p>
                </div>
                <div class="bg-body-tertiary rounded p-2 mb-2">
                    <p>
                        <a class="icon-link icon-link-hover" href="./chemicalsoftware.php">
                            Learn more about chemical software used for this reasearch
                            <i class="bi bi-link"></i>
                        </a>
                    </p>
                </div>
                <h5 class="red">Contact Information</h5>
                <div class="bg-body-tertiary rounded p-2">
                    <p>
                        <span class="fw-semibold">Contact Information</span>:
                        please feel free to contact me at <a href="mailto:info@quantumbiochemistry.org">info@quantumbiochemistry.org</a>.
                    </p>
                    <p>
                        I listen to any comments, remarks suggestions. I will try to answer any questions as good as I can.
                    </p>
                </div>
            </div>
            <div class="col-3 align-self-center">
                <figure class="figure">
                    <div style="height: 400px; width: 400px; position: relative; cursor:pointer;" class='viewer_3Dmoljs' data-href="./molecules/rosmaricine.xyz" data-type="xyz" data-backgroundcolor='0xffffff' data-style='stick' data-ui='false'>
                    </div>
                    <figcaption>
                        Rosmaricine is found in rosemary and has anti-inflamatory properties.
                    </figcaption>
                </figure>
            </div>
        </section>
        <?php makefooter() ?>
        <div>
</body>

</html>