<div class="portfolio-wrapper position-relative px-3 px-md-0 py-5 font-raleway dark-bg white-text" id="portfolio">
    <div class="container">
        <div class="portfolio-title mb-5">
            <h2 class="h1 mb-3 font-300 text-uppercase text-center">
                Os meus <span class="font-800">projectos</span>
            </h2>
        </div>

        <div class="projects-row row">
            <?php
            foreach ($projects as $project) {
            ?>
                <div class="project-wrapper col-md-4 p-4">
                    <div class="project <?= $project["class"] ?> h-100 d-flex align-items-center rounded cursor-pointer">
                        <img class="w-100" src="assets/images/portfolio/<?= $project["project_img"] ?>" alt="Forum da Malta logo">
                    </div>
                </div>
            <?php
            }
            ?>

            <div class="project-wrapper col-md-4 p-4">
                <div class="project-soon h-100 d-flex align-items-center justify-content-center rounded color-text">
                    <div class="text-wrapper w-100 tm-bg text-center">
                        <span class="dark-bg p-3 font-montserrat text-uppercase">Em breve</span>
                    </div>
                </div>
            </div>

            <div class="project-wrapper col-md-4 p-4">
                <div class="project-soon h-100 d-flex align-items-center justify-content-center rounded color-text">
                    <div class="text-wrapper w-100 tm-bg text-center">
                        <span class="dark-bg p-3 font-montserrat text-uppercase">Em breve</span>
                    </div>
                </div>
            </div>

            <div class="project-wrapper col-md-4 p-4">
                <div class="project-soon h-100 d-flex align-items-center justify-content-center rounded color-text">
                    <div class="text-wrapper w-100 tm-bg text-center">
                        <span class="dark-bg p-3 font-montserrat text-uppercase">Em breve</span>
                    </div>
                </div>
            </div>

            <div class="project-wrapper col-md-4 p-4">
                <div class="project-soon h-100 d-flex align-items-center justify-content-center rounded color-text">
                    <div class="text-wrapper w-100 tm-bg text-center">
                        <span class="dark-bg p-3 font-montserrat text-uppercase">Em breve</span>
                    </div>
                </div>
            </div>

            <div class="project-wrapper col-md-4 p-4">
                <div class="project-soon h-100 d-flex align-items-center justify-content-center rounded color-text">
                    <div class="text-wrapper w-100 tm-bg text-center">
                        <span class="dark-bg p-3 font-montserrat text-uppercase">Em breve</span>
                    </div>
                </div>
            </div>
        </div>
        <!--end projects-row-->
    </div>
    <!--end container-->

    <div class="portfolio-modal position-fixed d-flex align-items-center justify-content-center vw-100 vh-100 px-4 p-md-0">
        <div class="close-modal position-absolute cursor-pointer">
            <i class="fas fa-times fa-3x white-text"></i>
        </div>

        <div class="modal-project w-50 p-4 text-center rounded">
            <h3 class="project-title text-uppercase h2 font-800 color-text">Projecto</h3>

            <div class="project-details row mt-4">
                <div class="col-md-6">
                    <div class="project-name-wrapper">
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li>
                                <i class="far fa-file-alt pr-2"></i>
                            </li>
                            <li class="pr-2">Nome:</li>
                            <li class="project-name font-600"></li>
                        </ul>
                    </div>
                    <div class="project-code-wrapper">
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li>
                                <i class="far fa-file-code pr-2"></i>
                            </li>
                            <li class="pr-2">Linguagens:</li>
                            <li class="project-languages font-600"></li>
                        </ul>
                    </div>
                </div>
                <!--end col-md-6-->

                <div class="col-md-6">
                    <div class="project-client-wrapper">
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li>
                                <i class="fas fa-user pr-2"></i>
                            </li>
                            <li class="pr-2">Cliente:</li>
                            <li class="project-client font-600"></li>
                        </ul>
                    </div>
                    <div class="project-preview-wrapper">
                        <ul class="list-unstyled d-flex flex-wrap">
                            <li>
                                <i class="fas fa-external-link-alt pr-2"></i>
                            </li>
                            <li class="pr-2">Preview:</li>
                            <li class="font-600">
                                <a class="project-link color-text" href="" target="_blank"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end col-md-6-->
            </div>
            <!--end project-details-->

            <div class="project-img-wrapper d-flex align-items-center justify-content-center w-100 rounded my-4">
                <img class="project-img w-100 rounded" src="" alt="">
            </div>
        </div>
        <!--end modal-project-->
    </div>
    <!--end portfolio-modal-->

</div>
<!--end portfolio-wrapper-->