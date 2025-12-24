<!-- HERO / SLIDESHOW -->
<section class="hero">
    <?php if (!empty($slides)): ?>
        <div class="hero-slider">
            <?php foreach ($slides as $index => $slide): ?>
                <div class="hero-slide <?= $index === 0 ? 'active' : '' ?>"
                     style="background-image: url('<?= $slide['imagem'] ?>')">

                    <div class="hero-content">
                        <?php if (!empty($slide['titulo'])): ?>
                            <h2><?= htmlspecialchars($slide['titulo']) ?></h2>
                        <?php endif; ?>

                        <?php if (!empty($slide['descricao'])): ?>
                            <p><?= htmlspecialchars($slide['descricao']) ?></p>
                        <?php endif; ?>

                        <?php if (!empty($slide['link_botao'])): ?>
                            <a href="<?= $slide['link_botao'] ?>" class="btn-outline">
                                Ver curso
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>

<!-- MEUS CURSOS -->
<section class="courses">
    <div class="container">
        <h3>Meus Cursos</h3>

        <div class="course-grid">

            <!-- CARD -->
            <article class="course-card">
                <img src="/uploads/exemplo.jpg" alt="">
                <div class="course-body">
                    <h4>Pellentesque malesuada</h4>
                    <p>Curabitur blandit tempus porttitor.</p>
                    <a href="#" class="btn-primary">Ver curso</a>
                </div>
            </article> 
 
        </div>
    </div>
</section>


<div class="modal-overlay" id="welcomeModal">
    <div class="modal">
        <button class="modal-close" id="closeModal">&times;</button>

        <div class="modal-image">
            <img src="/assets/images/modal-banner.jpg" alt="">
        </div>

        <div class="modal-content">
            <h2>Egestas Tortor Vulputate</h2>
            <p>
                Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
            </p>

            <a href="#" class="btn-primary">Inscreva-se</a>
        </div>
    </div>
</div>