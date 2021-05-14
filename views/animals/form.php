<h1>Editer <?= $animal->name ?></h1>
<form action="/pokemons/update/<?= $pokemon->id ?>" method="post">
    <?php if($types): ?>
        <select name="types[]" id="types" multiple>
            <?php foreach($types as $type): ?>
                <option value="<?= $type->id ?>" <?php if ($pokemon->types && $pokemon->has_type($type->id)) { echo "selected"; } ?>><?= $type->name ?></option>
            <?php endforeach; ?>
        </select>
    <?php endif; ?>
    <input type="submit">
</form>