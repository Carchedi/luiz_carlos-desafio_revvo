<main class="home">

    <!-- ================= HERO / SLIDESHOW ================= -->
    <div class="hero">
    <div class="slideshow">

        <?php foreach ($slides as $index => $slide): ?>
            <div class="slide <?= $index === 0 ? 'active' : '' ?>"
                style="background-image: url('/uploads/<?= htmlspecialchars($slide['imagem']) ?>')">
                
                <div class="slide-overlay">
                    <h2><?= htmlspecialchars($slide['titulo']) ?></h2>
                    <p><?= htmlspecialchars($slide['descricao']) ?></p>
                    <a href="<?= htmlspecialchars($slide['link']) ?>" class="btn-outline">
                        Ver curso
                    </a>
                </div>
            </div>
        <?php endforeach; ?>

        <button class="slide-prev">‹</button>
        <button class="slide-next">›</button>

        <div class="slide-dots">
            <?php foreach ($slides as $i => $slide): ?>
                <span class="dot <?= $i === 0 ? 'active' : '' ?>"></span>
            <?php endforeach; ?>
        </div>

    </div>
</div>

    <!-- ================= CURSOS ================= -->
    <section class="cursos">

        <div class="container">
            <h3 class="section-title">Meus Cursos</h3>

            <div class="curso-grid">

                <?php if (!empty($cursos)): ?>
                    <?php foreach ($cursos as $curso): ?>
                        <article class="curso-card">

                            <div class="curso-imagem">
                                <?php if (!empty($curso['imagem'])): ?>
                                    <img src="/uploads/<?= htmlspecialchars($curso['imagem']) ?>"
                                         alt="<?= htmlspecialchars($curso['titulo']) ?>">
                                <?php else: ?>
                                    <div class="img-placeholder"></div>
                                <?php endif; ?>
                            </div>

                            <div class="curso-conteudo">
                                <h4><?= htmlspecialchars($curso['titulo']) ?></h4>
                                <p><?= htmlspecialchars($curso['descricao']) ?></p>
                            </div>

                            <div class="curso-acao">
                                <a href="/cursos/<?= $curso['id'] ?>" class="btn-primary">
                                    Ver curso
                                </a>
                            </div>

                        </article>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- CARD ADICIONAR CURSO -->
                <article class="curso-card add-curso">
                    <a href="/cursos/create">
                        <span class="add-icon">+</span>
                        <span>Adicionar Curso</span>
                    </a>
                </article>

            </div>
        </div>

    </section>

</main>
