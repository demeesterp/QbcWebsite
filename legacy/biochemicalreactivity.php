<html>
<?php
include './helpers/head.php';
include './helpers/header.php';
include './helpers/footer.php';
?>

<head>
    <?php makehead(); ?>
    <title>Biochemical Reactivity</title>
</head>

<body class="container">
    <?php makeheader(); ?>
    <section class="row mt-5">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bochemical Reactivity</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <section class="card">
                <section class="card-body">
                    <h2 class="std card-title">Hydrogen bonding :</h2>
                    <p class="card-text">
                    <p>
                        The Lewis acid-base principle allows us to understand most reactions between biological structures that scale between 10
                        and 0.1 nanometer.
                    </p>
                    <p>
                        The presence and the properties of hydrogen bonds are often directly linked to the macroscopic properties of biological substances
                        (e.g. hydrocarbons, proteins, nucleic acids). Hydrogen bonds often result in properties that
                        have economical value.
                    </p>
                    </p>
                    <p class="card-text">
                    <p>
                        <a href="http://pac.iupac.org/publications/pac/pdf/2011/pdf/8308x1637.pdf" target="_blank">The UIPAC(1) recommended definition</a> of hydrogen bond is
                        : The hydrogen bond is an attractive interaction between a hydrogen atom from a
                        molecule or a molecular fragment X–H in which X is more electronegative than H, and an atom
                        or a group of atoms in the same or a different molecule, in which there is evidence of bond
                        formation.
                    </p>
                    </p>
                    <p class="card-text">
                    <p>
                        The molecular electrostatic potential ( M.E.P.) is the coulombic interaction energy between a positive charge represented
                        by an empty 1s orbital and 'rigid' molecule. The molecule is rigid because its properties
                        do not change because of the 1s orbital.
                    </p>
                    <p>
                        The M.E.P. predicts the structure of the hydrogen bond very well. We calculated the M.E.P. for Hydrogen Fluoride, Formic
                        Acid, Boric Acid and Water with
                        <a href="http://www.msg.ameslab.gov/" target="_blank">GAMESS </a>
                        and
                        <a href="http://code.google.com/p/wxmacmolplt/" target="_blank">MacMolPlt</a>. These calculations show the usefulness of the M.E.P. A geometry optimization
                        using GAMESS allows us to calculate the structure of the h-bonded complex. We can use the
                        mulliken population analysis to evaluate the charge transfer upon h-bonding.
                    </p>
                    </p>
                    <p class="card-text">
                        <img class="intext" alt="M.E.P. for Adenosine" height="372" width="527" src="../moleculeimages/AMPMEP.png" />
                        <strong>The M.E.P. of the adenine part of adenosine</strong>
                    <p>
                        The M.E.P. was calculated using
                        <a href="http://www.msg.ameslab.gov/" target="_blank">GAMESS</a> and
                        <a href="http://code.google.com/p/wxmacmolplt/" target="_blank">MacMolPlt</a>
                    </p>
                    </p>
                </section>
            </section>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <section class="card">
                <section class="card-body">
                    <h2 class="std card-title">Hydrogen Bonding : Hydrogen Fluoride</h2>
                    <p class="card-text">
                    <p>
                        <a href="http://en.wikipedia.org/wiki/Hydrogen_fluoride" target="_blank">Hydrogen fluoride</a> has a boiling point of 19.74°C, it is extremely usefull as solvent.
                        The molecule is monomeric above 80°C, at a lower temperature the monomer HF is in equilibrium
                        with the hexamer HF6.
                    </p>
                    <p>
                        We calculated the equilibrium structure of the monomer, the dimer and the hexamer with electronic structure methods.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    HF monomer
                                </th>
                                <th>
                                    HF dimer (HF2)
                                </th>
                                <th>
                                    HF hexamer (HF6)
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="./reports/hydrogenfluoride/HF.cml" target="_blank">CML file</a>
                                </td>
                                <td>
                                    <a href="./reports/hydrogenfluoride/HF2.cml" target="_blank">CML file</a>
                                </td>
                                <td>
                                    <a href="./reports/hydrogenfluoride/HF6.cml" target="_blank">CML file</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/hydrogenfluoride/HF.inp" target="_blank">gamess input file</a>
                                </td>
                                <td>
                                    <a href="./reports/hydrogenfluoride/2HF.inp" target="_blank">gamess input file</a>
                                </td>
                                <td>
                                    <a href="./reports/hydrogenfluoride/6HF.inp" target="_blank">gamess input file</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        Use
                        <a href="http://avogadro.openmolecules.net/wiki/Main_Page" target="_blank">Avogadro</a> to read the CML files. Avogadro allows you to analyse molecular the geometry.
                        The .inp files are the gamess input files we used this allows you to reproduce the calculations
                        we have done.
                    </p>
                    </p>
                    <p class="card-text">
                        <img class="intext" alt="Molecular Electrostatic Potential for Hydrogen Fluoride" width="464" height="360" src="../moleculeimages/HFMEP.PNG" />
                    <p>
                        We calculated the molecular electrostatic potential (M.E.P.) for HF monomer using Gamess(1) and MacMolPlt(2). The results
                        are shown in the contourplot below. Positive contourlines are
                        <strong class="blue">blue</strong>,
                        <strong class="red">red</strong> lines are negative contourlines.
                    </p>
                    <p>
                        The Lewis acid will attack the Lewis base where the M.E.P. is the most negative. This will be true for chemical reactions
                        that are predominantly charge controlled. The formation of a hydrogen bond can thus be seen
                        as a Lewis acid-base reaction.
                    </p>
                    </p>
                    <p class="card-text">
                    <p>
                        Compare this result with the pictures below. These pictures show the structures of the HF dimer and the HF hexamer. The color
                        show the extend of charge transfer that happened upon hydrogen bonding. An atom with the
                        color red looses electron upon hydrogen binding, atoms colored bleu gain electrons upon binding.
                        If you hoover the mouse over an atom the tooltip shows the calculated values.
                    </p>
                    <p>
                        In vapor at temperatures above 80°C HF is a monomer at temperatures below 80°C the monomer is in equilibrium with a hexamer
                        (3). We calculated the equilibrium structure of the hexamer. The charge transfer was calculated
                        by comparing the atomic Mulliken charges of the hexamer and the dimer with the atomic Mulliken
                        charges on the HF monomer.
                    </p>
                    <p>
                        We calculate Mulliken charges with Hartree-Fock and MP2 methods because the molecular orbitals obtained from these methods
                        have an (approximate) physical meaning. The Kohn-Sham orbitals obtained from density functional
                        methods have no clear physial meaning.
                    </p>
                    <p>
                        The HF hydrogen bonded distance is 1.478 Angstrom for the hexamer and there is considerable charge transfer upon H-binding.
                        The length of the HF hydrogen bond of the dimer is 1.8 Angstrom and the charge transfer is
                        weak compared to the hexamer.
                    </p>
                    <p>
                    <p>
                        <strong> Hydrogen Fluoride dimer : charge transfer </strong>
                    <p> The colors range from
                        <strong class="blue">blue</strong> to
                        <strong class="red">red</strong>, the
                        <strong class="blue">blue</strong> atoms gained electrons, the
                        <strong class="red">red</strong> atoms lost electrons.
                    </p>
                    <img alt=" Hydrogen Fluoride dimer" src="./moleculeimages/HF2.jpg" />
                    </p>
                    <p>
                        <strong> Hydrogen Fluoride hexamer : charge transfer </strong>
                    <p> The colors range from
                        <strong class="blue">blue</strong> to
                        <strong class="red">red</strong>, the
                        <strong class="blue">blue</strong> atoms gained electrons, the
                        <strong class="red">red</strong> atoms lost electrons.
                    </p>
                    <img alt=" Hydrogen Fluoride hexamer" src="./moleculeimages/HF6.jpg" />
                    </p>
                    </p>
                    </p>
                </section>
            </section>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std card-title">Hydrogen Bonding : Boric Acid</h2>
                    <p class="card-text">
                    <p>
                        <a href="http://en.wikipedia.org/wiki/Boric_acid" target="_blank">Boric Acid</a>
                        Boric acid is manufactured on a large scale by the acidification of aqueous solutionq Borax.
                    </p>
                    <p>
                        We calculated the equilibrium structure of the monomer and the dimer and with electronic structure methods. In solid form
                        boric acid has a sheetlike structure ( like graphite ), it is a weak Lewis acid.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    B(OH)3 monomer
                                </th>
                                <th>
                                    B(OH)3 dimer
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="./reports/boricacid/boricacid.cml" target="_blank">CML file</a>
                                </td>
                                <td>
                                    <a href="./reports/boricacid/boricaciddimer.cml" target="_blank">CML file</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/boricacid/boricacid.inp" target="_blank">gamess input file</a>
                                </td>
                                <td>
                                    <a href="./reports/boricacid/boricaciddimer.inp" target="_blank">gamess input file</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        Use
                        <a href="http://avogadro.openmolecules.net/wiki/Main_Page" target="_blank">Avogadro</a> to read the CML files. Avogadro allows you to analyse molecular the geometry.
                        The .inp files are the gamess input files we used this allows you to reproduce the calculations
                        we have done.
                    </p>
                    </p>
                    <p class="card-text">
                        <img class="intext" alt="Molecular Electrostatic Potential for Boric acid" height="475" width="475" src="../moleculeimages/MEPBoricAcid.png" />
                    <p>
                        We calculated the molecular electrostatic potential (M.E.P.) for B(OH)3 monomer using Gamess(1) and MacMolPlt(2). The results
                        are shown in the contourplot below. Positive contourlines are
                        <strong class="blue">blue</strong>,
                        <strong class="red">red</strong>
                        lines are negative contourlines.
                    </p>
                    <p>
                        The Lewis acid will attack the Lewis base where the M.E.P. is the most negative. This will be true for chemical reactions
                        that are predominantly charge controlled. The formation of a hydrogen bond can thus be seen
                        as a Lewis acid-base reaction.
                    </p>
                    <p>
                        We calculated the Fukui function for B(OH)3 as a Lewis acid and the fukui function of B(OH)3 as a Lewis base. These functions
                        predict that the electron donor will attack near the boron atom, the electron acceptor near
                        the oxygen atom.
                    </p>
                    <p>
                        <strong> B(OH)3 : Lewis Acid </strong>
                    <p>The colors range from bleu to
                        <strong class="red">red</strong>, the more
                        <strong class="blue">blue</strong> the more likely the atom will accept an electron pair. White atoms are
                        neutral.
                    </p>
                    <img alt="B(OH)3 : Lewis Acid" src="./moleculeimages/BoricAcidFukuiAcid.jpg" />
                    </p>
                    <p>
                        <strong> B(OH)3 : Lewis Base </strong>
                    <p>The colors range from bleu to
                        <strong class="red">red</strong>, the more
                        <strong class="blue">blue</strong> the more likely the atom will donate an electron pair. White atoms are
                        neutral.
                    </p>
                    <img alt=" B(OH)3 : Lewis Base" src="./moleculeimages/BoricAcidFukuiBase.jpg" />
                    </p>
                    </p>
                    <p class="card-text">
                        <strong>Charge transfer in the hydrogen bonded boric acid dimer.</strong>
                    <p>The colors range from blue to
                        <strong class="red">red</strong>, the
                        <strong class="blue">blue</strong> atoms gained electrons, the
                        <strong class="red">red</strong> atom lost electrons.
                    </p>
                    <img class="img-responsive img-thumbnail" alt="B(OH)3 : Lewis Acid" src="./moleculeimages/BOH3DimerChargeTransfer.jpg" />
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std card-title">Hydrogen Bonding : Formic Acid</h2>
                    <p class="card-text">
                    <p>
                        <a href="https://en.wikipedia.org/wiki/Formic_acid" target="_blank">Formic Acid</a>
                        Formic acid is well known as ant venom.
                    </p>
                    <p>
                        We calculated the equilibrium structure of the monomer, the dimer and the hexamer with electronic structure methods.
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Formic acid monomer
                                </th>
                                <th>
                                    Formic acid dimer
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="./reports/formicacid/formicacid.cml" target="_blank">CML file</a>
                                </td>
                                <td>
                                    <a href="./reports/formicacid/formicaciddimer.cml" target="_blank">CML file</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/formicacid/formicacid.inp" target="blank">gamess input file</a>
                                </td>
                                <td>
                                    <a href="./reports/formicacid/formicaciddimer.inp" target="_blank">gamess input file</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    </p>
                    <p class="card-text">
                        <img class="intext" alt="Molecular Electrostatic Potential for formic acid" width="458" height="356" src="./moleculeimages/formicacidMEP.png" />
                    <p>
                        Use
                        <a href="http://avogadro.openmolecules.net/wiki/Main_Page" target="_blank">Avogadro</a> to read the CML files. Avogadro allows you to analyse molecular the geometry.
                        The .inp files are the gamess input files we used this allows you to reproduce the calculations
                        we have done.
                    </p>
                    <p>
                        We calculated the molecular electrostatic potential (M.E.P.) for formic acid monomer using Gamess(1) and MacMolPlt(2). The
                        results are shown in the contourplot below. Positive contourlines are
                        <strong class="blue">blue</strong>,
                        <strong class="red">red</strong>
                        lines are negative contourlines.
                    </p>
                    <p>
                        The Lewis acid will attack the Lewis base where the M.E.P. is the most negative. This will be true for chemical reactions
                        that are predominantly charge controlled. The formation of a hydrogen bond can thus be seen
                        as a Lewis acid-base reaction.
                    </p>
                    <p>
                        We calculated the Fukui function for formic acid as a Lewis acid and the fukui function of formic acid as a Lewis base. These
                        functions predict that the electron donor will attack near the carbon atom, the electron
                        acceptor near the oxygen atom.
                    </p>
                    </p>
                    <p class="card-text">
                    <p>
                    <p class="clear"><strong> Formic Acid : Lewis Acid </strong></p>
                    <p>The colors range from bleu to
                        <strong class="red">red</strong>, the more
                        <strong class="blue">blue</strong> the more likely the atom will accept an electron pair.
                        White atoms are neutral.
                    </p>
                    <img alt="Formic Acid : Lewis Acid " src="./moleculeimages/formicacidlewisacid.jpg" />
                    <p><strong> Formic Acid : Lewis Base </strong></p>
                    <p>The colors range from bleu to
                        <strong class="red">red</strong>, the more
                        <strong class="blue">blue</strong> the more likely the atom will donate an electron pair.
                        White atoms are neutral.
                    </p>
                    <img alt="Formic Acid : Lewis Base" src="./moleculeimages/formicacidlewisbase.jpg" />
                    </p>
                    </p>
                    <p class="card-text">
                        <strong>Charge transfer in the hydrogen bonded formic acid dimer.</strong>
                    <p>
                        The formic acid molecules are arranged in the form of inifinite hydrogen bonded chains in the crystal. The molecular electrostatic
                        potential predicts the structure of the hydrogen bond.
                    </p>
                    <p>
                        The colors range from
                        <strong class="blue">blue</strong> to
                        <strong class="red">red</strong>, the
                        <strong class="blue">blue</strong> atoms gained electrons, the
                        <strong class="red">red</strong> atom lost electrons.
                    </p>
                    <img alt="B(OH)3 : Lewis Acid" src="./moleculeimages/formicaciddimer.jpg" />
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="row mt-2 mb-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title"> References :</h2>
                    <ul class="card-text">
                        <li>
                            (1) GAMESS - M.W.Schmidt, K.K.Baldridge, J.A.Boatz, S.T.Elbert, M.S.Gordon, J.J.Jensen, S.Koseki, N.Matsunaga, K.A.Nguyen,
                            S.Su, T.L.Windus, M.Dupuis, J.A.Montgomery J.Comput.Chem. 14, 1347-1363 (1993) M.S.Gordon, M.W.Schmidt
                            pp 1167-1189 in "Theory and Applications of Computational Chemistry, the first forty years" C.E.Dykstra,
                            G.Frenking, K.S.Kim, G.E.Scuseria (editors), Elsevier, Amsterdam, 2005.
                        </li>
                        <li>
                            (2) Bode, B. M. and Gordon, M. S. J. Mol. Graphics Mod., 16, 1998, 133-138.
                        </li>
                        <li>
                            (3) F. Albert Cotton, Geoffrey Wilkinson, Carlos A. Murillo, Manfred Bochmann, Advanced Inorganic Chemistry 6th edition p69-70.
                        </li>
                        <li>
                            (4) The Crystal Structure of Formic Acid, F. Holtzberg, B. Post and I. Fankuchen PLoytechnic Institute of Brooklyn, N.Y.
                            U.S.A. Acta Cryt. (1953) 6, 127
                        </li>
                        <li>
                            (1) Pure Appl. Chem., Vol. 83, No. 8, pp. 1637–1641, 2011. doi:10.1351/PAC-REC-10-01-02 Publication date (Web): 8 July 2011
                            Definition of the hydrogen bond (IUPAC Recommendations 2011)* Elangannan Arunan 1,‡, Gautam R. Desiraju
                            2, Roger A. Klein 3,Joanna Sadlej4, Steve Scheiner 5, Ibon Alkorta 6, David C. Clary 7,Robert H. Crabtree
                            8, Joseph J. Dannenberg 9, Pavel Hobza 10,Henrik G. Kjaergaard 11, Anthony C. Legon 12, Benedetta Mennucci
                            13, and David J. Nesbitt 14 1 Department of Inorganic and Physical Chemistry, Indian Institute of Science,
                            Bangalore 560012, India; 2 Solid State and Structural Chemistry Unit, Indian Institute of Science, Bangalore
                            560012, India; 3 30 Kimberley Road, Chesterton, Cambridge, CB4 1HH, UK; 4 Department of Chemistry, Laboratory
                            of Intermolecular Interactions, University of Warsaw, Warsaw, PL-02093, Poland; 5 Department of Chemistry
                            and Biochemistry, 0300 Old Main Hall, Utah State University, Logan, UT 84322, USA; 6 Medicinal Chemistry
                            Institute, Juan de la Cierva 3, Madrid E-28006, Spain; 7 Department of Physical and Theoretical Chemistry,
                            Oxford University, South Parks Road, Oxford OX1 3QZ, UK; 8 Department of Chemistry, 225 Prospect Street,
                            Yale University, New Haven, CT 06511-8499 USA; 9 Department of Chemistry and Biochemistry, City University
                            of New York, Hunter College, 695 Park Avenue, New York, NY 10065, USA; 10 Institute of Organic and Biochemistry,
                            Academy of Sciences of Czech Republic, Flemingovo nam 2, Praha CZ 16610, Czech Republic; 11 Department
                            of Chemistry, University of Copenhagen, Universitetsparken 5, DK-2100 Copenhagen Ø, Denmark; 12 School
                            of Chemistry, University of Bristol, Bristol BS8 1TS, UK; 13 Department of Chemistry, University of Pisa,
                            Via Risorgimento 35 Pisa 1-56125, Italy; 14 Department of Chemistry and Biochemistry, University of Colorado,
                            Boulder, CO 80309, USA
                        </li>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>