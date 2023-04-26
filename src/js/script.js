const form = document.getElementById("form-novidades");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const emailInput = document.getElementById("form-novidades");
  const email = emailInput.value;
  
  fetch("php/upload_email.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({ email }),
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        alert("E-mail cadastrado com sucesso!");
        emailInput.value = "";
      } else {
        alert("Erro ao cadastrar e-mail!");
      }
    })
    .catch((error) => {
      console.error(error);
      alert("Erro ao cadastrar e-mail!");
    });
});
