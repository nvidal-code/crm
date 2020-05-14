// Création d'une nouvelle catégorie
$('#save-new-category').on('click', function() {
    var nameCategory = document.getElementById("newCategory").value;
    console.log(nameCategory);
    addCategory();
});

$('#addCategory').on('click', function() {
    addCategory();
});

const editor = new EditorJS({
    placeholder: 'Let`s write an awesome story!',
    holderId: 'editorjs',
    tools: {
        header: Header,
    },

});
editor.isReady
    .then(() => {
        console.log('Editor.js is ready to work!')

    })
    .catch((reason) => {
        console.log(`Editor.js initialization failed because of ${reason}`)
    });

// Bouton pour récupérer le contenu de l'editeur
$('#publish').on('click', function() { // fontion pour récupérer le contenu de l'editeur
    var titre = document.getElementById("titre").value;
    var newPost = "";

    editor.save().then((outputData) => {
        var postContent = Object.values(outputData); // On tansforme l'objet en array afin de traiter le contenue
        console.dir(postContent);

        // Boucle pour parcourir le tableau et récupérer les differents texte de l'array postContent
        for (i = 0; i < postContent.length; i++) {
            newPost += postContent[1][i].data.text;
            newPost += "\n";
            console.dir(newPost);
        }
        // Envoie des valeurs au serveur
        $.ajax({
            method: "POST",
            url: "../admin/ajout_doc.php",
            data: {
                'post': newPost,
                'titre': titre,
                success: function(result) {
                    console.log("log ajax : ", newPost);
                }
            },
        });

    }).catch((error) => {
        console.log('Saving failed: ', error)
    });
});


// Fonction pour cacher l'ajout d'une categorie
function addCategory() {
    var btnAddCategory = document.getElementById("btnAddCategory");
    var btnSaveCategory = document.getElementById("btnSaveCategory");
    console.log(btnAddCategory);
    if (btnAddCategory.style.display === "block") {
        btnSaveCategory.style.display = "flex";
        btnAddCategory.style.display = "none";
    } else {
        btnSaveCategory.style.display = "none";
        btnAddCategory.style.display = "block";
    }
}