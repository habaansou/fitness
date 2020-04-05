$(document).ready(function(){
    setInterval(function () {
        $(".message").each(function () {
            $(this).hide();
        })
    },5000);
    var matricule = $("#matriculeselect");
    $(matricule).change(function(){
        var valeur = $(this).val();
        $.ajax({
            type: "GET",
            url: "api/getPersonnelById.php",
            data: { id: valeur},
            dataType: "json",
            success : function (data) {
                console.log(data);
                $("#nom").val(data[0].nomPersonnels);
                $("#prenom").val(data[0].prenomPersonnels);
                $("#date").val(data[0].dateDembausePersonnels);
                $("#salaire").val(new Intl.NumberFormat('gn', { style: 'currency', currency: 'GNF' }).format(data[0].salairePersonnels));
                $("#salaire2").val(data[0].salairePersonnels);
                $("#fonction").val(data[0].nameFonctions);

            },
            errors : function (error) {
                console.log(error);
            }
        })
    });
    var modal = $("#modale");
    $(modal).on('click',function(e){
        e.preventDefault();
        var lien = $(modal).attr('data-href');
        $('.sup').attr('href', lien);
    })
})