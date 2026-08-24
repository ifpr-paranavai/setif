# SETIF

Site da Semana de Tecnologia da Informação do IFPR Campus Paranavaí. Cada edição do evento fica em uma pasta própria na raiz do projeto (`2022/`, `2023/`, `2024/`, etc.), para preservar o conteúdo histórico.

## Requisitos

- Apache e PHP, normalmente fornecidos pelo XAMPP.
- MySQL, caso a funcionalidade em desenvolvimento utilize o sistema administrativo.
- Projeto localizado em `C:\xampp\htdocs\setif`.

Para acessar o site localmente, abra `http://localhost/setif/`.

## Criar uma nova edição

Use `<ANO>` como o ano da nova edição e siga esta ordem:

1. **Crie a pasta da edição.** Copie a edição mais recente com uma estrutura parecida e renomeie a cópia:

	```text
	<ANO>/
	├── index.php
	├── assets/       # usado pelas edições 2025/2026
	└── includes/
	```

	Para uma edição baseada em 2023 ou 2024, mantenha a estrutura existente (`imagens/`, `bibliotecas/` e `includes/`). Não misture os caminhos sem revisar os `include`, `require` e referências de CSS, JavaScript e imagens.

2. **Atualize os imports no `init.php`.** Adicione as constantes da nova edição seguindo o padrão existente:

	```php
	define('LIB_IMG_<ANO>', SITE_ROOT . DS . '<ANO>' . DS . 'assets');
	define('LIB_INCLUDES_<ANO>', SITE_ROOT . DS . '<ANO>' . DS . 'includes');
	```

	Se a edição usar a estrutura antiga, a primeira constante deve apontar para `imagens` (ou para a pasta realmente usada pela edição). Use as constantes nas páginas, por exemplo:

	```php
	require_once LIB_INCLUDES_<ANO> . DS . 'navigation.php';
	```

3. **Configure os dados do evento.** Atualize o `$evento` no `init.php` com título, datas, local, contatos, URLs, links de inscrição e identificador do Even3. O `$evento` global representa a edição atual.

4. **Revise os arquivos copiados.** Substitua referências ao ano anterior em:
	- `index.php` e demais páginas da edição;
	- `includes/metadados.php`, incluindo título, descrição, canonical e Open Graph;
	- `includes/navigation.php` e `includes/footer.php`;
	- URLs do Even3, widgets, inscrições e submissões;
	- nomes e caminhos de imagens, CSS, JavaScript e favicon.

5. **Adicione a nova edição aos menus.** Inclua um link `ed_<ANO>` no array `$evento['links']` do `init.php` e um item correspondente em `includes/navigation.php` (e em outros menus que listem edições). Atualize também `sitemap.xml` quando a página estiver publicada.

6. **Preserve as edições anteriores.** Depois que uma nova edição se tornar a atual, páginas históricas que usam dados globais devem definir seu próprio `$evento`, como ocorre em `2025/index.php`. Assim, a alteração do `init.php` não troca título, datas ou links de uma edição já encerrada.

7. **Teste a edição.** Acesse `http://localhost/setif/<ANO>/` e verifique todas as páginas, imagens, links, formulário de inscrição e console do navegador. Teste também a página inicial e os links das edições anteriores.

## Convenções importantes

- Nomes de constantes por edição: `LIB_IMG_<ANO>` e `LIB_INCLUDES_<ANO>`.
- Use `DS` e as constantes de caminho do `init.php` em vez de caminhos absolutos nas inclusões PHP.
- Os dados específicos de uma edição devem ficar na pasta dela; configurações compartilhadas ficam no `init.php` ou no `admin/`.
- Não altere o conteúdo histórico apenas para apontar para arquivos da nova edição.

## Estrutura principal

```text
admin/       Administração, modelos, DAOs e controladores
anais/       Página de acesso aos anais
banco/       Script do banco de dados
fotos/       Fotos das edições
<ANO>/       Páginas e recursos de uma edição do evento
init.php     Configurações globais e caminhos das edições
index.php    Página inicial do site
```
