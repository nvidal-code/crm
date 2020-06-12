// Ajout d'un nouveau client 
$('#ajout_client').on('click', function() {
    var client = document.getElementById("client").value;
    var nomContact = document.getElementById("nom_contact").value;
    var adresse = document.getElementById("adresse").value;
    var codePostal = document.getElementById("code_postal").value;
    var ville = document.getElementById("ville").value;
    var telephone = document.getElementById("telephone").value;
    var mail = document.getElementById("mail").value;
    var description = document.getElementById("description").value;


    $.ajax({
        method: "POST",
        url: "../clients/ClientManager.php",
        data: {
            'client': client,
            'nomContact': nomContact,
            'adresse': adresse,
            'codePostal': codePostal,
            'ville': ville,
            'telephone': telephone,
            'mail': mail,
            'description': description,
            success: function(result) {
                console.log("log ajax : ok");
            }
        },
    });
});