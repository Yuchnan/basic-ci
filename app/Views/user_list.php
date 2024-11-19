<?= $this->include('layouts/header') ?>

        <div class="w-2/3 mx-auto p-4">
            <h1 class="text-center font-bold mb-4">Daftar Pengguna</h1>
            <table class="table mx-auto">
                <thead class="text-center text-black font-md">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kata Sandi</th>
                        <th>Tanggal Lahir</th>
                        <th>Tanggal Dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users_2)): ?>
                        <?php foreach ($users_2 as $user): ?>
                            <tr>
                                <td><?= esc($user['id']) ?></td>
                                <td><?= esc($user['username']) ?></td>
                                <td><?= esc($user['email']) ?></td>
                                <td><?= esc($user['password']) ?></td>
                                <td><?= esc($user['birth']) ?></td>
                                <td><?= esc($user['created_at']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Tidak ada data.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary mt-4 w-full">Kembali ke Form</a>
        </div>
    </body>
</html>