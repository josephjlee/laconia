<?php include __DIR__ . '/partials/header.php'; ?>

    <h1><?= $this->page_title; ?></h1>

    <h2><?= $this->user['username']; ?></h2>

    <table>
        <tr>
            <th>Username</th>
            <th>Email</th>
        </tr>

        <tr>
            <td><?= $this->user['username']; ?></td>
            <td><?= $this->user['email']; ?></td>
        </tr>

    </table>

    <a href="/logout">Logout</a>

<?php include __DIR__ . '/partials/footer.php'; ?>