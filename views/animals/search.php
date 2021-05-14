<section id="form">
    <form class="search" action="">
        <input type="text" name="recherche" id="recherche">
        <input type="submit">
    </form>
</section>
<section id="result">
    <h2 id="name"></h2>
    <img src="" alt="" id="sprite">
    <select name="users" id="users">
        <?php foreach($users as $user): ?>
            <option value="<?= $user->id; ?>"><?= $user->name; ?></option>
        <?php endforeach; ?>
    </select>
    <button class="add-to-favorites" style="display:none">Ajouter au favoris</button>
</section>
<section id="error"></section>