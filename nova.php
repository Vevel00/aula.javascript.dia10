5 - Filtrar jogadores que começam com a letra "c" (maiúscula ou minúscula)
Use .filter() e toLowerCase() para retornar jogadores cujo nome começa com "c".

let jogadores = [`Cris`, `Courtois`, `Vini`, `Messi`];
let jogadoresComC = jogadores.filter(jogador => jogador.toLowerCase().startsWith("c"));
console.log(jogadoresComC);

..............................................................................................

1 -Adicionar um jogador ao final do array
Crie um script que adicione o jogador "Neymar" ao final do array jogadores usando .push().

let jogadores = ['cris', 'modric', 'messi', 'musiala'];
jogadores.push('neymar');
console.log(jogadores);

................................................................................................

2 - Remover o primeiro jogador da lista
Use o método .shift() para remover o primeiro elemento do array e exiba o novo array.

let aluno = [`cristiano` , `kaio` , `gabi` , `cassio`];
aluno.shift()
console.log(aluno)
..................................................................................................

3 - Imprimir todos os jogadores usando for
Use um loop for tradicional para imprimir todos os jogadores do array jogadores.

let jogadores = [`kaiki`, `bolasie` , `luvannor`, `gotze`];
for (let i = 0; i < jogadores.length; i++) {
   console.log (jogadores[i]);
...................................................................................................

4 - Converter todos os nomes de jogadores para letras minúsculas
Usando .map(), crie um novo array chamado jogadoresMinusculos.

let jogadores = ['Cris', 'Modric', 'Messi', 'Musiala'];
let jogadoresMinusculos = jogadores.map(jogador => jogador.toLowerCase());
console.log (jogadoresMinusculos)
....................................................................................................

8.1 - Filtrar jogadores com mais de 10 letras no nome
Use .filter() e length para retornar apenas nomes longos.

let jogadores = [`cristianinho` , `constantino` , `octavianoo` , `cassio` , `kaiki`];
let jogadoresNomesLongo = jogadores.filter(jogador => jogador.length > 10);
console.log(jogadoresNomesLongo)
.....................................................................................................

9 - Remover os jogadores entre as posições 1 e 2
Use .splice() para remover 2 jogadores a partir do índice 1.

let jogadores = [`yamal`, `ney` , `messi` , `cris`];
jogadores.splice(1,2);
console.log (jogadores);
......................................................................................................
17 - Crie um array chamado jogadores com os seguintes objetos:

const jogadores = [
  { nome: "Ney", gols: 3 },
  { nome: "Ronaldinho G", gols: 30 },
  { nome: "Cristiano", gols: 14 },
  { nome: "Vampeta", gols: 8 }
];
.......................................................................................................
18- Use filter para criar um novo array contendo apenas os jogadores com mais de 10 gols.

const jogadoresComMaisDe10Gols = jogadores.filter(jogador => jogador.gols > 10);
console.log(jogadoresComMaisDe10Gols);
........................................................................................................

19 - Com base no array jogadores, use map para criar um novo array que contenha apenas os nomes dos jogadores.
➤ Exiba o resultado no console.

const jogadores = [
  {nome: "Ney", gols: 3},
  {nome: "Ronaldinho G", gols: 30},
  {nome: "Cristiano", gols: 14},
  {nome: "Vampeta", gols: 8},
];
const nomes = jogadores.map(jogador => jogador.nome);
console.log(nomes); 
............................................................................................................
