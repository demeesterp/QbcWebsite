<html>
<?php
include './helpers/head.php';
include './helpers/header.php';
include './helpers/footer.php';
?>

<head>
    <?php makehead(); ?>
    <title>Molecular building blocks</title>
</head>

<body class="container">
    <?php makeheader(); ?>
    <section class="row mt-5">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Molecular Building Blocks</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std card-title">Water</h2>
                    <p class="card-text">
                        Water is a <strong>Lewis acid</strong> and a <strong>Lewis base</strong> at the same time.
                        Both its electrostatic properties and its frontier orbitals are important for understanding the
                        chemical reactions of water.
                        Water is important in biology because water acts as a solvent and it participates in important
                        enzymatic reactions (e.g. enzymatic hydrolysis).
                    </p>
                    <p class="card-text">
                    <div class="row">
                        <div class="col-6">
                            <div class="mt-3">
                                We calculated the equilibrium structure of water using
                                <a href="http://www.msg.ameslab.gov/" target="_blank">GAMESS</a>.
                                The calculation was done using DFT with the B3LYP potential and a 6-31G+(d,p) basis.
                            </div>
                        </div>
                        <div class="col-6">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Atom</th>
                                        <th>X (ångström)</th>
                                        <th>Y (ångström)</th>
                                        <th>Z (ångström)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Oxygen</th>
                                        <td>0.0586892</td>
                                        <td>0.0586892</td>
                                        <td>0.0000000</td>
                                    </tr>
                                    <tr>
                                        <th>Hydrogen</th>
                                        <td>1.0149135</td>
                                        <td>-0.0736028</td>
                                        <td>0.0000000</td>
                                    </tr>
                                    <tr>
                                        <th>Hydrogen</th>
                                        <td>-0.0736028</td>
                                        <td>1.0149135</td>
                                        <td>0.0000000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </p>
                    <p class="card-text">
                    <div class="row">
                        <div class="col">
                            <div class="mb-4">
                                The table below shows the Mulliken population analysis of the HOMO and LUMO and the CHelpG charge.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Atom </th>
                                        <th>Id</th>
                                        <th>
                                            CHelpG
                                        </th>
                                        <th>
                                            LUMO
                                        </th>
                                        <th>
                                            HOMO
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>OXYGEN</th>
                                        <td>1</td>
                                        <td>-0.79360</td>
                                        <td>1.07484</td>
                                        <td>0.75375</td>
                                    </tr>
                                    <tr>
                                        <th>HYDROGEN</th>
                                        <td>2</td>
                                        <td>0.39680</td>
                                        <td>-0.03742</td>
                                        <td>0.12313</td>
                                    </tr>
                                    <tr>
                                        <th>HYDROGEN</th>
                                        <td>3</td>
                                        <td>0.39680</td>
                                        <td>-0.03742</td>
                                        <td>0.12313</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <img src="./moleculeimages/Water.jpeg" class="intext" width="576" height="292" alt="Water" />
                        </div>
                    </div>
                    </p>
                    <p class="card-text">
                    <ul>
                        <li>
                            The electric charge is calculated from the molecular electrostatic potential that depends on the electron density. The electron
                            density can be calculated from the Kohn-Sham orbitals. We used a DFT B3LYP calculation
                            to find the Kohn Sham orbitals.
                        </li>
                        <li>
                            Mulliken population analysis was done with the molecular orbitals obtained from an MP2 calculation. MP2 corrects for the
                            correlation energy, but the orbitals have vary much the same physical meaning as the
                            Hartree Fock orbitals. That allows us the use the mulliken population analysis to understand
                            the HOMO and the LUMO.
                        </li>
                    </ul>
                    <ul>
                        <li>
                            Oxygen will act as an electron donor because the HOMO has the highest density on oxygen.
                        </li>
                        <li>
                            There will be no covalent charge transfer to the hydrogens.
                        </li>
                        <li>
                            The high partial charges on oxygen an hydrogen indicate that there can be a significant contribution from the coulombic interaction
                            energy when water interacts with other molecule. This is important because water acts
                            as a solvent in biology.
                        </li>
                        <li>
                            The mulliken population analysis also shows that the HOMO and the LUMO have the highest density on the
                            SP hybrid orbitals on the oxygen atom
                        </li>
                    </ul>
                    </p>
                    <p class="card-text">
                    <div class="mb-3">
                        <strong>Charge transfer upon hydrogen bonding in hexagonal ice.</strong>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                Water molecules in liquid water and in ice interact withone another by forming hydrogen bonds.
                                Hexogonal ice is the form of natural ice and snow.
                            </p>
                        </div>
                        <div class="col">
                            <div style="height: 400px; width: 400px; position: relative;" 
                                class='viewer_3Dmoljs' 
                                data-href='./molecules/6H2O.xyz'
                                data-backgroundcolor='0xffffff' 
                                data-style='line'></div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std card-title">Amino Acids</h2>
                    <p class="card-text">
                    <p>
                        Enzymes control most biochemical reactions in living organisms, they do this by means of catalysis and inhibition. The enzymes
                        (and proteïns in general) usually contain one or more polypeptides. Polypeptides are polymers
                        and amino acids are the monomers comprising the polypeptides. As a consequence the chemical
                        properties of these amino acids are very important to understand the properties of enzymes.
                    </p>
                    <p>
                        A lot of research has been done on enzymes. You can crystalize purified enzymes and then obtain their 3-dimensional molecular
                        structure with x-ray and neutron diffraction experiments. Scientist often deposit the result
                        of their research on the protein databank. You can view and download these structures directly
                        from their website.
                    </p>
                    </p>
                    <p class="card-text">
                        <strong>Calculations on amino acids :</strong>
                    <p>
                        We calculated equilibruim structures for the aminoacids shown in the table below. These calculation serve as examples of
                        what results can be obtained with electronic structure calculations. These are the equilibrium
                        structures for the neutral aminoacids in vacuum. The results from these calculations cannot
                        be exptrapolated to a biological context.
                    </p>
                    <p>
                        We used a 6-31G+(d,p) basis set. The charges and the equilibrium geometry were calculated with density functional methods.
                        The HOMO and the LUMO were calculated with HF MP2 methods. We did not use DFT to calculate
                        the HOMO and the LUMO because Hartree Fock orbitals have a phsysical meaning.The Kohn Sham
                        orbitals should be used the calculate the electron density and the properties that can be
                        derived from these ( e.g. molecular structure and molecular electrostatic potential ) .
                    </p>
                    <p>
                        Then we calculated the charges on the atoms so that they fit to the molecular electrostatic potential. These charges are
                        reactivity indexes that can be used to predict reaction mechanisms of charge controlled reactions.
                        They will provide information about the initial step of a reaction mechnism.When two or more
                        molecule approach later in the reaction, these charges can change due the intermolecular
                        interaction. Note that the charges on atoms "inside" the molecule have little value because
                        other molecule cannot get ot them.
                    </p>
                    </p>
                    <p class="card-text">
                        <strong>We also calculated the mulliken analysis of the HOMO and the LUMO of these amino acids.</strong>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/alanine/alaninesummary.html" title="electronic properties of alanine" target="_blank">Alanine (Ala)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/arginine/argininesummary.html" title="electronic properties of arginine" target="_blank">Arginine (Arg)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/arginine/argininesummary.html" title="electronic properties of aspartate" target="_blank">Arginine protonated (Arg)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/aspartate/aspartatesummary.html" title="electronic properties of aspartate" target="_blank">Aspartate (Asp)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/aspartate/aspartate-summary.html" title="electronic properties of aspartate" target="_blank">Aspartate anion (Asp)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/asparagine/asparaginesummary.html" title="electronic properties of asparagine" target="_blank">Asparagine (Asn)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/cysteine/cysteinesummary.html" title="electronic properties of cysteine" target="_blank">Cysteine (Cys)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/glutamaat/glutamaatsummary.html" title="electronic properties of glutamate" target="_blank">Glutamate (Glu)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/glutamine/glutaminesummary.html" title="electronic properties of glutamine" target="_blank">Glutamine (Gln)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/histidine/histidinesummary.html" title="electronic properties of histidine" target="_blank">Histidine (His)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/histidine/histidineplussummary.html" title="electronic properties of hsitidine" target="_blank">Histidine protonated (His)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/glycine/glycinesummary.html" title="electronic properties of glycine" target="_blank">Glycine (Gly)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/isoleucine/isoleucinesummary.html" title="electronic properties of isoleucine" target="_blank">IsoLeucine (Ile)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/leucine/leucinesummary.html" title="electronic properties of leucine" target="_blank">Leucine (Leu)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/lysine/lysinesummary.html" title="electronic properties of lysine" target="_blank">Lysine (Lys)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/lysine/lysineplussummary.html" title="electronic properties of lysine" target="_blank">Lysine protonated (Lys)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/methionine/methioninesummary.html" title="electronic properties of methionine" target="_blank">Methionine (Met)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/phenylalanine/phenylalaninesummary.html" title="electronic properties of phenylalanine" target="_blank">Phenylalanine (Phe)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/proline/prolinesummary.html" title="electronic properties of proline" target="_blank">Proline (Pro)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/serine/serinesummary.html" title="electronic properties of serine" target="_blank">Serine (Ser)</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="./reports/aminoacids/threonine/threoninesummary.html" title="electronic properties of threonine" target="_blank">Threonine (Thr)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/thyrosine/thyrosinesummary.html" title="electronic properties of thyrosine" target="_blank">Thyrosine (Tyr)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/thryptophan/tryptophansummery.html" title="electronic properties of thryptophan" target="_blank">Thryptophan (Trp)</a>
                                </td>
                                <td>
                                    <a href="./reports/aminoacids/valine/valinesummary.html" title="electronic properties of valine" target="_blank">Valine (Val)</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std"> The biochemical properties of carbohydrates derive from their Lewis acid and Lewis base properties.</h2>
                    <p class="card-text">
                    <p>
                        Biological organisms use carbohydrates for energy storage and as structural components. Carbohydrates can be linked to serine,
                        asparagine or threonine through glycosidic bonds.
                        Monosaccharides are aldehydes or ketones. Dihydroxyacetone and d-glyceraldehyde are the smallest monosaccharides they have
                        three carbon centers.
                    </p>
                    <p>
                        We calculated the <a href="./chemicalreactivity.php">Lewis acid base reactivity indices</a>
                        for both molecules.
                        These reactivity indices predict that the C-O ketone bond and the C-O aldehyde bond are a Lewis acids and that the ketone
                        and aldehyde oxygen are a Lewis bases.
                        We did a Mulliken population analysis for the atomic orbitals for the HOMO and the LUMO. This analysis gives detailed information
                        about the electronic rearrangement in the molecule at the initial stage of the reaction.
                    </p>
                    </p>
                    <p class="card-text">
                    <p>
                        <strong> Dihydroxyacetone and d-glyceraldehyde equilibrium structures and reactivity indices</strong>
                    </p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    dihydroxyacetone
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/trioses/dihydroxyacetone.xyz" title="calculated structure of dihydroxyacetone" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/trioses/dihydroxyacetonesummary.html" title="electronic properties of dihydroxyacetone" target="_blank">Results summary</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    d-glyceraldehyde
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/trioses/d-glyceraldehyde.xyz" title="calculated structure of d-glyceraldehyde" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/trioses/d-glyceraldehydesummary.html" title="electronic properties of d-glyceraldehyde" target="_blank">Results summary</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                    <p class="card-text">
                    <p>
                        Other monosaccharides like d-ribose and d-glucose have five and six carbon atoms. The carbon atoms of these molecules are
                        asymmetric as a consequence there are many monosaccharides that differ only in the 3 dimensional
                        arrangement of their atoms
                    </p>
                    <p>
                        <strong>&alpha;-d-glucopyranose and d-glucose equilibrium structures and reactivity indices</strong>
                    </p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    d-glucose
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/hexoses/d-glucose.xyz" title="calculated structure of d-glucose" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/hexoses/d-glucosesummary.html" title="electronic properties of d-glucose " target="_blank">Results summary</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    &alpha;-d-glucopyranose
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/hexoses/alpha-d-glucopyranose.xyz" title="calculated structure of &alpha;-d-glucopyranose" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/carbohydrates/hexoses/alpha-d-glucopyranosesummary.html" title="electronic properties of &alpha;-d-glucopyranose" target="_blank">Results summary</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                    <p class="card-text">
                    <div class="row">
                        <div class="col">
                            Monosaccharides are linked through glycosidic bonds to form disaccharides and more complex polysaccharides.
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <ul>
                                <li>
                                    Aside is the structure of sucrose (&alpha;-D-glucopyranosyl-(1&rarr;2)-&beta;-D-fructofuranose) or sugar.
                                </li>
                                <li>
                                    The electrostatic charges on the atoms have been calculated so that they correspond to the molecular electrostatic potential.
                                </li>
                                <li>
                                    Sucrose is a highly polar molecule just like water. This explains why water is a good solvent for sucrose.
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <p>
                                Sucrose equilibrium structure with charges
                                <a href="./reports/carbohydrates/disaccharides/sucrose.xyz" title="calculated structure of sucrose" target="_blank">( XYZ file )</a>
                            </p>
                            <!-- <img class="img-fluid" src="../moleculeimages/sucrose.jpg" alt="sucrose" /> -->
                            <div id="SucroseDiv" class="divintext"></div>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="row mt-3">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="std card-title">The lewis acid and base reactions relate molecular genetics to quantum physics.</h2>
                    <p class="card-text">
                    <p>
                        DNA and RNA, the molecules that carry genetic information are called nucleic acids. Four nucleotides GMP, AMP, CMP, TMP are
                        be linked through phosphoester bonds. This results in long unbranched polymers that interact
                        with other polynucleotids through hydrogen bonding. The phosphodiester bridges acts as a
                        Lewis base and allow for interaction with proteins.
                    </p>
                    <p>
                        Molecular genetics is the field of biology and genetics that studies the structure and function of genes at a molecular level.
                        Most important biological and chemical molecular properties of nucleic acids are Lewis acid
                        base reactions.
                    </p>
                    <p>
                        We calculated the equilibrium structures and the charges for these nucleotides. We used a 6-31G+(d,p) basis set. The charges
                        and the equilibrium geometry were calculated with density functional methods.
                    </p>
                    <p>
                        <strong>Results for nucleic acids equilibrium structures :</strong>
                    </p>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>GMP</th>
                                <td>
                                    <a href="./reports/nucleicacids/GMP/GMP.xyz" title="calculated structure of guanosine monophosphate" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/nucleicacids/GMP/gmpsummary.html" title="properties of guanosine monophosphate" target="_blank">Results summary</a>
                                </td>
                            </tr>
                            <tr>
                                <th>AMP</th>
                                <td>
                                    <a href="./reports/nucleicacids/AMP/AMP.xyz" title="calculated structure of adenosine monophosphate" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/nucleicacids/AMP/ampsummary.html" title="properties of adenosine monophosphate" target="_blank">Results summary</a>
                                </td>
                            </tr>
                            <tr>
                                <th>CMP</th>
                                <td>
                                    <a href="./reports/nucleicacids/CMP/CMP.xyz" title="calculated structure of cytosine monophosphate" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/nucleicacids/CMP/cmpsummary.html" title="properties of cytosine monophosphate" target="_blank">Results summary</a>
                                </td>
                            </tr>
                            <tr>
                                <th>TMP</th>
                                <td>
                                    <a href="./reports/nucleicacids/TMP/TMP.xyz" title="calculated structure of thyrosine monophosphate" target="_blank">XYZ file</a>
                                </td>
                                <td>
                                    <a href="./reports/nucleicacids/TMP/tmpsummary.html" title="properties of thyrosine monophosphate" target="_blank">Results summary</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer class="row mt-2 mb-5">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">References :</h3>
                    <p>Drawings have been realised with <strong></strong>Kékulé.js</strong></p>
                    <p> J. Chem. Inf. Model. 2016, 56(6), 1132−1138 and J. Chem. Inf. Model. 2016, 57(10), 2407−2412.</p>
                </div>
            </div>
        </div>
        <?php makefooter();  ?>
    </footer>
</body>
</html>