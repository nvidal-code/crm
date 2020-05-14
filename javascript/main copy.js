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
    var outputData = "";

    editor.save().then((outputData) => {
        console.log('Article data: ', outputData)
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