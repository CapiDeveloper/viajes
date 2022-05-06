<main class="container mt-5">
    <div class="row">
        <div class="col-md-5">
            <img src="/img/destinos_<?php echo $destino->imagen; ?>.jpg" alt="imagen destino" class="img-fluid">
        </div>
        <div class="col-md-7">
            <h1><?php echo $destino->titulo; ?></h1>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#dc135f" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <rect x="4" y="5" width="16" height="16" rx="2" />
                    <line x1="16" y1="3" x2="16" y2="7" />
                    <line x1="8" y1="3" x2="8" y2="7" />
                    <line x1="4" y1="11" x2="20" y2="11" />
                    <rect x="8" y="15" width="2" height="2" />
                </svg>
                | <?php echo $destino->fecha_ida .'  -  '. $destino->fecha_vuelta ?>
            </p>
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-coin" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#dc135f" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <circle cx="12" cy="12" r="9" />
                    <path d="M14.8 9a2 2 0 0 0 -1.8 -1h-2a2 2 0 0 0 0 4h2a2 2 0 0 1 0 4h-2a2 2 0 0 1 -1.8 -1" />
                    <path d="M12 6v2m0 8v2" />
                </svg>
                | <?php echo $destino->precio; ?> Dolares
            </p>
            <p><?php echo substr($destino->descripcion,-146,99); ?></p>
        </div>
    </div>
</main>
