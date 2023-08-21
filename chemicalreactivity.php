<!DOCTYPE html>
<html lang="en">
<?php include './helpers/helpers-include.php'; ?>

<head>
    <?php makehead(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/3Dmol/2.0.1/3Dmol-min.js"></script>
    <script src="https://3Dmol.org/build/3Dmol.ui-min.js"></script>  
    <title>Lewis Acids and Bases</title>
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
        <?php echo make_main_menu()?>
      </div>
    </section>
    <section class="row mb-3">
        <div class="col">
            <h4 class="olive mb-2">What is a chemical reaction ?</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>A chemical reaction is a clearly observable change in a substance that is typical for that substance.</p>
                <p>
                    When a substance undergoes a chemical reaction then there will be a rearrangement of the nuclei and the electrons.
                    The rearrangements that are possible are typical for the substance.
                    Because of this there is a theory that relates the chemical structure to the possible chemical reactions.
                </p>
            </div>
            <h4 class="olive mb-2">The role of lewis acid and base reactions in biochemistry and molecular biology</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    A Lewis acid is a molecule that can accept an electron pair from another molecule the Lewis base.
                    Most chemical reactions in biology are Lewis acid-base reactions. Biologists, biochemists, bioengineers need to understand the reactions
                    between metabolites.
                </p>
                <p>
                    In biological organisms metabolites react often in the presence of macromolecules (like polypeptides, carbohydrates, lipids,
                    DNA, ... ) water and minerals. These substances act as chemical catalysis or as inhibitors.
                </p>
                <p>
                    Biological organisms manage their chemical reactions by means of catalysis and inhibition.
                    Through evolution they developed catalytic mechanisms that change the reaction mechanism of a Lewis acid and base reaction.
                    They control events even at the subatomic level.
                    This way they can control when, where and how fast the reaction occurs and what products are formed.
                    The information on how to do that is encoded on DNA the molecular carrier of genetic material.
                </p>
                <p>The Lewis acid-base theory will enable us to understand the way macromolecules, water and ions interact.</p>
            </div>
            <h4 class="olive mb-2">Quantum chemical principles on Lewis acid-base reactions</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>Quantum chemistry allows us to make a comprehensive theoretical analysis on the mechanisms that govern a Lewis acid-base reaction.</p>
                <p> The rate at which the reaction occurs and the nature of the products depends on the 
                    <a class="link-success" href="https://en.wikipedia.org/wiki/Reaction_mechanism" target="blank"> reaction mechanism</a>.</p>
                <p>
                    There are essentially two ways a Lewis acid reacts with a Lewis base, the reaction can be <strong>charge controlled</strong>
                    or it can be <strong>frontier controlled</strong>.
                    These principles will be important at the first onset of a reaction. At a later phase
                    new bonds appear and existing bonds disappear and a rearrangement of the nuclear positions can occur. One
                    or more reaction intermediates can exist in small quantities and the properties of these intermediates further determine
                    the course of the reaction.
                </p>
                <p>
                    When a reaction is <strong>charge controlled</strong>the reaction will depend mostly on the coulomb charge due the electron cloud of the
                    reacting molecules.
                    When the energy gap between the highest occupied molecular orbital and the lowest unoccupied molecular orbital is large the reaction will be charge controlled.
                    In this case the molecular <strong>electrostatic potential</strong> will provide information on how the Lewis acid
                    can accept an electron from the Lewis base.
                    The <strong>molecular electrostatic potential</strong> at point p(x,y,z) is the electrostatic force acting on a positive point
                    charge located at this point p through the electron charge cloud.
                </p>
                <p>
                    A frontier controlled reaction will depend on the overlap between the <strong>lowest unoccupied molecular orbital (LUMO)</strong>
                    of the Lewis acid and the <strong>highest occupied molecular orbital (HOMO)</strong> of the Lewis base.
                    When the energy gap between the LUMO and the HOMO is small a reaction will be <strong>frontier controlled</strong>.
                    The shape of the LUMO and the HOMO determine the possibilities for overlap and thus determines the initial course of the reaction.
                </p>
                <p>
                    <a class="link-success" href="https://en.wikipedia.org/wiki/Kenichi_Fukui" target="blank"> Kenichi Fukui</a>
                    originally proposed the frontier molecular orbital theory.
                    See G. Klopman, Chemical Reactivity and Reactions Paths , p23-50 Wiley, New York, 1974. Fukui modeled a charge transfer by considering 3 situations.
                </p>
                <ul>
                    <li>Lewis Acid A and Lewis Base B are both in their ground state, no charge transfer occurs.</li>
                    <li>Lewis base B has one electron excited, Lewis acid A is in its ground state.</li>
                    <li>Lewis base B has transferred one electron to Lewis acid A.</li>
                </ul>
                <p>
                    Each situation can be represented by a Slater determinant and a Hamiltonian can be defined for that system. As a consequence
                    one can apply the variational principle to the model. By analysing the resulting equation he could explain
                    the principle of charge controlled and frontier controlled reactions.
                </p>
                <p>
                    Independently <a class="link-success" href="https://en.wikipedia.org/wiki/Gilles_Klopman" target="blank">Gilles Klopman</a> proposed the generalised perturbation theory of chemical reactivity. This theory explains the
                    principles about Lewis acid-base reactions outlined here.
                    A comprehensive text on this subject can be found in G. Klopman, Chemical Reactivity and Reactions Paths , p55 Wiley, New York, 1974.
                </p>
                <p>
                    <a class="link-success" href="https://en.wikipedia.org/wiki/Ralph_Pearson" target="blank">Raplh G. Pearson</a> first explained the Hard and Soft Acis and Bases Principle. See Ralph G. Pearson "Hard and Soft Acids and
                    Bases" Journal of the american chemical society Vol 85, 22 November 20, 1963.
                </p>
                <p>
                    The Hohenberg and Kohn theorem allows us to write down an equation for the change of one ground state to another. Yan and
                    Evans were able show that the conclusions drawn from this equation can be linked to the frontier molecular
                    orbital theory. See Yan Li and Jeremy N.S. Evens "The Fukui Function: A key concept linking frontier molecular
                    orbital theory and the Hard-Soft-Acid-Base principle" J. Am. Chem. Soc. 1995, 117, 7756-7759.
                </p>
            </div>
            <h4 class="olive mb-2">The calculation of the molecular electrostatic potential</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    The molecular electrostatic potential ( M.E.P.) is the coulombic interaction energy between a positive charge represented
                    by an empty 1s orbital and 'rigid' molecule. The molecule is rigid because its properties do not change because
                    of the 1s orbital.
                </p>
                <p>
                    The M.E.P. is use to evaluate the electrostatic term that appears in Klopman's expression for the interaction energy between
                    a Lewis acid and a Lewis base. The molecular electrostatic potential can thus be used to study charge controlled
                    Lewis acid-base reactions.
                </p>
                <p>
                    <p>The M.E.P. is calculated as</p>
                    <img class="img-responsive equation" alt="molecular electrostatic potential" src="../images/molecular%20electrostatic%20potential.gif" />
                    <p>
                        The positive charge is located at position r(x,y,z), &rho;(r') is the electron density of the molecule at
                        point r'(x,y,z), ZA is the nuclear charge of atom A , |r(x,y,z) - r'(x,y,z)| is the distance between
                        position r and r'and |rA-r| is the distance between Atom A and r(x,y,z), the position of the positive charge.
                    </p>
                </p>
                <p>
                    <div class="d-flex flex-row">
                        <figure class="figure">
                            <img src="./images/chemicalreactivity/acetic acid mep.jpeg" class="figure-img img-fluid rounded" alt="molecular electrostatic potential of acetic acid">
                            <figcaption class="figure-caption text-center">molecular electrostatic potential of acetic acid (red color is negative charge)</figcaption>
                        </figure>
                        <figure class="figure">
                            <img src="./images/chemicalreactivity/acetate base.jpeg" class="figure-img img-fluid rounded" alt="molecular electrostatic potential of acetate">
                            <figcaption class="figure-caption text-center">molecular electrostatic potential of acetate (red color is negative charge)</figcaption>
                        </figure>
                    </div>
                </p>
            </div>
            <h4 class="olive mb-2">Fitting atomic charges to the molecular electrostatic potential</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    It is possible to attribute partial charges to the atoms of a molecule that fit its M.E.P. . The M.E.P. is then evaluated
                    at several points on fused van der Waals spheres. The charges are chosen so that they depict as good as possible
                    the M.E.P. on these points. These charges can thus be used to evaluate the molecular electrostatic potential of the molecule.
                </p>
                <p>
                    <div class="d-flex flex-row">
                        <div class="w-50">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Atom</th>
                                        <th>Charge CHelpG</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>C1</th>
                                        <td>0.7636000</td>
                                    </tr>
                                    <tr>
                                        <th>C2</th>
                                        <td>-0.2530000</td>
                                    </tr>
                                    <tr>
                                        <th>O3</th>
                                        <td>-0.7659000</td>
                                    </tr>
                                    <tr>
                                        <th>O4</th>
                                        <td>-0.7603000</td>
                                    </tr>
                                    <tr>
                                        <th>H5</th>
                                        <td>0.0141000</td>
                                    </tr>
                                    <tr>
                                        <th>H6</th>
                                        <td>-0.0029000</td>
                                    </tr>
                                     <tr>
                                        <th>H7</th>
                                        <td>0.0042000</td>
                                    </tr>
                                </tbody>
                             </table>
                        </div>
                        <div class="w-50 ms-3">
                            <figure>
                                <div style="height: 270px; width: 500px; position: relative; cursor:pointer;" 
                                        class='viewer_3Dmoljs mb-2' 
                                        data-href="./molecules/acetate_structure.xyz"
                                        data-type="xyz"
                                        data-backgroundcolor='0xffffff' 
                                        data-style='stick' 
                                        data-ui='false'>
                                </div>
                                <figcaption>
                                    <cite>
                                        For 3D rendering read Nicholas Rego and David Koes 3Dmol.js: molecular visualization with WebGL
                                        Bioinformatics (2015) 31 (8): 1322-1324 doi:10.1093/bioinformatics/btu829
                                    </cite>
                                </figcaption>
                            </figure>
                            
                        </div>
                    </div>
                </p>
                <p>
                    <cite>
                        <strong>Further reading on this subject :</strong>
                        <ul>
                            <li>U.C.Singh, P.A.Kollman, J.Comput.Chem. 5, 129-145(1984)</li>
                            <li>L.E.Chirlain, M.M.Francl, J.Comput.Chem. 8, 894-905(1987)</li>
                            <li>R.J.Woods, M.Khalil, W.Pell, S.H.Moffatt, V.H.Smith, J.Comput.Chem. 11, 297-310(1990)</li>
                            <li>C.M.Breneman, K.B.Wiberg, J.Comput.Chem. 11, 361-373(1990)</li>
                            <li>K.M.Merz, J.Comput.Chem. 13, 749(1992)</li>
                            <li> M.A.Spackman, J.Comput.Chem. 17, 1-18(1996)</li>
                        </ul>
                    </cite>
                </p>  
            </div>
            <h4 class="olive mb-2">Frontier controlled reactions</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    R.S. Mulliken developed a systematic procedure to obtain maximum insight onto the LCAO MO wave function for a molecule. This
                    procedure can also be use to obtain insight into the HOMO and LUMO obtained from the LCAO MO wave functions.
                </p>
                <p>The procedure to obtain the mulliken population analysis for the HOMO and the LUMO is the following : </p>
                <ul>
                    <li>Calculate the mulliken populations analysis for the model molecule from its LCAO MO wave function.</li>
                    <li>To obtain the LUMO add 1 electron to the model and calculate the mulliken population analysis, then calculate the difference with the original model.</li>
                    <li>To obain the HOMO add 1 electron to the model and calculate the mulliken population analysis, then calculate the difference with the original model.</li>
                </ul>
            </div>
            <h4 class="olive mb-2">Interpretation of the reactivity indices in chemistry and biochemistry</h4>
            <div class="bg-body-tertiary rounded p-2 mb-2">
                <p>
                    The highest occupied molecular orbital of a molecule has the highest electron density located on the atom or atoms that act
                    as electron donors (Lewis bases). The lowest unoccupied molecular orbital has its highest density located
                    on the atom or atoms that will accept an electron pair. The same logic applies to the molecular electrostatic
                    potential. Both reactivity indices are complementary.
                </p>
                <p>
                        This information is valid only for the initial stage of the first step in the chemical reaction mechanism. When the reaction
                        mechanism involves intermediates that really exist than we can also calculate the HOMO and LUMO for these
                        molecules. The structure transition state is only a hypothetical molecule that in many cases will never exist.
                        Calculating the HOMO and the LUMO for these transition state may not be usefull. Additional evidence is needed
                        to prove usefullness of such calculations.
                </p>
                <p>Thus for simple reactions that involve only one step the HOMO and the LUMO calculated on the equilibrium structure are conclusive.</p>
                <p>
                    For reactions that involve several steps even if this is only a change in configuration the HOMO and the LUMO often are inconclusive.
                    Knowledge of intermediate states is necessary for these cases. In these cases the HOMO and the LUMO can
                    be helpfull to identify reasonable hypotheses for these reaction intermediates. This makes the HOMO and the
                    LUMO usefull in the study of enzymatic reaction mechanisms. They can also be used to understand the properties
                    of complex organic molecules that exist as secondary metabolites.
                </p>
            </div>
        </div>
    </section>
    <footer class="row">
      <div class="col">
        <p class="mb-2">
            <cite>
                <strong>
                    References
                </strong>
            </cite>
        </p>
        <div class="bg-body-tertiary rounded p-2 mb-2">
            <cite>
                <ul>
                    <li>Chemical Reactivity and Reaction Paths, Edited by Gilles Klopman, John Wiley &amp; Sons, 1974 </li>
                    <li>Electronic Population Analysis on LCOA-MO Molecular Wave Functions. I R.S. Mulliken Laboratory of Molecular Structure and
                        Spectra, Department of Physics, The University of Chicago, Chicago 37, Illinois The Journal of Chemical Physics
                        p1833 Volume 23, Number 10 October 1955
                    </li>
                    <li>
                        Electronic Population Analysis on LCOA-MO Molecular Wave Functions. II Overlap populations, bond orders, and covalent bond
                        energies R.S. Mulliken Laboratory of Molecular Strcuture and Spectra, Deparmtnet of Physics, The University of
                        Chicago, Chicago 37, Illinois The Journal of Chemical Physics p1841 Volume 23, Number 10 October 1955
                    </li>
                    <li>U.C.Singh, P.A.Kollman, J.Comput.Chem. 5, 129-145(1984)</li>
                    <li>L.E.Chirlain, M.M.Francl, J.Comput.Chem. 8, 894-905(1987)</li>
                    <li>R.J.Woods, M.Khalil, W.Pell, S.H.Moffatt, V.H.Smith,</li>
                    <li>J.Comput.Chem. 11, 297-310(1990)</li>
                    <li>C.M.Breneman, K.B.Wiberg, J.Comput.Chem. 11, 361-373(1990)</li>
                    <li>K.M.Merz, J.Comput.Chem. 13, 749(1992)</li>
                    <li>M.A.Spackman, J.Comput.Chem. 17, 1-18(1996)</li>
                    <li>W. Yang, W.J. Mortier, J. Am. Chem. Soc. 108(1986) 5708-5711.</li>
                </ul>
            </cite>
        </div>
      </div>
    </footer>
    <?php makefooter() ?>
</div>
</body>
</html>