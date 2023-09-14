<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-12" src="<?= base_url('assets/img/profile/') ?>logors.png">
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="<?= base_url('vendor/midone/source/') ?>dist/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        SIMEPKI
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Sistem Monitoring Evaluasi Program Kerja Instalasi</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <?= $this->session->flashdata('message'); ?>
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Masuk
                    </h2>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?= site_url('auth') ?>">
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
                            <input type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password" id="password" name="password">
                        </div>
                        <div class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4">
                            <a href="">Forgot Password?</a>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top" type="submit">Login</button>
                        </div>
                    </form>
                    <div class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"> RSUD Dr. Moewardi <a class="text-primary dark:text-slate-200" href="">Surakarta</a></div>
                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>

    <div class="modal hide fade" id="myModal">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h3>Modal header</h3>
        </div>
        <div class="modal-body">
            <p>One fine body…</p>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
        </div>
    </div>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>