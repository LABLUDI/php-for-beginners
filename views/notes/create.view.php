<?php require base_path("views/partials/head.php") ?>
<?php require base_path("views/partials/nav.php") ?>
<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

        <form method="POST" action="/notes">
            <div class="space-y-12">
                <div class=" pb-12">

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                            <div class="mt-2">
                                <textarea
                                        id="body"
                                        name="body"
                                        rows="3"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                        placeholder="Here's an idea for note..."><?= $_POST['body'] ?? '' ?></textarea>

                                <?php if (isset($errors['body'])) : ?>
                                    <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
                                <?php endif ?>

                            </div>
                            <div class="text-right sm:px-6">
                                <button type="submit" class="mt-4 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-5 text-white">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>

    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>
