<form class="search-city" action="./src/actions/create.php" method="POST">
    <h1>Confira o clima de uma cidade</h1>
    <input type="text" name="city" placeholder="Digite o nome da cidade" required />
    <button class="search" type="submit">
        Pesquisar
        <i class="fa-solid fa-magnifying-glass"></i>
    </button>
    <button class="button delete-all hidden" type="button">
        Deletar tudo
        <i class="fa-solid fa-trash"></i>
    </button>
</form>