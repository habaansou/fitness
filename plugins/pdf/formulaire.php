<?php
ob_start();
?>
<style type="text/css">

    .header p{
        margin:0;
        color: #043bff;
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
        background-color: #a748ca;
        width: 100%;
        padding: -35px;
    }
    p {
        padding-bottom: -5px;
    }

</style>
<page footer="date;pagination" backtop="120px" backbottom="100px">
    <page_header>
       <div style="width: 90%; margin-left: 20px;" class="header">
            <?php
            require_once ("../../_config/config.php");
            require_once ("../../_config/db.php");
            require_once ("../../_classes/Onlines.php");
            $n = time().'_'.uniqid();
           ?>
           <div id="image">
                <img src="http://localhost/cfemguinee/assets/images/logo.png" alt="">
           </div>
           <div class="fiche">
               <h1>FICHE DE PRÉ INSCRIPTION</h1>
           </div>
           <div class="feuille">
               <h1 style="text-align: center; color: white;">Feuille du participant</h1>
           </div>
       </div>
    </page_header>
    <page_footer>
        <div class="footer">
            <p style="text-align: center">Formation - Assistance - Conseil - Installation - Récrutement - Interim <br> Tel : (+224) 629 84 60 60 / 654 54 04 20 </p>
        </div>
    </page_footer>
    <div style="width: 90%; margin-left: 20px;" class="content">
        <p></p>
        <?php if(isset($_GET['id']) AND !empty($_GET['id']) AND $_GET['id']>0):?>
        <?php $getAllInscription = Onlines::getInscriptionById($_GET['id']);
                foreach ($getAllInscription as $get):?>
            <p>Prénom : <?=ucfirst($get->prenomOnlines)?></p>
            <p>Nom : <?=strtoupper($get->nomOnlines)?></p>
            <P>Niveau d’étude : <?=ucfirst($get->niveauOnlines)?></P>
            <p>Statut actuel : <?=ucfirst($get->statutOnlines)?></p>
            <p>Saisir le nom de cette entreprise : <?=ucfirst($get->entrepriseOnlines)?></p>
            <p>Pays d’origine : <?=ucfirst($get->paysOnlines)?></p>
            <p>N° de téléphone : <?=ucfirst($get->telOnlines)?></p>
            <p>Adresse mail : <?=ucfirst($get->emailOnlines)?></p>
            <p>Adresse (Quartier) : <?=ucfirst($get->adresseOnlines)?></p>
            <p>Quelle Formation voulez-vous suivre ? : <?=ucfirst($get->formationOnlines)?></p>
            <p>Mode de Financement : <?=ucfirst($get->paysOnlines)?></p>
            <p>Quelle est l’entreprise qui finance ? : <?=ucfirst($get->payerOnlines)?></p>
            <p>Comment comptez-vous nous payer ? : <?=ucfirst($get->modepaiementOnlines)?></p>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</page>
<?php
$content= ob_get_clean();
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
try{
    $pdf = new HTML2PDF('P','A5','fr');
    $pdf->pdf->SetDisplayMode('fullpage');
    $pdf->pdf->SetTitle('FORMULAIRE_INSCRIPTION');
    $pdf->pdf->SetAuthor('CFEM-GUINEE');
    $pdf->pdf->SetProtection(array('print'));
    $pdf->writeHTML($content);
     ob_end_clean();
    $pdf->Output('FORMULAIRE_INSCRIPTION_'.$n.'.pdf');
}catch(HTML2PDF_exception $e){
    echo $e->getMessage();
    exit;
}