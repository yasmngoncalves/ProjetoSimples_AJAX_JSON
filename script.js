function registrarHumor() {
    fetch('humor.php')
      .then(res => res.json())
      .then(data => {
        console.log("Humor do dia:", data.humor);
        document.getElementById('humor-resultado').textContent = `Hoje você está: ${data.humor}`;
      })
      .catch(err => console.error('Erro ao buscar humor:', err));
  }
  
function adicionarHabito() {
    fetch('habito.php')
      .then(res => res.json())
      .then(data => {
        const li = document.createElement('li');
        li.textContent = data.habito;
        document.getElementById('lista-habitos').appendChild(li);
      })
      .catch(err => console.error('Erro ao buscar hábito:', err));
}
  
function removerHabito() {
    const lista = document.getElementById('lista-habitos');
    if (lista.lastChild) {
      lista.removeChild(lista.lastChild);
    }
}
  