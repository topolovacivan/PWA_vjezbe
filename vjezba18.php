SELECT
    u.id,
    u.name,
    u.lastname,
    c.country_name
FROM users u
INNER JOIN countries c
ON u.country_id = c.id;

UPDATE users
SET
    name = 'Marko',
    lastname = 'Marić',
    country_id = 2
WHERE id = 1;

<form method="post">
    <input type="text" name="name" value="Marko">

    <input type="text" name="lastname" value="Marić">

    <select name="country_id">
        <option value="1">Croatia</option>
        <option value="2">Germany</option>
        <option value="3">Slovenia</option>
        <option value="4">Austria</option>
    </select>

    <button type="submit">Spremi</button>
</form>

$sql = "UPDATE users
        SET name='$name',
            lastname='$lastname',
            country_id='$country_id'
        WHERE id='$id'";
