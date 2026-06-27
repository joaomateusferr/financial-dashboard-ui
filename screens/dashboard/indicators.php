<?php

    $Indicators = [
        [
            'title' => 'CDI',
            'value' => '14%',
        ],
        [
            'title' => 'Selic',
            'value' => '14.1%',
        ],
        [
            'title' => 'IPCA',
            'value' => '4.5%',
        ],
    ];

?>

<section class="container-fluid py-4">

    <div class="row g-4">

        <div class="col-12">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-2">
                <div>
                    <h1 class="h3 mb-1">Indicators</h1>
                    <p class="text-body-secondary mb-0">
                        Acompanhamento rápido dos principais índices em um formato limpo e responsivo.
                    </p>
                </div>
            </div>
        </div>

        <?php foreach($Indicators as $Indicator) { ?>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4 d-flex flex-column gap-3">
                        <div class="d-flex justify-content-between align-items-start gap-3">
                            <div>
                                <p class="text-body-secondary small text-uppercase fw-semibold mb-2">
                                    <?php echo htmlspecialchars($Indicator['title'], ENT_QUOTES, 'UTF-8'); ?>
                                </p>
                                <h2 class="display-6 fw-semibold mb-0">
                                    <?php echo htmlspecialchars($Indicator['value'], ENT_QUOTES, 'UTF-8'); ?>
                                </h2>
                            </div>

                            <span class="badge text-bg-secondary rounded-pill">
                                Índice
                            </span>
                        </div>

                        <div class="d-flex justify-content-between align-items-center pt-1">
                            <span class="small text-body-secondary">Atualizado agora</span>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>

    </div>

</section>
