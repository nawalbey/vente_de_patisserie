document.addEventListener("DOMContentLoaded", function () {
  $(".addToCartBtn").on("click", function (event) {
    event.preventDefault();
    var form = $(this).closest(".add-to-cart-form");
    var formData = form.serialize();
    var spanArticles = $("#nbArticles");
    $.ajax({
      type: "post",
      url: "../model/achete.php",
      data: formData,
      // dataType: "json",
      success: function (response) {
        response = JSON.parse(response);
        spanArticles.textContent += 1;
        // ... le reste du code
      },
      error: function (xhr, status, error) {
        console.log("Erreur AJAX:");
        console.log("Status: " + status);
        console.log("Réponse du serveur:");
        console.log(xhr.responseText);
        console.log("Erreur: " + error);
      },
    });
  });
});
