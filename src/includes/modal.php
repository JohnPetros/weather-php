<div class="fade hidden"></div>
<form action="./src/actions/update.php" method="POST" class="modal hidden">
    <header>
        <h2>Trocar de cidade</h2>
        <i class="fa-solid fa-x button close"></i>
    </header>
    <input type="text" name="city" placeholder="Digite o nome da cidade" required />
    <input type="hidden" id="id" name="update-id" />
    <button class="button search" type="submit">
        Pesquisar
    </button>
</form>