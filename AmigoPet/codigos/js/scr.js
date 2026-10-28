
async function carregarPets() {
  try {
    const resposta = await fetch("http://localhost:5135/pets");
    const pets = await resposta.json();

    const container = document.getElementById("lista-pets");

    container.innerHTML = "";

    pets.forEach(pet => {
      container.innerHTML += `
        <div class="pet-card">
          <h3>${pet.nome}</h3>
          <p>Espécie: ${pet.especie}</p>
          <p>Idade: ${pet.idade} anos</p>
        </div>
    `;
  });

} catch (erro) {
    document.getElementById("lista-pets").innerHTML =
        "<p>Erro ao carregar os pets.</p>";

    console.error(erro);
}
}

carregarPets();