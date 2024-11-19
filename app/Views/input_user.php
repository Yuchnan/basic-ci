<?= $this->include('layouts/header') ?>

<div class="container mx-auto p-4">
    <div class="card w-full bg-indigo-500 shadow-xl mt-4">
        <div class="card-body">
            <h1 class="text-3xl text-center font-bold mb-4 w-full">Input Data User</h1>
            <form 
                class="w-2/3 mx-auto"
                action="<?= base_url('/submit') ?>" 
                method="post"
            >
                <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                    <label class="text-right mr-8">Username</label>
                    <input type="text" class="input input-bordered input-xs bg-white" id="username" name="username" required>
                </div>
                <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                    <label class="text-right mr-8">Email</label>
                    <input type="email" class="input input-bordered input-xs bg-white" id="email" name="email" required>
                </div>
                <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                    <label class="text-right mr-8">Kata Sandi</label>
                    <input type="password" class="input input-bordered input-xs bg-white" id="password" name="password" required>
                </div>
                <div class="grid grid-cols-2 mb-2 w-1/2 mx-auto">
                    <label class="text-right mr-8">Tanggal Lahir</label>
                    <input type="date" class="input input-bordered input-xs bg-slate-200" id="birth" name="birth" required>
                </div>
                <div class="card-actions justify-end" type="submit">
                    <button class="btn btn-accent w-32">Submit</button>
                </div>
            </form>
            <a href="<?= base_url('/list') ?>" class="btn btn-secondary w-full mt-4">Lihat Data</a>
        </div>
    </div>
</div>

<?= $this->include('layouts/footer') ?>
