# <img src="https://github.com/user-attachments/assets/caabfdf0-0f9e-44a3-8200-c6579fe87887" alt="ícone de descrição" width="28"> Descrição
Essa tarefa visa analisar o desempenho entre dois métodos de ordenação populares, o Bubblesort e o Quicksort.

# <img src="https://github.com/user-attachments/assets/a1868e32-77a5-4d27-b653-b97d859ba1a2" alt="ícone do PHP" width="32"> Métodos
## 1. Bubblesort
### Características
- No melhor caso, o número de comparações é LINEAR (C(n) = O(n)) e o de movimentações é ZERO (M(n) = 0);
- No pior caso, tanto o número de comparações quanto o de movimentações é QUADRÁTICO (C(n) = (n²) e M(n) = (n²));
- Não é um método eficiente,
- É um método estável;
- É um método lento.

### Funcionamento
1. Chaves na posição 1 e 2 são comparadas. Se tiverem fora de ordem são trocadas;
2. Logo após repete o processo com as chaves 2 e 3, 3 e 4, ..., n–1 e n;
3. Começa o processo de novo de 1 até a comparação entre n–2;
4. Repita o processo até que sobrem apenas as 2 primeiras chaves.

### Tempo de Execução - Geogebra(nº elementos x tempo)
![image](https://github.com/user-attachments/assets/9eab0969-f550-4749-b314-de875afd8033)

## 2. Quicksort
### Características
- O pior caso ocorre quando o pivô é um extremo de um conjunto de dados já ordenado. Isso resulta em n  chamadas recursivas, removendo um elemento por vez. Assim, a pilha auxiliar terá tamanho n e o número de comparações será C(n) = n² / 2;
- No melhor caso, o vetor é dividido ao meio em cada etapa, com custo de comparações C(n) = 2C(n/2) + n. Isso resulta em C(n) = 1,4 log n, com tempo médio de execução O(nlogn).
- Necessita de uma pequena pilha como memória auxiliar;
- É um dos métodos mais eficientes;
- Método não é estável.

### Funcionamento
1. Escolher arbitrariamente um item do vetor como pivô
2. Percorrer o vetor a partir de seu início, até encontrar um item com
chave maior ou igual à chave do pivô, cujo índice chamaremos de i
3. Percorrer o vetor a partir do nal, até encontrar um item com chave
menor ou igual à chave do pivô, cujo índice chamaremos de j
4. Trocar os itens v[i] e v[j]
5. Continuar o percurso-e-troca até que os dois índices se cruzem

<br>

> [!CAUTION]
> Obs: quando i e j se cruzam, temos dois grupos:
> <br>
> v[1],..., v[j] <= pivô
> <br>
> v[j+1],..., v[n] >= pivô

<br>

### Tempo de Execução - Geogebra(nº elementos x tempo)
![image](https://github.com/user-attachments/assets/f27558bb-029c-44dc-8000-c2bedab10baf)

