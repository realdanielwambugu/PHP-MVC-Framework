<?php require_once view('includes/header'); ?>

<body>
    <div class="w-full h-screen fx fx-j-c fx-i-c">
        <div class="txt-h-c ff-pri fw-600">
            <h1 class="color-pri">
                Welcome to <?= app_name(); ?>
            </h1>
            <p class="color-sec-800 pt-3 fs-md">
                let's Create something awesome
            </p>

            <?php if (auth()->check()): ?>

                <a href="/logout">
                    <button class="bgColor-pri color-1 w-32  border-0 mt-5  py-3
                    pointer hover:bgColor-pri-800 rounded fs-md"
                    type="button" name="button">
                        Sign Out
                    </button>
                </a>

            <?php else: ?>

                <a href="/signin">
                    <button class="bgColor-pri color-1 w-32  border-0 mt-5  py-3
                    pointer hover:bgColor-pri-800 rounded fs-lg fw-700"
                    type="button" name="button">
                        Sign In
                    </button>
                </a>

            <?php endif; ?>

        </div>
    </div>
</body>

<?php require_once view('includes/footer'); ?>