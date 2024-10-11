# Passo a passo para a criação de uma nova versão do site da SETIF como submódulo do repositório principal

## 1. Criar o repositório para a SETIF do ano corrente
- Crie um novo repositório para a SETIF do ano corrente. Sugestão de nome: `setifANO`, onde `ANO` é o ano corrente.
  - Faça todo o trabalho de desenvolvimento neste repositório.
  - Utilize arquivos comuns (ex: conexão com o banco de dados) do repositório raiz.

## 2. Na Hostinger: Configurar o repositório
- Na Hostinger, encontre a opção **GIT** e crie um novo repositório para a SETIF do ano corrente.
  - Repositório: `https://github.com/ifpr-paranavai/setifANO.git`
  - Ramo: `main`
  - Diretório: `setif/ANO`

## 3. No repositório raiz: Criar um submódulo para a SETIF do ano corrente

### Passo 1: Navegar até o repositório principal
Clone o repositório principal no qual você deseja adicionar o submódulo, caso ainda não o tenha:

```bash
git clone https://github.com/ifpr-paranavai/setif.git
cd setif
```

### Passo 2: Adicionar o submódulo
Dentro do repositório principal, adicione o submódulo apontando para o repositório que deseja incluir:

```bash
git submodule add https://github.com/ifpr-paranavai/setifANO.git ANO
```
Isso adicionará o repositório `setifANO` como submódulo na pasta `ANO` do seu repositório principal (setif).

### Passo 3: Fazer commit e push das mudanças
Agora, você precisa fazer commit e push das mudanças que ocorreram no repositório principal, incluindo o submódulo:

```bash
git add .gitmodules ANO
git commit -m "Adiciona submódulo"
git push origin main
```

### Passo 4: Atualizar Submódulos em Clonagens Futuras
Sempre que alguém clonar o repositório principal, será necessário inicializar e atualizar os submódulos para baixar seu conteúdo corretamente:

```bash
git clone https://github.com/ifpr-paranavai/setif.git
cd setif
git submodule update --init --recursive
```

## Considerações
- Submódulos são úteis quando você quer incluir dependências que podem ser versionadas de forma independente do repositório principal.
- Alterações nos submódulos devem ser feitas e commitadas no repositório do submódulo em si, não no repositório principal.

Para atualizar o submódulo para uma versão mais recente dentro do repositório principal, use:

```bash
cd ANO
git pull origin main
cd ..
git add ANO
git commit -m "Atualiza submódulo"
git push origin main
```

### Atenção:
- **Não faça commits do submódulo no repositório principal**, isso pode causar problemas na hospedagem.
- Para atualizar os submódulos, faça commits específicos em cada repositório e, no repositório principal, use o comando:

```bash
git submodule update --init --recursive
```

### Observação:
Caso seja necessário apagar a pasta `setif`, lembre-se de adicionar o arquivo `Conexao.class.php`, localizado dentro do diretório `admin/includes`.
