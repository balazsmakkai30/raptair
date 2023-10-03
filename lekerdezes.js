document.addEventListener("DOMContentLoaded", function () {
    loadDestinationOptions();
  });
  
  function loadDestinationOptions() {
    // Az select elem referenciájának lekérése
    const selectMezo = document.getElementById("destination");
  
    // AJAX kérés az úticélok lekérdezéséhez
    fetch("getdata.php", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        // Úticélok hozzáadása a select elemhez
        data.forEach((uticel) => {
          const option = document.createElement("option");
          option.value = uticel;
          option.text = uticel;
          selectMezo.appendChild(option);
        });
      })
      .catch((error) => {
        console.error("Hiba a kérés során: " + error);
      });
  }
  