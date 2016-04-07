<section class="slide">
    <div class="slide_nav">
        <div class="slide_nav_item b"><img src="imagens/Back-25.png"></div>
        <div class="slide_nav_item g"><img src="imagens/Forward-25.png"></div>
    </div>

    <?php
    $pager = array();
    for ($i = 1; $i <= 3; $i++):
        $slide = str_pad($i, 2, 0, STR_PAD_LEFT);
        $first = ($i == 1 ? ' first' : '');
        $active = ($i == 1 ? ' active' : '');
        $pager[$i] = "<span class='{$active}' id='" . ($i - 1) . "' > {$i}</span>";
        ?>

        <article class="slide_item<?= $first; ?>">
            <img src="imagens/slide/<?= $slide; ?>.png" height="400" alt="[SLIDE <?= $slide; ?>]" title="SLIDE <?= $slide; ?> ">
            <div class="slide_item_desc">
                <h1>Titulo do produto</h1>

                <p>Aqui colocamos uma descrição do produto se quiser =D</p>
            </div>
        </article>

        <?php
    endfor;
    echo "<div class='slide_pager'>" . implode(' ', $pager) . "</div>";
    ?>
</section>

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="js.js" async></script>

