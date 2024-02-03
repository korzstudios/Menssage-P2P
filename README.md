# Menssage-P2P
O significado geral desses códigos.

1. **Primeiro Código:**

   - O HTML contém um formulário simples com dois campos de entrada (`cor` e `ou`) e um botão de envio.
   - Quando o formulário é enviado, o PHP recebe as entradas (`cor` e `ou`) e cria um diretório com o nome md5 do endereço IP do servidor remoto (`REMOTE_ADDR`).
   - Em seguida, ele escreve a mensagem no arquivo do diretório criado, acrescentando a mensagem e um identificador md5 gerado dinamicamente.

2. **Segundo Código:**

   - Este código HTML exibe mensagens armazenadas em arquivos criados no primeiro código.
   - Ele cria um diretório correspondente ao md5 do endereço IP do servidor remoto, abre o arquivo e exibe as mensagens invertidas (da mais recente para a mais antiga).

Ambos os códigos trabalham juntos para criar uma comunicação simples entre dois pontos, usando arquivos de texto como meio de armazenamento e o md5 do endereço IP para identificar os diretórios de cada ponto de comunicação. 
