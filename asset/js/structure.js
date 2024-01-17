document.addEventListener("DOMContentLoaded", function () {
  // var nbCounts = parseInt(localStorage.getItem("nbCounts")) || 0;
  var spanArticles = $("#nbArticles");
  $(".addToCartBtn").on("click", function (event) {
    event.preventDefault();
    var form = $(this).closest(".add-to-cart-form");
    var formData = form.serialize();
    console.log(formData);
    $.ajax({
      type: "post",
      url: "../model/achete.php",
      data: formData,
      dataType: "json",
      success: function (response) {
        // response = JSON.parse(response);
        if (response) {
          spanArticles.text(response.quantite);
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
