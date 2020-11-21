# CSV Import!

_Sistema para Importação de Planilhas em CSV._

<p> Esse projeto foi desenvolvido quando eu ainda estava aprendendo PHP, foi o meu terceiro projeto com essa linguagem poderosa.</p>

<p>Não foi Assistido nenhum curso durante o desenvolvimento deste projeto, é totalmente de minha autoria. Para a concepção dele tive que planejar no papel como funcionaria. Apesar de básico, eu sempre desenho/escrevo o fluxo das minhas aplicações no papel. Devido a minha bagagem sólida em lógica de programação, eu me sinto extremamente confortável planejando o que vou desenvolver e perco poucos minutos nisso, sempre vale a pena :) </p>
 
 ### A seguir alguns pontos relevantes sobre esse projeto:

<ul>
  <li>Linguagem Utilizada é o PHP <b>(PROCEDURAL)</b></li>
  <li>Uso de Lógica de Programação, JQuery e DataTables</li>
  <li>Não Foram Usadas Nenhuma Biblioteca Pronta pra Manipular o Arquivo. Com a Finalidade de Aprimorar meus Conhecimentos Foram Utilizadas as funções Genéricas do PHP de Manipulação de Arquivos</li>
  <li>Tanto o Cabeçalho Quanto o Corpo da Tabela São Preenchidos com os Dados da Tabela, Não há Nenhuma Informação Fixada, Tá tudo Dinâmico</li>
  <li>Não há Persistência de Dados no Banco, o Sistema apenas Recebe o Arquivo e Exibe na Tabela</li>
  <li>Para Baixar e Rodar na Sua Máquina Siga as Instruções no Final Desse Guia</li>
 </ul>

### __Tela Inicial da Aplicação - Importação do Arquivo__
<p align="center">
  <img src="https://github.com/raissaqueiroz/csvimport/blob/master/screenshots/csvimport_tela_inicial.png" width=200 height=350/>
</p>
<br><br> 

### __Tela Inicial da Aplicação - Validação de Envio de Formulário Vazio__
<p align="center">
  <img src="https://github.com/raissaqueiroz/csvimport/blob/master/screenshots/csvimport_tela_inicial_error.png" width=200 height=350/>
</p>
<br><br> 

### __Tela de Resultados - Importação do Arquivo Enviado__
<p align="center">
  <img src="https://github.com/raissaqueiroz/csvimport/blob/master/screenshots/csvimport_tela_resultado.png" width=200 height=350/>
</p>
<br><br> 

Você pode acessar o projeto e testar [clicando aqui](https://csvimport.raissa.dev)
### Considerações Finais Caso Deseje Rodar na Sua Máquina:

<ul>
  <li>É imprencidível que Você tenha o Apache na sua Máquina (Recomendo o Xampp)</li>
  <li>
    Caso Tenha Problemas com Tamanho do Arquivo Você pode Modificar o Seu PHP.ini buscando por `upload_max_filesize` e `post_max_size`, substituindo os respectivos valores para ficar como as Linhas a Seguir: 

    ```
        upload_max_filesize = 1000M;
        post_max_size = 1000M;
    ```
  </li>
  <li> Os arquivos com extensão .CSV geralmente possuem um separador sendo este , ou ; (geralmente). Como default está a "," para modificar isto, abra o arquivo 
  
  `gImportar.php` e localize a linha com o seguinte código `define("DELIMITADOR", ",");` substituia a vírgula entre parenteses pelo separador desejado (preservando o parenteses)</li>
</ul>

