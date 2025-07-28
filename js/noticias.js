document.addEventListener('DOMContentLoaded', () => {
  const apiKey = "547ba13eda0d16e9d91e007b2f027ffa";
  const url = `https://gnews.io/api/v4/search?q=programming OR tecnologia OR desenvolvimento&lang=en,pt&max=5&token=${apiKey}`;

  fetch(url)
    .then(res => res.json())
    .then(data => {
      const lista = document.getElementById("lista-noticias");
      if (!data.articles || data.articles.length === 0) {
        lista.innerHTML = '<li>Nenhuma notícia encontrada.</li>';
        return;
      }
      lista.innerHTML = "";
      data.articles.forEach(noticia => {
        const li = document.createElement("li");
        li.innerHTML = `
        <div class="noticia">
          <img src="${noticia.image}">
          <h3>${noticia.title}</h3>
          <p>${noticia.description || ''}</p>
          <a href="${noticia.url}" target="_blank" rel="noopener noreferrer">Ler mais</a>
        </div>
        `;
        lista.appendChild(li);
      });
    })
    .catch(err => {
      const lista = document.getElementById("lista-noticias");
      lista.innerHTML = '<li>Erro ao carregar as notícias.</li>';
    });
});
