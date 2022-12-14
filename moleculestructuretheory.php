<html>
<?php
include './helpers/head.php';
include './helpers/header.php';
include './helpers/footer.php';
?>

<head>
  <?php makehead();
  $page_nbr = $_GET["pagenbr"];
  ?>
  <title>Molecular Structure Theory</title>
</head>

<body class="container">
  <?php makeheader(); ?>
  <section class="row mt-5">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Molecular Structure Theory</li>
        </ol>
      </nav>
    </div>
  </section>
  <?php if ($page_nbr == 1) { ?>
    <section>
      <div class="card">
        <div class="card-body">
          <h2 class="std card-title">Introduction</h2>
          <p class="card-text">
            The <strong>electronic structure theory</strong> explains how to find an approximate solution
            to the <strong>electronic molecular wave-function</strong>.
            With this solution we can then calculate many useful chemical and physical properties of molecules.
            It is important to understand the mathematical and physical principles of the electronic structure theory.
            Only then you can think up a model and use the calculated results in your research.
            This section will highlight some of the most important aspects of electronic structure theory.
          </p>
          <p class="card-text">
            <strong>For a more complete explanation:</strong>
          <ol>
            <li>
              Professor Jack Simons has posted several interesting lectures about
              <a href="https://www.youtube.com/watch?v=Z5cq7JpsG8I&list=PLEq9ArCsv6EAwaZFY-7oyZCyce8VnxodZ" target="_blank"> electronic structure theory</a>.
            </li>
            <li>
              <a href="http://en.wikipedia.org/wiki/Book:Electronic_structure_methods" target="_blank">Electronic
                Structure Methods</a>
              is a Wikipedia book about electronic structure theory.
            </li>
            <li>
              For a comprehensive textbook on this subject please read: Attila Szabo and Neil S.Ostlund
              <a href="http://store.doverpublications.com/0486691861.html" target="_blank">Modern Quantum Chemistry</a>
              Introduction to Advanced Electronic Structure Theory Dover Publications Inc.; New edition edition(1 Jan 1996)
            </li>
          </ol>
          </p>
          <nav aria-label="Course navigation">
          <ul class="pagination justify-content-evenly pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=2">Next : The adiabatic approximation</a></li>
          </ul>
        </nav>
        </div>
      </div>
    </section>
  <?php } elseif ($page_nbr == 2) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class="std card-title">The adiabatic approximation : The motion of the nuclei and the electrons don't influence one another</h2>
        <p class="card-text">
          The mass of nuclei is much higher than the mass of the electrons. As a result the motion of the
          electrons changes immediately
          when the nuclei change position but the nuclei will not adapt their position as fast when the
          electrons change their position. Consequently we assume the electronic wave-function only depends on the
          fixed positions of the nucle??.
        </p>
        <p class="card-text">
        <p>We can thus split the molecular Hamilonian in an electronic part and a nuclear part:</p>
        <p>
          <strong>The electronic hamiltonian is:</strong>
        </p>
        <div class="equation">
          <img class="img-responsive" alt="Born Oppenheimer Hamilonian" src="../images/electronichamiltonian.gif" />.
        </div>
        <p>
          <strong>The nuclear part is :</strong>
        </p>
        <p>It is the contribution of the electrostatic foreces between the nucle??.</p>
        <div class="equation">
          <img class="img-responsive" alt="Nuclear repulsion term" src="../images/nuclearrepulsion.gif" />
        </div>
        <p>
          The sum of these two terms is the hamitonian operator <strong>H</strong> in the equation
          <strong>H&psi; = E&psi; </strong>,
          and <strong>&psi;</strong> and <strong>E</strong> are unknown.
        </p>
        </p>
        <p class="card-text">
        <p><strong>This is also known as the Born-Oppenheimer approximation:</strong></p>
        <p>
          We only need to find a solution for the electronic part of the wave-function and the positions of the nuclei are chosen positions.
        </p>
        <p>
          If our model represents a system in equilibrium then the nuclei have a position corresponding
          to their average position.
          The average nuclear position can be determined experimentally.
          This average position will most likely correspond to the ground-state.
        </p>
        <p>
          When we think up a model we should use a set of nuclear positions that have some scientific
          justification.
          We can use the nuclear positions obtained from experiment.
          Alternatively we can try to calculate the nuclear positions that correspond to energy minima.
        </p>
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=1">Previous : Introduction</a></li>
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=3">Next : Energy and wave function of a molecule</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <?php } elseif ($page_nbr == 3) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class="std card-title">The time independent energy and wave-function for a molecule</h2>
        <p class="card-text">
          In <a href="http://en.wikipedia.org/wiki/Classical_mechanics" target="_blank">classical mechanics</a>
          we describe a model as:
        <ol>
          <li>
            a trajectory (also called an orbit) for the comprising particles
          </li>
          <li>
            the energy of the comprising particles.
          </li>
        </ol>
        From the trajectory and the energy we can then calculate various properties that we find useful.
        <div>
          In <a href="http://en.wikipedia.org/wiki/Quantum_mechanics" target="_blank">quantum mechanics</a>
          the wave-function is the logical analogue for the trajectory.
        </div>
        </p>
        <p class="card-text">
          We consider models that consist of moving electrons and atomic nuclei (a gas of electrons and atomic nuclei).
          Any molecule can thus be modeled as a gas of electrons and atomic nuclei and assume the total energy is the
          sum of :
        <ol>
          <li>the kinetic energy of the electrons,</li>
          <li>the kinetic energy of the nuclei,</li>
          <li>the potential energy due the electrostatic forces between the nuclei,</li>
          <li>the potential energy due to the electrostatic forces between the electrons,</li>
          <li>the potential energy due to the electrostatic forces between the electrons and the nuclei.</li>
        </ol>
        <div>We neglect other terms like dipole interactions.</div>
        </p>
        <p class="card-text">
          With this in mind we can write down a general expression for the time independent Schr??dinger
          equation for molecules.
        <div class="equation">
          <strong>H&psi; = E&psi;</strong>
        </div>
        <p>
          where :
        </p>
        <ol>
          <li> <strong>&psi;</strong> is the unknown molecular wave-function</li>
          <li> <strong>E</strong> the unknown energy and</li>
          <li><strong>H</strong> the molecular Hamiltonian.</li>
        </ol>
        </p>
        <p class="card-text">
          The hamiltonian
          <strong>H</strong> for a model with i(1 &rarr; N) electrons and A (1 &rarr; M ) nulce?? is:
        <div class="equation">
          <img alt="Molecular Hamiltonian" src="../images/molecularhamiltonian.gif" />
        </div>
        <ol>
          <li>Z<strong class="SubScript">A</strong> is the nuclear charge of the Ath atom</li>
          <li>
            <img alt="Laplacian" src="../images/laplacianelectrons.gif" /> is the
            <a href="http://en.wikipedia.org/wiki/Laplace_operator" target="_blank">Laplacian</a>
            for
            the ith
            electron
          </li>
          <li>
            <img alt="Laplacian" src="../images/laplaciannuclei.gif" />is the
            <a href="http://en.wikipedia.org/wiki/Laplace_operator" target="_blank">Laplacian</a>
            for the nuclei
          </li>
          <li>
            R<strong class="SubScript">AB</strong> is the distance between the nuclei
          </li>
          <li>
            r<strong class="SubScript">ij</strong> is the distance between the electrons
          </li>
          <li>
            r<strong class="SubScript">iA</strong> the distance between an electron and a nucleus
          </li>
        </ol>
        </p>
        <p class="card-text">
          Currently it is impossible to find an exact mathematical solution to such a differential
          equation.
          Scientists found an approximate solution for the molecular wave-function by using various
          physical
          and mathematical principles. In de sequel
          we explain what you need to understand in order to think up a model and to analyse the
          calculated results.
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=2">Previous : The adiabatic approximation</a></li>
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=4">Next : Solving the Schr??dinger equation for molecule</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <?php } elseif ($page_nbr == 4) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class="std card-title">We can calculate an approximate solution to the Schr??dinger Equation</h2>
        <p class="card-text">
          Even with only the electronic Hamiltonian it is still not possible to find an exact solution to
          the Schr??dinger
          equation. Fortunately we can find an approximate solution by making use of
          <a href="http://en.wikipedia.org/wiki/Calculus_of_variations" target="_blank">functional variation</a>.
        </p>
        <p class="card-text"><strong>The variation principle states :</strong> The expectation value of the Hamiltonian is an
          upper bound
          to the exact ground state energy for a normalized wave-function that satisfies the correct
          boundary conditions.
          We can write this symbolically as:
          <img class="img-responsive" alt="Variation Principle" src="../images/variationprinciple.gif" />
        </p>
        <p class="card-text">
          The electronic energy
          <strong>E<span class="SubScript">0</span></strong> is the expectation value of the electronic
          Hamiltonian.
          The wave-function then becomes a variable on which the energy depends. Mathematicians say the
          wave-function is a functional of the energy <strong>E<span class="SubScript">0</span></strong>.
        </p>
        <p class="card-text">
          There is a procedure to obtain a wave-function that corresponds to the minimum of the energy.
          This wave-function will be
          an approximation to the real wave-function. Much scientific research has been done on this
          subject. Various
          methods exist that give good approximate wave-functions.
        </p>
        <p class="card-text">
          The Hartree-Fock approximation uses the variation principle to obtain a wave-function and an
          energy. The Hartree-Fock approximation
          consists of two distinct methods:
        <ul>
          <li>Hartree-Fock Roothaan-Hall restricted closed shell method</li>
          <li>Hartree-Fock Pople-Nesbet unrestricted open shell method</li>
        </ul>
        </p>
        <p class="card-text">
          The
          <a href="http://en.wikipedia.org/wiki/Perturbation_theory_(quantum_mechanics)" target="_blank"> Rayleigh-Schr??dinger perturbation theory</a>
          &nbsp; and
          <a href="http://en.wikipedia.org/wiki/Configuration_interaction" target="_blank"> configuration interaction</a>
          &nbsp; allow us to further improve the Hartree-Fock approximation.
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=3">Previous : Energy and wave function for a molecule</a></li>
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=5">Next : The Hartree-Fock approximation</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <?php } elseif ($page_nbr == 5) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class="std card-title">The Hartree-Fock approximation:</h2>
        <p class="card-text">
          This method is the most basic of the methods used with electronic structure calculations.
          This method can be useful in qualitative and explorative research.
          It is also the starting point for more accurate methods which will be discussed later.
          Because of this it is important to understand some of the basic principles and assumptions
          that underlie this method.
        </p>
        <h3 class="card-subtitle">Step 1</h3>
        <p class="card-text">
        <div>
          The Hartree-Fock method uses the variation principle and Lagrange's method of undetermined
          multipliers to find a solution
          for the electronic molecular Schr??dinger equation. This procedure results in a set of
          integro
          differential
          equations for the spin orbitals where the orbital energy &epsilon;<span class="SubScript">a</span>
          with spin orbital &psi;<span class="SubScript">a</span>(i) becomes:
        </div>
        <div>
          <!--<img alt="Intro" src="../../images/electronicstructuretheory1.png" height="814" width="570" />-->
          <img alt="spin orbital times the orbital energy" src="../images/epspsi.gif" />
          <p>=</p>
          <img alt="Hartree Fock kinetic energy term" src="../images/hf1.gif" /> (1)
          <p> + </p>
          <img alt="Hartree Fock electron coulomb potential" src="../images/hf2.gif" /> (2)
          <p> - </p>
          <img alt="Hartree Fock exchange terms" src="../images/hf3.gif" /> (3)
          <ol>
            <li class="item">A to K nuclei</li>
            <li class="item">1,...,i,j,...,n electrons</li>
            <li class="item">a,b,...,k spin orbitals</li>
            <li class="item">r<span class="SubScript">ij</span> is the distance between two electrons</li>
            <li class="item">r<span class="SubScript">iA</span> is the distance between the ith electron and the Ath nucleus</li>
            <li class="item"><img class="img-responsive" alt="Laplacian" src="../images/laplacianelectrons.gif" /> is the laplacian for the ith electron</li>
          </ol>
        </div>
        </p>
        <h3 class="card-subtitle">Step 2</h3>
        <p class="card-text">
        <div>We can write the electronic wave-function as a single determinant. This determinant is
          then
          called a Slater determinant.</div>
        <img alt="Slater determinant" src="../images/slater.gif" />
        <div>
          This is a Slater determinant for N electrons represented by i ??? k functions. &psi;<span class="SubScript">i</span>(i)
          is a one electron spin orbital. This one electron spin orbital is the product of two
          functions,
          a function
          that depends on the spatial (x,y,z) positions of the electron and a second function that
          depends on the spin
          of the electron. This is why we call it a spin orbital.
        </div>
        <div>
          The spin orbitals were introduced to incorporate the Pauli exclusion principle into the
          wave-function. Notice that the electronic
          Schr??dinger equation does not depend on spin, as a consequence the solution of this
          equation
          only depends
          on the spatial coordinates.
        </div>
        </p>
        <h3 class="card-subtitle">Step 3</h3>
        <p class="card-text">
        <div>
          The variation principle states that the energy is a functional of the ground-state wave
          function. We can use the slater determinant
          as a trail function. The slater determinant is substituted for &Psi;<span class="SubScript">0</span>in
          equation
        </div>
        <img alt="Variation Principle" src="../images/variationprinciple.gif" />
        <div>
          Every function &psi;<span class="SubScript">a</span>(i) can be represented as a linear
          combination of known
          basis functions &theta;<span class="SubScript">&micro;</span>
        </div>
        <img alt="tt" src="../images/orbitalexpansion.gif" />
        <div>
          We then change the value of the expansion coefficients C<span class="SubScript">&micro;i</span>
          until we
          find a minimum value for E<span class="SubScript">0</span>. The resulting slater
          determinant is
          the best
          possible approximation to the electronic wave-function.
        </div>
        <div>
          We impose a set of constraints on the possible solutions by using a Slater determinant as a
          trail function. These constraints
          correspond to the following assumptions:
        </div>
        <ol>
          <li> Every electron moves in its own orbit, &psi;<span class="SubScript">a</span>(i) is a
            one
            electron wave-function.</li>

          <li>The one electron orbitals must to be orthogonal.</li>

          <li>The molecular wave function vanishes when the positions (x,y,z) move to infinity.</li>

          <li>
            <div>
              The motion of the electrons with parallel spins is correlated. The use of a Slater
              determinant introduces terms that account
              for the repulsion between electrons of parallel spin. You can see this by
              considering
              the following.
              The probability of finding electron 1 at position 1 , electron 2 at position 2 , ???,
              and
              electron
              n at position n can be written down like:
            </div>
            <img class="equation" alt="Probability of finding an electron on a point in space" src="../images/probability.gif" />.
            <p>
              When we use the Slater determinant for wave-function
            </p>
            <img class="equation" alt="Molecular wave function" src="../images/function.gif" />
            <p>
              this probability is not just the product of the probabilities of finding electron 1
              at
              position 1, electron 2 at position
              2, ???, electron n at position n. The expansion of the determinant will give rise to
              exchange terms
            </p>
            <img class="equation" alt="Hartree-Fock exchange integrals" src="../images/hf3.gif" />
            <p>in the Hartree-Fock equations.</p>
          </li>

          <li>
            <p>A Slater determinant satisfies the <a href="http://en.wikipedia.org/wiki/Pauli_exclusion_principle" target="_blank">Pauli exclusion principle</a>.</p>
            <p>The Pauli exclusion Principle states that two electrons of equal spin cannot occupy
              the
              same oribtal.</p>
            <p>When 2 electrons occupy the same spin orbital the Slater determinant vanishes.</p>
            <p>Thus a Slater determinant is a way of imposing the Pauli exclusion principle on any
              possible solution
              of the Hartree-Fock equations.</p>
            <p>
              The molecular Schr??dinger equation does not include any term that refers to the
              Pauli
              exclusion principle, so the use of
              a Slater determinant is the only way we reckon with the Pauli exclusion principle.
            </p>
          </li>

          <li>
            <p>
              The Hartree-Fock method assumes electrons move in the mean field of all the other
              electrons.
            </p>
            <p>
              The Hartree-Fock equations are nonlinear thus we must have trial spin functions for
              all
              electrons to find the orbital energy
              and the spin function for a specific electron.
            </p>
            <p>
              We start with an initial guess for the spin functions and use these guessed
              functions
              to calculate a new set of spin functions.
              Then we reintroduce these newly calculated spin functions into the Hartree-Fock
              equation to get an
              even better set. We then repeat this procedure until we obtain some desired
              convergence. This is
              the Self consistent field procedure (SCF procedure).
            </p>
            <p>
              Unfortunately this assumption allows that any two electrons with opposite spin come
              infinitely close to one another. This
              is a major shortcoming of the Hartree-Fock approximation. Methods like MP2 of CI
              that
              expand on the
              Hartree-Fock approximation correct for this.
            </p>
          </li>

          <li>
            <p>
              We need to make a intelligent initial guess for the one-electron orbitals.
            </p>
            <p>
              Any function can be expanded as a linear combination of basis functions. So we
              expand a
              one-electron orbital as a linear
              combination of K atomic orbitals.
            </p>
            <img class="equation" alt="Molecular orbital as a linear combination of atomic orbitals" src="../images/orbitalexpansion.gif" />
            <p>
              If the basis is complete (K ??? &infin;) the one electron orbital will be exact.
            </p>
            <p>
              The coefficients C<span class="SubScript">&micro;i</span> are numerical parameters
              to
              be found iteratively
              with the SCF procedure.
            </p>
            <p>
              The functions &theta;<span class="SubScript">&micro;</span> are atomic orbitals.
            </p>
            <p>
              These functions are centered on the position of an atomic nucleus part of the
              molecule.
            </p>
            <p>
              A lot of research has been done on what functions we can use as basis functions. A
              set
              of functions is called a basis set
              and every basis set has a code name. Many basis sets have been documented in
              scientific
              literature,these
              functions often are combinations of gaussion primitives.
            </p>
            <img class="equation" alt="gaussian terms used to define an atomic orbital" src="../images/gaussianexpansion.gif" />
            <p>
              The terms a,b,c control angular momentum so that L = a+b+c with L &epsilon; {0,1,2} and ?? is a coefficient that
              controls the size of the atomic orbital. N is a normalization constant.
            </p>
            <p>
              We use a computer program to solve the Hartree-Fock equations. The choice of a
              basis
              set is a trade-off between computational
              cost and accuracy. The more complete the basis and the larger K the higher the
              computational cost
              and the higher the accuracy. The size of the models and the accuracy of the
              calculations are limited
              by the computational speed of the hardware. Nonetheless great advances in processor
              speed of commercially
              available computers allow us to obtain a reasonable accuracy on many chemically
              relevant models.
            </p>
          </li>
          <li>
            <div>The Rothaan-Hall and the Pople-Nesbeth equations</div>
            <div>
              <p>A set of spin orbitals can be written like:</p>
              <img alt="closed shell spin orbital" src="../images/spinorbitals1.gif" />.
              <p>
                Here two electrons of opposite spin occupy the same spacial orbital. When we
                use
                electron orbitals like these we talk about
                the Rothaan-Hall equations. These equations can only be used to describe closed
                shell electron
                configurations because two electron are forced to reside in the same spatial
                orbital.
              </p>
            </div>
            <div>
              <p>Alternatively we can write a spin orbital like: </p>
              <img alt="open shell spin orbitals" src="../images/spinorbitals2.gif" />.
              <p>
                Here each electron has its own spacial orbital. When we use electron orbitals
                like
                these we talk about the Pople-Nestbeth
                equations. Since each electron has his own spacial orbital these equations can
                be
                used to describe
                open shell electron configurations. The Pople-Nesbeth equations result in one
                set
                of equations
                for the alpha eletrons and a second set of equations for the beta electrons.
                These
                equations
                can be used to represent open shell electron configurations.
              </p>
            </div>
          </li>
        </ol>
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=4">Back : Solving the Schr??dinger equation for molecules</a></li>
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=6">Next : Perturbation theory and configuration interaction</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <?php } elseif ($page_nbr == 6) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class="std card-title">The M??ller-Plesset perturbation theory and configuration interaction:</h2>
        <p class="card-text">
          The weakness of the Hartree-Fock method is that it allows electrons of unparallel spin to move
          independent on one another.
          This is wrong so any solution to the Hartee-Fock equations has a build-in error.
        </p>
        <p class="card-text">
          <a href="http://en.wikipedia.org/wiki/M%C3%B8ller%E2%80%93Plesset_perturbation_theory" target="_blank">Perturbation theory</a> and
          <a href="http://en.wikipedia.org/wiki/Configuration_interaction" target="_blank">configuration
            interaction</a> are methods to obtain a correction to the Hartree???Fock equations.
          These methods are based on the principle that a molecular wave function can be represented by a
          linear combination of several Slater determinants.
        </p>
        <p class="card-text">
          The Hartee-Fock procedure produces a set of occupied spin orbitals it also produces a set of
          unoccupied spin orbitals. These
          unoccupied spin orbitals can then be used to formulate more Slater determinants. Any molecular
          wave
          function
          can also be represented by a series of Slater determinants. Interaction terms between the one
          electron orbitals
          of these distinct Slater determinants are corrections to the solutions of the Hartree-Fock
          equations.
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=5">Back : The Hartree-Fock approximation</a></li>
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=7">Next : The density functional theory</a></li>
          </ul>
        </nav>
      </div>
    </div>

  <?php } elseif ($page_nbr == 7) { ?>
    <div class="card">
      <div class="card-body">
        <h2 class=" std card-title">The density functional theory:</h2>
        <p class="card-text">
          The Density Functional Theory departs from the principle that the electrons density
          determines all properties of a model.
          Hence the electron density determines all properties of a gas of electrons and atomic
          nuclei.
        </p>
        <p class="card-text">
          <strong>The Hohenberg-Kohn theorems</strong> apply to such a system. These theorems are the
          basis of the density functional theory.
        </p>
        <p class="card-text">
          <strong>Theorem one</strong> states that the external potential V<span class="SubScript">ext</span>(r)
          and the total energy is a unique functional of the electron density &rho;(r) r is the spacial
          position vector.
          The energy functional is :
        </p>
        <img class="equation" alt="Energy functional" src="../images/EnergyFunctional.gif" />
        <p class="card-text">
          &rho;(r) is the electron density on position r. F(&rho;(r)) is an unknown potential that
          depends only on the electron density.
        </p>
        <p class="card-text">
          <strong>Theorem two</strong> states that the ground state electron density that minimizes
          E(&rho;(r)) is the
          exact ground state density. The ground state electron density and hence all properties of the
          model can be obtain with the variation theorem.
        </p>
        <p class="card-text">
          In density functional theory the electron density can be calculated with the Kohn-Sham
          equations. These equations map a gas
          of strongly interacting particles on a gas of non-interacting particles that move in a
          effective on particle
          potential. The Kohn Sham equations are derived from the Hohenberg-Kohn theorems.
        </p>
        <p class="card-text">The Kohn-Sham equations are</p>
        <img class="equation" alt="Kohn-Sham equations" src="../images/Kohn-Sham.gif" />
        <p class="card-text">
          V<span class="SubScript">eff</span>(r) is the effective potential and &Phi;(i) are the
          Kohn-Sham oprbitals.
          The electron density can be calculated from the Kohn-Sham orbitals.
        </p>
        <img class="equation" alt="Kohn-Sham electron density" src="../images/KohnShamElectronDensity.gif" />
        <p class="card-text">The effective potential is </p>
        <img class="equation" alt="Kohn-Sham effective potential" src="../images/Kohn-Sham%20effective%20potential.gif" />
        <p class="card-text">The first term V<span class="SubScript">ext</span>(r) is the external potential due to the atomic nuclei.</p>
        <p class="card-text">The second term is the potential an electron experiences from the other electrons.</p>
        <img class="equation" alt="Kohn-Sham electron potential" src="../images/KohnShamCoulombPotential.gif" />
        <p class="card-text">The third term is the exchange correlation potential.</p>
        <img class="equation" alt="Kohn-Sham exchange correlation potential" src="../images/Kohn-Sham%20Exchange%20Correlation.gif" />
        <p lass="card-text">
          The exchange correlation potential cannot be determined analytical. A lot of research has been
          done and is been done to find
          an appropriate expression for the exchange correlation potential.
          A popular exchange-correlation potential is the <a href="http://en.wikipedia.org/wiki/Hybrid_functional" target="_blank">B3LYP</a> potential.
        </p>
        <nav aria-label="Course navigation">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item"><a class="page-link" href="./moleculestructuretheory.php?pagenbr=6">Back : Perturbation theory and configuration interaction</a></li>
          </ul>
        </nav>
      </div>
    </div>
  <?php } ?>
  <footer class="row mt-2 mb-5">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">References :</h3>
          <ul class="card-text">
            <li>Modern Quantum Chemistry: Introduction to Advanced Electronic Structure Theory Attila Szabo, Neil S. Ostlund</li>
            <li>R.G. PArr, W. Yang, Density Functional Theory of Atoms and Molecules, Oxford University Press, New York, 1989</li>
          </ul>
        </div>
      </div>
    </div>
    <?php makefooter() ?>
  </footer>
</body>

</html>