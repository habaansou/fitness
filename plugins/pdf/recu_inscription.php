<?php
ob_start();
?>
<style type="text/css">

    .header p{
        margin:0;
        color: #043bff;
        padding: 5px;
    }
    .footer p{
        margin:0;
        font-size:10px;
        color: #0f9934;
    }
    .footer hr{
        color: #099909;
    }
    h1{
        text-transform: uppercase;
        font-size:18px;
        text-align: center;
        color:#444;
        margin:40px;
    }

    table{
        width:100%;
    }
    table thead th{
        width:5%;
        background: #000;
        color:#FFF;
        padding:5px;
        text-align: center;
    }
    table thead th.large{
        width:40%;
        text-align: left;
    }
    table tbody tr td{
        padding:8px 5px;
        border:1px solid #999;
        text-align: center;
    }
    img {
        width: 150px;
        height: 100px;

    }
    .fiche {
        border: 1px solid black;
        margin-bottom: 10px;
        padding: -35px;
    }
    .content {
        margin-top: 30px;
        margin-bottom: -50px;
    }
    .feuille {
        background-color: #ca9211;
        width: 100%;
        padding: -35px;
    }
    p {
        padding-bottom: -5px;
    }
    .signature{
        text-align: center;
        padding: 110px 290px 90px;
    }

</style>
<page footer="date;pagination" backtop="120px" backbottom="100px">
    <page_header>
       <div style="width: 90%; margin-left: 20px;" class="header">
            <?php
            require_once ("../../_config/config.php");
            require_once ("../../_config/db.php");
            require_once ("../../_classes/Historiques.php");
            $n = time().'_'.uniqid();
           ?>
           <div id="image">
                <img src="../../assets/img/brand/favicon.png" alt="">
           </div>
           <div class="fiche">
               <h1>PRÉ-INSCRIPTION</h1>
           </div>
           <div class="feuille">
               <h1 style="text-align: center; color: white;">Fiche d'inscription</h1>
           </div>
       </div>
    </page_header>
    <page_footer>
        <div class="footer">
            <p style="text-align: center">Formations - Assistances - Conseils - Sports - Récrutements - Interims <br> Tel : (+224) 622 347 827 / 657 347 827 </p>
        </div>
    </page_footer>
    <div style="width: 90%; margin-left: 20px;" class="content">
        <p></p>
        <?php ?>
        <?php
        if(isset($_GET['id']) AND !empty($_GET['id']) AND $_GET['id']>0):
            extract($_GET);
            $getRecuInscription = \_classes\Historiques::getHistoriqueById($id);
            foreach ($getRecuInscription as $get):?>
                <p>Matricule : <?=ucfirst($get->matriculeClients)?></p>
                <p>Prénom : <?=ucfirst($get->prenomClients)?></p>
                <p>Nom : <?=strtoupper($get->nomClients)?></p>
                <p>N° de téléphone : <?=ucfirst($get->telephoneClients)?></p>
                <p>Adresse E-mail : <?=ucfirst($get->emailClients)?></p>
                <p>Quelle Sport vous ête inscrit ? : <?=ucfirst($get->sportClients)?></p>
                <p>Montant payé  : <?=number_format($get->fraisClients,'2','.',',').' GNF'?></p>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="signature">
        <p class="p-1">Signature et Cachet</p>
        <p class="p-1">David Ansoumane HABA</p>
    </div>
</page>
<?php
$content= ob_get_clean();
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try{
    $pdf = new HTML2PDF('P','A5','fr');
    $pdf->pdf->SetDisplayMode('fullpage');
    $pdf->pdf->SetTitle('FORMULAIRE_INSCRIPTION');
    $pdf->pdf->SetAuthor('FITNESSONE');
    $pdf->pdf->SetProtection(array('print'));
    $pdf->writeHTML($content);
     ob_end_clean();
    $pdf->Output('FORMULAIRE_INSCRIPTION_'.$n.'.pdf');
}catch(HTML2PDF_exception $e){
    echo $e->getMessage();
    exit;
}