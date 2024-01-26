document.addEventListener("DOMContentLoaded", function () {
  // var nbCounts = parseInt(localStorage.getItem("nbCounts")) || 0;
  var spanArticles = $("#nbArticles");
  $(".addToCartBtn").on("click", function (event) {
    event.preventDefault();
    var form = $(this).closest(".add-to-cart-form");
    var formData = form.serialize();
    console.log(formData + "&ajouterPanier=panier");
    $.ajax({
      type: "POST",
      url: "../model/achete.php",
      data: formData + "&ajouterPanier=panier",
      dataType: "json",
      success: function (response) {
        // response = JSON.parse(response);
        if (response) {
          $("#nbArticles").text(response.quantite);
        }
        // ... le reste du code
      },
      error: function (xhr, status, error) {
        console.log("Erreur AJAX:");
        console.log("Status: " + status);
        console.log("Réponse du serveur:");
        console.log(xhr.responseText);
        // console.log("Erreur: " + error);
      },
    });
  });
});

$(document).ready(function () {
  $(".ajouter-produit").on("click", function (event) {
    // function quantite(event) {
    event.preventDefault();
    // var bouton = $(event.target);
    var gateauxId = $(this).data("gateaux-id");
    var quantiteSpan = $(this).data("gateaux-quantite");
    // Trouver l'élément span associé au bouton cliqué
    // var quantiteSpan = bouton.closest(".card").find(".quantite-gateaux");

    // alert(gateauxId);
    // Vérifier si l'élément span a été trouvé
    if (quantiteSpan) {
      // Vérifier si le bouton est "plus" ou "minus"
      var isPlusButton = $(this).hasClass("plus");
      // Mettre à jour la quantité
      var currentQuantite = parseInt(quantiteSpan, 10);
      var updateQuantite = isPlusButton
        ? currentQuantite + 1
        : Math.max(currentQuantite - 1, 0);
      // Envoyer la mise à jour au serveur via AJAX
      $.ajax({
        type: "post",
        url: "../model/achete.php",
        data: {
          checkId: gateauxId,
          updateQuantite: updateQuantite,
          quantityChange: true,
        },
        success: function (response) {
          $("#quantite-gateaux" + gateauxId).text(response.newQuantite);
          // Mettre à jour l'affichage avec la nouvelle quantité
          $("#nbArticles").text(response.newQuantite);
        },
        error: function (error) {
          console.log("Erreur" + error.message);
        },
      });
    } else {
      console.error("Aucun élément span trouvé. Structure HTML incorrecte ?");
      console.log(
        "Contenu HTML de la carte:",
        $(this).closest(".card")[0].outerHTML
      );
    }
  });
});
