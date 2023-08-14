<html>
<?php 
    include './helpers/head.php'; 
    include './helpers/header.php';
    include './helpers/footer.php';
?>
<head>
    <?php
    makehead();
    ?>
    <title>Quantum Biochemistry</title>
</head>
<body>
<div class="container">   
    <header class="row mb-3">
        <div class="col-12 text-center">
            <?php makeheader() ?>
        </div>
    </header>
    <section class="row align-items-end mb-3">
        <div class="col-9">
            <h4 class="olive mb-4">Why Quantumbiochemistry.org ?</h4>
            <div class="bg-body-tertiary rounded p-2">
                <p>
                    We do not aim to define what <span class="fw-semibold">quantum biochemistry</span> really is. 
                    The goal of this site is to demonstrate how quantum mechanics can contribute to the understanding of biochemistry,
                    molecular biology and biology. 
                </p>
                <p>
                    We do not yet cover every possible use. 
                    Instead we chose to limit ourselves to <span class="fw-semibold">chemical bonding and reactivity</span>,
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
        </div>
        <div class="col-3">
            <img src="./images/intro/intro-schema.svg" class="img-fluid pt-4" alt="introduction"> 
        </div>
    </section>
    <section class="row">
        <div class="col">
            <h4 class="olive mb-4">In a nutshell :</h4>
            <h5 class="red">Molecular Structure Theory</h5>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    The <span class="fw-semibold">molecular structure theory</span> is an application of the quantum theory. 
                    It defines <span class="fw-semibold">the Schrödinger equation</span> for a gas of electrons and nucleï. 
                    By the way it does not assume that atoms exist.
                </p>
                <p>
                    The solution of this differential equation is a mathematical representation of the molecule called <span class="fw-semibold">the molecular wave function</span>.
                    In practice we will only calculate the <span class="fw-semibold">electronic wave function</span> of the molecule. The nucleï are assumed to be in a fixed position.
                </p>
                <p>
                    One must use <span class="fw-semibold">advanced mathematics</span> to obtain that wave function and we obtain only an <span class="fw-semibold">approximation</span> of the real electronic wave function.
                    Be aware that the approximation could be not good enough and lead to wrong conclusions.
                </p>
                <p>
                    We provide a <a href="./moleculestructuretheory.php?pagenbr=1">summary on molecular structure theory</a> with links to further reading for those who want to get into the details. 
                    The tutorial provides insight into the mathematical methods, the assumptions and approximations that have been made. 
                </p>
            </div>
            <h5 class="red">Lewis acids and bases</h5>
            <div  class="bg-body-tertiary rounded p-2 mb-2">
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
                    Next we provide an <a href="./chemicalreactivity.php">article on chemical reactivity and Lewis acid base reactions</a> we explain how chemical reactivity is rooted in molecular structure theory.
                    This is a must read otherwise you will not able to understand or method.
                </p>
            </div>
            <h5 class="red">Chemical software</h5>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                 <p>
                    With our approach to quantum biochemistry anyone with a home computer can do quantum calculations for research, education or personal interest.
                    You don’t need a supercomputer and a whole team of IT experts.
                    That’s why we also have an <a href="./chemicalsoftware.php">article about the software that is available free of charge</a>. 
                 </p>

            </div>
            <h5 class="red">Contact Information</h5>
            <div class="bg-body-tertiary rounded p-2">
                <p>
                    <span class="fw-semibold">Contact Information</span>: 
                    please feel free to contact us at <a href="mailto:info@quantumbiochemistry.org">info@quantumbiochemistry.org</a>.
                </p>
                <p>
                    We are listening to any comments, remarks suggestions. We will try to answer any questions as good as we can.
                </p>
            </div>
        </div>
    </section>
    <?php makefooter() ?>
<div>
</body>
</html>