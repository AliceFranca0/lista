document.getElementById('search-input').addEventListener('keyup', function() {
    let query = this.value;

    if (query.length > 2) {
        fetch(`/search?query=${query}`)
            .then(response => response.json())
            .then(data => {
                let resultsDiv = document.getElementById('results');
                resultsDiv.innerHTML = '';

                if (data.length === 0) {
                    resultsDiv.innerHTML = '<p>Nenhum cliente encontrado.</p>';
                    return;
                }

                data.forEach(item => {
                    let resultItem = document.createElement('div');
                    resultItem.classList.add('result-item');
                    resultItem.innerHTML = `<strong>${item.nome}</strong><br>
                                            CPF: ${item.cpf}<br>
                                            Telefone: ${item.telefone}<br>
                                            Email: ${item.email}`;
                    resultsDiv.appendChild(resultItem);
                });
            })
            .catch(error => console.error('Erro:', error));
    } else {
        document.getElementById('results').innerHTML = '';
    }
});

const buttons = document.querySelectorAll('.btn');
buttons.forEach(button => {
    button.addEventListener('mouseover', () => {
        button.style.backgroundColor = '#0077be';
        button.style.color = 'white';
    });
    button.addEventListener('mouseout', () => {
        button.style.backgroundColor = '';
        button.style.color = '';
    });
});

